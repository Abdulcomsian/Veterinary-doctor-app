<?php

namespace App\Http\Controllers\Handlers;
use App\Models\Plan;
use App\Models\PlanPrice;

class PlanHandler{
    
    public function createPlan($request)
    {
        $plan = new Plan();

        $plan->discount_percentage = $request->discount_percentage;
        $plan->title = $request->title;
        $plan->is_recommended = $request->is_recommended;
        $plan->status = $request->status;
        $plan->description = $request->description;
        
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = strtotime(date('y-m-d H:i:s'))."-".str_replace("-" , " ", $file->getClientOriginalName());
            $file->move( public_path('uploads') , $filename);
            $plan->image = $filename;
        }

        $plan->save();

        $this->addNewPricing($plan , $request->plan_price);

        return ['status' => true , 'msg' => 'Plan created successfully'];

    }


    public function editPlan($request)
    {
        $plan = Plan::where('id' , $request->plan_id)->first();

        $plan->discount_percentage = $request->discount_percentage;
        $plan->title = $request->title;
        $plan->is_recommended = $request->is_recommended;
        $plan->status = $request->status;
        $plan->description = $request->description;
        
        if($request->hasFile('image'))
        {

            if($plan->image && file_exists(public_path('uploads/'.$plan->image)))
            {
                unlink(public_path('uploads/'.$plan->image));
            }


            $file = $request->file('image');
            $filename = strtotime(date('y-m-d H:i:s'))."-".str_replace("-" , " ", $file->getClientOriginalName());
            $file->move( public_path('uploads') , $filename);
            $plan->image = $filename;
        }

        $plan->save();

        $this->addNewPricing($plan , $request->plan_price);

        return ['status' => true , 'msg' => 'Plan created successfully'];

    }

    public function addNewPricing($plan , $price)
    {
        if(!$plan->latestPrice || ( $plan->latestPrice && $plan->latestPrice->price != $price))
        {
            PlanPrice::create(['plan_id' => $plan->id , 'price' => $price]);
        }
    }

    public function deletePlan($request)
    {
        Plan::where('id' , $request->plan_id)->delete();

        return ['status' => true , 'msg' => 'Plan deleted successfully'];
    }

    
}