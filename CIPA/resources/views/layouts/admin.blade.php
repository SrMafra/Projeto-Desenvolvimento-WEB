<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CIPA @yield('title')</title>
    <!-- ========== Css Files ========== -->
    <link href="{{ asset('css/root.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Start Page Loading -->
    <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START TOP -->
    <div id="top" class="clearfix">

        <!-- Start App Logo -->
        <div class="applogo">
            <a href="#" class="logo">CI[PA]</a>
        </div>
        <!-- End App Logo -->

        <!-- Start Sidebar Show Hide Button -->
        <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
        <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
        <!-- End Sidebar Show Hide Button -->

        <!-- Start Searchbox -->
        <form class="searchform">
            <input type="text" class="searchbox" id="searchbox" placeholder="Search">
            <span class="searchbutton"><i class="fa fa-search"></i></span>
        </form>
        <!-- End Searchbox -->

        <!-- Start Sidepanel Show-Hide Button -->
        <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
        <!-- End Sidepanel Show-Hide Button -->

        <!-- Start Top Right -->
        <ul class="top-right">

            <li class="dropdown link">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="img/profileimg.png"
                        alt="img"><b>Jonathan Doe</b><span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
                    <li role="presentation" class="dropdown-header">Profile</li>
                    <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">4</span></a>
                    </li>
                    <li><a href="#"><i class="fa falist fa-file-o"></i>Files</a></li>
                    <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li>
                    <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
                </ul>
            </li>

        </ul>
        <!-- End Top Right -->

    </div>
    <!-- END TOP -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START SIDEBAR -->
    @extends('layouts.menu')

    <!-- END SIDEBAR -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTENT -->
    <div class="content">

        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">FUNÇÕES</h1>

            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="index.html" class="btn btn-light">Dashboard</a>
                    <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                    <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTAINER -->
        <div class="container-default">


            @yield('content')




        </div>
        <!-- END CONTAINER -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->


        <!-- Start Footer -->
        <div class="row footer">
            <div class="col-md-6 text-left">
                Copyright © 2020 <a href="#" target="_blank">Antonio Mafra</a> All
                rights reserved.
            </div>
        </div>
        <!-- End Footer -->


    </div>
    <!-- End Content -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->



    <!-- ================================================
jQuery Library
================================================ -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>


</body>

</html>
