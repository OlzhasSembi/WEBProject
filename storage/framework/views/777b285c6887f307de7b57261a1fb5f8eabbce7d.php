<?php $__env->startSection('content'); ?>
    <?php if(session('warning')): ?>
        <div class="alert alert-warning" style="text-align: center">
            <?php echo e(session('warning')); ?>

        </div>
    <?php endif; ?>
<?php echo $__env->make('inc.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/home.blade.php ENDPATH**/ ?>