<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
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
        $slides=Slide::all();
        return view('admin.slides.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.slides.create');
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
            'title'=>'required',
           
            

        ]);
        $slide=new Slide();
        $slide->title=$request->title;
        $slide->description=$request->description;
        if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/slides/', $fileformat)) {
                $slide->image = $fileformat;
            }
        }
        if($slide->save()){
            return redirect()->back()->with('success',' Slide Added successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide=Slide::findOrFail($id);
        return view('admin.slides.show',compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide=Slide::findOrFail($id);
        return view('admin.slides.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'title'=>'required',
           
            

        ]);
         $slide=Slide::findOrFail($id);
         $slide->title=$request->title;
         $slide->description=$request->description;
         
         if($request->file('image')) {
            $upload = $request->file('image');
            $fileformat = time() . '.' . $upload->getClientOriginalName();
            if ($upload->move('uploads/slides/', $fileformat)) {
                $slide->image = $fileformat;
            }
        }
         if($slide->update()){
            return redirect()->route('slides.index');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $slide=Slide::findOrFail($id);
        if(Slide::where('id',$id)->delete()){
            return redirect()->back()->with('success',' slide deleted successfully.');
        }
        else{
            return redirect()->back()->with('unsuccess','Failed try again.');
        }
    }

    public function allSLide(){  
      return  SlideResource::collection(Slide::all());
         
    }
}
