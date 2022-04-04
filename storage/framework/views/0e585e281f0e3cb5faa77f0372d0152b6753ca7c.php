<?php $__env->startSection('content'); ?>
<h2 class="text-center">Edit Account</h2>
<form class="my-4" action="<?php echo e(route('updatename')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>"  class="form-control  mb-3" id="exampleInputEmail1" aria-describedby="emailHelp">
    <button class="btn btn-success" type="submit">Update Name</button>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITI Laravel Projects\resources\views/User/editemyname.blade.php ENDPATH**/ ?>