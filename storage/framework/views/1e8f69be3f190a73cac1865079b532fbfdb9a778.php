<?php $__env->startSection('title-block'); ?> Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Task page</h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('task-form')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="name">Enter a name of a task</label>
            <input class="form-control" type="text" name="name" placeholder="Task name" id="name">
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="todo_date">Choose a date</label>
            <input class="form-control" type="date" name="todo_date" placeholder="Choose date" id="todo_date">
        </div>
        <input class="form-control" type="hidden" value="<?php echo e(Auth::user()->email); ?>" name="owner">
        <input class="form-control" type="hidden" value="no status" name="status">
        <button style="background-color: #0066c0; font-family: 'Barlow Condensed'" type="submit" class="btn btn-success">Create</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/createTask.blade.php ENDPATH**/ ?>