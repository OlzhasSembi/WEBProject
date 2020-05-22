<?php $__env->startSection('title-block'); ?> <?php echo e($data->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center"><?php echo e($data->name); ?></h1>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <div class="alert alert-info">
        <p style="font-family: 'Barlow Condensed'; color: #d3"><?php echo e($data->description); ?></p>
        <p style="font-family: 'Barlow Condensed'; color: #d3"><?php echo e($data->owner); ?></p>
        <p style="font-family: 'Barlow Condensed'; color: #d3"><?php echo e($data->status); ?></p>
        <p style="font-family: 'Barlow Condensed'; color: #d3"><smal><?php echo e($data->todo_date); ?></smal></p>
        <a style="color: #0066c0; font-family: 'Barlow Condensed'" href="<?php echo e(route('task-update', $data->id)); ?>"><button style="background-color: #0066c0; font-family: 'Barlow Condensed'" class="btn btn-primary">Edit</button></a>
        <a style="color: #0066c0; font-family: 'Barlow Condensed'" href="<?php echo e(route('task-delete', $data->id)); ?>"><button style="background-color: #0066c0; font-family: 'Barlow Condensed'" class="btn btn-danger">Delete</button></a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/one-taskShared.blade.php ENDPATH**/ ?>