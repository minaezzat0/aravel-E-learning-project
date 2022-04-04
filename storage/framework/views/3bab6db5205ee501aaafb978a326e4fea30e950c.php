
<?php if($errors->any()): ?>
 <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger my-4">
       <?php echo e($error); ?>

    </div> 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/inc/authorerrors.blade.php ENDPATH**/ ?>