<?php $__env->startSection('content'); ?>

<div class="row">
<?php $__currentLoopData = Auth::user()->enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php if($course->id==$enroll->course_id): ?>
        <div class="col-md-4">
            <img width="90%" height="300px" src="https://miro.medium.com/max/1400/1*7UY-VVkg-_2Y92Zjq7JlOw.jpeg" class="card-img-top" alt="...">
            <h5 class="card-title">Name : <?php echo e($course->name); ?></h5>
            <p class="card-text">Desc : <?php echo e($course->desc); ?></p>
            <p class="card-text">Time : <?php echo e($course->duration); ?><p>
            <a href="<?php echo e(route('unenroll',$enroll->id)); ?>" class="btn btn-success ">unenroll</a>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-danger mt-5"><i class="far fa-exclamation-circle"></i> You Dont added Courses Yet </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/User/myenroll.blade.php ENDPATH**/ ?>