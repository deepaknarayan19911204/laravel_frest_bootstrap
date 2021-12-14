@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Profile Page')
@section('vendor-styles')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
<!--<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/file-uploaders/dropzone.min.css')}}">-->
<!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/navs-tabs/"> -->
@endsection
@section('page-styles')
@endsection
@section('content')

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
                              <div class="media mb-2">
                                        <a class="mr-2" href="javascript:void(0);">
                                            <img src="../../../images/portrait/small/avatar-s-26.jpg" alt="users avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Kate Winslet</h4>
                                            <div class="col-12 px-0 d-flex">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary mr-25">Upload new photo</a>
                                                <!--<a href="javascript:void(0);" class="btn btn-sm btn-light-secondary">Reset</a>-->
                                            </div>
                                        </div>
                                    </div>
                              <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-info mr-1 mb-1">Edit</button>
                                    <button type="reset" class="btn btn-success mr-1 mb-1">Save</button>
                                    <button type="reset" class="btn btn-danger mr-1 mb-1">Cancel</button>
                                </div>
                            <div class="row">
                               
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
                                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name">
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
                                </div>
                                <div class="tab-pane fade show" id="information" aria-labelledby="information-tab" role="tabpanel">
                                    <!-- users edit Info form start -->
                                    <form class="form-validate">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <h5 class="mb-1"><i class="bx bx-link mr-25"></i>Social Links</h5>
                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input class="form-control" type="text" value="https://www.twitter.com/">
                                                </div>
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input class="form-control" type="text" value="https://www.facebook.com/">
                                                </div>
                                                <div class="form-group">
                                                    <label>Google+</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>LinkedIn</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input class="form-control" type="text" value="https://www.instagram.com/">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                <h5 class="mb-1"><i class="bx bx-user mr-25"></i>Personal Info</h5>
                                                <div class="form-group">
                                                    <div class="controls position-relative">
                                                        <label>Birth date</label>
                                                        <input type="text" class="form-control birthdate-picker" placeholder="Birth date" name="dob">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="form-control" id="accountSelect">
                                                        <option>USA</option>
                                                        <option>India</option>
                                                        <option>Canada</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Languages</label>
                                                    <select class="form-control" id="users-language-select2">
                                                        <option value="English" selected>English</option>
                                                        <option value="Spanish">Spanish</option>
                                                        <option value="French">French</option>
                                                        <option value="Russian">Russian</option>
                                                        <option value="German">German</option>
                                                        <option value="Arabic" selected>Arabic</option>
                                                        <option value="Sanskrit">Sanskrit</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" placeholder="Phone number" value="(+656) 254 2568" name="phone">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control" placeholder="Address" name="address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input type="text" class="form-control" placeholder="Website address" name="website">
                                                </div>
                                                <div class="form-group">
                                                    <label>Favourite Music</label>
                                                    <select class="form-control" id="users-music-select2">
                                                        <option value="Rock">Rock</option>
                                                        <option value="Jazz" selected>Jazz</option>
                                                        <option value="Disco">Disco</option>
                                                        <option value="Pop">Pop</option>
                                                        <option value="Techno">Techno</option>
                                                        <option value="Folk" selected>Folk</option>
                                                        <option value="Hip hop">Hip hop</option>
                                                    </select>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </form>
                                    <!-- users edit Info form ends -->
                                </div>
                                <div class="tab-pane fade show" id="third" aria-labelledby="third-tab" role="tabpanel">
                                </div>
                            </div>

<br />
        <ul class="nav nav-tabs">
    <li ><a data-toggle="tab" href="#home">Tab1</a></li>
    <li><a data-toggle="tab" href="#menu1">Tab 2</a></li>
    <li><a data-toggle="tab" href="#menu2">Tab 3</a></li>
    <li class="active"><a data-toggle="tab" href="#menu3">Tab 4</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Link</button> <br /><br />

<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
</div> <br /><br />
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">toggle this other custom radio</label>
</div><br /><br />

<div class="custom-control custom-switch custom-control-inline mb-1">
            <input type="checkbox" class="custom-control-input" checked="" id="customSwitch1">
            <label class="custom-control-label mr-1" for="customSwitch1">
            </label>
            <span>Active Switch</span>
          </div><br />


          <div class="mb-3">
              <p>Date picker</p>
              <fieldset class="form-group position-relative has-icon-left">
                  <input type="text" class="form-control openRight col-sm-4" placeholder="Select Date">
                  <div class="form-control-position">
                      <i class='bx bx-calendar-check'></i>
                  </div>
              </fieldset>
            </div>
          <br />
        <p>basic Pick-a-Time Picker.</p>
            <fieldset class="form-group position-relative has-icon-left">
                <input type="text" class="form-control pickatime col-sm-4" placeholder="Select Time">
                <div class="form-control-position">
                    <i class='bx bx-history'></i>
                </div>
            </fieldset>
            <p>Export icon on a styled link button:
        <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-export"></span> Export
        </a>
      </p> 

      <div class="container" id="box">
        <div class="row well">
          <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia aut perspiciatis assumenda asperiores consequatur soluta. </h5>
            <center>
                <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
            </center>
        </div>
      </div>
              <!-- single file upload starts -->
    </div>
    <div id="menu1" class="tab-pane fade">
      
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Single File Upload</h4>
        </div>
        <div class="card-body">
          <p class="card-text">This example uploads a single file using dropzone js library. By default, dropzone is a
            multiple file uploader and does not have specific option allowing us to switch to single file uploading
            mode, but this functionality can be achieved by adding more options to the plugin settings, such as
            <code>maxfilesexceeded</code> callback and <code>maxFiles</code> option set to 1. <code>maxFiles: 1</code>
            is used to tell dropzone that there should be only one file. When there is more then 1 file the function
            <code>maxfilesexceeded</code> will be called, with the exceeding file in the first parameter. Now only 1
            file can be selected and it will be replaced with another one instead of adding it to the preview.</p>
          <form action="#" class="dropzone dropzone-area" id="dpz-single-file">
            <div class="dz-message">Drop Files Here To Upload</div>
          </form>
        </div>
      </div>
    </div>
  </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <fieldset class="form-group">
                          <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea" spellcheck="false"></textarea>
                      </fieldset>
    </div>
    <div id="menu3" class="tab-pane fade">

    </div>
  </div>
 
     
<!-- Tabs navs -->


        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Zero configuration table -->

<footer class="footer footer-static footer-light">
  <p class="clearfix mb-0">
    <span class="float-left d-inline-block">Clifo Channel – All Rights Reserved</span>
  </p>
</footer>
@endsection
@section('vendor-scripts')
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<!--<script src="{{asset('vendors/js/file-uploaders/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>-->
@endsection
@section('page-scripts')
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<!--<script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script>-->
<!-- <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script> -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script>
function myFunction() {
    window.print();
}
</script>
@endsection



