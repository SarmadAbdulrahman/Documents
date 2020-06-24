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
                    <a href="#">Ticket</a>
                </li>
                <li class="active">create new  Ticket</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>


                    Tickets
                    <small>
                        <i class="fa fa-angle-right"></i>
                        create a Ticket
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
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>Create Ticket</h5>
            <div class="row">


                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bg-blue">
                                    <span class="widget-caption">{{ trans('messages.registration') }} </span>
                                </div>
                                <div class="widget-body">
                                    <div id="registration-form">
                                        <form role="form" method="post" id="cc" action="{{url('SystemAdministrator/StoreUser')}}">
                                            @csrf
                                            <div class="form-title">
                                                User Information
                                            </div>



                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control" name="userameInput" id="userameInput" placeholder="Username">
                                                    <i class="glyphicon glyphicon-user circular"></i>
                                                </span>
                                            </div>




                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control"  name="emailInput" id="emailInput" placeholder="Email Address">
                                                    <i class="fa fa-envelope-o circular"></i>
                                                </span>
                                            </div>





                                            <div class="form-group">
                                                <span class="input-icon icon-right">
                                                    <input type="text" class="form-control"  name="passwordInput" id="passwordInput" placeholder="Password">
                                                    <i class="fa fa-lock circular"></i>
                                                </span>
                                            </div>



                                            <div class="form-group">
                                                <select class="form-control Roles" name="Role">

                                                </select>
                                            </div>


                                            <hr class="wide"/>
                                            <button  type="submit"  class="btn btn-blue">{{ trans('messages.Save') }}</button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.ThemeSource.footer')
@section('js')
    <script>
        $(document).ready(function () {
            // this is for get a way  department
            $('.Roles').select2({
                placeholder: 'Select Roles'
            });

            //  $("#myForm").submit();

            var frm = $('#cc');


            frm.submit(function (e) {

                e.preventDefault();

                $.ajax({
                    type: frm.attr('method'),
                    url: frm.attr('action'),
                    data: frm.serialize(),
                    success: function (data) {
                        console.log('Submission was successful.');
                        console.log(data);
                    },
                    error: function (data) {
                        console.log('An error occurred.');
                        console.log(data);
                    },
                });



            });
        });
    </script>
@endsection
