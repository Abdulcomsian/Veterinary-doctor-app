<?php

namespace App\Http\Controllers\Handlers;
use App\Models\Service;
class ServiceHandler{
    
    public function addService($request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->status = $request->isActive;
        $service->description = $request->description;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = strtotime(date("Y-m-d H:i:s"))."-".str_replace(" " , "-" , $file->getClientOriginalName());
            $file->move(public_path('uploads') , $filename);
            $service->image = $filename;
        }

        $service->save();

        return ['status' => true , 'msg' => 'Service Added Successfully'];
    }

    public function editService($request)
    {
        $service =  Service::where('id' , $request->id)->first();
        $service->name = $request->name;
        $service->status = $request->isActive;
        $service->description = $request->description;

        if($request->hasFile('image'))
        {

            if($service->image)
            {
                if(file_exists(public_path("uploads/".$service->image)))
                {
                    unlink(public_path("uploads/".$service->image));
                }
            }

            $file = $request->file('image');
            $filename = strtotime(date("Y-m-d H:i:s"))."-".str_replace(" " , "-" , $file->getClientOriginalName());
            $file->move(public_path('uploads') , $filename);
            $service->image = $filename;
        }

        $service->save();

        return ['status' => true , 'msg' => 'Service updated Successfully'];
    }

    public function deleteService($request)
    {
        Service::where('id' , $request->id)->delete();

        return ['status' => true , 'msg' => 'Service deleted Successfully'];
    }
    


}