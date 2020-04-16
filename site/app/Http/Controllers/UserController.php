<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\User;
use Auth;
class UserController extends Controller
{
   public function menu(){
       $cat=Category::all();

        return view('menu',compact('cat'));
   }
   public function contact(){
       return view('contactus');
   }
    public function postContact(ContactFormRequest $request){
        $data = [];
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['mobileno'] = $request->get('mobileno');
       // $data['subject'] = $request->get('subject');
        $data['message'] = $request->get('message');
        Mail::to('tauseefahmed782@gmail.com')
            ->cc('sadcompiler@gmail.com')
            ->queue(new Contact($data));
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
  Mail::to('sadcompiler@gmail.com')->send(new ContactMail($request));
     Mail::to($request['email'])->send(new ThankMail($request));
    return redirect()->back();
  
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
        return view('search',compact('items','title'));

   }
   public function cart(){
   return view('cart');
   
}
}
