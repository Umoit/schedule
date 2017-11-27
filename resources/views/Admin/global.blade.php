<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>首页</title>
    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')
    @yield('before-css')

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/demo.css')}}" rel="stylesheet" />
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    @yield('after-css')

    </head>

    <body>
        <div class="wrapper">
            @include('admin.sidebar')

            <!-- content -->
            <div class="main-panel">
                @include('admin.header')
               
                <div class="main-content">
                    @yield('content')
                </div>
                

                @include('admin.footer')
             </div>
             <!-- / content -->


            

        </div>



    @yield('before-js')
       <!--   Core JS Files   -->
    <script src="{{asset('/admin/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/admin/js/bootstrap.min.js')}}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{asset('/admin/js/bootstrap-checkbox-radio-switch.js')}}"></script>
    
    <script src="{{asset('/admin/js/sweetalert2.js')}}"></script>

    <!--  Charts Plugin -->
    <script src="{{asset('/admin/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('/admin/js/bootstrap-notify.js')}}"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{asset('/admin/js/light-bootstrap-dashboard.js')}}"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{asset('/admin/js/demo.js')}}"></script>


    

    <script type="text/javascript">
        $(document).ready(function(){
            //demo.initChartist();
            @include('admin.notify')
        });
    </script>

    
    @yield('after-js')
    
    </body>
    
</html>