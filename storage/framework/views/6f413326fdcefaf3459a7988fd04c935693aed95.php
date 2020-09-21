<!--sidebar-menu-->
<div id="sidebar"><a href="<?php echo e(url('/admin')); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li<?php echo e($menu_active==1? ' class=active':''); ?>><a href="<?php echo e(url('/admin')); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu <?php echo e($menu_active==2? ' active':''); ?>"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="<?php echo e(url('/admin/category/create')); ?>">Add New Category</a></li>
                <li><a href="<?php echo e(route('category.index')); ?>">List Categories</a></li>
            </ul>
        </li>
        <li class="submenu <?php echo e($menu_active==3? ' active':''); ?>"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span></a>
            <ul>
                <li><a href="<?php echo e(url('/admin/product/create')); ?>">Add New Products</a></li>
                <li><a href="<?php echo e(route('product.index')); ?>">List Products</a></li>
            </ul>
        </li>
        <li class="submenu <?php echo e($menu_active==4? ' active':''); ?>"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span></a>
            <ul>
                <li><a href="<?php echo e(route('coupon.create')); ?>">Add New Coupon</a></li>
                <li><a href="<?php echo e(route('coupon.index')); ?>">List Coupons</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->