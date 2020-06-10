<!DOCTYPE html>
<!--
Design and Develop by Sarmed.Abdulrahman
IW
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{asset("assets/img/favicon.png")}}" type="image/x-icon">


    <!--Basic Styles-->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{asset("assets/css/font-awesome.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/weather-icons.min.css")}}" rel="stylesheet" />

    <!--Fonts-->
    <link href="{{asset("assets/fonts.googleapis.com/css@family=open+sans_3a300italic,400italic,600italic,700italic,400,600,700,300.css")}}" rel="stylesheet" type="text/css">
    <link href='{{asset("assets/fonts.googleapis.com/css@family=roboto_3a400,300.css")}}' rel='stylesheet' type='text/css'>
    <!--Beyond styles-->
    <link id="beyond-link" href="{{url("assets/css/beyond.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/demo.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/typicons.min.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/animate.min.css")}}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset("assets/js/skins.min.js")}}"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
<!-- Loading Container
<div class="loading-container">
    <div class="loader"></div>
</div>
-->
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="{{asset("assets/img/logo.png")}}" alt="" />
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">


                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="{{asset("assets/img/avatars/adam-jansen.jpg")}}">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>Sarmad</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>Sarmad Abdulrahman</a></li>
                                <!--Avatar Area-->

                                <li class="dropdown-footer">
                                    <a href="login.html">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul>

                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
@yield('Sidebar')
@yield('content')
</div>
<!-- Main Container -->
@yield('footer')
