<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard/bootstrap.min.css') }}" rel=" stylesheet" />
    <link href="{{ asset('css/dashboard/paper-dashboard.css') }}" rel=" stylesheet" />
    <link href="{{ asset('css/dashboard/master.css') }}" rel=" stylesheet" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text logo-normal">
                    <img src="{{ asset('img/logo.jpg') }}" alt="">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{ url('/lists') }}">
                            <span class="material-icons-outlined">format_list_bulleted</span>
                            Lists
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/lessontop') }}">
                            <span class="material-icons-outlined">laptop_windows</span>
                            Lesson
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/coursetop') }}">
                            <span class="material-icons-outlined">fact_check</span>
                            Course
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/teachertop') }}">
                            <span class="material-icons-outlined">face_retouching_natural</span>
                            Teacher
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/navitop') }}">
                            <span class="material-icons-outlined">support_agent</span>
                            Navigator
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/studenttop') }}">
                            <span class="material-icons-outlined">child_care</span>
                            Student
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/recommendtop') }}">
                            <span class="material-icons-outlined">volunteer_activism</span>
                            Recommend
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/noticetop') }}">
                            <span class="material-icons-outlined">announcement</span>
                            Notice
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/helptop') }}">
                            <span class="material-icons">help_outline</span>
                            Help
                        </a>
                    </li>

                    @if (Auth::check() && auth()->user()->role == 'administrator')
                    <li>
                        <a href="{{ url('/meeting01_navi') }}">
                            <span class="material-icons-outlined">play_lesson</span>
                            Lesson Room
                        </a>
                    </li>
                    @elseif(Auth::check() && auth()->user()->role == 'navigator')
                    <li>
                        <a href="{{ url('/meeting01_navi') }}">
                            <span class="material-icons-outlined-outlined">play_lesson</span>
                            Lesson Room
                        </a>
                    </li>
                    @endif
                    <li class="ml-4 mt-3">
                        <button class="btn btn-primary">
                            <a class="text-white" href="{{ url('/') }}" alt="home">TOP PAGE</a>
                        </button>
                    </li>
                </ul>
            </div>
            <div>

            </div>

        </div>
        <div class="main-panel" style="height: 100vh;">

            <!-- Navbar -->

            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                        <div>
                            <p class="">
                                {{ Auth::user()->name }} さん
                            </p>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="material-icons">travel_explore</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <p>
                                        <span class="material-icons-outlined">emoji_objects</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- End Navbar -->

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="description"></h3>
                    </div>
                    {{-- <a href="{{ url('/bookingtop') }}">Booking Top</a>
                    <a href="{{ url('/liketop') }}">Like Top</a> --}}
                </div>
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
            <div class="container-fluid">
                <div class="row">
                    <div class="ml-auto">

                    </div>
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © 2020 Copyright : IZUMI DOJO All rights reserved.
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>


    <!--   Core JS Files   -->
    <script src="{{ asset('js/dashboard/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/plugins/perfect-scrollbar.jquery.min.jss') }}"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Chart JS -->
    <script src="{{ asset('js/dashboard/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/dashboard/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/dashboard/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>

</body>

</html>
