<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offers.create');
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
            'name'=>'required',
            'description'=>'required',
            'a_price'=>'required',
            'o_price'=>'required',
        ]);
        $offer=new Offer();
        $offer->title=$request->name;
        $offer->ribben=$request->ribbon;
        $offer->description=$request->description;
        $offer->day=$request->day;
        $offer->a_price=$request->a_price;
        $offer->o_price=$request->o_price;

        if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/offers/', $fileformat)) {
                $offer->image = $fileformat;
            }
            
        }
        if($offer->save()){
            return redirect()->back()->with('success',' Offer Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $offer=Offer::where('id',$id)->first();
        return view('admin.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'discription'=>'required',
            'a_price'=>'required',
            'o_price'=>'required',
        ]);
        $offer=Offer::where('id',$id)->first();
        $offer->title=$request->name;
        $offer->ribben=$request->ribbon;
        $offer->description=$request->description;
        $offer->day=$request->day;
        $offer->a_price=$request->a_price;
        $offer->o_price=$request->o_price;

        if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/offers/', $fileformat)) {
                $offer->image = $fileformat;
            }
            
        }
        if($offer->update()){
            return redirect()->back()->with('success',' Offer Updated successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }

    public function delete($id)
    {
        if(Offer::where('id',$id)->delete()){
            return redirect()->back()->with('success',' Offer Updated successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }
}
