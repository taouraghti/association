@extends('layouts.layout')

@section('title','Dashboard')

@section('content')

@include('layouts.navbar')

<div class="container home-stats text-center">
    <h1>Dashboard</h1>
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-md-6">
        <a href="{{route('admin.members')}}">
                <div class="stat st-members">
                    <i class="fas fa-users"></i>
                    <div class="info">
                            Total Members
                            <span>{{$all}}</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="{{route('admin.pending.members')}}">
                <div class="stat st-pending">
                    <i class="fas fa-user-plus"></i>
                    <div class="info">
                        Pending Members
                        <span>{{$pending}}</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#">
                <div class="stat st-post">
                    <i class="fas fa-clone"></i>
                    <div class="info">
                        Total Posts
                        <span>0</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<div class="container latest">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-users"></i> Latest 6 Registred Users
                    <span class="toggle-info float-right">
                        <i class="fas fa-minus"></i>
                    </span>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled latest-users">
                        @foreach($users as $user)
                        <li>{{$user->username}}
                                <a href="{{route('admin.edit.member', ['id' => $user->id])}}">
                                    <span class="btn btn-outline-primary float-right">
                                        <i class="fa fa-edit"></i>Edit
                                    </span>
                            </a>
                            @if($user->activate == 0)
                                <a href="{{route('admin.activate.member', ['id' => $user->id])}}" class="btn btn-outline-success float-right"><i class="fas fa-check"></i> Activate</a>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <?php $latestItems = 4;?>
                <div class="card-header">
                    <i class="fas fa-tag"></i> Latest <?php echo $latestItems;?> Registred Items
                    <span class="toggle-info float-right">
                        <i class="fas fa-minus"></i>
                    </span>
                </div>
                <div class="card-body">
                <ul class="list-unstyled latest-users">
                            <li>post
                                    <a href="items.php?do=edit&itemid='.$it['ItemID'].'">
                                        <span class="btn btn-outline-primary float-right">
                                            <i class="fa fa-edit"></i> Edit
                                        </span>
                                    </a>
                            </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
