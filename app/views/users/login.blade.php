@extends('layouts.front.master')

@section('title', 'Login')

@section('body')

<div id="fh5co-main">

    <aside class="fh5co-page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fh5co-page-heading-lead">
                        Login to LaraSCI
                        <span class="fh5co-border"></span>
                    </h1>

                </div>
            </div>
        </div>
    </aside>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome Back!</h3>
            </div>
            <form action="{{ url('login') }}" method="post">

                @if(Session::has('message'))
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-success col-md-12" role="alert" style="display:inline-block">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        {{ Session::pull('message') }}
                    </div>
                </div>
                @endif
                @if(isset($error))
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-danger col-md-12" role="alert" style="display:inline-block">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                        {{$error}}
                    </div>
                </div>
                @endif

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class="sr-only">Email</label>
                        <input placeholder="Please enter your email" name="email" type="email" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="sr-only">Password</label>
                        <input placeholder="Password" name="password" type="password" class="form-control input-lg">
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary " value="Login">
                        <input type="reset" class="btn btn-outline  " value="Reset">
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{{ url('register') }}">New here? Click here to Register</a>
                </div>
            </form>	
        </div>
    </div>
</div>

@stop