<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet" />
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
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
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
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            style="font-family:serif ;color:white;font-size:x-large">
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
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            style="font-family:serif ;color:white;font-size:x-large">
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
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            style="font-family:serif ;color:white;font-size:x-large">
                            Others
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
                        <center>

                        </center>
                    </div>

                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav">

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
                <div class="row">

                    <form method="get" class="col-md-4" action="{{route("student.show",'test')}}">
                        
                         @csrf
                          <label style="font-family:georgia;color:Red  ">Check Student</label><br>
                        <div class="form-group">
                             
                            <input class="col-md-8" type="text" class="form-control" name="show" placeholder="Enter User Code">
                            <button  type="submit" class="btn btn-primary">Search</button><br>
                        </div>
                       

                    @foreach ($student as $student)
                    
                       <ol class="list-group">
                           <label style="font-family:georgia;color:green">Image</label>
                            <li class="list-group-item"> <img src="{{asset('uploads/ima/'.$student->image)}}" width="250px;" height="250px;" alt="image" ></li>
                          <br>
                            <label style="font-family:georgia;color:green">Full Name</label>
                            <li style="font-family:georgia;color:blue" class="list-group-item">{{$student->fullname}}</li>
                            <label style="font-family:georgia;color:green">Id Number</label>
                            <li  style="font-family:georgia;color:blue"  class="list-group-item">{{$student->idnumber}}</li>
                            <label style="font-family:georgia;color:green">Serial Number</label>
                            <li style="font-family:georgia;color:blue"  class="list-group-item">{{$student->serialnumber}}</li>
                            <label style="font-family:georgia;color:green">Mark</label>
                            <li style="font-family:georgia;color:blue"  class="list-group-item">{{$student->mark}}</li>
                            <label style="font-family:georgia;color:green">Date</label>
                            <li style="font-family:georgia;color:blue"  class="list-group-item">{{$student->date}}</li>
                            
                           
                        </ul>
                    @endforeach
                     
                    </form>
                </div>
                
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
    @yield('scripts')
</body>

</html>
