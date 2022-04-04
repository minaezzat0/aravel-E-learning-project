<?php $__env->startSection('title'); ?>
<?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->role=='teacher'): ?>
<?php echo $__env->make('inc.teacherhome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if(Auth::user()->role=='student'): ?>
<?php echo $__env->make('inc.studenthome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/User/myhome.blade.php ENDPATH**/ ?>