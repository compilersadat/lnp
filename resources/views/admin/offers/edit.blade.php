
@extends('admin.layouts.layout')
@section('content')
    <section>
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Offer</a></li>
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
                                        <h4 class="card-title pb-3" >Edit Offer</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="{{route('offers.index')}}" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST" enctype="multipart/form-data" action="{{route('offers.update',$offer->id)}}">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">
                                        <input type="text" name="name" class="form-control input-flat" placeholder="Enter Offer Name " value="{{$offer->title}}">
                                        </div>
                                        <div class="form-group">
                                        <input type="text" name="ribbon" class="form-control input-flat" placeholder="Ribbon Text" value="{{$offer->ribben}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="day" class="form-control input-flat" placeholder="Enter Day Name " value="{{$offer->day}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                        <textarea class="form-control" rows="4" id="disc" name="discription">{{$offer->description}}</textarea>
                                        </div>
                                        <img src="{{asset('uploads/offers/'.$offer->image)}}" width="50" height="50" class="mb-1">

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="custom-file-label">Select Image</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="a_price" step="0.01" class="form-control input-flat" placeholder="Enter Actual Price " value="{{$offer->a_price}}">
                                        </div>
                                        <div class="form-group">
                                        <input type="number" name="o_price" step="0.01" class="form-control input-flat" placeholder="Enter Offer Price " value="{{$offer->o_price}}">
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
        </div>

    </section>
@endsection
