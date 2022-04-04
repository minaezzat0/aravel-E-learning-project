<?php $__env->startSection('title'); ?>
Create Course
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h4 class="text-center">Edit Course</h4>
<form class="my-4" action="<?php echo e(route('updatedcourse',$course->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" value="<?php echo e($course->name); ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Course Description</label>
    <input type="text" name="desc" value="<?php echo e($course->desc); ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Duration</label>
    <input type="number" name="duration" value="<?php echo e($course->duration); ?>"  class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Update Course</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/Teacher/edite.blade.php ENDPATH**/ ?>