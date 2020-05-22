<?php $__env->startSection('title-block'); ?> Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Share task page</h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('task-shared-submit', $data->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="name">Task</label>
            <input class="form-control" type="text" name="name" value="<?php echo e($data->name); ?>" placeholder="Task name" id="name" disabled>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="todo_date">Deadline</label>
            <input class="form-control" type="date" name="todo_date" placeholder="Deadline" value="<?php echo e($data->todo_date); ?>" id="todo_date" disabled>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="shared_user">Email</label>
            <input class="form-control" type="text" name="shared_user" placeholder="Enter email of sharing user" id="shared_user">
        </div>
        <input class="form-control" type="hidden" value="<?php echo e(Auth::user()->email); ?>" name="owner">
        <button style="background-color: #0066c0; font-family: 'Barlow Condensed'" type="submit" class="btn btn-success">Share</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/update-taskShared.blade.php ENDPATH**/ ?>