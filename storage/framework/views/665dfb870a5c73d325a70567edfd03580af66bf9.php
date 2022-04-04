<?php $__env->startSection('content'); ?>
<h4 class="mb-5 text-center">My Profile </h4>
<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-7 offset-md-1">
      <div class="card-body">
        <p class="card-text h5"> Picture :<img src="<?php echo e(asset('asset/images/users/'.Auth::user()->img)); ?>"  class="rounded-start" width="40px" height="40px">
        <p class="card-text h5"> Name:<?php echo e(Auth::user()->name); ?> <a class="mx-2" href="<?php echo e(route('editename')); ?>"><button class="btn btn-primary">Edit <i class="fa fa-cog"></i></button></a></p>
        <p class="card-text h5"><small class="text-muted">Role:<?php echo e(Auth::user()->role); ?></small></p>
        <p class="card-text h5 mb-4"><small class="text-muted">Email:<?php echo e(Auth::user()->email); ?></small></p>
        <a style="float:left;" class="btn btn-danger mb-4" href="<?php echo e(route('deleteaccount')); ?>">Delete My Account</a>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/User/myprofile.blade.php ENDPATH**/ ?>