<?php $__env->startSection('content'); ?>
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
                                        <?php $__currentLoopData = @App\Order::where('status',"C")->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($row->id); ?></td>
                                            <td><?php echo e(date('d-m-Y',strtotime($row->created_at))); ?></td>
                                            <td><?php echo e($row->user_id); ?></td>
                                            <td><?php echo e($row->mobile); ?></td>
                                            <td><?php echo e($row->pickup); ?></td>
                                            <td><?php echo e($row->pickup_date); ?></td>
                                            <td><?php echo e($row->pickup_time); ?></td>
                                            <td>
                                                <?php if($row->is_item=="item" || $row->is_item=="custome" ): ?> <?php echo e(@App\Item::where('id',$row->item_id)->value('title')); ?> <br> Size:<?php echo e(@App\ItemVariable::where('id',$row->size)->value('value')); ?> <br>Price:<?php echo e(@App\ItemVariable::where('id',$row->size)->value('price')); ?> <?php endif; ?>
                                                <?php if($row->is_item=="offer"): ?> <?php echo e(@App\Offer::where('id',$row->item_id)->value('title')); ?> <?php echo e(@App\Offer::where('id',$row->item_id)->value('day')); ?> <br> <?php echo e(@App\Offer::where('id',$row->item_id)->value('description')); ?><?php endif; ?>
    
                                            </td>
                                        <td><?php echo e($row->qty); ?></td>
                                        <td><?php echo e($row->item_price); ?></td>
                                           <td>
                                           sauce: <?php echo e(@App\Sauce::where('id',$row->sauce)->value('name')); ?><br>
                                           ranch: <?php echo e(@App\Sauce::where('id',$row->ranch)->value('name')); ?><br>
                                           dough: <?php echo e(@App\Sauce::where('id',$row->dough)->value('name')); ?><br>
                                       	   Toppings:<br>
                                           <?php $__currentLoopData = App\OrderTopping::where('order_id',$row->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           	Name : <?php echo e($top->topping); ?><br>
                                           	Type : <?php echo e(@App\Topping::where('id',$top->type)->value('name')); ?><br>
                                           	Qty  : <?php echo e($top->qty); ?>

                                           	
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           
                                           
                                           
                                           </td>
                                        <td>$<?php echo e($row->total); ?></td>
                                        <td><a href="<?php echo e(route('admin.order.status',$row->id)); ?>"><i class="fa fa-check pl-3 text-success" style="font-size: 20px;"></i></a>
                                        </td>
                                    </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/concordw/public_html/site/resources/views/admin/orders/history.blade.php ENDPATH**/ ?>