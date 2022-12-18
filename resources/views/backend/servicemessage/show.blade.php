@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/servicemessage')}}" title="Go to Service Message" class="tip-bottom">Service Message</a>
    <a href="" class="current">Detail</a>
@endsection
@section('pagetitle')
    <h1>Message Detail</h1>
@endsection

@section('message','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-content">
                    <span class="icon icon-user" style="font-size: 14px;">   : {{$service->name}}</span> <br>
                    <span class="icon icon-envelope" style="font-size: 14px;">   : {{$service->email}}</span> <br>
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$service->address}}</span> <br>
                    <span class="icon icon-phone" style="font-size: 14px;">   : {{$service->ph_no}}</span> <br>
                    <span class="icon icon-time" style="font-size: 14px;">
                    : {{date("Y-M-D",strtotime($service->created_at))}} {{date("h:i:sa",strtotime($service->created_at))}}
                   </span>
                    <br>
                    <span class="icon icon-envelope-alt" style="font-size: 14px;"> : {{$service->message}}</span><br>
                </div>
            </div>
        </div>
    </div>
@endsection