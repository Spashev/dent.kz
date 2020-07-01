<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | UnionP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

  @include('admin.wrapper.head')

  @yield('head.link')

</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.wrapper.nav')
        <!-- End Navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.wrapper.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="app">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->
        
        @include('admin.wrapper.footer')
    
    </div>
    <!-- ./wrapper -->
    
    <!-- Footer -->
    @include('admin.wrapper.script')
    <!-- End Footer -->
    @yield('script')
</body>
</html>
