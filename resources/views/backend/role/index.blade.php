@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="" class="current">User Role</a>
@endsection

@section('pagetitle')
    <h1>User Role</h1>
@endsection

@section('user','active')

@section('content')
    <hr width="100%">
    <a class="button devart" href="{{action('backend\RoleController@create')}}">Add Role</a>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                    <h5>User Roles</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr class="gradeX">
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td>
                                    <div class="text-center">
                                        <a href="{{action('backend\RoleController@edit',$role->id)}}"
                                           class="button blue_alt">Edit</a>

                                        <a href="{{action('backend\RoleController@destroy',$role->id)}}"
                                           class="button dsgnmoo">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection