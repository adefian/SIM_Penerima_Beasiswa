@extends('layouts.auth-master')

@section('title')
    Register
@endsection

@section('content')
    <h4>New here?</h4>
    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
    <form class="pt-3">
        <div class="form-group">
            <input type="text" class="form-control form-control-lg rounded" id="exampleInputNamaLengkap1" placeholder="Nama Lengkap">
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-lg rounded" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg rounded" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg rounded" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg rounded" id="exampleInputPassword2" placeholder="Konfirmasi Password">
        </div>
        <div class="mt-3">
            <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">SIGN UP</a>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Already have an account? <a href="{{ route('login')}}" class="text-primary">Login</a>
        </div>
    </form>
@endsection
