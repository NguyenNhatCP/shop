
<?php $__env->startSection('title','Đặt hàng'); ?>
<?php $__env->startSection('slider'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
            <form action="<?php echo e(url('/submit-checkout')); ?>" method="post" class="form-horizontal">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <legend>Billing To</legend>
                        <div class="form-group <?php echo e($errors->has('billing_name')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="billing_name" id="billing_name" value="<?php echo e($user_login->name); ?>" placeholder="Billing Name">
                            <span class="text-danger"><?php echo e($errors->first('billing_name')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('billing_address')?'has-error':''); ?>">
                            <input type="text" class="form-control" value="<?php echo e($user_login->address); ?>" name="billing_address" id="billing_address" placeholder="Billing Address">
                            <span class="text-danger"><?php echo e($errors->first('billing_address')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('billing_city')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="billing_city" value="<?php echo e($user_login->city); ?>" id="billing_city" placeholder="Billing City">
                            <span class="text-danger"><?php echo e($errors->first('billing_city')); ?></span>
                        </div>
                        <div class="form-group <?php echo e($errors->has('billing_mobile')?'has-error':''); ?>">
                            <input type="text" class="form-control" name="billing_mobile" value="<?php echo e($user_login->mobile); ?>" id="billing_mobile" placeholder="Billing Mobile">
                            <span class="text-danger"><?php echo e($errors->first('billing_mobile')); ?></span>
                        </div>

                        <span>
                            <input type="checkbox" class="checkbox" name="checkme" id="checkme"> Chấp nhận
                        </span>
                        <div class="signup-form"><!--sign up form-->
                            <button type="submit" class="btn btn-primary" style="float: right;">Xác nhận</button>
                        </div><!--/sign up form-->
                    </div><!--/login form-->
                </div>
            </form>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>