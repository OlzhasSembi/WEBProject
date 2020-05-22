<?php $__env->startSection('title-block'); ?> Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1 style="font-family: 'Barlow Condensed'; color: #d3" align="center">Update page</h1>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('task-update-submit', $data->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="name">Enter a name of a task</label>
            <input class="form-control" type="text" name="name" value="<?php echo e($data->name); ?>" placeholder="Task name" id="name">
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description"><?php echo e($data->description); ?></textarea>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="status">Status</label>
            <select class="form-control" name="status" id="status">
                <option value="<?php echo e($data->status); ?>"><?php echo e($data->status); ?></option>
                <option value="In the process">In the process</option>
                <option value="Done">Done</option>
            </select>
        </div>
        <div class="form-group">
            <label style="font-family: 'Barlow Condensed'; color: #d3" for="todo_date">Choose a date</label>
            <input class="form-control" type="date" name="todo_date" value="<?php echo e($data->todo_date); ?>" placeholder="Choose date" id="todo_date">
        </div>
        <input class="form-control" type="hidden" value="<?php echo e(Auth::user()->email); ?>" name="owner">
        <button style="background-color: #0066c0; font-family: 'Barlow Condensed'" type="submit" class="btn btn-success">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/update-task.blade.php ENDPATH**/ ?>