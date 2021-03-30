@extends('layouts.userlayout')

@section('title','Registre')

@section('content')

<div class="container">
    <!--  Start Signup Form --->
    <div id="signup" class="selected">
        <form action="{{route("user.register")}}" method="post">
            @csrf
            <h1 class="text-center">Registre</h1>
            <div class="form-group">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                @error('email')
                    <div class="invalid-feedback" style="margin-bottom: 15px">
                        {{ $errors->first('email') }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="fullname" class="form-control @error('fullname') is-invalid @enderror" placeholder="Full-name">
                @error('fullname')
                    <div class="invalid-feedback" style="margin-bottom: 15px">
                        {{ $errors->first('fullname') }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <select class="form-control" name="type">
                    <option value="0">Etudiant</option>
                    <option value="1">Professeur</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" placeholder="Username">
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
            <div class="form-group">
                <input type="password" class="password form-control" name="password_confirmation" autocomplete="new-password" placeholder="Password Confirmation">
            </div>
            <input style="margin-top:10px;" class="btn btn-primary form-control" type="submit" value="Sign up">
        </form>
        <div class="log-reg">
            Do you have an account ? <a id="login-btn" href="{{route("login")}}" style="color: #ec1c23">Login</a>
        </div>
    </div>
    <!--  End Signup Form --->
</div>


@endsection
