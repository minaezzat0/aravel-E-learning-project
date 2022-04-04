<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(asset('/css/main.css')); ?>"/>
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"rel="stylesheet"crossorigin="anonymous"integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
<body style="font-family:Fredoka">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color:white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ITI Laravel</a>
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
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('myprofile')); ?>">Profile</a>
        </li>
       <?php endif; ?>
      </ul>
     <?php if(Auth::user()): ?>
     <ul class="d-flex">

     </ul>
     <ul class="d-flex">
        <img src="<?php echo e(asset('asset/images/users/'.Auth::user()->img)); ?>"  class="rounded-circle mt-3" width="30px" height="30px" alt="...">
        <a style="color:white;text-decoration:none;" class="m-3" href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out"></i> LogOut</a>
        
        <?php else: ?>
        <a style="color:white;text-decoration:none;" class="mx-2" href="<?php echo e(route('login')); ?>"><i class="fa fa-sign-in"></i> Login</a>
        <a style="color:white;text-decoration:none;" class="mx-2" href="<?php echo e(route('register')); ?>"><i class="fa fa-user-plus"></i> Register</a>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<?php /**PATH /Users/minaezzat/Desktop/ITI Laravel Projects/resources/views/inc/nav.blade.php ENDPATH**/ ?>