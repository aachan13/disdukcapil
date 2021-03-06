<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.head')
    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="{{url('/asset/layout/master.css')}}">
</head>

<body>

    <div class="sidebar-container">
        <div class="sidebar-logo">
            SIM DISDUKCAPIL
        </div>
        <ul class="sidebar-navigation">
            <li class="header">Navigation</li>
            <li>
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i> Manajemen User
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                </a>
            </li>
            <li class="header">Another Menu</li>
            <li>
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i> Friends
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-cog" aria-hidden="true"></i> Settings
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Information
                </a>
            </li>
        </ul>
    </div>

    <div class="content-container">
        <div class="row" style="margin-bottom: 0">
            <div class="col s12">
                <div class="card">
                    <div class="card-content right-align">
                        {{Auth::user()->name}} <a class="red-text" style="margin-left: 5px" href="">Logout</a> 
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>


    @include('layout.script')

    @yield('javascript')

</body>

</html>