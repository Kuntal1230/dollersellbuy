{{-- @Author : Kuntal Gupta
@E-Mail : kuntal1230@gmail.com
@Cell : +88 01744968888--}}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.png"/>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="@yield('author')">
  <title>{{ config('app.name') }} | @yield('title')</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('dashboard') }}">Doller SellBuy</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Website Setting">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#websitecollapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-cogs"></i>
            <span class="nav-link-text">Website Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="websitecollapseComponents">
            <li>
              <a href="">General Setting</a>
            </li>
            <li>
              <a href="">Slider Setting</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Currency Setting">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#currencycollapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-credit-card"></i>
            <span class="nav-link-text">Currency Setting</span>
          </a>
          <ul class="sidenav-second-level collapse" id="currencycollapseComponents">
            <li>
              <a href="">View Currency</a>
            </li>
            <li>
              <a href="">Add Currency</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Withdraw Method">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#withdrowcollapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-money"></i>
            <span class="nav-link-text">Withdraw Method</span>
          </a>
          <ul class="sidenav-second-level collapse" id="withdrowcollapseComponents">
            <li>
              <a href="">View Method</a>
            </li>
            <li>
              <a href="">Add Method</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Member">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#membercollapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">Manage Member</span>
          </a>
          <ul class="sidenav-second-level collapse" id="membercollapseComponents">
            <li>
              <a href="">All member</a>
            </li>
            <li>
              <a href="">Add member</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sell Currency">
          <a class="nav-link" href="">
            <i class="fa fa-credit-card"></i>
            <span class="nav-link-text">Sell Currency</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Buy Currency">
          <a class="nav-link" href="">
            <i class="fa fa-money"></i>
            <span class="nav-link-text">Buy Currency</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exchange Currency">
          <a class="nav-link" href="">
            <i class="fa fa-exchange"></i>
            <span class="nav-link-text">Exchange Currency</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="View Website">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">View Website</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      @yield('breadcrumb')
      @yield('content')
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('admin-logout-form').submit();">
            Logout
            </a>
              <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin.min.js') }}"></script>
  </div>
</body>

</html>
