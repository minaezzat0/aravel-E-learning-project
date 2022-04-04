<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Elsdodey Acadmey</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(auth()->guard()->check()): ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('myhome')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('myprofile')); ?>">My Profile</a>
        </li>
       <?php endif; ?>

      </ul>
      <?php if(Auth::user()): ?>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Log Out
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Log Out</a></li>
          </ul>
        </li>
      <form class="d-flex">

      <img src="<?php echo e(asset('asset/images/users/'.Auth::user()->img)); ?>"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">
      <h4 class="mx-4"><?php echo e(Auth::user()->role .':'. Auth::user()->name); ?></h4>
      <?php else: ?>
      <a class="mx-2" href="<?php echo e(route('login')); ?>">Log in</a>
      <a class="mx-2" href="<?php echo e(route('register')); ?>">Register</a>
      <?php endif; ?>
     


      </form>
    </div>
  </div>
</nav><?php /**PATH C:\xamppp\htdocs\back\resources\views/inc/nav.blade.php ENDPATH**/ ?>