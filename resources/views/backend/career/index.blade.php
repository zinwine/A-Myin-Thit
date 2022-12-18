@extends('backend.layouts.tablelayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="" class="current">Career</a>
@endsection

@section('pagetitle')
    <h1>Career Post</h1>
@endsection

@section('career','active')

@section('content')
    <hr width="100%">

    <div class="row-fluid">
        <div class="table-responsive">
            <div class="span12">
                <a href="{{url('admin/career/create')}}" class="button devart">Add New Career Post</a>
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Career Posts</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered data-table table-responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Salary</th>
                                <th>Remark</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($careers as $career)
                                <tr class="gradeX">
                                    <td>{{$career->id}}</td>
                                    <td>{{$career->title}}</td>
                                    <td>{{$career->location}}</td>
                                    <td>{{$career->salary}}</td>
                                    <td>{{substr($career->remark,0,20)}}....</td>
                                    <td>{{substr($career->desp,0,20)}}....</td>
                                    <td>
                                        <div class="text-center">
                                            <a href="{{action('backend\CareerController@show',$career->id)}}"
                                               class="button devart">View</a>

                                            <a href="{{action('backend\CareerController@edit',$career->id)}}"
                                               class="button blue_alt">Edit</a>

                                            <a href="{{action('backend\CareerController@destroy',$career->id)}}"
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
    </div>
@endsection