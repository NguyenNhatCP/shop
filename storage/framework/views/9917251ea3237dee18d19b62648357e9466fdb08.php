
<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Trang chủ Admin</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <h1>Xin chào Admin</h1>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsblock'); ?>
    <script src="<?php echo e(asset('js/excanvas.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.ui.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.flot.resize.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.peity.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.gritter.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.interface.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.chat.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.validate.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.wizard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.uniform.js')); ?>"></script>
    <script src="<?php echo e(asset('js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.popover.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.tables.js')); ?>"></script>
    <script src="<?php echo e(asset('js/matrix.form_validation.js')); ?>"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>