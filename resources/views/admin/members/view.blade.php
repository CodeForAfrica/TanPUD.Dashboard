@extends('layouts.master')

@section('title')
    Administrator - Members | TanPUD
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
                            <h2>Users <small class="color-pink"> - View User</small></h2>
                        </div>
                        <div class="col-md-2 user">
                            @include('admin.includes.user')
                        </div>
                    </div><!-- close div .row -->
                </div><!-- close div .header -->

                <div class="main">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <tr>
                                    <th style="width:40%;">Fullname</th>
                                    <td>{{ $data['member']->firstname }} {{ $data['member']->middlename }} {{ $data['member']->surname }}</td>
                                </tr>
                                <tr>
                                    <th>Birth Date</th>
                                    <td>{{ $data['member']->birth_date }}</td>
                                </tr>
                                <tr>
                                    <th>Birth Place</th>
                                    <td>{{ $data['member']->birth_place }}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $data['member']->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Registration Number</th>
                                    <td>{{ $data['member']->registration_number }}</td>
                                </tr>
                                <tr>
                                    <th>Maskani</th>
                                    <td>{{ $data['member']->maskani }}</td>
                                </tr>
                                <tr>
                                    <th>Region</th>
                                    <td>{{ $data['member']->region }}</td>
                                </tr>
                                <tr>
                                    <th>District</th>
                                    <td>{{ $data['member']->district }}</td>
                                </tr>
                                <tr>
                                    <th>Ward</th>
                                    <td>{{ $data['member']->ward }}</td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td>{{ $data['member']->street }}</td>
                                </tr>
                                <tr>
                                    <th>Drug Type</th>
                                    <td>{{ $data['member']->drug_type }}</td>
                                </tr>
                                <tr>
                                    <th>Other Drug Type</th>
                                    <td>{{ $data['member']->drug_type_other }}</td>
                                </tr>
                                <tr>
                                    <th>Drug Use</th>
                                    <td>{{ $data['member']->drug_use }}</td>
                                </tr>
                                <tr>
                                    <th>Overdose</th>
                                    <td>{{ $data['member']->overdose }}</td>
                                </tr>
                                <tr>
                                    <th>Overdose Date</th>
                                    <td>{{ $data['member']->overdose_date }}</td>
                                </tr>
                                <tr>
                                    <th>HIV Test</th>
                                    <td>{{ $data['member']->hiv_test }}</td>
                                </tr>
                                <tr>
                                    <th>HIV Test Date</th>
                                    <td>{{ $data['member']->hiv_test_date }}</td>
                                </tr>
                                <tr>
                                    <th>HIV Test Results</th>
                                    <td>{{ $data['member']->hiv_test_results }}</td>
                                </tr>
                                <tr>
                                    <th>TB Test</th>
                                    <td>{{ $data['member']->tb_test }}</td>
                                </tr>
                                <tr>
                                    <th>TB Test Date</th>
                                    <td>{{ $data['member']->tb_test_date }}</td>
                                </tr>
                                <tr>
                                    <th>TB Test Results</th>
                                    <td>{{ $data['member']->tb_test_results }}</td>
                                </tr>
                                <tr>
                                    <th>HPV Test</th>
                                    <td>{{ $data['member']->hpv_test }}</td>
                                </tr>
                                <tr>
                                    <th>HPV Test Date</th>
                                    <td>{{ $data['member']->hpv_test_date }}</td>
                                </tr>
                                <tr>
                                    <th>HPV Test Results</th>
                                    <td>{{ $data['member']->hpv_test_results }}</td>
                                </tr>
                                <tr>
                                    <th>Mental Health Test</th>
                                    <td>{{ $data['member']->mental_health_test }}</td>
                                </tr>
                                <tr>
                                    <th>Mental Health Test Date</th>
                                    <td>{{ $data['member']->mental_health_test_date }}</td>
                                </tr>
                                <tr>
                                    <th>Mental Health Test Results</th>
                                    <td>{{ $data['member']->mental_health_test_results }}</td>
                                </tr>
                                <tr>
                                    <th>Services</th>
                                    <td>{{ $data['member']->services }}</td>
                                </tr>
                                <tr>
                                    <th>Date Registered</th>
                                    <td>{{ date('M j Y g:i A', strtotime($data['member']->created_at)) }}</td>
                                </tr>
                            </table>

                            <div class="pull-right">
                                <a href="#" class="btn btn-md btn-danger no-radius" style="margin-right:10px;" disabled>Delete</a>
                                <a href="{{ route('members.edit',$data['member']->id) }}" type="button" class="btn btn-md btn-warning no-radius" style="margin-right:10px;">Edit</a>
                            </div>
                        </div><!-- close div col-md-12 -->
                    </div><!-- close div .row -->
                </div><!-- close div .main -->
            </div><!-- close div col-md-10 -->
        </div><!-- close div .row -->
    </div><!-- close div .container-fluid -->
@stop