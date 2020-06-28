@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Client Agent</a>
                </li>
                <li>
                    <a href="#">Create Ticket</a>
                </li>
                <li class="active">Create new Ticket</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Client Agent
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Users
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="/ClientAgent">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->

            <div class="page-body">
                <ul class="timeline">
                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>




                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>

                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>


                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>


                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>


                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>


                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>


                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>

                    <li class="timeline-node">
                        <a class="btn btn-palegreen">NOW</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge blue">
                            <i class="fa fa-tag"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        New Items Arrived
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Purchased new stationary items for head office</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:10
                                </span><span class="timeline-date">Today</span>
                        </div>
                        <div class="timeline-badge darkorange">
                            <i class="fa fa-map-marker font-120"></i>
                        </div>
                        <div class="timeline-panel bordered-right-3 bordered-orange">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Visit Appointment
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Today</span>
                                        -
                                        <span class="timeline-time">3:10</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Outdoor visit at California State Route 85 with John Boltana &amp; Harry Piterson regarding to setup a new show room.</p>
                                <p>
                                    <i class="orange fa fa-exclamation"></i> New task added for <span><a href="#" class="info">James Dean</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-yellow">YESTERDAY</a>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    8:19
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="timeline-panel bordered-top-3 bordered-azure">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        Bank Report
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">8:19</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sem neque sed ipsum.
                                </p>
                                Tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    6:08
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge sky">
                            <img src="assets/img/avatars/sergey-azovskiy.jpg" class="badge-picture" />
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title">
                                        <a href="default.htm">Sergey Azovskiy</a> has commented on your <a href="default.htm">status</a>
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">6:08</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>
                                    <i class="orange fa fa-quote-left"></i> Happy Birthday Lydia.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    7:00
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge danger">
                            <i class="fa fa-exclamation font-120"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                    <span class="timeline-title danger">
                                        Deadline Added
                                    </span>
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">7:00</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <p>Dyvia Phillips added new milestone <span><a class="danger" href="#">UI</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-datetime">
                                <span class="timeline-time">
                                    3:09
                                </span><span class="timeline-date">Yesterday</span>
                        </div>
                        <div class="timeline-badge">
                            <i class="fa fa-picture-o darkpink"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-header bordered-bottom bordered-blue">
                                <p class="timeline-datetime">
                                    <small class="text-muted">
                                        <i class="glyphicon glyphicon-time">
                                        </i>
                                        <span class="timeline-date">Yesterday</span>
                                        -
                                        <span class="timeline-time">3:09</span>
                                    </small>
                                </p>
                            </div>
                            <div class="timeline-body">
                                <a href="#">John Travolta</a> shared an image on <a href="#">Dribble</a>
                                <div class="tl-wide text-center" style="padding: 5px; margin-top:10px; margin-bottom: 10px;">
                                    <img src="assets/img/temp1.png" alt="" style="max-height: 158px;max-width: 100%;">
                                </div>
                                <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-node">
                        <a class="btn btn-info">11 DECEMBER</a>
                    </li>




                </ul>
            </div>
            <!-- /Page Body -->
        </div>
    </div>



@endsection
@extends('layouts.ThemeSource.footer')
