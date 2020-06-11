@extends('admin.layouts.layout')
@section('content')
   

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add New</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title pb-3" >Add New Pizza</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="{{route('menus.index')}}" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                    {{$errors}}
                                <form method="POST" action="{{route('menus.store')}}" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control input-flat" placeholder="Enter Title " name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea class="form-control" rows="4" id="disc" name="disc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="cat">
                                                <option value="selected">Select Category</option>
                                                @foreach(@App\Category::all() as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>No of free toppings:</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free toppings" name="free_toppings" value="0">
                                        </div>
                                        <div class="form-group">
                                        <label>No of free sauces:</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free sauces" name="free_sauces" value="0">
                                        </div>
                                        <div class="form-group">
                                        <label>No of free pops:</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free pops" name="free_pops" value="0">
                                        </div>
                                        <div class="form-group">
                                        <label>No of free ranch</label>
                                            <input type="number" class="form-control input-flat" placeholder="No of free ranch" name="free_ranch" value="0">
                                        </div>
                                        <h4 class="">
                                            Prices
                                        </h4>
                                        <div class="form-row">
                                            @foreach(@App\Variable::where('type','size')->get() as $row)
                                            <div class="form-group col-6">
                                                <label>For {{$row->value}}:</label>
                                                <input type="text" class="form-control input-flat" placeholder="Enter Price" name="{{$row->value}}">
                                            </div>
                                           @endforeach
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label">Select Image</label>
                                            </div>
                                        </div>

                                       
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="custome">
                                                <option value="selected">Select Customization</option>
                                                <option value="0">No Customization</option>
                                                <option value="1">Dough/Base Sauce+Toppings+Special Instructions</option>
                                                <option value="2">Dough/Base Sauce+Toppings+Special Instructions+Pops</option>
                                                <option value="3">Sauces</option>
                                                <option value="4">Sauces+toppings</option>
                                                <option value="5">Classic/Breaded+Dipping Sauces</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="" class="btn px-5 btn-primary">Add Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
       
@endsection
