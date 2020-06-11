<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function home(){
        return view('admin.dashboard');
    }
    public function corders($id){
        return view('admin.orders.index',compact('id'));
    }
    
    public function iporders($id){
        return view('admin.orders.iporders',compact('id'));
    }
    
    public function cmorders($id){
        return view('admin.orders.cmorders',compact('id'));
    }
    
    public function hldorders($id){
        return view('admin.orders.horders',compact('id'));
    }
    public function horders(){
        return view('admin.orders.history');
    }

    public function  orderStatus($id){
        $order=Order::where('id',$id)->first();
        $order->status="C";
        if($order->update()){
            return redirect()->back();
        }
    }
    public function allUsers(){
        return view('admin.customers');
    }
}
