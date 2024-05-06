<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Handlers\PlanHandler;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    protected $planHandler;

    function __construct(PlanHandler $planHandler)
    {
        $this->planHandler = $planHandler;
    }

    public function createPlan(Request $request)
    {

        $validator = Validator::make($request->all() , [
            'discount_percentage' => 'required|numeric',
            'title' => 'required|string',
            'is_recommended' => 'boolean|required',
            'status' => 'boolean|required',
            'description' => 'required|string',
            'image' => 'file|mimes:jpg,png',
            'plan_price' => 'required|numeric'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(', ' , $validator->errors()->all())]);
        }

        try{
            $response = $this->planHandler->createPlan($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }
    }

    public function updatePlan(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'plan_id' => 'required|numeric',
            'discount_percentage' => 'required|numeric',
            'title' => 'required|string',
            'is_recommended' => 'boolean|required',
            'status' => 'boolean|required',
            'description' => 'required|string',
            'image' => 'file|mimes:jpg,png',
            'plan_price' => 'required|numeric'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(', ' , $validator->errors()->all())]);
        }

        try{
            $response = $this->planHandler->editPlan($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }
    }

    public function deletePlan(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'plan_id' => 'required|numeric',
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(', ' , $validator->errors()->all())]);
        }

        try{
            $response = $this->planHandler->deletePlan($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }
    }
}
