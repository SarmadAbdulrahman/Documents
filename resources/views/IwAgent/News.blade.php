@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">Iw Agent</a>
                </li>
                <li>
                    <a href="#"> News & Documents</a>
                </li>
                <li class="active">Department Documents</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>
                Department
                    <small>
                        <i class="fa fa-angle-right"></i>
                        Documents
                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>
                <a class="refresh" id="refresh-toggler" href="/iwAgent">
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
            <h5 class="row-title"><i class="typcn typcn-th-small"></i>News & Document</h5>

                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header  with-footer">
                                    <span class="widget-caption">Documents name</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>


                                <div class="widget-body" dir="rtl" lang="ar">
                 
                                    <div class="flip-scroll">

                                        <form class="form-inline"  role="form" method="post" action="{{url('IwAgent/StoreReply')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                    <div class="form-group ">
                                        <label class="sr-only" for="exampleInputEmail2">Comment</label>
                                        <textarea name="reply" id="editor" cols="150" rows="2"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-default">Reply</button>
                                </form>
                                  
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


          $('#editor').jqxEditor({
                height: "400px",
                width: '700px',
                rtl:true
            });

        
        


        });
    </script>
@endsection
