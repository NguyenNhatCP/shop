<?php $__env->startSection('title','List Coupons'); ?>
<?php $__env->startSection('content'); ?>
    <div id="breadcrumb"> <a href="<?php echo e(url('/admin')); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo e(route('coupon.index')); ?>" class="current">Coupons</a></div>
    <div class="container-fluid">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> <?php echo e(Session::get('message')); ?>

            </div>
        <?php endif; ?>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List Products</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Coupon Code</th>
                        <th>Amount</th>
                        <th>Amount Type</th>
                        <th>Expiry Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; ?>
                    <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $i++; ?>
                        <tr class="gradeC">
                            <td><?php echo e($i); ?></td>
                            <td style="vertical-align: middle;"><?php echo e($coupon->coupon_code); ?></td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo e($coupon->amount); ?> %</td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo e($coupon->amount_type); ?></td>
                            <td style="text-align: center; vertical-align: middle;"><?php echo e($coupon->expiry_date); ?></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <?php echo e($coupon->status==1?'Active':'Disable'); ?>

                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="<?php echo e(route('coupon.edit',$coupon->id)); ?>" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:" rel="<?php echo e($coupon->id); ?>" rel1="delete-coupon" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsblock'); ?>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.ui.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.uniform.js')); ?>"></script>
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.tables.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.popover.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>