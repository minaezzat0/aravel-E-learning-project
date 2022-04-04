
<?php $__env->startSection('content'); ?>


<div class="card my-4">
  <div class="card-header">
    <span class="card-title h1"><?php echo e($course->name); ?></span>

    </div>

   <div class="card-body"> 
     <div class="row">

       <div class="col-md-4">
       <img width="100%" height="200px" src="https://img.freepik.com/free-vector/laravel-development-flat-illustration-editable-vector-design_203633-1148.jpg?w=740" class="card-img-top" alt="...">

       </div>
       <div class="col-md-7 offset-md-1">
       <p class="card-title"><b>Desc:</b><?php echo e($course->desc); ?></p>
       <p class="card-text"><b>Duration:-</b><?php echo e($course->duration); ?></p>
      <p class="card-text"><b>Created At:-</b><?php echo e($course->created_at); ?></p>
      <p class="card-text"><b>Author:-</b><?php echo e($course->user->name); ?></p>
    
      </div>


     </div>
   
  </div>
</div>

<form class="my-4" action="<?php echo e(route('addcomment',$course->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    
    <img src="<?php echo e(asset('asset/images/users/'.Auth::user()->img)); ?>"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">

     <span><?php echo e(Auth::user()->name); ?></span>

<div class="form-floating">
  <textarea class="form-control" name="body" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
</div>
<button type="submit" class="btn btn-info">add comment</button>
</form>

<?php $__currentLoopData = $course->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-success">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($user->id == $comment->user_id): ?>
       <img src="<?php echo e(asset('asset/images/users/'.$user->img)); ?>"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">

        <span><?php echo e($user->name); ?></span>
        
        <span class="mx-2 "><?php echo e($comment->body); ?></span>
      <?php endif; ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\back\resources\views/User/showcourse.blade.php ENDPATH**/ ?>