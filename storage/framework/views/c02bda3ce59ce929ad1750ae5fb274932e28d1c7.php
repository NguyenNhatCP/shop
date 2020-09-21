
<?php $__env->startSection('title','Giỏ hàng'); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(Session::has('cart')): ?>
<section id="cart_items">
    <div class="container">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Hình</td>
                    <td class="description">Sản phẩm</td>
                    <td class="price">Giá</td>
                    <td class="quantity">Số lượng</td>
                    <td class="total">Tổng</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="cart_image">
                                <a href=""><img src="<?php echo e(url('products/small',$cart_data['item']['image'])); ?>" alt="" style="width: 100px;"></a>
                            </td>
                            <td class="cart_name">
                                <h4><a href=""><?php echo e($cart_data['item']['p_name']); ?></a></h4>
                            </td>
                            <td class="cart_price">
                                <p><?php echo e(number_format($cart_data['item']['price'], 0, '', ',')); ?> VNĐ</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href="<?php echo e(url('/cart/I_update-quantity/'.$cart_data['item']['id'])); ?>"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo e($cart_data['qty']); ?>" disabled="disabled" autocomplete="off" size="2">
                                    <?php if($cart_data['qty']>1): ?>
                                        <a class="cart_quantity_down" href="<?php echo e(url('/cart/R_update-quantity/'.$cart_data['item']['id'])); ?>"> - </a>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo e(number_format($cart_data['item']['price']*$cart_data['qty'], 0, '', ',')); ?> VNĐ</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="<?php echo e(url('/cart/deleteItem',$cart_data['item']['id'])); ?>"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
<?php else: ?>
<?php endif; ?>

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>Bạn có muốn tiếp tục mua sắm?</h3>
                <p>
                    <a href="list-products"> Tiếp tục mua sắm</a>
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <?php if(Session::has('message_apply_sucess')): ?>
                        <div class="alert alert-success text-center" role="alert">
                            <?php echo e(Session::get('message_apply_sucess')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="total_area">
                        <ul>
                            <?php if(Session::has('cart')): ?>
                                <li>Tổng cộng <span><?php echo e(number_format($totalPrice, 0, '', ',')); ?> VNĐ</span></li>
                                <div style="margin-left: 20px;"><a class="btn btn-default check_out" href="<?php echo e(url('/check-out')); ?>">Đặt hàng</a></div>
                            <?php else: ?>
                                <li>Tổng cộng <span>0 VNĐ</span></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>