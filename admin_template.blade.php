<!DOCTYPE html>


<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SMS</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
     <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />



   
    
  
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app" data-toggle="toggle">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-success navbar-success">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('shome')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('contact')}}"  class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- SEARCH FORM -->
        <form method="POST"  class="form-inline ml-3" action="{{route('usersearch')}}">
            @csrf
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search" name="show">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">


                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header"></span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i>
                            <span class="float-right text-muted text-sm"></span>
                        </a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        {{Auth::user()->fullname}}<span class="caret"></span>
                    </a>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SMS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>

                    <div class="info">
                        <div class="pull-left info">
                            <strong><a href="membership_profile.php" class="text-success"></a></strong>
                            <!-- Status -->
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                        <a href="#" class="d-block"{{Auth::user()->name}}</a>

                    </div>

                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview ">
                            <a href="{{route('shome')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Materials
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                <a href="{{route('material.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register Materials</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('material.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Materials List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('shome')}}" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Borrower
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a  href="{{route('borrower.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register Borrower</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('borrower.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Borrower List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                        <a href="{{route('shome')}}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Borrowed Materials
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                           <a href="{{route('borrowedmat.index')}}" class="nav-link">
                            
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Borrow Materials</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                               <a href="{{route('borrowedmat.index')}}" class="nav-link">
                                     
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Borrowed Materials List</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Profile
                                    <span class="right badge badge-danger">info</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        @yield('content')


                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2019 <a href="">SMS </a>.</strong> All rights
        reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    {{--Edit and Delte using Modal For borrower--}}
   <script>
        $('#edit').on('show.bs.modal', function (event) {
            console.log("modal opened")
           
            var button = $(event.relatedTarget)
            var bfullname = button.data('bfullname')
            var badress = button.data('badress')
            var bdepartment = button.data('bdepartment')
            var bphonenumber = button.data('bphonenumber')
            var boccupation = button.data('boccupation')
            var date = button.data('date')
            var id = button.data('id')

            var modal = $(this)

            modal.find('.modal-body #bfullname').val(bfullname)
            modal.find('.modal-body #badress').val(badress)
            modal.find('.modal-body #bdepartment').val(bdepartment)
            modal.find('.modal-body #bphonenumber').val(bphonenumber)
            modal.find('.modal-body #boccupation').val(boccupation)
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
