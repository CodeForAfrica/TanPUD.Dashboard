@extends('layouts.master')

@section('title')
    Administrator - Disputes | TanPUD
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
                            <h2>Dispute <small class="color-pink"> - View Dispute</small></h2>
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
                                    <th style="width:40%;">Jina CRT</th>
                                    <td>{{ $data['dispute']->JINA_CRT }}</td>
                                </tr>
                                <tr>
                                    <th>Jina la Maskani / Eneo</th>
                                    <td>{{ $data['dispute']->JINA_LA_MASKANI }}</td>
                                </tr>
                                <tr>
                                    <th>Tarehe ya Mgogoro</th>
                                    <td>{{ $data['dispute']->TAREHE_YA_MGOGORO }}</td>
                                </tr>
                                <tr>
                                    <th>Mgogoro umeripotiwa Tarehe</th>
                                    <td>{{ $data['dispute']->TAREHE_YA_KURIPOTIWA }}</td>
                                </tr>
                                <tr>
                                    <th>Idadi ya Wahanga wa Kiume</th>
                                    <td>{{ $data['dispute']->IDADI_YA_WAHANGA_KIUME }}</td>
                                </tr>
                                <tr>
                                    <th>Idadi ya Wahanga wa Kike</th>
                                    <td>{{ $data['dispute']->IDADI_YA_WAHANGA_KIKE }}</td>
                                </tr>
                                <tr>
                                    <th>Umri Mdogo</th>
                                    <td>{{ $data['dispute']->UMRI_MDOGO }}</td>
                                </tr>
                                <tr>
                                    <th>Aina ya Mgogoro</th>
                                    <td>{{ $data['dispute']->AINA_YA_MGOGOGRO }}</td>
                                </tr>
                                <tr>
                                    <th>Maelezo ya Mgogoro</th>
                                    <td>{{ $data['dispute']->MAELEZO_YA_MGOGORO }}</td>
                                </tr>
                                <tr>
                                    <th>Kuitikiwa kwa Mgogoro</th>
                                    <td>{{ $data['dispute']->KUITIKIWA_KWA_MGOGORO }}</td>
                                </tr>
                                <tr>
                                    <th>Jinsi Ulivyotatuliwa</th>
                                    <td>{{ $data['dispute']->JINSI_ULIVYOTATULIWA }}</td>
                                </tr>
                                <tr>
                                    <th>Aliyesaidia Kutatua</th>
                                    <td>{{ $data['dispute']->ALIYESAIDIA_KUTATUA }}</td>
                                </tr>
                                <tr>
                                    <th>Hatua za Ufuatiliaji</th>
                                    <td>{{ $data['dispute']->HATUA_ZA_UFUATILIAJI }}</td>
                                </tr>
                                <tr>
                                    <th>Jina la Mtatuzi wa Kwanza</th>
                                    <td>{{ $data['dispute']->JINA_LA_MTATUZI_WA_KWANZA }}</td>
                                </tr>
                            </table>

                            <div class="pull-right">
                                <a href="{{ route('disputes') }}" type="button" class="btn btn-md btn-warning no-radius" style="margin-right:10px;">Back</a>
                            </div>
                        </div><!-- close div col-md-12 -->
                    </div><!-- close div .row -->
                </div><!-- close div .main -->
            </div><!-- close div col-md-10 -->
        </div><!-- close div .row -->
    </div><!-- close div .container-fluid -->
@stop