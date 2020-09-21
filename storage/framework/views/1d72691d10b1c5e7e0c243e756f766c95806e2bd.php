
<?php $__env->startSection('title','Trang chủ'); ?>
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php echo $__env->make('frontEnd.layouts.category_menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Các Sản phẩm </h2>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product->category->status==1): ?>
                                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="<?php echo e(url('/product-detail',$product->id)); ?>"><img src="<?php echo e(url('products/small/',$product->image)); ?>" alt="" /></a>
                                        <h2><?php echo e(number_format($product->price, 0, '', ',')); ?> VNĐ</h2>
                                        <p><?php echo e($product->p_name); ?></p>
                                        <a href="<?php echo e(url('/product-detail',$product->id)); ?>" class="btn btn-default add-to-cart">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Thêm sở thích </a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i> Thêm để so sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>