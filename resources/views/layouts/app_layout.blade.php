
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ordering System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/_all-skins.min.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>O</b>Sys</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Ordering</b> System</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- Notifications: style can be found in dropdown.less -->

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{$user->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">

                                <p>
                                    {{$user->name}}
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{$user->name}}</p>
                </div>
            </div>
            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>



                <li><a href="{{url('/home')}}"><i class="fa fa-book"></i> <span>Place an Order</span></a></li>
                <li><a href="{{url('/order_details')}}"><i class="fa fa-book"></i> <span>Order Details</span></a></li>


            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">

    </footer>

    <!-- Control Sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
    $('table').on('mouseup keyup', 'input[type=number]', () => cal_table());
    function cal_table() {

        var sub_tot1 = 0;
        var sub_tot2 = 0;
        var sub_tot3 = 0;
        //
        if($("#package1").is(":checked")){
            sub_tot1 = $("#qty1").val() * $("#cost1").val();
            //alert(sub_tot1);
            $("#sub_tot1").val(sub_tot1);
            document.getElementById("sub_tot1").innerHTML = "LKR " + sub_tot1.toString();
        }
        if($("#package2").is(":checked")){
            sub_tot2 = $("#qty2").val() * $("#cost2").val();
            $("#sub_tot2").val(sub_tot2);
            document.getElementById("sub_tot2").innerHTML = "LKR " + sub_tot2.toString();
        }
        if($("#package3").is(":checked")){
            sub_tot3 = $("#qty3").val() * $("#cost3").val();
            $("#sub_tot3").val(sub_tot3);
            document.getElementById("sub_tot3").innerHTML = "LKR " + sub_tot3.toString();
        }



        const total = sub_tot1 + sub_tot2 + sub_tot3;
        $("#total").val(total);
        $('.total td:eq(1)').text(formatAsCurrency(total));
    }


    function formatAsCurrency(amount) {
        return `LKR ${Number(amount).toFixed(2)}`;
    }
</script>
</body>
</html>
