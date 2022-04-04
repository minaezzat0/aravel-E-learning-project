<?php $__env->startSection('content'); ?>


<div class="card my-4">
   <div class="card-body">
     <div class="row">
       <div class="col-md-4">
       <img width="100%" height="200px" src="https://miro.medium.com/max/1400/1*7UY-VVkg-_2Y92Zjq7JlOw.jpeg" class="card-img-top" alt="...">
        </div>
        <div class="col-md-7 offset-md-1">

        <p class="card-title"><b>Course Name:</b><?php echo e($course->name); ?></p>
        <p class="card-title"><b>Course Desc:</b><?php echo e($course->desc); ?></p>
        <p class="card-title"><b>Full Duration:-</b><?php echo e($course->duration); ?></p>
        <p class="card-title"><b>Added At:-</b><?php echo e($course->created_at); ?></p>
        <p class="card-title"><b>By:-</b><?php echo e($course->user->name); ?></p>
      </div>
     </div>
  </div>
</div>

<form class="my-4" action="<?php echo e(route('addcomment',$course->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <img src="<?php echo e(asset('asset/images/users/'.Auth::user()->img)); ?>"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">
     <span><?php echo e(Auth::user()->name); ?></span>
<div class="form-floating mt-2" >
  <textarea class="form-control" name="body" id="floatingTextarea">add FeedBack</textarea>
</div>
<button type="submit" class="btn btn-primary mt-4">+ add FeedBack</button>
</form>

<?php $__currentLoopData = $course->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-info">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->id == $comment->user_id): ?>
       <img src="<?php echo e(asset('asset/images/users/'.$user->img)); ?>"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">
        <b class="mr-4"><?php echo e($user->name); ?></b>
        <br> <br>
       <span class="mx-5"> FeedBack: <?php echo e($comment->body); ?></span>
      <?php endif; ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/User/showcourse.blade.php ENDPATH**/ ?>