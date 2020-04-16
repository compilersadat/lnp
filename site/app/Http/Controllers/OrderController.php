<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
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
	 
	            return redirect()->back()->with('success', 'Product added to cart successfully!');
	 
	
	
	    }
    }
    
    public function addToCart($id,Request $request)
        {
        $product = Item::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->title,
                        "quantity" => 1,
                        "photo"=>$product->image,
                        "size"=>$request->size,
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->route('cart');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->route('cart');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->title,
                        "quantity" => 1,
                        "photo"=>$product->image,
                        "size"=>$request->size,
        ];
 
        session()->put('cart', $cart);
 
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
}
