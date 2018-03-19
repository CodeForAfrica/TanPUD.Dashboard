@extends('layouts.master')

@section('title')
    Administrator - Dashboard | Moyo - Code for Tanzania
@stop

@section('content')
    <div class="container-fluid content-main">
        <div class="row">
            <div class="col-md-2 menus">
                <div class="logo">
                    <h1>TANPUD</h1>
                </div>

                @include('admin.includes.navs')
            </div><!-- close div .col-md-2 -->

            <div class="col-md-10 contents">
                <div class="header">
                    <div class="row">
                        <div class="col-md-10">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="col-md-2 user">
                            @include('admin.includes.user')
                        </div>
                    </div><!-- close div .row -->
                </div><!-- close div .header -->

                <div class="main">
                    <div class="row">
                        <div class="col-md-3" style="overflow:auto;">
                            <div class="panel panel-default">
                                <div class="panel-heading">Total Members</div>
                                <div class="panel-body" style="min-height:200px;">
                                    <span><span class="color-pink"><strong>{{ $data['total_members'] }}</strong></span> Members</span>
                                </div>
                            </div>
                        </div><!-- close div .col-md-3 -->

                        <div class="col-md-3" style="overflow:auto;">
                            <div class="panel panel-default">
                                <div class="panel-heading">Total Disputes</div>
                                <div class="panel-body" style="min-height:200px;">
                                    <span><span class="color-pink"><strong>{{ $data['total_members'] }}</strong></span> Disputes</span>
                                </div>
                            </div>
                        </div><!-- close div .col-md-3 -->

                        <div class="col-md-3" style="overflow:auto;">
                            <div class="panel panel-default">
                                <div class="panel-heading">Total Reports</div>
                                <div class="panel-body" style="min-height:200px;">
                                    <span><span class="color-pink"><strong>0</strong></span> Reports</span>
                                </div>
                            </div>
                        </div><!-- close div .col-md-3 -->

                        <div class="col-md-3" style="overflow:auto;">
                            <div class="panel panel-default">
                                <div class="panel-heading">Total Administrators</div>
                                <div class="panel-body" style="min-height:200px;">
                                    <span><span class="color-pink"><strong>1</strong></span> Users</span>
                                </div>
                            </div>
                        </div><!-- close div .col-md-3 -->
                    </div><!-- close div .row -->
                    
                </div><!-- close div .main -->
            </div><!-- close div col-md-10 -->
        </div><!-- close div .row -->
    </div><!-- close div .container-fluid -->
@stop