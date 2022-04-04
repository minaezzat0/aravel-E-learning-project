

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-end">
<a href="<?php echo e(route('myenroll')); ?>" class="btn btn-info">My Enrollments</a>
</div>

<div class="row">
<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$count=0;
$cont=0;
?>
<?php $__currentLoopData = Auth::user()->enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <?php if($enroll->course_id==$course->id): ?>
      <?php  ++$cont ?>
        <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if($cont==$count){?>
<div class="col-md-4">
      <img width="90%" height="300px" src="https://img.freepik.com/free-vector/laravel-development-flat-illustration-editable-vector-design_203633-1148.jpg?w=740" class="card-img-top" alt="...">
        <h5 class="card-title"><?php echo e($course->name); ?></h5>
        <p class="card-text"><?php echo e($course->desc); ?></p>
        <p><?php echo e($course->duration); ?><p>
        <a href="<?php echo e(route('enroll',$course->id)); ?>" style="float:right;" class="btn btn-success  mx-2">enroll</a>
        <a href="<?php echo e(route('viewcourse',$course->id)); ?>" style="float:right;" class="btn btn-danger"><i class="fa-solid fa-eye"></i></a>

        
        </div>
<?php }?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\back\resources\views/inc/studenthome.blade.php ENDPATH**/ ?>