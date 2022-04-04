<div class="d-flex justify-content-end">
<a href="<?php echo e(route('createCourse')); ?>" class="btn btn-info">Add New Course</a>
</div>

<?php $__currentLoopData = Auth::user()->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 

 <div class="card my-4">
  <div class="card-header">
    <span class="card-title h1"><?php echo e($course->name); ?></span>
      <a href="<?php echo e(route('deletecourse',$course->id)); ?>" style="float:right;" class="btn btn-danger">
      <i class="fa-solid fa-trash-can"></i></a>
      <a href="<?php echo e(route('editecourse',$course->id)); ?>" style="float:right;" class="btn btn-success mx-2">
      <i class="fa-solid fa-pen-to-square"></i></a>

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
      </div>
    
     </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xamppp\htdocs\back\resources\views/inc/teacherhome.blade.php ENDPATH**/ ?>