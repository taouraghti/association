
@extends('layouts.layout')

@section('title','message')

@section('content')

@include('layouts.navbar')

<div class="container">
    <div class="alert alert-success" style="margin-top:30px">{{$msg}}</div>
</div>

@endsection
