<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Peña Madridista Bangladesh</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "icon" href="{{ asset('favicon.ico') }}" type = "image/x-icon">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">--> 
        <?php
        // echo asset('');
        // echo app_path(); 
        ?>
        <style>
            footer {
    Background-color: #3f3f3f;
	color: #d5d5d5;
	padding-top: 2rem;
            }
        </style>
        @yield('style')
    </head>
    <body class="hold-transition layout-fixed">
        <div class="wrapper">

            @include('member.topbar')
            
           

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->

            @include('member.footer')



        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('dist/js/demo.js') }}"></script>

        <script type="text/javascript">
            // var base_url = 
            function base_url(){
                return "{{ url('/') }}"
            }

            if( !$('.nav-pills a.active').closest('li.has-treeview').hasClass('menu-open') ){
                $('.nav-pills a.active').closest('li.has-treeview').addClass('menu-open');
                $('.nav-pills a.active').closest('li.has-treeview').children('ul').css("display",'block')
            }
        </script>
        @yield('script')
        
    </body>
</html>