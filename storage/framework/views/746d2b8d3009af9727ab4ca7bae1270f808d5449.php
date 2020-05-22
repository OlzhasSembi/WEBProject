<?php $__env->startSection('title-block'); ?> Task page <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Group tasks page</h1>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-info p-3">
            <h3 style="font-family: 'Barlow Condensed'; color: #d3"><?php echo e($task->name); ?></h3>
            <!-- <p><?php echo e($task->description); ?></p> -->
            <p style="font-family: 'Barlow Condensed'; color: #d3">Deadline: <?php echo e($task->todo_date); ?></p>
            <!-- <p><?php echo e($task->owner); ?></p> -->
            <p style="font-family: 'Barlow Condensed'; color: #d3">Shared user: <?php echo e($task->email); ?></p>
            <a style="color: #0066c0; font-family: 'Barlow Condensed'" href="<?php echo e(route('task-data-one-shared', $task->id)); ?>"><button style="background-color: #0066c0; font-family: 'Barlow Condensed'" class="btn btn-warning">More</button></a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/shared-task.blade.php ENDPATH**/ ?>