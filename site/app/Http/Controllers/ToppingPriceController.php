<?php

namespace App\Http\Controllers;

use App\ToppingPrice;
use Illuminate\Http\Request;

class ToppingPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.prices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.prices.create');
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
            'size'=>'required',
            'price'=>'required',

        ]);
        $price=new ToppingPrice();
        $price->size=$request->size;
        $price->price=$request->price;
        if($price->save()){
            return redirect()->route('prices.index');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ToppingPrice  $toppingPrice
     * @return \Illuminate\Http\Response
     */
    public function show(ToppingPrice $toppingPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ToppingPrice  $toppingPrice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $price=ToppingPrice::where('id',$id)->first();
        return view('admin.prices.edit',compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ToppingPrice  $toppingPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'size'=>'required',
            'price'=>'required',

        ]);
        $price=ToppingPrice::where('id',$id)->first();
        $price->size=$request->size;
        $price->price=$request->price;
        if($price->update()){
            return redirect()->route('prices.index');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ToppingPrice  $toppingPrice
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(ToppingPrice::where('id',$id)->delete()){
            return redirect()->back()->with('success',' Topping Deleted successfully.');
        }else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
