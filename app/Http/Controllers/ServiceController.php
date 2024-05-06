<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\ServiceHandler;
use Illuminate\Support\Facades\Validator;
class ServiceController extends Controller
{
    protected $serviceHandler;

    function __construct(ServiceHandler $serviceHandler)
    {
        $this->serviceHandler = $serviceHandler;
    }

    public function createService(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => 'required|string',
            'isActive' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'file|mimes:jpg,png'
        ]);


        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", ", $validator->errors()->all())]);
        }

        try{
            $response = $this->serviceHandler->addService($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }

    }

    public function updateService(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => 'required|string',
            'isActive' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'file|mimes:jpg,png',
            'id' => 'required|numeric'
        ]);


        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", ", $validator->errors()->all())]);
        }

        try{
            $response = $this->serviceHandler->editService($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }
    }

    public function deleteService(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'id' => 'required|numeric'
        ]);


        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(", ", $validator->errors()->all())]);
        }

        try{
            $response = $this->serviceHandler->deleteService($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }

    }
}
