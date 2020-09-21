
<?php $__env->startSection('title','Review Order Page'); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Đơn hàng của bạn</h2>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php $__currentLoopData = $order->cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item">
                                    <span class="badge"><?php echo e(number_format($item['price'], 0, '', ',')); ?> VNĐ</span>
                                   <p> <?php echo e($item['item']['p_name']); ?></p>
                                   <p> | <?php echo e($item['qty']); ?> Số lượng </p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Tổng giá: <?php echo e(number_format($order->cart->totalPrice, 0, '', ',')); ?> VNĐ</strong>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>