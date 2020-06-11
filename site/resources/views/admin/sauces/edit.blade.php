@extends('admin.layouts.layout')
@section('content')

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Sauce</a></li>
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
                                        <h4 class="card-title pb-3" >Edit Sauce</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="{{route('sauces.index')}}" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST"  action="{{route('sauces.update',$topping->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">
                                        <input type="text" name="name" class="form-control input-flat" placeholder="Size Name " value="{{$topping->name}}">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="type">
                                               
                                               <option value="base" @if($topping->type=="base") selected @endif>Base</option>
                                               <option value="dipping" @if($topping->type=="dipping") selected @endif>Dipping</option>
                                               <option value="ranch" @if($topping->type=="ranch") selected @endif>Ranch</option>
                                            </select>
                                        </div>
                                        
                                        <img src="{{asset('uploads/sauces/'.$topping->image)}}" width="50" height="50" class="mb-1">

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="custom-file-label">Select Image</label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn px-5 btn-primary">Edit Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
       
@endsection
