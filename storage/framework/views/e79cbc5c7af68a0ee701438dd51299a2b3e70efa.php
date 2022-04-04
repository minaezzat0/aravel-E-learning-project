

<?php $__env->startSection('content'); ?>
<div class="card mb-3" style="max-width: (90%;)">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo e(asset('asset/images/users/'.Auth::user()->img)); ?>"  class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-7 offset-md-1">
      <div class="card-body">
        <h5 class="card-title h1">My Profile <a style="float:right;" class="btn btn-danger" href="<?php echo e(route('deleteaccount')); ?>">Delete Account</a></h5>
        <p class="card-text h4"> Name:<?php echo e(Auth::user()->name); ?> <a class="mx-2" href="<?php echo e(route('editename')); ?>"><i class="mx-2 fa-solid fa-pen-to-square"></i></a></p>
        <p class="card-text h4"><small class="text-muted">Role:<?php echo e(Auth::user()->role); ?></small></p>
        <p class="card-text h4"><small class="text-muted">Email:<?php echo e(Auth::user()->email); ?></small></p>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xamppp\htdocs\back\resources\views/User/myprofile.blade.php ENDPATH**/ ?>