@extends('layouts.layout')
@section('content')
    <section class="my-5  py-3">
        <div class="container my-5">
            <div class="dashboard-home">
                <div class="row">
                    <div class="col-3" >
                        <h3 class="text-two font-weight-400 " style="font-size: 18px;color: #2d2a2a;">MY ACCOUNT
                        </h3>
                        <hr>

                        <div class="list-group font-weight-600 text-black font-size text-one " id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-dashboard" role="tab" aria-controls="Dashboard">Dashboard</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Recent Order</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Orders Details</a>
                            <a class="list-group-item list-group-item-action" id="list-acc-details-list" data-toggle="list" href="#list-acc-details" role="tab" aria-controls="list-acc-details-list">Account Details</a>
                            <a class="list-group-item list-group-item-action"  href="">Logout</a>

                        </div>
                    </div>
                    <div class="col-9 px-4" style="border-left: 1px solid #0000001a;">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="row">
                                    <div class="col-md-4 mt-3">
                                        <div class="cards">
                                            <div class="card text-center dash-card card_style" style="box-shadow: 0 0 4px rgba(0,0,0,.18);border-radius: 0px;">
                                                <div class="card-body text-one py-3 " style="border-radius: 0px;">
                                                    <i class="fa fa-file font-size-40 icon-style" ></i>
                                                    <h6 class="font-size font-weight-600 pt-3 text-one text-black">RECENT ORDERS</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="cards">
                                            <div class="card text-center dash-card card_style" style="box-shadow: 0 0 4px rgba(0,0,0,.18);border-radius: 0px;">
                                                <div class="card-body text-one py-3 " style="border-radius: 0px;">
                                                    <i class="fa fa-download font-size-40 icon-style"></i>
                                                    <h6 class="font-size font-weight-600 pt-3 text-one text-black">ORDER DETAILS</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="cards">
                                            <div class="card text-center dash-card card_style" style="box-shadow: 0 0 4px rgba(0,0,0,.18);border-radius: 0px;">
                                                <div class="card-body text-one py-3 " style="border-radius: 0px;">
                                                    <i class="fa fa-user font-size-40 icon-style"></i>
                                                    <h6 class="font-size font-weight-600 pt-3 text-one text-black">ACCOUNT DETAILS</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-3">
                                        <div class="cards">
                                            <div class="card text-center dash-card card_style" style="box-shadow: 0 0 4px rgba(0,0,0,.18);border-radius: 0px;">
                                                <div class="card-body text-one py-3 " style="border-radius: 0px;">
                                                    <i class="fa fa-sign-out font-size-40 icon-style"></i>                                                <h6 class="font-size font-weight-600 pt-3 text-one text-black">LOGOUT</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <table class="table">
                                    <thead>
                                    <tr class="text-two text-black">
                                        <th class="ch-border"> ORDER</th>
                                        <th class="ch-border">DATE</th>
                                        <th class="ch-border">STATUS</th>
                                        <th class="ch-border">TOTAL</th>
                                        <th class="ch-border">TIMING</th>
                                        <th class="ch-border">ADDRESS</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-one font-size">
                                    <tr>
                                        <td class="text-black font-weight-600">#4937</td>
                                        <td>January 5, 2020</td>
                                        <td>Processing</td>
                                        <td><b class="color">&#x20B9; 299.00</b>  for 1 item</td>
                                        <td>
                                           20.00 Min
                                        </td>
                                        <td>
                                                <a href="https://goo.gl/maps/ciyNpBptPu5pbsgM6" class="font-weight-bold web-color" target="_blank">
                                         <i class="fa fa-map-marker"></i>  Get Directions
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <table class="table">
                                    <thead>
                                    <tr class="text-two text-black">
                                        <th class="ch-border"> ORDER</th>
                                        <th class="ch-border">DATE</th>
                                        <th class="ch-border">STATUS</th>
                                        <th class="ch-border">TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-one font-size">
                                    <tr>
                                        <td class="text-black font-weight-600">#4937</td>
                                        <td>January 5, 2020</td>
                                        <td>Compeleted</td>
                                        <td><b class="color">&#x20B9; 299.00</b>  for 1 item</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="list-acc-details" role="tabpanel" aria-labelledby="list-settings-list">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
