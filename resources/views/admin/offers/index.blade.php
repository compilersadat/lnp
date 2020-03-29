@extends('admin.layouts.layout')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Week Days Offers</a></li>
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
                                    <h4 class="card-title">All Offers</h4>

                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="{{route('offers.create')}}" type="button" class="btn mb-1 btn-primary">Add New <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Offer Name</th>
                                        <th>Ribbon Text</th>
                                        <th>Day</th>
                                        <th>Description</th>
                                        <th>Actual Price</th>
                                        <th>Offer Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (App\Offer::all() as $item)
                                        <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->ribben}}</td>
                                        <td>{{$item->day}}</td>
                                        <td>{{$item->deiscription}}</td>
                                        <td>{{$item->a_price}}</td>
                                        <td>{{$item->o_price}}</td>
                                        <td><img src="{{asset('uploads/offers/'.$item->image)}}" width="50" height="50"></td>
                                        <td>
                                           <a href="{{route('offer.delete',$item->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"> <i class="fa fa-trash text-danger" style="font-size: 20px;"></i></a>
                                        <a href="{{route('offers.edit',$item->id)}}"><i class="fa fa-edit pl-3 text-primary" style="font-size: 20px;"></i></a>
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Offer Name</th>
                                        <th>Day</th>
                                        <th>Description</th>
                                        <th>Actual Price</th>
                                        <th>Offer Price</th>
                                        <th>Image</th>

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
