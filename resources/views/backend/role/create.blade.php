@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/role')}}" title="Go to Role" class="tip-bottom"> Role</a>
    <a href="" class="current">Add User Role</a>
@endsection

@section('pagetitle')
    <h1>Add User Role</h1>
@endsection

@section('user','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span8 offset2">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-align-justify"></i>
                    </span>
                    <h5>Roles for users</h5>
                </div>
                <div class="widget-content nopadding">
                    <form method="post" class="form-horizontal">
                        {{csrf_field()}}
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                        <div class="control-group">
                            <label class="control-label">Role Name:</label>
                            <div class="controls">
                                <input type="text" class="span8" name="name" placeholder="Enter Role Name"/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="pull-right">
                                <a href="{{url('admin/role')}}" class="btn btn-success">
                                    &nbsp;Back&nbsp;
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection