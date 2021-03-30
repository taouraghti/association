
@extends('layouts.layout')

@section('title','login')

@section('content')

<form class="login" action="{{ route('admin.login') }}" method="POST">
    @csrf
    <h4 class="text-center">Admin Login</h4>
    @if(Session::has('err'))
        <div class="alert alert-danger" style="margin-bottom: 15px">
            {{ Session::get('err') }}
        </div>
    @endif
    <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="username" autocomplete="off">
    @error('username')
        <div class="invalid-feedback" style="margin-bottom: 15px">
            {{ $errors->first('username') }}
        </div>
    @enderror
    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="password" autocomplete="new-password">
    @error('password')
        <div class="invalid-feedback" style="margin-bottom: 15px">
            {{ $errors->first('password') }}
        </div>
    @enderror
    <input class="btn btn-primary btn-block" type="submit" value="Login">
</form>

@endsection
