@extends('admin.layouts.layout')
@section('content')
    
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Extra Toppings Prices</a></li>
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
                                        <h4 class="card-title pb-3" >Add New Topping Price</h4>

                                    </div>
                                    <div class="col-md-5 text-right">
                                        <a href="{{route('prices.index')}}" type="button" class="btn mb-3 btn-primary ">View All
                                        </a>
                                    </div>
                                </div>
                                <div class="basic-form">
                                <form method="POST"  action="{{route('prices.store')}}">
                                    @csrf
                                       
                                        <div class="form-group">
                                            <select class="form-control" id="sel1" name="size">
                                                <option value="selected">Select Size</option>
                                                @foreach(@App\Variable::where('type','size')->get() as $row)
                                                <option value="{{$row->value}}">{{$row->value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="price" step="0.001" class="form-control input-flat" placeholder="Price">
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

@endsection
