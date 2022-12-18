@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/project')}}" title="Go to Project" class="tip-bottom">Project</a>
    <a href="" class="current"> Current Project</a>
@endsection

@section('pagetitle')
    <h1>Current Project</h1>
@endsection

@section('project','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span10 offset1">
            <a href="{{url('admin/project/create')}}" class="button devart">Add New Project</a>
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Our Projects</h5>
                </div>
                <div class="widget-content nopadding">
                    <ul class="recent-posts">

                        {{$postwriter=""}}
                        @foreach($projects as $project)
                            <li style="height: 100px;">
                                <div class="user-thumb"
                                     style="overflow:hidden;width: 100px;height: 100px; padding: 0px;margin-top: 0px;">
                                    <img width="100px" height="100px" alt="User" class="img-responsive"
                                         src="{{asset('backend/photo/upload/'.unserialize($project->img)[0])}}">
                                </div>
                                <div class="article-post">
                                    <div class="fr">
                                        <a href="{{action('backend\ProjectController@show',$project->id)}}"
                                           class="button devart">Show</a>
                                        <a href="{{action('backend\ProjectController@edit',$project->id)}}"
                                           class="button blue_alt">Edit</a>
                                        <a href="{{action('backend\ProjectController@destroy',$project->id)}}"
                                           class="button dsgnmoo">Delete</a>
                                    </div>
                                    <span class="user-info">
                                        {{--By:--}}
                                        {{--@foreach($users as $user)--}}
                                        {{--@if($user->id==$blog->user_id)--}}
                                        {{--{{$blogwriter = $user->name}}--}}
                                        {{--@endif--}}
                                        {{--@endforeach--}}
                                        {{--/ Date: {{date("Y-M-D",strtotime($blog->created_at))}}--}}
                                        {{--/ Time:{{date("h:i:sa",strtotime($blog->created_at))}}--}}
                                        {{$project->title}}
                                    </span>
                                    <p><a href="#">{{substr($project->desp,0,200)}}</a></p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection