@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/project')}}" title="Go to Project" class="tip-bottom">Project</a>
    <a href="" class="current">Detail</a>
@endsection

@section('pagetitle')
    <h1>Project Detail</h1>
@endsection

@section('project','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="panel panel-default">
            {{--<div class="panel-heading">--}}
            {{--<h3 class="panel-title">{{$project->title}}--}}
            {{--/Date: {{date("Y-M-D",strtotime($project->created_at))}}--}}
            {{--/Time: {{date("h:i:sa",strtotime($project->created_at))}}</h3>--}}
            {{--</div>--}}
            {{--<img src="{{asset('backend/photo/upload/'.unserialize($project->img)[0])}}" alt="">--}}
            {{--<div class="panel-body">--}}
            {{--{{$project->desp}}--}}
            {{--</div>--}}
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                {{--<div class="widget-title">--}}
                {{--</div>--}}
                <div class="widget-content">
                    <img src="{{asset('backend/photo/upload/'.unserialize($project->img)[0])}}" alt=""
                         style="width: 300px;height: 300px;"><br>
                    <p style="font-size: 20px; font-weight: bold; padding-top: 10px;">
                        {{ $project->title}} ({{$project->category}})</p>
                    <p>
                        <span style="font-size: small">
                           Date: {{date("F-d-Y",strtotime($project->created_at))}}
                            <span class="icon icon-time"></span>{{date("h:i:sa",strtotime($project->created_at))}}</span>
                    </p>
                    <p class="text-justify"> {{$project->desp}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection