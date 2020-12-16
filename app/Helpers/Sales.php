<?php

namespace App\Helpers;

use App\Customer;
use App\PaymentType;
use App\Payment;
use App\Stock;


class Sales 
{
 	public static function customerCreate($request)
 	{
 	   	$customer = new Customer;
        $customer->name = $request->customer_name;
        $customer->mobile_number = $request->mobile_number;
        $customer->save();

        return $customer;
 	}  

 	public static function paymentCreate($request)
    {
        $payment                 = new Payment;
        $payment->supplier_id    = $request->supplier_id;
        $payment->paid_amount    = 0;
        $payment->balance_amount = 0;
        $payment->ref_number     = $request->ref_number;
        $payment->save();

        return $payment;
    } 

    public static function paymentTypeCreate($request,$payment_id)
    {
    	$payment_type 				= new PaymentType;
        $payment_type->payment_id 	= $payment_id;
        $payment_type->payment_mode = $request->payment_mode;
        $payment_type->save();
    }

    public static function stockBalance($supplier_id,$request_amount)
    {
    	$stock = Stock::where('supplier_id',$supplier_id)->first();

    	if ($request_amount > $stock->balance) {
    		return true;
    	}
    }
}
