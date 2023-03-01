
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Aplikasi Pembayaran SPP</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('projek') }}/images/favicon.png">
    <link href="{{asset ('projek') }}/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{asset ('projek') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="{{asset ('projek') }}/css/style.css" rel="stylesheet">
    <link href="{{asset ('projek') }}/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="{{asset ('projek') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{asset ('projek') }}/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="{{asset ('projek') }}/vendor/pickadate/themes/default.date.css">
    @stack('css')

</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
   
    <div id="main-wrapper">

        <div class="nav-header">
            <a href="#" class="brand-logo">
                <img class="logo-abbr" src="{{asset ('projek') }}/images/logo.png" alt="">
                <img class="logo-compact" src="{{asset ('projek') }}/images/logo-text.png" alt="">
                <span class="brand-title">Pembayaran SPP</span>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="quixnav">
            @if(auth()->user()->role == 'admin')
                @include('templates.sidebar-admin')
            @elseif(auth()->user()->role == 'petugas')
                @include('templates.sidebar-petugas')
            @elseif(auth()->user()->role == 'siswa')
                @include('templates.sidebar-siswa')
                
            @endif
        </div>
        
        @yield('main')
        
    </div>

@include('templates.footer')