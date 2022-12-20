<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('contact/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('contact/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('contact/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset ('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('contact/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('contact/images/favicon.png')}}" />





  

 @livewireStyles
</head>
<body>
<div class="container-scroller">
    @include('layouts.inc.contact.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.inc.contact.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>


    </div>
</div>

<script src="{{asset('contact/vendors/base/vendor.bundle.base.js')}}"></script>
<script src="{{asset('contact/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('contact/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('contact/js/off-canvas.js')}}"></script>
<script src="{{asset('contact/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('contact/js/template.js')}}"></script>
<script src="{{asset('contact/js/dashboard.js')}}"></script>
<script src="{{asset('contact/js/data-table.js')}}"></script>
<script src="{{asset('contact/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('contact/js/dataTables.bootstrap4.js')}}"></script>
@livewireScripts
</body>
</html>
