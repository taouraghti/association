
@extends('layouts.layout')

@section('title','Edit member')

@section('content')

@include('layouts.navbar')

<style>
.is-invalid{
    background-image: none !important;
}
</style>

<h1 class="text-center">Edit Member</h1>
    <div class="container">
    <form action="{{route('admin.update.member')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="userid" value = "{{$user->id}}">
            <!--  Start Field Username  -->
            <div class="form-group row">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{$user->username}}" required = "required">
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
                    <input type="hidden" name="oldpassword" value="{{$user->password}}">
                    <input type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword" autocomplete="new-password" placeholder="Leave Blank If You Don't Want To Change Your Password">
                    @error('newpassword')
                        <div class=" invalid-feedback">
                            {{ $errors->first('newpassword') }}
                        </div>
                    @enderror
                </div>
            </div>
            <!--  End Field Password  -->

            <!--  Start Field Email  -->
            <div class="form-group row">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10 col-md-6">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required = "required">
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
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{$user->fullname}}" required = "required">
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
                        <input type="file" name='avatar' class="custom-file-input @error('avatar') is-invalid @enderror" id="inputGroupFile02" value="{{$user->avatar}}">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Leave Blank If You Don't Want To Change Your Avatar</label>
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
                    <input type="submit" class="btn btn-success" value="save">
                </div>
            </div>
            <!--  End Field Submit  -->
        </form>
    </div>
@endsection
