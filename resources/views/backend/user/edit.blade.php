@extends('backend.layouts.formlayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/user')}}" title="Go to User" class="tip-bottom">User</a>
    <a href="" class="current">Edit</a>
@endsection

@section('pagetitle')
    <h1>Edit User</h1>
@endsection

@section('user','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <form method="post">
            {{csrf_field()}}
            <div class="form-group">
                {{--@foreach($errors->all() as $error)--}}
                {{--<p class="alert alert-danger">{{$error}}</p>--}}
                {{--@endforeach--}}
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="sel1">Select Role:</label>
                <select class="form-control" name="role[]" multiple>
                    @foreach($roles as $role)
                        <option value="{{$role->name}}"
                                @if(in_array($role->name,$selectedRoles))
                                selected="selected"
                                @endif
                        >{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <a href="{{url('admin/user')}}" class="btn btn-success">&nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
                <button type="submit" class="btn btn-success">Edit User</button>
            </div>
        </form>
    </div>
@endsection