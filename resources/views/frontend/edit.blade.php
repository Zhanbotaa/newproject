@extends('layouts.frontend')
@section('content')
    <style>
        body {

            background-size: 90% 100% ;
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-image: url('/test/img/300.png');
            background-color: black;
            background-attachment: fixed;

        }
    </style>

    <div class="container mt-2">


        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif

        <div class="alert alert-dark" role="alert" style="text-align: center">
            Edit Users
        </div>
        <form action="{{route('update', $users->id)}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputText">Name</label>
                <input class="form-control" type="text" value="{{$users->name}}" placeholder="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" value="{{$users->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>

            <button type="submit" class="btn btn-primary">Update data</button>
        </form>
    </div>
@endsection
