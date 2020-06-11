<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Order;
use App\ItemVariable;
use App\Item;
use App\ToppingValue;
use App\ToppingPrice;
use App\Offer;
use Session;
use App\Wallet;
use App\OrderTopping;
use App\OrderPop;
use App\OrderSauce;
use Mail;
use App\Mail\Order as OrderMail;

class PayPalController extends Controller
{
	protected $provider;

    public function __construct()
    {
        $this->provider = new ExpressCheckout();
    }
    //
    public function payment(Request $request){
        $data=[]; 
        $data['items'] = [];
        $data['invoice_id'] = rand(1000,9999).rand(100,999);
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = ceil($request->total);
        
        $options = [
    		'SOLUTIONTYPE' => 'Sole',	
		
	];
	
        //$provider->setPaymentMethod('paypal');
        $response = $this->provider->setCurrency('CAD')->addOptions($options)->setExpressCheckout($data);
        $detail=session()->get('detail');
        if(!$detail){
            if(is_numeric($request->contact)){
            $detail['number']=$request->contact;
            }else{
            $detail['email']=$request->contact;
            }
            
            
            $detail['pickup']=session()->get('pick_dest');
        }
         if(is_numeric($request->contact)){
            $detail['number']=$request->contact;
            }else{
            $detail['email']=$request->contact;
            };
        
        $detail['pickup']=session()->get('pick_dest');
        
        session()->put('detail',$detail);
        
       return redirect($response['paypal_link']);
    }

    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
    	$token = $request->get('token');
        $PayerID = $request->get('PayerID');
        $recurring = ($request->get('mode') === 'recurring') ? true : false;
        
        //$provider = new ExpressCheckout();
        $response = $this->provider->getExpressCheckoutDetails($request->token);
        $data=[]; 
        $data['items'] = [];
        $data['invoice_id'] = $response['INVNUM'];
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $response['AMT'];
      //  return $response;
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
        $payment_status = $this->provider->doExpressCheckoutPayment($data, $token, $PayerID);
       //return $payment_status;
            if($payment_status['ACK']=="Failure"){
                $options = [
                    'SOLUTIONTYPE' => 'Sole',	
                
                ];
            
                //$provider->setPaymentMethod('paypal');
                $response = $this->provider->setCurrency('CAD')->addOptions($options)->setExpressCheckout($data);
                return redirect($response['paypal_link']);  
            }else{
                // $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
               //return $payment_status;
               $cart = session()->get('cart');
               $detail=session()->get('detail');
               foreach($cart as $id=>$row){
                   if($row['type']=="item"){
                       $order=New Order();
                       $order->item_id=$row['id'];
                          $order->order_id=$response['INVNUM'];
                        if($detail['email']){
                            $order->user_id=$detail['email'];
                        }else{
                            $order->mobile=$detail['number'];
                        }
                       
                       $order->transaction_id=$payment_status['PAYMENTINFO_0_TRANSACTIONID'];
                       $order->pickup=$detail['pickup'];
                       $order->pickup_date=session()->get('pick_date');
                       $order->pickup_time=session()->get('pick_time');
                       $order->size=$row['size'];
                       $order->extra_topping=$row['topping'];
                       $order->qty=$row['quantity'];
                       $order->top_size=$row['topping_size'];
                       $order->is_item=$row['type'];
                       $order->top_qty=$row['var'];
                       $order->status="N";
                       $order->item_price=ItemVariable::where('id',$row['size'])->value('price');
                       if($row['topping']!=""){
                           if($row['var']=="f"){
                               $order->topping_price=ToppingValue::where('id',$row['topping'])->value('count')*ToppingPrice::where('id',$row['topping_size'])->value('price');
                           }
                           if($row['var']=="h"){
                               $order->topping_price=ToppingValue::where('id',$row['topping'])->value('count')*ToppingPrice::where('id',$row['topping_size'])->value('price')/2;
   
                           }
                           $order->total=$order->item_price*$row['quantity']+$order->topping_price;
                       }else{
                           $order->total=$order->item_price*$row['quantity'];
                       }
                    //    if(Wallet::where('mobile',$detail['number'])->count()>0){
                    //        $wallet=Wallet::where('mobile',$detail['number'])->orWhere('user_id',$detail['email'])->first();
                    //        $wallet->points=$wallet->points+$order->total;
                    //        $wallet->update();
                    //    }else{
                    //        $wallet=new Wallet();
                    //        $wallet->mobile=$detail['number'];
                    //        $wallet->user_id=$response['EMAIL'];
                    //        $wallet->points=$order->total;
                    //        $wallet->save();
                    //    }
                       $order->save();
                       
                   }
                   if($row['type']=="offer"){
                       $order=new Order();
                       $order->order_id=$response['INVNUM'];
                       $order->item_id=$id;
                       $order->is_item=$row['type'];
                       $order->transaction_id=$payment_status['PAYMENTINFO_0_TRANSACTIONID'];
                       if($detail['email']){
                        $order->user_id=$detail['email'];
                    }else{
                        $order->mobile=$detail['number'];
                    }
                       $order->pickup=$detail['pickup'];
                       $order->status="N";
                       $order->qty=1;
                       $order->pickup_date=session()->get('pick_date');
                       $order->pickup_time=session()->get('pick_time');
                       $order->item_price=Offer::where('id',$id)->value('o_price');
                       $order->total=Offer::where('id',$id)->value('o_price');
                       $order->save();
                    //    if(Wallet::where('mobile',$detail['number'])->count()>0){
                    //        $wallet=Wallet::where('mobile',$detail['number'])->first();
                    //        $wallet->points=$wallet->points+Offer::where('id',$id)->value('o_price');
                    //        $wallet->update();
                    //    }else{
                    //        $wallet=new Wallet();
                    //        $wallet->mobile=$detail['number'];
                    //        $wallet->points=Offer::where('id',$id)->value('o_price');
                    //        $wallet->save();
                    //    }
                   }
                   if($row['type']=="custome"){
                       $order=new Order();
                       $order->order_id=$response['INVNUM'];
                       $order->item_id=$row['id'];
                       $order->is_item=$row['type'];
                       $order->transaction_id=$payment_status['PAYMENTINFO_0_TRANSACTIONID'];
                       if($detail['email']){
                        $order->user_id=$detail['email'];
                    }else{
                        $order->mobile=$detail['number'];
                    }
                       $order->pickup=$detail['pickup'];
                       $order->status="N";
                       $order->pickup_date=session()->get('pick_date');
                       $order->pickup_time=session()->get('pick_time');
                       $order->size=$row['size'];
                       $order->qty=$row['quantity'];
                       $order->sauce=$row['sauce'];
                       $order->dough=$row['dough'];
                       $order->ranch=$row['ranch'];
                       $order->instructions=$row['spi'];
                        $order->total=$row['total_amount']*$row['quantity'];
                        if($order->save()){
                            if(isset($row['toppings'])){
                                foreach($row['toppings'] as $id=>$top){
                                    $topping=new OrderTopping();
                                    $topping->order_id=$order->id;
                                    $topping->topping=ToppingValue::where('id',$top)->value('name');
                                    $topping->type=ToppingValue::where('id',$top)->value('type');
                                    $topping->size=$row['size'];
                                    $topping->qty=$row['topping_qty'][$id];
                                    $topping->top_size=$row['topping_size'][$id];
                                    $topping->save();
                                }

                            }
                            //  if(Wallet::where('mobile',$detail['number'])->count()>0){
                            //     $wallet=Wallet::where('mobile',$detail['number'])->first();
                            //     $wallet->points=$wallet->points+$row['total_amount']*$row['quantity'];
                            //     $wallet->update();
                            //     }else{
                            //         $wallet=new Wallet();
                            //         $wallet->mobile=$detail['number'];
                            //         $wallet->points=$row['total_amount']*$row['quantity'];
                            //         $wallet->save();
                            //     }
                        }
                      


                   }
                   if($row['type']=="shqc_custome"){
                    $order=new Order();
                    $order->order_id=$response['INVNUM'];
                    $order->item_id=$row['id'];
                    $order->transaction_id=$payment_status['PAYMENTINFO_0_TRANSACTIONID'];
                    $order->is_item=$row['type'];
                    if($detail['email']){
                        $order->user_id=$detail['email'];
                    }else{
                        $order->mobile=$detail['number'];
                    }                    $order->pickup=$detail['pickup'];
                    $order->status="N";
                    $order->pickup_date=session()->get('pick_date');
                    $order->pickup_time=session()->get('pick_time');
                    $order->size=$row['size'];
                    $order->qty=$row['quantity'];
                    $order->sauce=$row['sauce'];
                   
                     $order->total=$row['total_amount']*$row['quantity'];
                     if($order->save()){
                         if(isset($row['toppings'])){
                             foreach($row['toppings'] as $id=>$top){
                                 $topping=new OrderTopping();
                                 $topping->order_id=$order->id;
                                 $topping->topping=ToppingValue::where('id',$top)->value('name');
                                 $topping->type=ToppingValue::where('id',$top)->value('type');
                                 $topping->size=$row['size'];
                                 $topping->qty=$row['topping_qty'][$id];
                                 $topping->top_size=$row['topping_size'][$id];
                                 $topping->save();
                             }

                         }
                        //   if(Wallet::where('mobile',$detail['number'])->count()>0){
                        //      $wallet=Wallet::where('mobile',$detail['number'])->first();
                        //      $wallet->points=$wallet->points+$row['total_amount']*$row['quantity'];
                        //      $wallet->update();
                        //      }else{
                        //          $wallet=new Wallet();
                        //          $wallet->mobile=$detail['number'];
                        //          $wallet->points=$row['total_amount']*$row['quantity'];
                        //          $wallet->save();
                        //      }
                     }
                   


                }
                   if($row['type']=="mm_custome"){
                       $order=new Order();
                       $order->order_id=$response['INVNUM'];
                       $order->item_id=$row['id'];
                       $order->is_item=$row['type'];
                       $order->transaction_id=$payment_status['PAYMENTINFO_0_TRANSACTIONID'];
                       if($detail['email']){
                        $order->user_id=$detail['email'];
                    }else{
                        $order->mobile=$detail['number'];
                    }
                       $order->pickup=$detail['pickup'];
                       $order->status="N";
                       $order->pickup_date=session()->get('pick_date');
                       $order->pickup_time=session()->get('pick_time');
                       $order->size=$row['size'];
                       $order->qty=$row['quantity'];
                       $order->sauce=$row['sauce'];
                       $order->dough=$row['dough'];
                       $order->ranch=$row['ranch'];
                       $order->instructions=$row['spi'];
                        $order->total=$row['total_amount']*$row['quantity'];
                        if($order->save()){
                            if(isset($row['toppings'])){
                                foreach($row['toppings'] as $id=>$top){
                                    $topping=new OrderTopping();
                                    $topping->order_id=$order->id;
                                    $topping->topping=ToppingValue::where('id',$top)->value('name');
                                    $topping->type=ToppingValue::where('id',$top)->value('type');
                                    $topping->size=$row['size'];
                                    $topping->qty=$row['topping_qty'][$id];
                                    $topping->top_size=$row['topping_size'][$id];
                                    $topping->save();
                                }
                                foreach($row['pops'] as $id=>$top){
                                    $topping=new OrderPop();
                                    $topping->order_id=$order->id;
                                    $topping->pop=Item::where('id',$top)->value('title');
                                    $topping->price=ItemVariable::where('item_id',$top)->where('value',"Default")->value('price');
                                    
                                    $topping->qty=$row['pop_qty'][$id];
                                    $topping->save();
                                }

                            }
                            //  if(Wallet::where('mobile',$detail['number'])->count()>0){
                            //     $wallet=Wallet::where('mobile',$detail['number'])->first();
                            //     $wallet->points=$wallet->points+$row['total_amount']*$row['quantity'];
                            //     $wallet->update();
                            //     }else{
                            //         $wallet=new Wallet();
                            //         $wallet->mobile=$detail['number'];
                            //         $wallet->points=$row['total_amount']*$row['quantity'];
                            //         $wallet->save();
                            //     }
                        }
                      


                   }

                   if($row['type']=="custome_wings"){
                    $order=new Order();
                    $order->item_id=$row['id'];
                    $order->order_id=$response['INVNUM'];
                    $order->is_item=$row['type'];
                    $order->transaction_id=$payment_status['PAYMENTINFO_0_TRANSACTIONID'];
                    if($detail['email']){
                        $order->user_id=$detail['email'];
                    }else{
                        $order->mobile=$detail['number'];
                    }
                    $order->pickup=$detail['pickup'];
                    $order->status="N";
                    $order->pickup_date=session()->get('pick_date');
                    $order->pickup_time=session()->get('pick_time');
                    $order->size=$row['size'];
                    $order->qty=$row['quantity'];
                    
                  
                    $order->wings_type=$row['types'];
                    $order->total=$row['total_amount']*$row['quantity'];
                    if($order->save()){
                        if(isset($row['sauce'])){
                        	foreach($row['sauce'] as $sauc){
                        		$sauce=new OrderSauce();
                        		$sauce->order_id=$order->order_id;
                        		$sauce->sauce_id=$sauc;
                        		$sauce->save();
                        	
                        	}
                        
                        }
                        //  if(Wallet::where('mobile',$detail['number'])->count()>0){
                        //     $wallet=Wallet::where('mobile',$detail['number'])->first();
                        //     $wallet->points=$wallet->points+$row['total_amount']*$row['quantity'];
                        //     $wallet->update();
                        //     }else{
                        //         $wallet=new Wallet();
                        //         $wallet->mobile=$detail['number'];
                        //         $wallet->points=$row['total_amount']*$row['quantity'];
                        //         $wallet->save();
                        //     }
                    }


                   }

                   if($row['type']=="side_custome"){
                    $order=new Order();
                    $order->item_id=$row['id'];
                    $order->order_id=$response['INVNUM'];
                    $order->is_item=$row['type'];
                    $order->transaction_id=$payment_status['PAYMENTINFO_0_TRANSACTIONID'];
                    if($detail['email']){
                        $order->user_id=$detail['email'];
                    }else{
                        $order->mobile=$detail['number'];
                    }
                    $order->pickup=$detail['pickup'];
                    $order->status="N";
                    $order->pickup_date=session()->get('pick_date');
                    $order->pickup_time=session()->get('pick_time');
                    $order->size=$row['size'];
                    $order->qty=$row['quantity'];
                    $order->sauce=$row['sauce'];
                    $order->total=$row['total_amount']*$row['quantity'];
                    if($order->save()){
                        
                        //  if(Wallet::where('mobile',$detail['number'])->count()>0){
                        //     $wallet=Wallet::where('mobile',$detail['number'])->first();
                        //     $wallet->points=$wallet->points+$row['total_amount']*$row['quantity'];
                        //     $wallet->update();
                        //     }else{
                        //         $wallet=new Wallet();
                        //         $wallet->mobile=$detail['number'];
                        //         $wallet->points=$row['total_amount']*$row['quantity'];
                        //         $wallet->save();
                        //     }
                    }


                   }
                   
               }
               
               if($detail['email']){
                        Mail::to($detail['email'])->cc('sadcompiler@gmail.com')->send(new OrderMail($order));
                    }
               
               unset($cart);
               unset($detail);
               Session::forget('cart');
               Session::forget('detail');
               // session()->put('cart',$cart);
               // session()->put('detail',$detail);
               return redirect()->route('alert');
   
            }
                    }  
    }
    
    
    public function Refund(Request $request){
    	$trans=Order::where('order_id',$request->id)->value('transaction_id');
    	$response = $this->provider->refundTransaction($trans);
    	if($response['ACK']=="Success"){
    		$order=Order::where('order_id',$request->id)->update(['status'=>'CN']);
    		
    		return redirect()->back()->with('success','Order Canceled and Refund Initiated');
    	}else{
    	
    		return redirect()->back()->with('unsucces','Failed Plz Try Again');
    	}
    }
}