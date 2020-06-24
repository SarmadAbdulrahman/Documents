@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">SystemAdministrator</a>
                </li>
                <li>
                    <a href="#">Users</a>
                </li>
                <li class="active">Create New User</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                    Users
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Create New User
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="default.htm">
                    <i class="glyphicon glyphicon-refresh"></i>
                </a>
                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="page-body">
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>Create Users</h5>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bg-blue">
                                    <span class="widget-caption">Registration Form</span>
                                </div>
                                <div class="widget-body">
                                    <div id="registration-form">
                                        <form role="form">
                                            <div class="form-title">
                                                User Information
                                            </div>
                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" id="userameInput" placeholder="Username">
                                                                    <i class="glyphicon glyphicon-user circular"></i>
                                                                </span>
                                            </div>
                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" id="emailInput" placeholder="Email Address">
                                                                    <i class="fa fa-envelope-o circular"></i>
                                                                </span>
                                            </div>
                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" id="passwordInput" placeholder="Password">
                                                                    <i class="fa fa-lock circular"></i>
                                                                </span>
                                            </div>
                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" id="confirmPasswordInput" placeholder="Confirm Password">
                                                                    <i class="fa fa-lock circular"></i>
                                                                </span>
                                            </div>
                                            <div class="form-title">
                                                Personal Information
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Name">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Family">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Phone">
                                                                            <i class="glyphicon glyphicon-earphone"></i>
                                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Mobile">
                                                                            <i class="glyphicon glyphicon-phone"></i>
                                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="wide" />
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="Birth Date">
                                                                            <i class="fa fa-calendar"></i>
                                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Birth Place">
                                                                            <i class="fa fa-globe"></i>
                                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="colored-blue">
                                                        <span class="text">Auto Sign In After Registration</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-blue">Register</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
@endsection
@extends('layouts.ThemeSource.footer')
