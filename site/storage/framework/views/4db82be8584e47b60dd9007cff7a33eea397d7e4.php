<style>
#order_tab >.active{
border-right:2px solid black;
background: #F3F3F9;
}
}
</style>
<?php $__env->startSection('content'); ?>
    
       

           
            <div class="row" style="border-top:1px solid gray">

                <div class="col-3  m-0 p-0" style="background:white;height:100vh;border-right:1px solid gray">
                    <ul class="metismenu" id="order_tab">
                        <?php $__currentLoopData = @App\Order::distinct()->where('status',"N")->orderBy('id','DESC')->get(['order_id']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="p-3 <?php if($id==$row->order_id): ?> active <?php endif; ?>" style="border-bottom: 1px solid #c9c9c9b3;">
                            <a href="<?php echo e(route('admin.corders',$row->order_id)); ?>"aria-expanded="false" class="p-3">
                                <span class="nav-text"><?php echo e($row->order_id); ?></span>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-9 p-0">
                  <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="col-12 p-4 text-center" style="background:white;">
                        <div class="row p-0 m-0">
                            <div class="col-4">
                                        <a href="<?php echo e(route('admin.hldorders',0)); ?>" class="text-danger"><b>Hold </b></a>
                                    </div>
                                    
                                    <div class="col-4">
                                        <a href="<?php echo e(route('admin.iporders',0)); ?>" class="text-primary"><b>InProcess </b></a>
                                    </div>
                                    
                                    <div class="col-4">
                                        <a href="<?php echo e(route('admin.cmorders',0)); ?>" class="text-success"><b>Completed </b></a>
                                    </div>
                        </div>
                        <hr>
                        <?php if($id!=0): ?>  
                        <p><b>Pickup At : </b><?php echo e(@App\Order::where('order_id',$id)->value('pickup_time')); ?> <br>
                        <b> For : </b> <?php echo e(@App\Order::where('order_id',$id)->value('pickup')); ?><br>
                        <b>Cusomer Contact : </b> <?php if(@App\Order::where('order_id',$id)->value('user_id')!=""): ?> <?php echo e(@App\Order::where('order_id',$id)->value('user_id')); ?> <br> <?php endif; ?>
                         <?php if(@App\Order::where('order_id',$id)->value('mobile')!=""): ?>  <?php echo e(@App\Order::where('order_id',$id)->value('mobile')); ?> <br> <?php endif; ?>
                      
                        <?php endif; ?>
                        <b><span class="text-info">New Order</span></b>
                        </p>
                        <?php if($id!=0): ?>  
	                        <form method="POST" action="<?php echo e(route('payment.refund')); ?>">
	                        <?php echo csrf_field(); ?>
	                        <input type="hidden" name="id" value="<?php echo e($id); ?>">
	                        <button class="btn" type="sumbit"><i class="fa fa-times"></i> <b>cancle</b></button>
	                        </form>
                        <?php endif; ?>
                    </div>
                    
                    <?php if($id!=0): ?>  
                    <div class="container mt-1" style="padding-right: 20px !important;">
                     <?php $total=0?>
					 <?php $__currentLoopData = @App\Order::where('order_id',$id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					 <?php if($order->is_item!="offer"): ?>
						 <div class="mb-1 p-2" style="border:1px solid #4a4a4a66;border-radius:0.5rem">
							<div class="row p-0 m-0">
								<div class="col-10 pl-0">
									<p class="m-0"><b> <span style="color:red;font-size:large">  <?php echo e($order->qty); ?> X </span><?php if(@App\ItemVariable::where('id',$order->size)->value('value')=="SM"): ?> Small   <?php endif; ?>
												<?php if(@App\ItemVariable::where('id',$order->size)->value('value')=="M"): ?> Medium   <?php endif; ?>
												<?php if(@App\ItemVariable::where('id',$order->size)->value('value')=="L"): ?> Large   <?php endif; ?>
												<?php if(@App\ItemVariable::where('id',$order->size)->value('value')=="XL"): ?> Extra Large   <?php endif; ?>
												<?php if(@App\ItemVariable::where('id',$order->size)->value('value')=="P"): ?> Party   <?php endif; ?>
			
												 <?php echo e(@App\Item::where('id',$order->item_id)->value('title')); ?> </b><br>
												
											   <?php echo e(@App\Item::where('id',$order->item_id)->value('description')); ?></p>
												
												
								</div>
								<div class="col-2">
									<?php if($order->is_item!="offer"): ?>
									$<?php echo e(@App\ItemVariable::where('id',$order->size)->value('price')); ?>

									<?php else: ?>
									$<?php echo e($order->item_price); ?>

									<?php endif; ?>
								
								
								</div>
							</div>
							<?php if($order->is_item=="custome"): ?>
							<p class="col-12 pt-0 m-0 pl-0"><b>Customizations:</b></p>
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									<?php if($order->dough!=0): ?><b>Dough : </b><?php echo e(@App\Sauce::where('id',$order->dough)->value('name')); ?><br><?php endif; ?>
								</div>
								<div class="col-2">
										
								</div>

							</div>
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									 <?php if($order->sauce!=0): ?> <b>Sauce: </b><?php echo e(@App\Sauce::where('id',$order->sauce)->value('name')); ?><br><?php endif; ?>
								</div>
								
								<div class="col-2">
									<?php if($order->sauce!=0): ?> $0.5 <?php endif; ?>
								</div>
							</div>
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									<?php if($order->ranch!=0): ?><b>Ranch: </b><?php echo e(@App\Sauce::where('id',$order->ranch)->value('name')); ?><br><?php endif; ?>
								</div>
								
								<div class="col-2">
									<?php if($order->ranch!=0): ?> $1 <?php endif; ?>
								</div>
							</div>
							<?php if(@App\OrderTopping::where('order_id',$order->id)->count()>0): ?>
								<div class="col-12 pl-4">
									<b>Toppings: </b>
								</div>
								<?php $__currentLoopData = @App\OrderTopping::where('order_id',$order->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										<span style="color:red;font-size:medium">  <?php echo e($top->qty); ?> X </span> <?php echo e($top->topping); ?> <span class="text-success" style="font-size:medium"><?php echo e($top->top_size); ?></span>
									</div>
									
									<div class="col-2">
										$<?php echo e(@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$order->size)->value('value'))->value('price')*@App\ToppingValue::where('name',$top->topping)->value('count')*$top->qty); ?>

									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php endif; ?>
							<div class="row p-0 m-0">
								<div class="col-10 pl-4">
									 <?php if($order->instructions!=""): ?> <b>SPI: </b><?php echo e($order->instructions); ?> Done<br><?php endif; ?>
								</div>
								
								<div class="col-2">
									
								</div>
							</div>
							<?php endif; ?>
							
							<?php if($order->is_item=="custome_wings"): ?>
								<p class="col-12 pt-0 m-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
									<?php if($order->wings_type!=""): ?><b>Classic/Breaded : </b><?php echo e($order->wings_type); ?><br><?php endif; ?>
									</div>
									
									<div class="col-2">
										
									</div>
								</div>
								<div class="col-md-12 pl-4">
					                                   <b>Sauces: </b>
					                                </div>
					                            <?php $__currentLoopData = @App\OrderSauce::where('order_id',$order->order_id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sauce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<div class="row p-0 m-0">
					                                    
														<div class="col-10 pl-4">
															 <?php echo e(@App\Sauce::where('id',$sauce->sauce_id)->value('name')); ?><br>
														</div>
														
														<div class="col-2">
															FREE
														</div>
													</div>
					                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php endif; ?>

							<?php if($order->is_item=="side_custome"): ?>
								<p class="col-12 pt-0 m-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										<?php if($order->sauce!=0): ?> <b>Sauce: </b><?php echo e(@App\Sauce::where('id',$order->sauce)->value('name')); ?><br><?php endif; ?>
									</div>
									
									<div class="col-2">
										<?php if($order->sauce!=0): ?> $0.5 <?php endif; ?>
									</div>
								</div>
							<?php endif; ?>

							<?php if($order->is_item=="mm_custome"): ?>
								<p class="col-12 pt-0 m-0 pl-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										<?php if($order->dough!=0): ?><b>Dough : </b><?php echo e(@App\Sauce::where('id',$order->dough)->value('name')); ?><br><?php endif; ?>
									</div>
									
									<div class="col-2">
										
									</div>
								</div>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 <?php if($order->sauce!=0): ?> <b>Sauce: </b><?php echo e(@App\Sauce::where('id',$order->sauce)->value('name')); ?><br><?php endif; ?>
									</div>
									
									<div class="col-2">
										<?php if($order->sauce!=0): ?> $0.5 <?php endif; ?>
									</div>
								</div>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 <?php if($order->ranch!=0): ?><b>Ranch: </b><?php echo e(@App\Sauce::where('id',$order->ranch)->value('name')); ?><br><?php endif; ?>
									</div>
									
									<div class="col-2">
										<?php if($order->ranch!=0): ?> $1 <?php endif; ?>
									</div>
								</div>
								<?php if(@App\OrderTopping::where('order_id',$order->id)->count()>0): ?>
									<div class="col-12 pl-4">
										<b>Toppings: </b>
									</div>
									<?php $__currentLoopData = @App\OrderTopping::where('order_id',$order->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row p-0 m-0">
											<div class="col-10 pl-4">
												<span style="color:red;font-size:medium">  <?php echo e($top->qty); ?> X </span> <?php echo e($top->topping); ?> <span class="text-success" style="font-size:medium"><?php echo e($top->top_size); ?></span>
											</div>
											
											<div class="col-2">
												$<?php echo e(@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$order->size)->value('value'))->value('price')*@App\ToppingValue::where('name',$top->topping)->value('count')*$top->qty); ?>

											</div>
                                    	</div>
								   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								   
								<?php endif; ?>
								<?php if(@App\OrderPop::where('order_id',$order->id)->count()>0): ?>
                                    <div class="col-12 pl-4">
                                                <b>POPS: </b>
                                    </div>
                                            
                                    <?php $__currentLoopData = @App\OrderPop::where('order_id',$order->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row p-0 m-0">
											<div class="col-10 pl-4">
												<span style="color:red;font-size:medium">  <?php echo e($top->qty); ?> X </span> <?php echo e($top->pop); ?>

											</div>
											
											<div class="col-2">
												$<?php echo e($top->price*$top->qty); ?>

											</div>
                                    	</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 <?php if($order->instructions!=""): ?> <b>SPI: </b><?php echo e($order->instructions); ?> Done<br><?php endif; ?>
									</div>
									
									<div class="col-2">
										
									</div>
								</div>

							<?php endif; ?>

							<?php if($order->is_item=="shqc_custome"): ?>
								<p class="col-12 pt-0 m-0 pl-0"><b>Customizations:</b></p>
								<div class="row p-0 m-0">
									<div class="col-10 pl-4">
										 <?php if($order->sauce!=0): ?> <b>Sauce: </b><?php echo e(@App\Sauce::where('id',$order->sauce)->value('name')); ?><br><?php endif; ?>
									</div>
									
									<div class="col-2">
										<?php if($order->sauce!=0): ?> $0.5 <?php endif; ?>
									</div>
								</div>
								<?php if(@App\OrderTopping::where('order_id',$order->id)->count()>0): ?>
									<div class="col-12 pl-4">
										<b>Toppings: </b>
									</div>
									<?php $__currentLoopData = @App\OrderTopping::where('order_id',$order->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="row p-0 m-0">
											<div class="col-10 pl-4">
												<span style="color:red;font-size:medium">  <?php echo e($top->qty); ?> X </span> <?php echo e($top->topping); ?> <span class="text-success" style="font-size:medium"><?php echo e($top->top_size); ?></span>
											</div>
											
											<div class="col-2">
												$<?php echo e(@App\ToppingPrice::where('size',@App\ItemVariable::where('id',$order->size)->value('value'))->value('price')*@App\ToppingValue::where('name',$top->topping)->value('count')*$top->qty); ?>

											</div>
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>

							<?php endif; ?>
							<hr>
							<div class="row p-0 m-0">
								<div class="col-8 pl-4">
									Total
								</div>
											
								<div class="col-4">
									<span style="color:red;">  <?php echo e($order->qty); ?> X </span> <?php echo e($order->total/$order->qty); ?>

								</div>
							</div>



						 </div>
					 <?php else: ?>
						<div class="mb-1 p-2" style="border:1px solid #4a4a4a66;border-radius:0.5rem">
							<div class="row p-0 m-0">
								<div class="col-10">
									<p class="m-0"><b><?php echo e(@App\Offer::where('id',$order->item_id)->value('title')); ?> </b><br>
									<?php echo e(@App\Offer::where('id',$order->item_id)->value('description')); ?>

									</p>
												
												
								</div>
								
								<div class="col-2">
								<?php if($order->is_item!="offer"): ?>
								$<?php echo e(@App\ItemVariable::where('id',$order->size)->value('price')); ?>

								<?php else: ?>
								$<?php echo e($order->item_price); ?>

								<?php endif; ?>
								
								
								</div>
								
							</div>
							<hr>
							<div class="row p-0 m-0">
								<div class="col-8 pl-4">
									Total
								</div>
								
								<div class="col-4">
									<span style="color:red;">  <?php echo e($order->qty); ?> X </span> <?php echo e($order->total/$order->qty); ?>

								</div>
							</div>
						</div>
					 <?php endif; ?>
					 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="row p-0 m-0 mb-2 mt-2">
							<div class="col-8 pl-4">
								Total
							</div>
							
							<div class="col-4">
								<span style="color:red;"> $<?php echo e(ceil(@App\Order::where('order_id',$id)->sum('total'))); ?> </span>
							</div>
						</div>
						<div class="row p-2 m-0 mb-2 mt-2 " style="background:white">
								<div class="col-12">
									Change status to
								</div>
                            
                                <div class="col-12">
                                    <form action="<?php echo e(route('order.status')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($id); ?>">
                                        <select name="type" class="form-control" required>
                                            <option value="H">Hold</option>
                                            <option value="IP">In Process</option>
                                            <option value="C">Completed</option>
                                        </select>
                                        <div class="text-right pt-2">
                                                <button type="submit" class="btn px-5 btn-primary">Submit</button>
                                            </div>
                                    </form>
                                </div>
                                    
   
                        </div>

                        
                    </div>
               
                    
                    <?php endif; ?>
                </div>
            </div>
        
        <!-- #/ container -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>