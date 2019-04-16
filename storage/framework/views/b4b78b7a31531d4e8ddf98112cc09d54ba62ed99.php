<?php $__env->startSection('content'); ?>
    <a href="/lsapp/public/post" class="btn btn-default"> Go Back</a>
    <h1><?php echo e($post->title); ?></h1>
    <br>
    <img style="width:100%" src="/lsapp/public/storage/cover_images/<?php echo e($post->cover_image); ?>">
    <br><br>
    <h3><?php echo e($post->body); ?></h3>
    <small>Written on <?php echo e($post->created_at); ?>  by <?php echo e($post->user->name); ?></small>
    <hr>

    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $post->user_id): ?>
            <a href="/lsapp/public/post/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a>

            <?php echo Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                        <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>