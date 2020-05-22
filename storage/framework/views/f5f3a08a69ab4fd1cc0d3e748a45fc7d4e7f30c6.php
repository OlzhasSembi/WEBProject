<?php $__env->startSection('title-block'); ?> Control panel <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table align="center" class="table">
    <thead>
    <tr>
        <th style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" scope="col">ID</th>
        <th style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" scope="col">Name</th>
        <th style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" scope="col">E-mail</th>
        <th style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" scope="col">Created at</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3" scope="row"><?php echo e($user->id); ?></th>
        <td style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3"><?php echo e($user->name); ?></td>
        <td style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3"><?php echo e($user->email); ?></td>
        <td style="font-size: 20px; font-family: 'Barlow Condensed'; color: #d3"><?php echo e($user->created_at); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trello\resources\views/control-panel.blade.php ENDPATH**/ ?>