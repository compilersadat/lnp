<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\User;
use Auth;
use Mail;
use App\Mail\Contact;
use App\Order;
use Carbon\Carbon;
use App\ItemVariable;
use App\Coupen;
use App\ItemSauce;
class UserController extends Controller
{
   public function menu(){
       $cat=Category::all();

        return view('menu',compact('cat'));
   }
   public function contact(){
       return view('contactus');
   }
    public function mails(Request $request){
        $data = [];
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['mobileno'] = $request->get('mobileno');
       // $data['subject'] = $request->get('subject');
        $data['message'] = $request->get('message');
        Mail::to('tauseefahmed782@gmail.com')
            ->cc('sadcompiler@gmail.com')
            ->send(new Contact($data));
        return redirect()->back()->with('success','Your message has been submitted. We will get back to you soon');
    }
   public function updatePro(Request $request){
    $user= User::where('id',Auth::user()->id)->first();
    $user->name=$request->name;
    $user->mobile_no=$request->mobile;
    $user->update();
    return redirect()->back();
   }
   public function rules_show(){
    $rules=Rule::all();
    return view('rules',compact('rules'));
}
public function mail(Request $request){
  $this->validate($request,[
        'name'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'message'=>'required',
     ]);
  Mail::to('thelatenightpizza@gmail.com')->cc('sadcompiler@gmail.com')->send(new Contact($request));
    
     return redirect()->back()->with('success','Your message has been submitted. We will get back to you soon');
  
}
public function contactshow(){
     return view('contact');
}

   public function search(Request $request){
       $items=Item::where('title','LIKE','%'.$request->title.'%')->get();
       $title=$request->title;
       return view('search',compact('items','title'));
   }
   public function shop($id){
        $items=Item::where('cat_id',$id)->get();
        $title=Category::where('id',$id)->value('name');
        return view('search',compact('items','title','id'));

   }
   public function cart(){
   return view('cart');
   
}

public function customize($id){
    $item=Item::where('id',$id)->first();
    if($item->custome_type==5){
    return view('wings_customize',compact('item'));
    }
    if($item->custome_type==3){
    return view('side_customize',compact('item'));
    }
    if($item->custome_type==2){
    return view('mm_customization',compact('item'));
    }
    if($item->custome_type==4){
    return view('shqc_customize',compact('item'));
    }
    if($item->custome_type==1){
    return view('customize',compact('item'));
    }
    
    return redirect()->back();
} 

public function alert(){
    return view('alert');
}
public function setLoc(){
 session()->put('url.intended',url()->previous());
    return view('pickup');
}

public function postSetLoc(Request $request){
    $dest=$request->dest;
    $date=$request->date;
    $time=$request->time;
    $pickup="561 Markham Road, Scarborough, ON M1H 2A3";
    if($dest=='add2'){
        $pickup="2655 Lawrence ave East, Scarborough, ON M1P SA3.";
    }
    session()->put('pick_dest', $pickup);
    session()->put('pick_date', $date);
    session()->put('pick_time', $time);
return redirect(session()->get('url.intended'));
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
    
    public function loadCount(){
    //
    	$order=Order::where('status',"N")->orderBy('id','DESC')->first();
    	$exp=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$order->updated_at);
    	$now=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i',now());
    	$diff=$exp->diffInSeconds($now);
    	return response()->json([
		    'count' => Order::distinct()->where('status',"N")->count('order_id'),
		    'diff' => $diff
		]);
    	
    }
    
    public function sizeDet($id){
    	$det=ItemVariable::where('id',$id)->first();
    	return $det;
    }
    
    public function getDetail($id){
    	$det=ItemVariable::where('item_id',$id)->where('value','Default')->first();
    	return $det;
    }
    
    public function setWings(){
    	$sauce=['6','7','8','9','11','26'];
    	foreach(Item::where('cat_id',6)->get() as $row){
    		foreach($sauce as $sa){
	    		$item=new ItemSauce();
	    		$item->item_id=$row->id;
	    		$item->sauce_id=$sa;
	    		$item->save();
    		}
    		
    	}
    
    }
    
    
}