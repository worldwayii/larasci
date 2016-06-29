@extends('layouts.front')

@section('title', 'Reset Password')

@section('content')

<style>
    header#header{
        display: none;
    }
    footer{
        text-align: center;
    }
</style>
<div class="container" style="margin-top: 120px">    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Password Update</h3>
                    <h5 style="margin-top:0">Please enter a new password to log in to your account</h5>
                </div>
                {{ Form::open(array('class' => 'form-horizontal', 'route' => array('password.update', $token))) }}
                @if(isset($message))
                <div class="alert alert-dismissible alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span><span class="sr-only">Close</span></button>
                    {{$message}}
                </div>
                @endif

                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Email</label>
                        <div class="col-md-9">
                            <input autocomplete="off" type="email" name="email" class="required form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">New Password</label>
                        <div class="col-md-9">
                            <input class="form-control has-dark-background" name="password" id="password" placeholder="Password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-9">
                            <input class="form-control has-dark-background" name="password_confirmation" placeholder="Confirm Password" type="password">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="col-md-12 form-group">
                        <div style="float:left;line-height:3em">
                            <a href="{{ url('login') }}" title="Login">Login</a>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-primary" style="width: 100%;" type="submit">Update Password</button>
                        </div>
                    </div>
                </div>

                {{ Form::hidden('token', $token) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@stop