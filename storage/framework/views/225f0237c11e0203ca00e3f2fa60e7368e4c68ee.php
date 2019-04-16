<?php $__env->startSection('content'); ?>
    <div class="jumbotron text-center">
        <h1>Welcome to Laravel!</h1>
        <p>This is Laravel application from the "Laravel from scratch"</p>
        <p>
            <a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button"> Login</a>
            <a class="btn btn-success btn-lg" href="/lsapp/public/register" role="button"> Register</a>
        </p>
    </div>
    <h1> <?php echo e($title); ?> </h1>
    <p>This is the Laravel application</p>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>