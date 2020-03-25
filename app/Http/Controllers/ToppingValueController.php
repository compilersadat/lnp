<?php

namespace App\Http\Controllers;

use App\ToppingValue;
use App\Topping;

use Illuminate\Http\Request;

class ToppingValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.toppings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.toppings.create');
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
            'count'=>'required',
        ]);
        $topping=New ToppingValue();
        $topping->name=$request->name;
        $topping->count=$request->count;
        $topping->type=$request->type;
        if($topping->save()){
            return redirect()->back()->with('success',' Topping Added successfully.');
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
        $topping=ToppingValue::where('id',$id)->first();
        return view('admin.toppings.edit',compact('topping'));
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
            'count'=>'required',
        ]);
        $topping=ToppingValue::where('id',$id)->first();
        $topping->name=$request->name;
        $topping->count=$request->count;
        $topping->type=$request->type;
        if($topping->update()){
            return redirect()->back()->with('success',' Topping Updated successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ToppingValue  $toppingValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToppingValue $toppingValue)
    {
        //
    }
}
