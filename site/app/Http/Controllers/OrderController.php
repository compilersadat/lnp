<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ItemVariable;
use App\Offer;
use App\ToppingValue;
use App\ToppingPrice;
use App\Order;
class OrderController extends Controller
{

public function cartIncr($id){
$cart = session()->get('cart');
if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 


    }
    }
    
    public function cartDecr($id){
    $cart = session()->get('cart');
    if(isset($cart[$id])) {
        
     
                $cart[$id]['quantity']--;
     
                session()->put('cart', $cart);
                if($cart[$id]['quantity']==0){
                    unset($cart[$id]);
 
                session()->put('cart', $cart);
                }
                return redirect()->back()->with('success', 'Product added to cart successfully!');
     
    
    
        }
    }
    
    public function addToCart($id,Request $request)
        {
        if($request->type=="item"){
            $product = Item::find($id);
 
            if(!$product) {
     
                abort(404);
     
            }
     
            $cart = session()->get('cart');
     
            // if cart is empty then this the first product
            if(!$cart) {
     
                $cart = [
                        $id.$request->size => [
                            "id"=>$product->id,
                            "name" => $product->title,
                            "quantity" => 1,
                            "photo"=>$product->image,
                            "size"=>$request->size,
                            "topping"=>$request->topping,
                            "topping_size"=>$request->topping_size,
                            "var"=>$request->var,
                            "type"=>$request->type,
                        ]
                ];
     
                session()->put('cart', $cart);
     
                return redirect()->route('cart');
            }
     
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id.$request->size])) {
            
                
            $cart[$id.$request->size]['quantity']++;
                session()->put('cart', $cart);
     
                return redirect()->route('cart');
                
               // return $cart;
     
            }
     
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id.$request->size] = [
            "id"=>$product->id,
                "name" => $product->title,
                            "quantity" => 1,
                            "photo"=>$product->image,
                            "size"=>$request->size,
                            "topping"=>$request->topping,
                            "topping_size"=>$request->topping_size,
                            "var"=>$request->var,
                            "type"=>$request->type,
            ];
     
            session()->put('cart', $cart);
        }
        if($request->type=="offer"){
            $offer=Offer::where('id',$id)->first();
            
             $cart = session()->get('cart');
     
            // if cart is empty then this the first product
            if(!$cart) {
     
                $cart = [
                        $id => [
                            "id"=>$id,
                            "type"=>"offer",
                        ]
                ];
     
                session()->put('cart', $cart);
     
                return redirect()->route('cart');
            }
     
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
                return redirect()->route('cart');
     
            }
     
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                
                    "id"=>$id,
                    "type"=>$request->type,
                
            ];
            
            session()->put('cart', $cart);
        }
        
        //return $cart;
        return redirect()->route('cart');
    }
    
    
    public function remCart($id){
        $cart = session()->get('cart');
 
            if(isset($cart[$id])) {
 
                unset($cart[$id]);
 
                session()->put('cart', $cart);
            }
            return redirect()->back();
    }
    
    
    /*customization */
    
    public function customCart(Request $request){
        $product=Item::find($request['id']);
        if(!$product) {
     
                abort(404);
     
            }
            else{
            
                $item_amount=ItemVariable::where('id',$request['size'])->value('price')+$request['sauce_p']+$request['ranch_p'];
                $topping_amount=0;
           
                foreach($request['toppings'] as $id=>$row){
                	if($id+1>$product->free_toppings){
                	
                    $am=ToppingValue::where('id',$row)->value('count')*ToppingPrice::where('size',ItemVariable::where('id',$request['size'])->value('value'))->value('price');
                    $topping_amount=$topping_amount+($am*$request['topping_qty'][$id]);
                    //return $row;
                    }
                }
               // return $topping_amount;
                
                $cart = session()->get('cart');
                
                if(!$cart){
                
                $cart=[
                    $request['id'].$request['size']=>[
                    "id"=>$product->id,
                        'type'=>'custome',
                        'quantity'=>$request['qty'],
                        'size'=>$request['size'],
                        'name'=>$product->title,
                        'image'=>$product->image,
                        'sauce'=>$request['sauce'],
                        'ranch'=>$request['ranch'],
                        'dough'=>$request['dough'],
                        'spi'=>$request['spi'],
                        'toppings'=>$request['toppings'],
                        'topping_qty'=>$request['topping_qty'],
                        'topping_size'=>$request['top_sizes'],
                        'item_amount'=>$item_amount,
                        'topping_amount'=>$topping_amount,
                        'total_amount'=>$item_amount+$topping_amount,
                        'ranch_p'=>$request['ranch_p'],
                        'sauce_p'=>$request['sauce_p'],
                        
                        
                    ]
                ];
                session()->put('cart', $cart);
                return "S";
                }
                if(isset($cart[$request['id'].$request['size']])) {
                    return "Exist";
                }
                
                $cart[$request['id'].$request['size']]=[
                "id"=>$product->id,
                        'type'=>'custome',
                        'quantity'=>$request['qty'],
                        'size'=>$request['size'],
                        'name'=>$product->title,
                        'image'=>$product->image,
                        'sauce'=>$request['sauce'],
                        'ranch'=>$request['ranch'],
                        'dough'=>$request['dough'],
                        'spi'=>$request['spi'],
                        'toppings'=>$request['toppings'],
                        'topping_qty'=>$request['topping_qty'],
                        'topping_size'=>$request['top_sizes'],
                        'item_amount'=>$item_amount,
                        'topping_amount'=>$topping_amount,
                        'total_amount'=>$item_amount+$topping_amount,
                        'ranch_p'=>$request['ranch_p'],
                        'sauce_p'=>$request['sauce_p'],
                ];
                
                session()->put('cart', $cart);
                return "S";
                
            }
       }
    
       
       public function shqcCustome(Request $request){
        $product=Item::find($request['id']);
        if(!$product) {
     
                abort(404);
     
            }
            else{
            
                $item_amount=ItemVariable::where('id',$request['size'])->value('price')+$request['sauce_p'];
                $topping_amount=0;
           
                foreach($request['toppings'] as $id=>$row){
                if($id+1>$product->free_toppings){
                    $am=ToppingValue::where('id',$row)->value('count')*ToppingPrice::where('size',ItemVariable::where('id',$request['size'])->value('value'))->value('price');
                    $topping_amount=$topping_amount+($am*$request['topping_qty'][$id]);
                    }
                }
                //return $topping_amount;
                
                $cart = session()->get('cart');
                
                if(!$cart){
                
                $cart=[
                    $request['id'].$request['size']=>[
                    "id"=>$product->id,
                        'type'=>'shqc_custome',
                        'quantity'=>$request['qty'],
                        'size'=>$request['size'],
                        'name'=>$product->title,
                        'image'=>$product->image,
                        'sauce'=>$request['sauce'],
                        
                        'toppings'=>$request['toppings'],
                        'topping_qty'=>$request['topping_qty'],
                        'item_amount'=>$item_amount,
                        'topping_amount'=>$topping_amount,
                        'total_amount'=>$item_amount+$topping_amount,
                        
                        'topping_size'=>$request['top_sizes'],
                        
                    ]
                ];
                session()->put('cart', $cart);
                return "S";
                }
                if(isset($cart[$request['id'].$request['size']])) {
                    return "Exist";
                }
                
                $cart[$request['id'].$request['size']]=[
                "id"=>$product->id,
                        'type'=>'shqc_custome',
                        'quantity'=>$request['qty'],
                        'size'=>$request['size'],
                        'name'=>$product->title,
                        'image'=>$product->image,
                        'sauce'=>$request['sauce'],
                        
                        'toppings'=>$request['toppings'],
                        'topping_qty'=>$request['topping_qty'],
                        'item_amount'=>$item_amount,
                        'topping_amount'=>$topping_amount,
                        'total_amount'=>$item_amount+$topping_amount,
                        'topping_size'=>$request['top_sizes'],
                        
                ];
                
                session()->put('cart', $cart);
                return "S";
                
            }
       }
    
            public function CustomWings(Request $request){
            $product=Item::find($request['id']);
            if(!$product) {
         
                    abort(404);
         
                }else{
                    $item_amount=ItemVariable::where('id',$request['size'])->value('price')+$request['sauce_p'];
                    $cart = session()->get('cart');
                    
                    if(!$cart){
                            $cart=[
                                $request['id'].$request['size']=>[
                                "id"=>$product->id,
                                    'type'=>'custome_wings',
                                    'quantity'=>$request['qty'],
                                    
                                    'name'=>$product->title,
                                    'image'=>$product->image,
                                    'sauce'=>$request['sauce'],
                                    'types'=>$request['types'],
                                    'total_amount'=>$item_amount,
                                'size'=>$request['size'],
                                    'sauce_p'=>$request['sauce_p'],
                                    
                                    
                                ]
                            ];
                            session()->put('cart', $cart);
                            return "S";
                    }
                    
                    if(isset($cart[$request['id'].$request['size']])) {
                            return "Exist";
                    }
                    
                    $cart[$request['id'].$request['size']]=[
                    "id"=>$product->id,
                                    'type'=>'custome_wings',
                                    'quantity'=>$request['qty'],
                                    'size'=>$request['size'],
                                    'name'=>$product->title,
                                    'image'=>$product->image,
                                    'sauce'=>$request['sauce'],
                                    'types'=>$request['types'],
                                    'total_amount'=>$item_amount,
                 
                                    'sauce_p'=>$request['sauce_p'],
                    
                    ];
                    
                    
                    session()->put('cart', $cart);
                        return "S";
                    
                }
                }
                
            
            
                public function sideCustome(Request $request){
                    $product=Item::find($request['id']);
                if(!$product) {
             
                        abort(404);
             
                    }else{
                          $item_amount=ItemVariable::where('id',$request['size'])->value('price')+$request['sauce_p'];
                              $cart = session()->get('cart');
                          if(!$cart){
                
                            $cart=[
                                $request['id'].$request['size']=>[
                                "id"=>$product->id,
                                    'type'=>'side_custome',
                                    'quantity'=>$request['qty'],
                                    'size'=>$request['size'],
                                    'name'=>$product->title,
                                    'image'=>$product->image,
                                    'sauce'=>$request['sauce'],
                                    
                                    
                                    'item_amount'=>$item_amount,
                                    
                                    'total_amount'=>$item_amount,
                                    
                                    'sauce_p'=>$request['sauce_p'],
                                    
                                    
                                ]
                            ];
                            session()->put('cart', $cart);
                            return "S";
                            }
                            
                            if(isset($cart[$request['id'].$request['size']])) {
                            return "Exist";
                                }
                            
                            $cart[$request['id'].$request['size']]=[
                                    "id"=>$product->id,
                                    'type'=>'side_custome',
                                    'quantity'=>$request['qty'],
                                    'size'=>$request['size'],
                                    'name'=>$product->title,
                                    'image'=>$product->image,
                                    'sauce'=>$request['sauce'],
                                    
                                    'total_amount'=>$item_amount,
                 
                                    'sauce_p'=>$request['sauce_p'],
                    
                    ];
                    
                    
                    session()->put('cart', $cart);
                        return "S";
                            
                        }
                }



public function mmCart(Request $request){
        $product=Item::find($request['id']);
        if(!$product) {
     
                abort(404);
     
            }
            else{
            
                $item_amount=ItemVariable::where('id',$request['size'])->value('price')+$request['sauce_p']+$request['ranch_p'];
                $topping_amount=0;
                $pop_amount=0;
                foreach($request['toppings'] as $id=>$row){
                if($id+1>$product->free_toppings){
                    $am=ToppingValue::where('id',$row)->value('count')*ToppingPrice::where('size',ItemVariable::where('id',$request['size'])->value('value'))->value('price');
                    $topping_amount=$topping_amount+($am*$request['topping_qty'][$id]);
                    }
                }
                foreach($request['pops'] as $id=>$row){
                if($id+1>$product->free_pop){
                    $am=ItemVariable::where('item_id','Default')->value('price');
                    $pop_amount=$pop_amount+($am*$request['pop_qty'][$id]);
                    }
                }
                //return $topping_amount;
                
                $cart = session()->get('cart');
                
                if(!$cart){
                
                $cart=[
                    $request['id'].$request['size']=>[
                    "id"=>$product->id,
                        'type'=>'mm_custome',
                        'quantity'=>$request['qty'],
                        'size'=>$request['size'],
                        'name'=>$product->title,
                        'image'=>$product->image,
                        'sauce'=>$request['sauce'],
                        'ranch'=>$request['ranch'],
                        'dough'=>$request['dough'],
                        'spi'=>$request['spi'],
                        'toppings'=>$request['toppings'],
                        'topping_qty'=>$request['topping_qty'],
                        'item_amount'=>$item_amount,
                        'topping_amount'=>$topping_amount,
                        'total_amount'=>$item_amount+$topping_amount+$pop_amount,
                        'ranch_p'=>$request['ranch_p'],
                        'sauce_p'=>$request['sauce_p'],
                        'pops'=>$request['pops'],
                        'pop_qty'=>$request['pop_qty'],
                        'topping_size'=>$request['top_sizes'],

                        
                        
                    ]
                ];
                session()->put('cart', $cart);
                return "S";
                }
                if(isset($cart[$request['id'].$request['size']])) {
                    return "Exist";
                }
                
                $cart[$request['id'].$request['size']]=[
                "id"=>$product->id,
                        'type'=>'mm_custome',
                        'quantity'=>$request['qty'],
                        'size'=>$request['size'],
                        'name'=>$product->title,
                        'image'=>$product->image,
                        'sauce'=>$request['sauce'],
                        'ranch'=>$request['ranch'],
                        'dough'=>$request['dough'],
                        'spi'=>$request['spi'],
                        'toppings'=>$request['toppings'],
                        'topping_qty'=>$request['topping_qty'],
                        'item_amount'=>$item_amount,
                        'topping_amount'=>$topping_amount,
                        'total_amount'=>$item_amount+$topping_amount+$pop_amount,
                        'ranch_p'=>$request['ranch_p'],
                        'sauce_p'=>$request['sauce_p'],
                        'pops'=>$request['pops'],
                        'pop_qty'=>$request['pop_qty'],
                        'topping_size'=>$request['top_sizes'],
                ];
                
                session()->put('cart', $cart);
                return "S";
                
            }
       }
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
 public function status(Request $request){
    $order=Order::where('order_id',$request->id)->update(['status' => $request->type]);
    

        return redirect()->route('admin.corders',0);
 
 }
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
