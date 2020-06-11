<?php

namespace App\Http\Controllers;

use App\Sauce;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sauces.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sauces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'type'=>'required',
            
        ]);
        $topping=New Sauce();
        $topping->name=$request->name;
       
        $topping->type=$request->type;
        if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/sauces/', $fileformat)) {
                $topping->image = $fileformat;
            }
           
        }
        if($topping->save()){
            return redirect()->route('sauces.index');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ToppingValue  $toppingValue
     * @return \Illuminate\Http\Response
     */
    public function show(ToppingValue $toppingValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ToppingValue  $toppingValue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topping=Sauce::where('id',$id)->first();
        return view('admin.sauces.edit',compact('topping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ToppingValue  $toppingValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'type'=>'required',
            
        ]);
        $topping=Sauce::where('id',$id)->first();
        $topping->name=$request->name;
        
        $topping->type=$request->type;
         if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/sauces/', $fileformat)) {
                $topping->image = $fileformat;
            }
           
        }
        if($topping->update()){
            return redirect()->route('sauces.index');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        } 
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ToppingValue  $toppingValue
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(Sauce::where('id',$id)->delete()){
            return redirect()->back()->with('success',' SauceDeleted successfully.');
        }else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
