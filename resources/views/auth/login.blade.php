@extends('layouts.userlayout')

@section('title','Login')

@section('content')

<div class="container">

    <!--  Start Login Form --->

    <div id="login" class="selected">
    <form action="{{route("user.logged")}}" method="post">
            @csrf
            <h1 class="text-center">Login</h1>
            @if(Session::has('err'))
                <div class="alert alert-danger" style="margin-bottom: 15px">
                    {{ Session::get('err') }}
                </div>
            @endif
            <div class="form-group">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                @error('username')
                    <div class="invalid-feedback" style="margin-bottom: 15px">
                        {{ $errors->first('username') }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                @error('password')
                    <div class="invalid-feedback" style="margin-bottom: 15px">
                        {{ $errors->first('password') }}
                    </div>
                @enderror

            </div>
            <a href="#" style="color:#08526d">Forgot Your Password ?</a>
            <input style="margin-top:10px;" class="btn btn-primary form-control" type="submit" value="login">
        </form>
        <div class="log-reg">
            You do not have an account ? <a id="signup-btn" href="{{route("register")}}" style="color: #ec1c23">Signup</a>
        </div>
    </div>

    <!--  End Login Form --->
</div>


@endsection
