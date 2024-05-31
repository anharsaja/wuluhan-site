<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- start linking  -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend2/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">

    @yield('styles')
    <!-- icon -->
    <link rel="icon" href="img/log.png">
    <!-- end linking -->
    <title>{{ $title }}</title>
    <style>
        .form-check-label {
            text-transform: capitalize;
        }
    </style>

    @php
        $usr = Auth::guard('admin')->user();
    @endphp

</head>
@section('judul')
    Dashboard
@endsection



<body>
    <!-- start admin -->
    <section id="admin">
        <!-- start sidebar -->
        <div class="sidebar">
            <!-- start with head -->
            <div class="head">
                <div class="logo">
                    <img src="{{ asset('img/wuluhan.png') }}" alt="Logo Wuluhan">
                </div>
            </div>
            <!-- end with head -->
            <!-- start the list -->
            <div id="list">
                <ul class="nav flex-column">
                    @can('dashboard.view')
                        <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link active"><i
                                    class="fa fa-adjust"></i>Dashboard</a></li>
                    @endcan

                    {{-- Fitur Sotk --}}
                    @can('sotk.view')
                        <li class="nav-item"><a href="#sotk" class="nav-link collapsed" data-toggle="collapse"><i
                                    class="fa fa-fire"></i>SOTK<span class="sub-ico"><i
                                        class="fa fa-angle-down"></i></span></a></li>
                        <li class="sub collapse" id="sotk">
                            <a href="{{ route('admin.sotk.public') }}" class="nav-link" data-parent="#sotk">Artikel
                                Publik</a>
                            <a href="{{ route('admin.sotk.private') }}" class="nav-link" data-parent="#sotk">Artikel
                                Privat</a>
                            @can('sotk.view')
                                <a href="{{ route('admin.sotk.index') }}" class="nav-link" data-parent="#sotk">Kelola
                                    Dokumen</a>
                            @endcan
                        </li>
                    @endcan

                    @can('osjj.view')
                        <li class="nav-item"><a href="#osjj" class="nav-link collapsed" data-toggle="collapse"><i
                                    class="fa fa-fire"></i>osjj<span class="sub-ico"><i
                                        class="fa fa-angle-down"></i></span></a></li>
                        <li class="sub collapse" id="osjj">
                            <a href="{{ route('admin.osjj.public') }}" class="nav-link" data-parent="#osjj">Artikel Publik</a>
                            <a href="{{ route('admin.osjj.private') }}" class="nav-link" data-parent="#osjj">Artikel Privat</a>
                            @can('osjj.view')
                                <a href="{{ route('admin.osjj.index') }}" class="nav-link" data-parent="#osjj">Kelola
                                    Dokumen</a>
                            @endcan
                        </li>
                    @endcan

                    @can('pkk.view')
                        <li class="nav-item"><a href="#pkk" class="nav-link collapsed" data-toggle="collapse"><i
                                    class="fa fa-fire"></i>PKK<span class="sub-ico"><i
                                        class="fa fa-angle-down"></i></span></a></li>
                        <li class="sub collapse" id="pkk">
                            <a href="ui-alerts.html" class="nav-link" data-parent="#pkk">Artikel Publik</a>
                            <a href="ui-btns.html" class="nav-link" data-parent="#pkk">Artikel Privat</a>
                            <a href="{{ route('admin.pkk.index') }}" class="nav-link" data-parent="#pkk">Kelola
                                Dokumen</a>
                        </li>
                    @endcan

                    @can('ktb.view')
                        <li class="nav-item"><a href="#ktb" class="nav-link collapsed" data-toggle="collapse"><i
                                    class="fa fa-fire"></i>Kecamatan Tanggul Bencana<span class="sub-ico"><i
                                        class="fa fa-angle-down"></i></span></a></li>
                        <li class="sub collapse" id="ktb">
                            <a href="ui-alerts.html" class="nav-link" data-parent="#ktb">Artikel Publik</a>
                            <a href="ui-btns.html" class="nav-link" data-parent="#ktb">Artikel Privat</a>
                            <a href="{{ route('admin.ktb.index') }}" class="nav-link" data-parent="#ktb">Kelola
                                Dokumen</a>
                        </li>
                    @endcan

                    @can('wisata.view')
                        <li class="nav-item"><a href="#wisata" class="nav-link collapsed" data-toggle="collapse"><i
                                    class="fa fa-fire"></i>wisata<span class="sub-ico"><i
                                        class="fa fa-angle-down"></i></span></a></li>
                        <li class="sub collapse" id="wisata">
                            <a href="ui-alerts.html" class="nav-link" data-parent="#ktb">Artikel Publik</a>
                            <a href="ui-btns.html" class="nav-link" data-parent="#ktb">Artikel Privat</a>
                            <a href="{{ route('admin.wisata.index') }}" class="nav-link" data-parent="#ktb">Kelola
                                Dokumen</a>
                        </li>
                    @endcan

                    @can('budaya.view')
                        <li class="nav-item"><a href="#budaya" class="nav-link collapsed" data-toggle="collapse"><i
                                    class="fa fa-fire"></i>Budaya<span class="sub-ico"><i
                                        class="fa fa-angle-down"></i></span></a></li>
                        <li class="sub collapse" id="budaya">
                            <a href="ui-alerts.html" class="nav-link" data-parent="#ktb">Artikel Publik</a>
                            <a href="ui-btns.html" class="nav-link" data-parent="#ktb">Artikel Privat</a>
                            <a href="{{ route('admin.budaya.index') }}" class="nav-link" data-parent="#ktb">Kelola
                                Dokumen</a>
                        </li>
                    @endcan

                    @can('role.view')
                        <li class="nav-item"><a href="{{ route('admin.roles.index') }}" class="nav-link"><i
                                    class="fa fa-adjust"></i>Manage Roles</a></li>
                    @endcan

                    @can('admin.view')
                        <li class="nav-item"><a href="{{ route('admin.admins.index') }}" class="nav-link"><i
                                    class="fa fa-adjust"></i>Manage Admins</a></li>
                    @endcan




                </ul>
            </div>
            <!-- end the list -->
        </div>
        <!-- end sidebar -->
        <!-- start content -->
        <div class="content">
            <!-- start content head -->
            <div class="head">
                <!-- head top -->
                <div class="top">
                    <div class="left">
                        <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
                        <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
                        <a href="{{ route('home.landing') }}" class="btn btn-info hidden-xs-down"><i
                                class="fa fa-home"></i>Back Home</a>
                    </div>
                    <div class="right">
                        <button class="btn btn-info hidden-xs-down"><i class="fa fa-bell"></i></button>
                        <button class="btn btn-info hidden-xs-down"><i class="fa fa-envelope"></i></button>
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">{{ Auth::guard('admin')->user()->name }}</button>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">Profiles</a>
                                {{-- <a class="dropdown-item" href="#">Setting</a> --}}
                                <a class="dropdown-item" href="{{ route('admin.logout.submit') }}">log out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end head top -->
                <!-- start head bottom -->
                <div class="bottom">
                    <div class="left">
                        <h1>
                            {{ $title }}
                        </h1>
                    </div>
                    <div class="right" style="display: flex; gap:5px;">
                        @yield('cucumber')
                    </div>
                </div>
                <!-- end head bottom -->
            </div>
            <!-- end content head -->
            <!-- start with the real content -->
            <div id="real">
                @yield('content')
            </div>
            <!-- end the real content -->
        </div>
        <!-- end content -->
    </section>
    <!-- end admin -->
    <!-- start screpting -->



    <script src="{{ asset('backend2/js/tether.min.js') }}"></script>
    <script src="{{ asset('backend2/js/highcharts.js') }}"></script>
    <script src="{{ asset('backend2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend2/js/chart.js') }}"></script>
    <script src="{{ asset('backend2/js/app.js') }}"></script>
    <!-- end screpting -->

    @yield('scripts')

</body>

</html>
