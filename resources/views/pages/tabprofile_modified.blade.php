@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Datatables')

@section('vendor-styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/navs-tabs/">
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
          <h4 class="card-title"> Profile - name</h4>
        </div>
        <div class="card-body card-dashboard">
          <ul class="nav nav-tabs">
            <li><a data-toggle="tab" href="#home">Tab1</a></li>
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
              <!-- <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">toggle this other custom radio</label>
              </div><br /><br /> -->

              <!-- <div class="custom-control custom-switch custom-control-inline mb-1">
                <input type="checkbox" class="custom-control-input" checked="" id="customSwitch1">
                <label class="custom-control-label mr-1" for="customSwitch1">
                </label>
                <span>Active Switch</span>
              </div><br /> -->


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
                        file can be selected and it will be replaced with another one instead of adding it to the preview.
                      </p>
                      <form action="#" class="dropzone dropzone-area" id="dpz-single-file">
                        <div class="dz-message">Drop Files Here To Upload</div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tab 3 code starts here -->
            <div id="menu2" class="tab-pane fade">
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
                              <img src="{{ asset('images/icon/sketch.png') }}" alt="document" height="30" width="30" class="mr-50">Data Folder.sketch
                            </div>
                          </li>
                          <li class="timeline-item timeline-icon-danger active pb-0">
                            <div class="timeline-time">7 hours ago</div>
                            <h6 class="timeline-title">Mathew Slick docs</h6>
                            <p class="timeline-text">on Project name</p>
                            <div class="timeline-content" style="font-size: 14px;">
                              <img src="{{ asset('images/icon/pdf.png') }}" alt="document" height="30" width="30" class="mr-50">Updated Docs.pdf
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
            <!-- Tab 3 code ends here -->
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
<script src="{{asset('vendors/js/file-uploaders/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
@section('page-scripts')
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  function myFunction() {
    window.print();
  }
</script>
@endsection
