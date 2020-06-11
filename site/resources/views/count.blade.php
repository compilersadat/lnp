
<div class="col-lg-3 col-sm-6">
                        
                   
<div class="card gradient-4 @if(@App\Order::where('status','IP')->count()>0) cardglow @endif">
                            <div class="card-body">
                                <h3 class="card-title text-white">Current Orders</h3>
                                <div class="d-inline-block" >
                                    <h2 class="text-white">{{@App\Order::where('status',"IP")->count()}}</h2>
                                    
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white"> Categories</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{@App\Category::count()}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-tags"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Menus</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{@App\Item::count()}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-list"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Active Menus</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{@App\Item::where('active',1)->count()}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>