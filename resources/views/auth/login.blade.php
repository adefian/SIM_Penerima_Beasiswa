@extends('layouts.auth-master')

@section('title')
    Login
@endsection

@section('content')
    <h4>Hello! let's get started</h4>
    <h6 class="font-weight-light">Sign in to continue.</h6>
    <form class="pt-3">
        <div class="form-group">
            <input type="email" class="form-control form-control-lg rounded" id="exampleInputEmail1" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg rounded" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mt-3">
            <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">SIGN IN</a>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Don't have an account? <a href="{{ route('register')}}" class="text-primary">Create</a>
        </div>
    </form>
@endsection
