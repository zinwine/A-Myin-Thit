@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/role')}}" title="Go to Role" class="tip-bottom">Role</a>
    <a href="" class="current">Edit Role</a>
@endsection

@section('pagetitle')
    <h1>Role Edit</h1>
@endsection

@section('user','active')

@section('content')
    <hr width="100%">
    <form method="post">
        {{csrf_field()}}
        <legend>Edit Role</legend>
        <div class="form-group">
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif
            <label for="username">Role Name:</label>
            <input type="text" class="form-control" value="{{$role->name}}" disabled>
        </div>
        <div class="form-group">
            <label for="email">New Roll Name:</label>
            <input type="text" class="form-control" name="name" value="">
        </div>
        <div class="form-group">
            <a href="{{url('admin/role')}}" class="btn btn-success">&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
            <button type="submit" class="btn btn-success">Edit Role</button>
        </div>
    </form>
@endsection