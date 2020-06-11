@extends('admin.layouts.layout')
@section('content')
<link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Menus</a></li>
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
                                    <h4 class="card-title">Old Orders</h4>

                                </div>
                               
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration" id="example">
                                    <thead>
                                    <tr>
                                    <th>id</th>
                                        <th>Date</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Pickup</th>
                                        <th>Pickup Date</th>
                                        <th>Pickup Time</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th> Unit Price</th>
                                        <th>Customization</th>
                                        <th>Total</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(@App\Order::where('status',"C")->orderBy('id','DESC')->get() as $row)
                                            <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{date('d-m-Y',strtotime($row->created_at))}}</td>
                                            <td>{{$row->user_id}}</td>
                                            <td>{{$row->mobile}}</td>
                                            <td>{{$row->pickup}}</td>
                                            <td>{{$row->pickup_date}}</td>
                                            <td>{{$row->pickup_time}}</td>
                                            <td>
                                                @if($row->is_item=="item" || $row->is_item=="custome" ) {{@App\Item::where('id',$row->item_id)->value('title')}} <br> Size:{{@App\ItemVariable::where('id',$row->size)->value('value')}} <br>Price:{{@App\ItemVariable::where('id',$row->size)->value('price')}} @endif
                                                @if($row->is_item=="offer") {{@App\Offer::where('id',$row->item_id)->value('title')}} {{@App\Offer::where('id',$row->item_id)->value('day')}} <br> {{@App\Offer::where('id',$row->item_id)->value('description')}}@endif
    
                                            </td>
                                        <td>{{$row->qty}}</td>
                                        <td>{{$row->item_price}}</td>
                                           <td>
                                           sauce: {{@App\Sauce::where('id',$row->sauce)->value('name')}}<br>
                                           ranch: {{@App\Sauce::where('id',$row->ranch)->value('name')}}<br>
                                           dough: {{@App\Sauce::where('id',$row->dough)->value('name')}}<br>
                                       	   Toppings:<br>
                                           @foreach(App\OrderTopping::where('order_id',$row->id)->get() as $top)
                                           	Name : {{$top->topping}}<br>
                                           	Type : {{@App\Topping::where('id',$top->type)->value('name')}}<br>
                                           	Qty  : {{$top->qty}}
                                           	
                                           @endforeach
                                           
                                           
                                           
                                           </td>
                                        <td>${{$row->total}}</td>
                                        <td><a href="{{route('admin.order.status',$row->id)}}"><i class="fa fa-check pl-3 text-success" style="font-size: 20px;"></i></a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                    <td>id</td>
                                        <th>Date</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Pickup</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th> Unit Price</th>
                                        <th>Customization</th>
                                        <th>Total</th>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 0, "desc" ]],
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );

</script>
@endsection
