<?php

namespace App\Http\Controllers;

use App\Coupen;
use Illuminate\Http\Request;

class CoupenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupens=Coupen::all();
        return view('admin.coupens.index',compact('coupens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.coupens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'code'=>'required',
            'type'=>'required',
            'value'=>'required',
            'expiry'=>'required',
        ]);
        $coupen=new Coupen();
        $coupen->code=$request->code;
        $coupen->type=$request->type;
        $coupen->value=$request->value;
        $coupen->expiry=$request->expiry;
        if($coupen->save()){
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function show(Coupen $coupen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $coupen=Coupen::where('id',$id)->first();
        return view('admin.coupens.edit',compact('coupen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request,[
            'code'=>'required',
            'type'=>'required',
            'value'=>'required',
            'expiry'=>'required',
        ]);
        $coupen=Coupen::where('id',$id)->first();
        $coupen->code=$request->code;
        $coupen->type=$request->type;
        $coupen->value=$request->value;
        $coupen->expiry=$request->expiry;
        if($coupen->update()){
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupen  $coupen
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        if(Coupen::where('id',$id)->delete()){
            return redirect()->back();
        }
    }
}
