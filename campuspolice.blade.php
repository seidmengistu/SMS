<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <title>
        @yield('title')
    </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    SMS
                </a>
                <a style="font-family:palatino ;color:indigo href=" http://www.creative-tim.com"
                    class="simple-text logo-normal">
                    Laptpo Control System
                </a>
            </div>

            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{route('homee')}}" class="nav-link">
                            <i class="now-ui-icons tech_laptop"></i>
                            <p style="font-family:serif ;color:ForestGreen;font-size:x-large">HOME</p>
                        </a>
                    </li>

                    <div class="dropdown" style="background-color:orangered">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="font-family:serif ;color:white;font-size:x-large">
                            Student
                        </button>
                        <div class="dropdown-menu" style="background-color:green">
                            <li>
                                <a href="{{route('student.create')}}" class="nav-link">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>Add Student</p>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('student.index')}}" class="nav-link">
                                    <i class="now-ui-icons education_hat"></i>
                                    <p>
                                        Student List

                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('student.show','test')}}" class="nav-link">
                                    <i class="now-ui-icons users_circle-08"></i>
                                    <p>Check Student</p>
                                </a>
                            </li>
                        </div>
                    </div>
                    
                    <div class="dropdown" style="background-color:orangered">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="font-family:serif ;color:white;font-size:x-large">
                            Teacher
                        </button>
                        <div class="dropdown-menu" style="background-color:green">
                            <li>
                                <a href="{{route('teacher.create')}}" class="nav-link">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>Add Teacher</p>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('teacher.index')}}" class="nav-link">
                                    <i class="now-ui-icons education_hat"></i>
                                    <p>
                                        Teacher List

                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('teacher.show','test')}}" class="nav-link">
                                    <i class="now-ui-icons users_circle-08"></i>
                                    <p>Check Teacher</p>
                                </a>
                            </li>
                        </div>
                    </div>


                  <div class="dropdown" style="background-color:orangered">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="font-family:serif ;color:white;font-size:x-large">
                            Other
                        </button>
                        <div class="dropdown-menu" style="background-color:green">
                            <li>
                                <a href="{{route('other.create')}}" class="nav-link">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>Add Other</p>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('other.index')}}" class="nav-link">
                                    <i class="now-ui-icons education_hat"></i>
                                    <p>
                                        Other List

                                    </p>
                                </a>
                            </li>
                             <li class="nav-item">
                                    <a href="{{route('other.show','test')}}" class="nav-link">
                                        <i class="now-ui-icons users_circle-08"></i>
                                        <p>Check Other</p>
                                    </a>
                                </li>
                        </div>
                    </div>

                    <li>
                    </li>
                </ul>
                
            </div>
        </div>
        <div class="main-panel" id="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>

                    {{--Seraching student for DELETING IN Student LIST--}}
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form method="POST" action="{{route('search')}}">
                            {{--<form>--}}
                            @csrf
                            <div class="input-group no-border">
                                <input type="search" value="" class="form-control" placeholder="Search..." name="show">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('account')}}">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->


            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com">
                                    SMS
                                </a>
                            </li>
                            <li>
                                <a href="https://facebook/seidmengistu.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://telegram/seid_kushe.com">
                                    telegram
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy;
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date()
                                .getFullYear()))

                        </script>, Designed by
                        <a href="https://www.facebook/seidmengistu.com" target="_blank"></a>. Coded by
                        <a href="https://www.telegram/seid_kushe.com" target="_blank"></a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>

    <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="/assets/demo/demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    @yield('scripts')
    {{--Edit and Delte using Modal For Student--}}
    <script>
        $('#edit').on('show.bs.modal', function (event) {
            console.log("modal opened")
           
            var button = $(event.relatedTarget)
            var fullname = button.data('fullname')
            var idnumber = button.data('idnumber')
            var serialnumber = button.data('serialnumber')
            var mark = button.data('mark')
            var program = button.data('program')
            var year = button.data('year')
            var department = button.data('department')
            var date = button.data('date')
            var id = button.data('id')

            var modal = $(this)

            modal.find('.modal-body #fullname').val(fullname)
            modal.find('.modal-body #idnumber').val(idnumber)
            modal.find('.modal-body #serialnumber').val(serialnumber)
            modal.find('.modal-body #mark').val(mark)
            modal.find('.modal-body #program').val(program)
            modal.find('.modal-body #year').val(year)
            modal.find('.modal-body #department').val(department)
            modal.find('.modal-body #date').val(date)
            modal.find('.modal-body #id').val(id)



        })

    </script>
    <script>
        $('#delete').on('show.bs.modal', function (event) {
            console.log("modal opened")
            var button = $(event.relatedTarget)

            var id = button.data('id')

            var modal = $(this)


            modal.find('.modal-body #id').val(id)



        })

    </script>
</body>

</html>
