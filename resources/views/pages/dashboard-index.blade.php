@extends('layouts.contentLayoutMaster')
@section('title','Dashboard Index')
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/dragula.min.css')}}">
@endsection

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/widgets.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-analytics.css')}}">
@endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white round">
    
    <li class="breadcrumb-item"><a href="#"><i class="bx bxs-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item"><a href="#">Data</a></li>
    <li class="breadcrumb-item active" aria-current="page">Link</li>
  </ol>
</nav>
     
<div class="row">
    <!-- Website Analytics Starts-->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">Website Analytics</h4>
          
          <div class="dropdown">
              <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer dropdown" id="dropdownMenuButton" data-toggle="dropdown" ></i>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Item 1</a>
                <a class="dropdown-item" href="#">Item 2</a>
                <a class="dropdown-item" href="#">Item 3</a>
              </div>
            </div>

        </div>
        <div class="card-body pb-1">
          <div class="d-flex justify-content-around align-items-center flex-wrap">
            <div class="user-analytics mr-2">
              <i class="bx bx-user mr-25 align-middle"></i>
              <span class="align-middle text-muted">Users</span>
              <div class="d-flex">
                <div id="radial-success-chart"></div>
                <h3 class="mt-1 ml-50">61K</h3>
              </div>
            </div>
            <div class="sessions-analytics mr-2">
              <i class="bx bx-trending-up align-middle mr-25"></i>
              <span class="align-middle text-muted">Sessions</span>
              <div class="d-flex">
                <div id="radial-warning-chart"></div>
                <h3 class="mt-1 ml-50">92K</h3>
              </div>
            </div>
            <div class="bounce-rate-analytics">
              <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
              <span class="align-middle text-muted">Bounce Rate</span>
              <div class="d-flex">
                <div id="radial-danger-chart"></div>
                <h3 class="mt-1 ml-50">72.6%</h3>
              </div>
            </div>
          </div>
          <div id="analytics-bar-chart" class="my-75"></div>
        </div>
      </div>

    </div>
    <div class="col-xl-3 col-md-6 col-sm-12 dashboard-referral-impression">
      <div class="row">
        <!-- Referral Chart Starts-->
        <div class="col-xl-12 col-12">
          <div class="card">
            <div class="card-body text-center pb-0">
              <h2>$32,690</h2>
              <span class="text-muted">Referral 40%</span>
              <div id="success-line-chart"></div>
            </div>
          </div>
        </div>
        <!-- Impression Radial Chart Starts-->
        <div class="col-xl-12 col-12">
          <div class="card">
            <div class="card-body donut-chart-wrapper">
              <div id="donut-chart" class="d-flex justify-content-center"></div>
              <ul class="list-inline d-flex justify-content-around mb-0">
                <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>Social</li>
                <li> <span class="bullet bullet-xs bullet-info mr-50"></span>Email</li>
                <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Search</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dashboard Analytics end -->
<footer class="footer footer-static footer-light">
  <p class="clearfix mb-0">
    <span class="float-left d-inline-block">Clifo Channel – All Rights Reserved</span>
  </p>
</footer>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/dragula.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/dashboard-analytics.js')}}"></script>
@endsection
