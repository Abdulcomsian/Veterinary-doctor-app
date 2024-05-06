<?php

namespace App\Http\Controllers\Handlers;
use App\Models\Subscription;

class SubscriptionHandler{
    
    public function createUserSubscription($request)
    {
        $planId = $request->planId;
        $isSubscribedYearly = $request->isSubscribedYearly;
        
        Subscription::create([
            'plan_id' => $planId,
            'is_yearly_subscribed' => $isSubscribedYearly,
            'user_id' => auth()->user()->id
        ]);

        return ['status' => true , 'msg' => 'Plan subscribed successfully'];
    }

    public function editUserSubscription($request)
    {
        $planId = $request->planId;
        $isSubscribedYearly = $request->isSubscribedYearly;
        $subscriptionId = $request->subscriptionId;
        
        Subscription::where('id' , $subscriptionId)->update([
                                                    'plan_id' => $planId,
                                                    'is_yearly_subscribed' => $isSubscribedYearly,
                                                ]);

        return ['status' => true , 'msg' => 'Plan subscribed successfully'];
    }
}