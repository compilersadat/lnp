@extends('admin.layouts.layout')
@section('content')
    <section>
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Category</a></li>
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
                                        <h4 class="card-title pb-3" >Edit Category</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="{{route('categories.index')}}" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST" enctype="multipart/form-data" action="{{route('categories.update',$cat->id)}}">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">
                                        <input type="text" name="name" class="form-control input-flat" placeholder="Enter Category Name " value="{{$cat->name}}">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="parent_id" required>
                                                <option value="0" @if($cat->parent_id==0) selected @endif>No Parent</option>
                                                @foreach(@App\Category::where('parent_id',0)->get() as $row)
                                                	
                                            		<option value="{{$row->id}}"  @if($row->id==$cat->parent_id) selected @endif>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <img src="{{asset('uploads/cats/'.$cat->image)}}" width="50" height="50" class="mb-1">

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
        </div>

    </section>
@endsection
