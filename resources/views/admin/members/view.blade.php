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
                            <h2>Users <small class="color-pink"> - View Member</small></h2>
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
                                    <td>{{ $data['member']->FIRSTNAME }} {{ $data['member']->MIDDLENAME }} {{ $data['member']->SURNAME }}</td>
                                </tr>
                                <tr>
                                    <th>Birth Date</th>
                                    <td>{{ $data['member']->BIRTH_DATE }}</td>
                                </tr>
                                <tr>
                                    <th>Birth Place</th>
                                    <td>{{ $data['member']->BIRTH_PLACE }}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $data['member']->GENDER }}</td>
                                </tr>
                                <tr>
                                    <th>Registration Number</th>
                                    <td>{{ $data['member']->REGISTRATION_NUMBER }}</td>
                                </tr>
                                <tr>
                                    <th>Maskani</th>
                                    <td>{{ $data['member']->MASKANI }}</td>
                                </tr>
                                <tr>
                                    <th>Region</th>
                                    <td>{{ $data['member']->REGION }}</td>
                                </tr>
                                <tr>
                                    <th>District</th>
                                    <td>{{ $data['member']->DISTRICT }}</td>
                                </tr>
                                <tr>
                                    <th>Ward</th>
                                    <td>{{ $data['member']->WARD }}</td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td>{{ $data['member']->STREET }}</td>
                                </tr>
                                <tr>
                                    <th>Drug Type</th>
                                    <td>{{ $data['member']->DRUG_TYPE }}</td>
                                </tr>
                                @if(isset($data['member']->DRUG_TYPE_OTHER))
                                <tr>
                                    <th>Other Drug Type</th>
                                    <td>{{ $data['member']->DRUG_TYPE_OTHER }}</td>
                                </tr>
                                @endif
                                @if(isset($data['member']->DRUG_USE))
                                <tr>
                                    <th>Drug Use</th>
                                    <td>{{ $data['member']->DRUG_USE }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th>Overdose</th>
                                    <td>{{ $data['member']->OVERDOSE }}</td>
                                </tr>
                                @if(isset($data['member']->OVERDOSE_DATE))
                                <tr>
                                    <th>Overdose Date</th>
                                    <td>{{ $data['member']->OVERDOSE_DATE }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th>HIV Test</th>
                                    <td>{{ $data['member']->HIV_TEST }}</td>
                                </tr>
                                @if(isset($data['member']->HIV_GROUP_HIV_TEST_DATE))
                                <tr>
                                    <th>HIV Test Date</th>
                                    <td>{{ $data['member']->HIV_GROUP_HIV_TEST_DATE }}</td>
                                </tr>
                                @endif
                                @if(isset($data['member']->HIV_GROUP_HIV_TEST_RESULTS))
                                <tr>
                                    <th>HIV Test Results</th>
                                    <td>{{ $data['member']->HIV_GROUP_HIV_TEST_RESULTS }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th>TB Test</th>
                                    <td>{{ $data['member']->TB_TEST }}</td>
                                </tr>
                                @if(isset($data['member']->TB_GROUP_TB_TEST_DATE))
                                <tr>
                                    <th>TB Test Date</th>
                                    <td>{{ $data['member']->TB_GROUP_TB_TEST_DATE }}</td>
                                </tr>
                                @endif
                                @if(isset($data['member']->TB_GROUP_TB_TEST_RESULTS))
                                <tr>
                                    <th>TB Test Results</th>
                                    <td>{{ $data['member']->TB_GROUP_TB_TEST_RESULTS }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th>HPV Test</th>
                                    <td>{{ $data['member']->HPV_TEST }}</td>
                                </tr>
                                @if(isset($data['member']->HPV_GROUP_HPV_TEST_DATE))
                                <tr>
                                    <th>HPV Test Date</th>
                                    <td>{{ $data['member']->HPV_GROUP_HPV_TEST_DATE }}</td>
                                </tr>
                                @endif
                                @if(isset($data['member']->HPV_GROUP_HPV_TEST_RESULTS))
                                <tr>
                                    <th>HPV Test Results</th>
                                    <td>{{ $data['member']->HPV_GROUP_HPV_TEST_RESULTS }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <th>Mental Health Test</th>
                                    <td>{{ $data['member']->MENTAL_HEALTH_TEST }}</td>
                                </tr>
                                @if(isset($data['member']->MENTAL_HEALTH_GROUP_MENTAL_HEALTH_TEST_DATE))
                                <tr>
                                    <th>Mental Health Test Date</th>
                                    <td>{{ $data['member']->MENTAL_HEALTH_GROUP_MENTAL_HEALTH_TEST_DATE }}</td>
                                </tr>
                                @endif
                                @if(isset($data['member']->MENTAL_HEALTH_GROUP_MENTAL_HEALTH_TEST_RESULTS))
                                <tr>
                                    <th>Mental Health Test Results</th>
                                    <td>{{ $data['member']->MENTAL_HEALTH_GROUP_MENTAL_HEALTH_TEST_RESULTS }}</td>
                                </tr>
                                @endif
                            </table>

                            <div class="pull-right">
                                <a href="{{ route('members') }}" type="button" class="btn btn-md btn-warning no-radius" style="margin-right:10px;">Back</a>
                            </div>
                        </div><!-- close div col-md-12 -->
                    </div><!-- close div .row -->
                </div><!-- close div .main -->
            </div><!-- close div col-md-10 -->
        </div><!-- close div .row -->
    </div><!-- close div .container-fluid -->
@stop