@extends('admin_panel.layouts.layout')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Categories</a></li>
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
                                    <h4 class="card-title">All Categories</h4>

                                </div>
                                <div class="col-md-5 text-right">
                                    <a href="{{url('addcategory')}}" type="button" class="btn mb-1 btn-primary">Add New <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="">LNP Special</td>
                                        <td>
                                            <img src="{{asset('svg/resturant/slider1.png')}}" width="50" height="50">
                                        </td>
                                        <td>
                                            <i class="fa fa-trash text-danger" style="font-size: 20px;"></i>
                                            <i class="fa fa-edit pl-3 text-primary" style="font-size: 20px;"></i>
                                        </td>

                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Category Name</th>
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
