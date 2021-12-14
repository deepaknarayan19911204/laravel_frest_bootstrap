

<?php $__env->startSection('title','Login Page'); ?>

<?php $__env->startSection('page-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/authentication.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- login page start -->
<section id="auth-login" class="row flexbox-container">
  <div class="col-xl-8 col-11">
    <div class="card bg-authentication mb-0">
      <div class="row m-0">
        <!-- left section-login -->
        <div class="col-md-6 col-12 px-0">
          <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
            <div class="card-header pb-1">
              <div class="card-title">
                <!--<h4 class="text-center mb-2">Welcome Back</h4>-->
              </div>
            </div>
            <div class="card-body">
              <div class="brand-logo text-center">
                  <img src="http://localhost:8000/images/logo/logo-light.png" class="logo" alt="">
              </div>
              <form action="<?php echo e(url('/dashboard/index')); ?>">
                  <div class="form-group mb-50">
                      <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1"
                          placeholder="Email address"></div>
                  <div class="form-group">
                      <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1"
                          placeholder="Password">
                  </div>
                  <div
                      class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                      <div class="text-left">
                          <div class="checkbox checkbox-sm">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="checkboxsmall" for="exampleCheck1"><small>Keep me logged in</small></label>
                          </div>
                      </div>
                      <div class="text-right"><a href="<?php echo e(asset('auth/forgot/password')); ?>"
                              class="card-link"><small>Forgot Password?</small></a></div>
                  </div>
                  <button type="submit" class="btn btn-primary glow w-100 position-relative">Login<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
              </form>
              <hr>
              <div class="text-center">
                <small class="mr-25">Don't have an account?</small>
                <a href="<?php echo e(asset('auth/register')); ?>"><small>Sign up</small></a>
              </div>
            </div>
          </div>
        </div>
        <!-- right section image -->
        <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
          <img class="img-fluid" src="<?php echo e(asset('images/pages/login.png')); ?>" alt="branding logo">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- login page ends -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.fullLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CLIFO-CRM-TEMPLATE-laravel\laravel-version\resources\views/pages/auth-login.blade.php ENDPATH**/ ?>