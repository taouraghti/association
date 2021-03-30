@extends('layouts.layout')

@section('title','Members')

@section('content')

@include('layouts.navbar')


<h1 class="text-center">Manage Members</h1>
<div class="container">
    @if(!count($users))
        <div class="alert alert-info" style="">No member to display</div>
    @else
        <div class="table-responsive">
            <table class="main-table text-center table table-bordered">
                <tr style="font-weight: bold; color: #fff; background-color: rgba(33,37,41,.9);">
                    <td>#ID</td>
                    <td>Avatar</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Full Name</td>
                    <td>Registred Date</td>
                    <td>Control</td>
                </tr>
                    @foreach($users as $user)
                        <tr>
                        <td> {{$user->id}} </td>
                        <td> <img src="{{ asset("images/avatars/$user->avatar") }}" style="width:50px;height:50px;"></td>
                        <td> {{$user->username}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->fullname}}</td>
                        <td> {{$user->created_at}}</td>
                        <td>
                            <a href="{{route('admin.edit.member', ['id' => $user->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="{{route('admin.delete.member', ['id' => $user->id])}}" class="btn btn-danger confirm"><i class="fas fa-times"></i> Delete</a>
                            @if($user->activate == 0)
                                <a href="{{route('admin.activate.member', ['id' => $user->id])}}" class="btn btn-success activate-btn"><i class="fas fa-check"></i> Activate</a>
                            @endif
                        </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    @endif
    <a href="{{route('admin.add.member')}}" class="btn btn-primary" style="margin-bottom:50px"><i class="fa fa-plus"></i> New Member</a>
</div>
@endsection
