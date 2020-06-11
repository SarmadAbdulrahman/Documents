<!DOCTYPE html>
<!--
Design and Develop by Sarmed.Abdulrahman
IW this is project for ticket system
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
    <link rel="shortcut icon" href="{{asset("/assets/img/favicon.png")}}" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet"   />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link   href="{{asset("assets/css/font-awesome.min.css")}}"  rel="stylesheet"  />
    <link   href="{{asset("assets/css/weather-icons.min.css")}}" rel="stylesheet"   />
    <!--Fonts-->

    <!--Beyond styles-->
    <link   href="{{asset("assets/css/beyond.min.css")}}" rel="stylesheet"  type="text/css"   />
    <link   href="{{asset("assets/css/demo.min.css")}}"  rel="stylesheet" />
    <link   href="{{asset("assets/css/typicons.min.css")}}" rel="stylesheet" />
    <link   href="{{asset("assets/css/animate.min.css")}}" rel="stylesheet"/>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset("assets/js/skins.min.js")}}"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body>
@yield('Sidebar')
@yield('content')
<!-- Main Container -->
@yield('footer')
</body>
</html>
