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
   public function updatePro(Request $request){
    $user= User::where('id',Auth::user()->id)->first();
    $user->name=$request->name;
    $user->mobile_no=$request->mobile;
    $user->update();
    return redirect()->back();
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
}
