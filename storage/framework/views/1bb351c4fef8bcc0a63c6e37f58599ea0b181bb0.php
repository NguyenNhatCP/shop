<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-responsive.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/matrix-login.css')); ?>" />
    <link href="<?php echo e(asset('frontEnd/css/font-awesome.min.css')); ?>" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox">
    <form id="loginform" class="form-vertical" method="POST" action="<?php echo e(route('login')); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="control-group normal_text"> <h3><img src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="fa fa-user"> </i></span>
                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                    <?php if($errors->has('email')): ?>
                        <br><span class="invalid-feedback" style="color: white;">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="fa fa-lock"></i></span>
                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
            <span class="pull-right"><button type="submit" class="btn btn-success">Login</button></span>
        </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical">
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="fa fa-envelope"></i></span><input type="text" placeholder="E-mail address" />
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><a class="btn btn-info">Recover</a></span>
        </div>
    </form>
</div>

<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/matrix.login.js')); ?>"></script>
</body>

</html>