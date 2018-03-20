@extends('layouts.master')

@section('title')
    Administrator - Disputes | Moyo - Code for Tanzania
@stop

@section('styles')
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
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
                            <h2>Disputes <small class="color-pink"> - View All</small></h2>
                        </div>
                        <div class="col-md-2 user">
                            @include('admin.includes.user')
                        </div>
                    </div><!-- close div .row -->
                </div><!-- close div .header -->

                <div class="main">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-login pull-right no-radius" data-toggle="modal" data-target="#newUserModal" style="display:none;">Add New Dispute</button>
                        </div>
                    </div><!-- close div .row -->
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            @if(Session::has('message'))
                                <div class="alert alert-{{Session::get('class')}} no-radius" role="alert" style="text-align:left;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{Session::get('message')}}
                                </div>
                            @endif
                            
                            <table id="myTable" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jina CRT</th>
                                    <th>Jina Maskani</th>
                                    <th>Tarehe ya Mgogoro</th>
                                    <th>Aina ya Mgogoro</th>
                                    <th>Maelezo</th>
                                    <th style="width:70px;">Options</th>
                                </tr>
                                </thead>
                                <tbody style="text-align:left;">
                                    <?php $n= 1; ?>
                                    @if(count($data['disputes']) > 0)
                                        @foreach($data['disputes'] as $dispute)
                                        <tr>
                                            <td>{{ $n++ }}</td>
                                            <td>{{ $dispute->JINA_CRT }}</td>
                                            <td>{{ $dispute->JINA_LA_MASKANI }}</td>
                                            <td>{{ $dispute->TAREHE_YA_MGOGORO }}</td>
                                            <td>{{ $dispute->AINA_YA_MGOGORO }}</td>
                                            <td>{{ $dispute->MAELEZO_YA_MGOGORO }}</td>
                                            <td>
                                                <a href="#" class="btn btn-xs btn-danger no-radius" style="margin-right:10px; display:none;" disabled>Delete</a>
                                                <a href="#" type="button" class="btn btn-xs btn-warning no-radius" style="margin-right:10px;display:none;">Edit</a>
                                                <a href="{{ route('disputes.view') }}?uri={{ $dispute->_URI }}" type="button" class="btn btn-xs btn-success no-radius pull-right">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div><!-- close div col-md-12 -->
                    </div><!-- close div .row -->
                </div><!-- close div .main -->
            </div><!-- close div col-md-10 -->
        </div><!-- close div .row -->

        <!-- Modal -->
        <div id="newUserModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">
                <!-- Modal content-->
                <div class="modal-content no-radius">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">New User</h4>
                    </div>
                    <div class="modal-body" style="overflow:auto;padding:20px;font-family: 'Roboto', sans-serif">
                        <form method="post" action="{{ route('users.create') }}">
                            {{ csrf_field() }}
                            <label>Fullname</label>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control no-radius" value="" placeholder="Fullname" />
                            </div>

                            <label>Email</label>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control no-radius" value="" placeholder="Email" />
                            </div>

                            <label>Password</label>
                            <div class="form-group">
                                <input type="text" name="password" class="form-control no-radius" value="" placeholder="Password" />
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-md btn-login no-radius pull-right" value="Add User" />
                            </div>
                        </form>
                    </div>
                </div><!-- close div .modal-content -->
            </div>
        </div><!-- close div .modal -->

    </div><!-- close div .container-fluid -->
@stop

@section('scripts')
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
@stop