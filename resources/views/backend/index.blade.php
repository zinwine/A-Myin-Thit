@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
@endsection

@section('dashboard','active')

@section('content')
    <div class="content" style="margin-top: -60px;">
        <!--Action boxes-->
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb">
                    <a href="{{url('/admin')}}">
                        <i class="icon-dashboard"></i> My Dashboard </a>
                </li>
                <li class="bg_lg span3">
                    <a href="{{url('/admin/project')}}">
                        <i class="icon-file"></i> Project</a>
                </li>
                <li class="bg_ly">
                    <a href="{{url('/admin/blog')}}">
                        <i class="icon-picture"></i> Blog </a>
                </li>
                <li class="bg_lo">
                    <a href="{{url('/admin/servicemessage')}}">
                        <i class="icon-envelope-alt"></i>
                        {{--<span class="label label-success">101</span> --}}
                        Message</a>
                </li>
                <li class="bg_ls">
                    <a href="{{url('/admin/user')}}">
                        <i class="icon-user"></i> Users</a>
                </li>
            </ul>
        </div>
        <!--End-Action boxes-->
        <hr width="100%">
        {{--main content start--}}
        <div class="row-fluid">
            <h1>I am backend index</h1>
            <div class="span12">
                <div class="span6">
                    <div class="widget-box">
                        <h1>Project</h1>
                    </div>
                </div>
                <div class="span6">
                    <div class="widget-box">
                        <h1>Message</h1>
                    </div>
                </div>
            </div>
        </div>
        {{--main content end--}}
    </div>
@endsection