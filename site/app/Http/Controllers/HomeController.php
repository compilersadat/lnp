<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupen;
use App\UserCoupen;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function checkCoupen(Request $request){
    if(Coupen::where('code',$request->code)->count()<1){
    return redirect()->back()->with('success','Invalid Coupen ');
    }
    	$coupen=Coupen::where('code',$request->code)->first();
    	$exp=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$coupen->expiry);
    	$now=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i',now());
    	$diff=$exp->diffInMinutes($now);
    	if($diff<0){
    		return redirect()->back()->with('success','Coupen Expires');
    	}
    	
    	$coupen['code']=$coupen->code;
    	$coupen['type']=$coupen->type;
    	$coupen['value']=$coupen->value;
    	session()->put('coupen',$coupen);
    	return redirect()->back()->with('success','Coupen Applied');
    	
    	
    	
    	
    }
}
