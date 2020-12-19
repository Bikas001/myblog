@extends('layouts.admin')



@section('content')
    <h1>Admin</h1>

@endsection

@section('admin-name')
    <span>{{Auth::user()->name}}</span>
@endsection
