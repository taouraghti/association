
@extends('layouts.layout')

@section('title','Add member')

@section('content')

@include('layouts.navbar')

<style>
.is-invalid{
    background-image: none !important;
}
</style>
<h1 class="text-center">Add Member</h1>
<div class="container">
    <form action="{{ route('admin.insert.member') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!--  Start Field Username  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10 col-md-6">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username To Login Shop" required = "required">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $errors->first('username') }}
                    </div>
                @enderror
            </div>

        </div>
        <!--  End Field Username  -->

        <!--  Start Field Password  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10 col-md-6">
                <input type="password" class="password form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password Must be Complexe" required = "required">
                <i class="show-pass fa fa-eye fa-1x"></i>
                @error('password')
                    <div class=" invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @enderror
            </div>
        </div>
        <!--  End Field Password  -->

        <!--  Start Confirm Field Password  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-10 col-md-6">
                <input type="password" class="password form-control" name="password_confirmation" autocomplete="new-password" placeholder="Password Confirmation" required = "required">
                <i class="show-pass fa fa-eye fa-1x"></i>
            </div>
        </div>
        <!--  End Field Confirm Password  -->

        <!--  Start Field Email  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10 col-md-6">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Must Be Valid" required = "required">
                @error('email')
                    <div class=" invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @enderror
            </div>
        </div>
        <!--  End Field Email  -->

        <!--  Start Field Full name  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Full name</label>
            <div class="col-sm-10 col-md-6">
                <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" placeholder="Full Name Appear In Your Profil Page" required = "required">
                @error('fullname')
                    <div class=" invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                @enderror
            </div>
        </div>
        <!--  End Field Full name  -->

        <!--  Start Field Avatar  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">User Avatar</label>
            <div class="col-sm-10 col-md-6">
                <div class="custom-file">
                    <input type="file" name='avatar' class="custom-file-input @error('avatar') is-invalid @enderror" value="" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    @error('avatar')
                    <div class=" invalid-feedback">
                        {{ $errors->first('avatar') }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <!--  End Field Avatar  -->

        <!--  Start Field Submit  -->
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-success" value="Add member">
            </div>
        </div>
        <!--  End Field Submit  -->
    </form>
</div>

@endsection
