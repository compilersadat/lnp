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
                                        <h4 class="card-title pb-3" >Add New Slider</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="{{route('slides.index')}}" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST" action="{{route('slides.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                            <select class="form-control" id="sel1" name="type">
                                                <option value="0">Select Type</option>
                                                <option value="banner">Banner</option>
                                                <option value="slide">general</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-flat" placeholder="Enter Title " name="title">
                                        </div>

                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea class="form-control " rows="4" id="" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-flat" placeholder="Enter link " name="link">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="custom-file-label">Select Image</label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn px-5 btn-primary">Add Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
       
@endsection
