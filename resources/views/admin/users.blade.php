@extends('admin/a-nav')
@section('admin/a-content')
    @foreach($users as $user)
        <div>
            <div>{{ $user->id }}</div>
            <div>{{ $user->name }}</div>
            <div>{{ $user->email }}</div>
        </div>
    @endforeach
@stop
