<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Handlers\SubscriptionHandler;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    protected $subscriptionHandler;

    function __construct(SubscriptionHandler $subscriptionHandler)
    {
        $this->subscriptionHandler = $subscriptionHandler;
    }

    public function addUserSubscription(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'planId' => 'required|numeric',
            'isSubscribedYearly' => 'required|numeric',
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(', ' , $validator->errors()->all())]);
        }

        try{
            $response = $this->subscriptionHandler->createUserSubscription($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }
    }


    public function updateUserSubscription(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'planId' => 'required|numeric',
            'isSubscribedYearly' => 'required|numeric',
            'subscriptionId' => 'required|numeric'
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'error' => implode(', ' , $validator->errors()->all())]);
        }

        try{
            $response = $this->subscriptionHandler->editUserSubscription($request);
            return response()->json($response);
        }catch(\Exception $e){
            return response()->json(['status' => false , 'error' => $e->getMessage()]);
        }
    }
}
