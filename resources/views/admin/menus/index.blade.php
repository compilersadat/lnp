@extends('admin.layouts.layout')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Menu's</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4 class="card-title">All Menu's</h4>

                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="{{route('menus.create')}}" type="button" class="btn mb-1 btn-primary">Add New <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(@App\Item::all() as $row)
                                            <tr>
                                                
                                                <td class="">{{$row->title}}</td>
                                                <td>
                                                    {{$row->description}}
                                                </td>
                                                <td>
                                                    @foreach(@App\ItemVariable::where('item_id',$row->id)->get() as $var)
                                                        <b>{{$var->value}}:</b>{{$var->price}}<br>
                                                    @endforeach
                                                </td>
                                                <td>Cat</td>
                                                <td>
                                                    <img src="{{asset('uploads/menus/'.$row->image)}}" width="50" height="50">
                                                </td>
                                                <td>
                                                <a href="{{route('item.delete',$row->id)}}"><i class="fa fa-trash text-danger" style="font-size: 20px;"></i></a>
                                                    <a href="{{route('menus.edit',$row->id)}}"><i class="fa fa-edit pl-3 text-primary" style="font-size: 20px;"></i></a>
                                                    {{-- <i class="fa fa-check pl-3 text-success" style="font-size: 20px;"></i>
                                                    <i class="fa fa-times pl-3 text-danger" style="font-size: 20px;"></i> --}}
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

@endsection
