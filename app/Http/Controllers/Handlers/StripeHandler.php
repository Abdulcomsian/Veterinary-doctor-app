<?php

namespace App\Http\Controllers\Handlers;
use Stripe\{SetupIntent , Stripe};


class StripeHandler{

    public function __construct() {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function createSetupIntent()
    {
        $setupIntent = SetupIntent::create(['usage' => 'on_session']);
        return $setupIntent;
    }

    public function chargeAmount($request){

        if(!$request->user()->stripe_id){
            $request->user()->createAsStripeCustomer();
        }

        $request->user()->updateDefaultPaymentMethod($request->paymentMethod);

        $intent = $stripe->paymentIntents->create(
                                        [
                                            'amount' => $request->amount * 100,
                                            'currency' => 'usd',
                                            'payment_method' => $request->paymentMethod,
                                            'automatic_payment_methods' => ['enabled' => true],
                                            'customer' => auth()->user()->stripe_id,
                                            'confirm' => true,
                                        ]);

        
    }

}