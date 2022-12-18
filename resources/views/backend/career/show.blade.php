@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/career')}}" title="Go to Career" class="tip-bottom">Career</a>
    <a href="" class="current">Detail</a>
@endsection
@section('pagetitle')
    <h1>Career Post Detail</h1>
@endsection

@section('career','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-content">
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$career->title}}</span> <br>
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$career->location}}</span> <br>
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$career->salary}}</span> <br>
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$career->remark}}</span> <br>
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$career->desp}}</span> <br>
                    <h3>Job Responsibility</h3>
                    @foreach($job_res as $value)
                        <p>* {{$value->responsibility}}</p>
                    @endforeach
                    <br>
                    <h3>Job Requirement</h3>
                    @foreach($job_req as $value)
                        <p>* {{$value->requirement}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection