

<?php $__env->startSection('title','Profile Page'); ?>
<?php $__env->startSection('vendor-styles'); ?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="<?php echo e(asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('vendors/css/tables/datatable/buttons.bootstrap4.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/pickers/pickadate/pickadate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/pickers/daterange/daterangepicker.css')); ?>">
<!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/ui/prism.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/css/file-uploaders/dropzone.min.css')); ?>">-->
<!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/navs-tabs/"> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/components.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- Zero configuration table -->
<section id="basic-datatable">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white round">
    <li class="breadcrumb-item"><a href="#"><i class="bx bxs-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item"><a href="#">Data</a></li>
    <li class="breadcrumb-item active" aria-current="page">Link</li>
  </ol>
</nav>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> PROFILE DETAILS</h4>
        </div>
        <div class="card-body card-dashboard">
        <div class="row">
            <div class="col-md-12 col-12">
               <form class="form form-horizontal">
                        <div class="form-body">
   
                            <div class="row">
                                
                                <div class="col-6">
                                    <div class="media mb-2">
                                        <a class="mr-2" href="javascript:void(0);">
                                            <img src="../../../images/portrait/small/avatar-s-26.jpg" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">&nbsp;</h4>
                                            <div class="col-12 px-0 d-flex">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary mr-25">Upload new photo
                                                    <input type="file" name="file" style="position: absolute;font-size: 50px;opacity: 0;right: 0;top: 0;"/>
                                                </a>
                                                <!--<a href="javascript:void(0);" class="btn btn-sm btn-light-secondary">Reset</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info mr-1 mb-1">Edit</button>
                                        <button type="reset" class="btn btn-success mr-1 mb-1">Save</button>
                                        <button type="reset" class="btn btn-danger mr-1 mb-1">Cancel</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>First Name</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name">
                                </div>
                                <div class="col-md-2">
                                    <label>Last Name</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="text" id="Last-name" class="form-control" name="lname" placeholder="Last Name">
                                </div>
                                <div class="col-md-2">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                                </div>
                                <div class="col-md-2">
                                    <label>Mobile</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile">
                                </div>
                                <div class="col-md-2">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-2">
                                    <label>Confirm Password</label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                </div>
                               
                            </div>
                        </div>
                    </form>
              </div>
              
          </div>
<br />

                            <ul class="nav nav-tabs mb-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                        <i class="bx bx-user mr-25"></i><span class="d-none d-sm-block">Tab1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                        <i class="bx bx-info-circle mr-25"></i><span class="d-none d-sm-block">Tab2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="third-tab" data-toggle="tab" href="#third" aria-controls="third" role="tab" aria-selected="false">
                                        <i class="bx bx-info-circle mr-25"></i><span class="d-none d-sm-block">Tab3</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <div class="row col-md-6">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="first-name" class="form-control" name="fname" placeholder="">
                                  </div>
                                  <div class="col-md-4">
                                      <label>Address Line2</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="first-name" class="form-control" name="fname" placeholder="">
                                  </div>
                                  <div class="col-md-4">
                                      <label>Address Line3</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="first-name" class="form-control" name="fname" placeholder="">
                                  </div>
                                  <div class="col-md-4">
                                      <label>ZIP/POSTAL CODE</label>
                                  </div>
                                  <div class="col-md-8 form-group">
                                      <input type="text" id="first-name" class="form-control" name="fname" placeholder="">
                                  </div>
                                </div>
                                </div>
                                <div class="tab-pane fade show" id="information" aria-labelledby="information-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bx-error-circle"></i>
                                                    <span>
                                                        <a href="javascript:void(0);" class="alert-link">Good Morning!</a> <span>Start your day with some alerts.</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <button type="button" class="btn btn-outline-primary mr-1 mb-1">Primary</button>
                                            <button type="button" class="btn btn-outline-secondary mr-1 mb-1">Secondary</button>
                                            <button type="button" class="btn btn-outline-success mr-1 mb-1">Success</button>
                                            <button type="button" class="btn btn-outline-info mr-1 mb-1">Info</button>
                                            <button type="button" class="btn btn-outline-warning mr-1 mb-1">Warning</button>
                                            <button type="button" class="btn btn-outline-danger mr-1 mb-1">Danger</button>
                                            <button type="button" class="btn btn-outline-light mr-1 mb-1">Light</button>
                                            <button type="button" class="btn btn-outline-dark mr-1 mb-1">Dark</button>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <!-- basic buttons -->
                                            <button type="button" class="btn btn-primary mr-1 mb-1">Primary</button>
                                            <button type="button" class="btn btn-secondary mr-1 mb-1">Secondary</button>
                                            <button type="button" class="btn btn-success mr-1 mb-1">Success</button>
                                            <button type="button" class="btn btn-info mr-1 mb-1">Info</button>
                                            <button type="button" class="btn btn-warning mr-1 mb-1">Warning</button>
                                            <button type="button" class="btn btn-danger mr-1 mb-1">Danger</button>
                                            <button type="button" class="btn btn-light mr-1 mb-1">Light</button>
                                            <button type="button" class="btn btn-dark mr-1 mb-1">Dark</button>
                                        </div>
                                        <div class="col-sm-12 col-md-2">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="btn btn-outline-primary toast-basic-toggler mb-1">Toast</div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 collapsible" >
                                            <div class="card collapse-header">
                                                <div id="headingCollapse1" class="card-header" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                    <span class="collapse-title">
                                                        Collapse Item 1
                                                    </span>
                                                </div>
                                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse">
                                                    <div class="card-body">
                                                        Pie dragée muffin. Donut cake liquorice marzipan carrot cake topping powder candy. Sugar plum
                                                        brownie brownie cotton candy.
                                                        Tootsie roll cotton candy pudding bonbon chocolate cake lemon drops candy. Jelly marshmallow
                                                        chocolate cake carrot cake bear claw ice cream chocolate. Fruitcake apple pie pudding jelly beans
                                                        pie candy canes candy canes jelly-o. Tiramisu brownie gummi bears soufflé dessert cake.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="third" aria-labelledby="third-tab" role="tabpanel">
                                <div class="row">
                <!-- Left side -->
                <div class="col-md-5 col-sm-12">
                  <div class="card" style="background-color:#E7E9EB; padding:8px;">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Timeline</h4>
                      </div>
                      <div class="card-body">
                        <ul class="timeline mb-0">
                          <li class="timeline-item timeline-icon-success active">
                            <div class="timeline-time">Mon 8:17PM</div>
                            <h6 class="timeline-title">John Rechie Commented</h6>
                            <p class="timeline-text">on Project name</p>
                            <div class="timeline-content" style="font-size: 12px;">
                              Story behind videogame and lame is very creative
                            </div>
                          </li>
                          <li class="timeline-item timeline-icon-primary active">
                            <div class="timeline-time">5 days ago</div>
                            <h6 class="timeline-title">Mathew Slick attached file</h6>
                            <p class="timeline-text">on Project name</p>
                            <div class="timeline-content" style="font-size: 14px;">
                              <img src="<?php echo e(asset('images/icon/sketch.png')); ?>" alt="document" height="30" width="30" class="mr-50">Data Folder.sketch
                            </div>
                          </li>
                          <li class="timeline-item timeline-icon-danger active pb-0">
                            <div class="timeline-time">7 hours ago</div>
                            <h6 class="timeline-title">Mathew Slick docs</h6>
                            <p class="timeline-text">on Project name</p>
                            <div class="timeline-content" style="font-size: 14px;">
                              <img src="<?php echo e(asset('images/icon/pdf.png')); ?>" alt="document" height="30" width="30" class="mr-50">Updated Docs.pdf
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Right side -->
                <div class="col-md-7 col-sm-12">
                  <ul class="list-unstyled mb-0">
                    <li class="d-inline-block mr-1 mb-1">
                      <fieldset>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1" checked>
                          <label class="custom-control-label" for="customRadio1">Primary</label>
                        </div>
                      </fieldset>
                    </li>
                    <li class="d-inline-block mr-1 mb-1">
                      <fieldset>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2" >
                          <label class="custom-control-label" for="customRadio2">Secondary</label>
                        </div>
                      </fieldset>
                    </li>
                    <li class="d-inline-block mr-1 mb-1">
                      <fieldset>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="customRadio" id="customRadio3">
                          <label class="custom-control-label" for="customRadio3">Success</label>
                        </div>
                      </fieldset>
                    </li>
                    <li class="d-inline-block mr-1 mb-1">
                      <fieldset>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="customRadio" id="customRadio4">
                          <label class="custom-control-label" for="customRadio4">Danger</label>
                        </div>
                      </fieldset>
                    </li>
                    <li class="d-inline-block mr-1 mb-1">
                      <fieldset>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="customRadio" id="customRadio5">
                          <label class="custom-control-label" for="customRadio5">Info</label>
                        </div>
                      </fieldset>
                    </li>
                    <li class="d-inline-block mr-1 mb-1">
                      <fieldset>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="customRadio" id="customRadio6">
                          <label class="custom-control-label" for="customRadio6">Warning</label>
                        </div>
                      </fieldset>
                    </li>
                  </ul>
                  <br>
                  <div class="custom-control custom-switch custom-control-inline mb-1">
                    <input type="checkbox" checked class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label mr-1" for="customSwitch1">
                    </label>
                    <!-- <span>One</span> -->
                  </div>
                  <div class="custom-control custom-switch custom-control-inline mb-1">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label mr-1" for="customSwitch2">
                    </label>
                    <!-- <span>Two</span> -->
                  </div>
                  <div class="custom-control custom-switch custom-switch-success custom-control-inline mb-1">
                    <input type="checkbox" checked class="custom-control-input" id="customSwitch3">
                    <label class="custom-control-label mr-1" for="customSwitch3">
                    </label>
                    <!-- <span>three</span> -->
                  </div>
                  <div class="custom-control custom-switch custom-switch-success custom-control-inline mb-1">
                    <input type="checkbox" class="custom-control-input" id="customSwitch4">
                    <label class="custom-control-label mr-1" for="customSwitch4">
                    </label>
                    <!-- <span>four</span> -->
                  </div>
                  <div class="custom-control custom-switch custom-switch-info custom-control-inline mb-1">
                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                    <label class="custom-control-label mr-1" for="customSwitch5">
                    </label>
                    <!-- <span>five</span> -->
                  </div>
                  <div class="mb-3">
                    <fieldset class="form-group position-relative has-icon-left">
                      <input type="text" class="form-control single-daterange col-sm-4" placeholder="Select Date">
                      <div class="form-control-position">
                        <i class='bx bx-calendar-check'></i>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
        </div>
  </div>
<!-- Tabs navs -->
        </div>
      </div>
    </div>
  </div>
</section>


                <!-- Basic Toast Starts -->

                <div aria-live="polite" aria-atomic="true" style="position: relative">
                    <!-- Position it -->
                    <div style="position: fixed; top: 1rem; right: 1rem; margin-left: 1rem; z-index: 1030">
                        <div class="toast toast-basic hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="top: 1rem; right: 1rem">
                            <div class="toast-header">
                                <i class="bx bx-bulb"></i>
                                <span class="mr-auto toast-title">Bootstrap</span>
                                <small>11 mins ago</small>
                                <button type="button" class="close" data-dismiss="toast" aria-label="Close">
                                    <i class="bx bx-x"></i>
                                </button>
                            </div>
                            <div class="toast-body">
                                The Luxury Of Traveling With Yacht Charter Companies
                                Of Traveling With Yacht
                            </div>
                        </div>
                        <!-- Basic Toast ends -->
                    </div>
                </div>
<!--/ Zero configuration table -->

<footer class="footer footer-static footer-light">
  <p class="clearfix mb-0">
    <span class="float-left d-inline-block">Clifo Channel – All Rights Reserved</span>
  </p>
</footer>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('vendor-scripts'); ?>
<script src="<?php echo e(asset('vendors/js/pickers/pickadate/picker.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/pickers/pickadate/picker.date.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/pickers/pickadate/picker.time.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/pickers/pickadate/legacy.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/extensions/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/pickers/daterange/daterangepicker.js')); ?>"></script>
<!--<script src="<?php echo e(asset('vendors/js/file-uploaders/dropzone.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/js/ui/prism.min.js')); ?>"></script>-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-scripts'); ?>
<script src="<?php echo e(asset('js/scripts/pickers/dateTime/pick-a-datetime.js')); ?>"></script> 
<!-- <script src="<?php echo e(asset('js/scripts/pages/bootstrap-toast.js')); ?>"></script> -->
<!--<script src="<?php echo e(asset('js/scripts/extensions/dropzone.js')); ?>"></script>-->
<!-- <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script> -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script>
function myFunction() {
    window.print();
}
// Basic toast
$('.toast-basic-toggler').on('click', function () {
  $('.toast-basic').toast('show');
});
</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel_frest_bootstrap\resources\views/pages/tab_profile.blade.php ENDPATH**/ ?>