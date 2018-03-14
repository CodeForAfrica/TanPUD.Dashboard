@extends('layouts.master')

@section('title')
    Administrator - Login | TanPUD
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 login-box">
                <div class="brand">
                    <h1>TanPUD</h1>
                </div>

                <div class="login-form">
                    @if(Session::has('message'))
                        <div class="alert alert-{{Session::get('class')}}" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <form method="post" action="{{ route('auth') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control input-no-background" name="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-no-background" name="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-lg btn-block btn-login-purple no-radius" value="LOGIN" style="display:none;"/>
                            <a href="{{ route('dashboard') }}" type="button" class="btn btn-lg btn-block btn-login-purple no-radius">LOGIN</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- close div .container -->
@stop