
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

            {{-- <a href="#" class="brand-logo">
                <img class="logo-abbr" src="{{asset ('projek') }}/images/logo.png" alt="">
                <img class="logo-compact" src="{{asset ('projek') }}/images/logo-text.png" alt="">
                <span class="brand-title">{{ $user->name }}</span>
            </a> --}}

            

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
                                    <form action="{{ url('logout') }}" method="POST">
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
            <div class="quixnav-scroll">
                @if (auth()->user()->level == 1)
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        
                        <li><a class="has-arrow" href="{{ url('/') }}" aria-expanded="false">
                            <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        </li>
                
                        <li class="nav-label">Manage Data</li>
                        <li><a class="has-arrow" href="{{ url('siswa') }}" aria-expanded="false">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="nav-text">Students</span></a>
                        </li>
                
                        <li><a class="has-arrow" href="{{ url('officer') }}" aria-expanded="false">
                            <i class="fa fa-user-plus" aria-hidden="true"></i><span class="nav-text">Officers</span></a>
                        </li>
                
                        <li><a class="has-arrow" href="{{ url('grade') }}" aria-expanded="false">
                            <i class="fa fa-building-o" aria-hidden="true"></i><span class="nav-text">Classes</span></a>
                        </li>
                
                        <li><a class="has-arrow" href="{{ url('spp') }}" aria-expanded="false">
                            <i class="fa fa-money" aria-hidden="true"></i><span class="nav-text">SPP</span></a>
                        </li>

                        <li><a class="has-arrow" href="data_karyawan" aria-expanded="false">
                            <i class="fa fa-address-book" aria-hidden="true">
                                </i><span class="nav-text">Simulasi Data Karyawan</span></a>
                        </li>

                        <li><a class="has-arrow" href="cucian" aria-expanded="false">
                            <i class="fa fa-address-book" aria-hidden="true">
                                </i><span class="nav-text">Simulasi Cucian</span></a>
                        </li>
                        
                        <li class="nav-label">Transactions</li>
                        <li><a class="has-arrow" href="{{ url('pembayaran') }}" aria-expanded="false">
                            <i class="fa fa-credit-card" aria-hidden="true"></i><span class="nav-text">Payments</span></a>
                        </li>

                        {{-- <li><a class="has-arrow" href="{{ url('transaksi') }}" aria-expanded="false">
                            <i class="fa fa-credit-card" aria-hidden="true"></i><span class="nav-text">Payments</span></a>
                        </li> --}}
                
                        <li class="nav-label">Histories</li>
                        <li><a class="has-arrow" href="{{ url('history') }}" aria-expanded="false">
                            <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-text">Payment Histories</span></a>
                        </li>
                
                        <li class="nav-label">Report</li>
                        <li><a class="has-arrow" href="{{ url('laporan') }}" aria-expanded="false">
                            <i class="fa fa-print" aria-hidden="true"></i><span class="nav-text">Reports</span></a>
                        </li>
                    </ul>
                @elseif (auth()->user()->level == 2)
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        
                        <li><a class="has-arrow" href="{{ url('/') }}" aria-expanded="false">
                            <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        </li>
                        
                        <li class="nav-label">Transactions</li>
                        <li><a class="has-arrow" href="{{ url('pembayaran') }}" aria-expanded="false">
                            <i class="fa fa-credit-card" aria-hidden="true"></i><span class="nav-text">Payments</span></a>
                        </li>
                
                        <li class="nav-label">Histories</li>
                        <li><a class="has-arrow" href="{{ url('history') }}" aria-expanded="false">
                            <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-text">Payment Histories</span></a>
                        </li>
                
                    </ul> 
                @elseif (auth()->user()->level == 3)
                    <ul class="metismenu" id="menu">
                        <li class="nav-label first">Main Menu</li>
                        
                        <li><a class="has-arrow" href="{{ url('/') }}" aria-expanded="false">
                            <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        </li>
                        
                        <li class="nav-label">Histories</li>
                        <li><a class="has-arrow" href="{{ url('history') }}" aria-expanded="false">
                            <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-text">Payment Histories</span></a>
                        </li>
                
                    </ul> 
                @endif

            </div>
        </div>
        
        @yield('main')
        
    </div>

@include('templates.footer')