@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/careermessage')}}" title="Go to Career Message" class="tip-bottom">Career Message</a>
    <a href="" class="current">Detail</a>
@endsection
@section('pagetitle')
    <h1>Career Message Detail</h1>
@endsection

@section('message','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-content">
                    <h1>{{$careermessage->Job_Position}}</h1>
                    <span class="icon icon-user" style="font-size: 14px;">   : {{$careermessage->Name}}</span> <br>
                    <span class="icon icon-envelope" style="font-size: 14px;">   : {{$careermessage->Email}}</span> <br>
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$careermessage->Address}}</span> <br>
                    <span class="icon icon-phone" style="font-size: 14px;">   : {{$careermessage->Ph_No}}</span>
                    <br>
                    <span class="icon icon-user" style="font-size: 14px;">   : {{$careermessage->Gender}}</span> <br>
                    <span class="icon icon-time" style="font-size: 14px;">
                    : {{date("Y-M-D",strtotime($careermessage->created_at))}} {{date("h:i:sa",strtotime($careermessage->created_at))}}
                    </span>
                    <br>
                    <span class="icon icon-envelope-alt"
                          style="font-size: 14px;"> : {{$careermessage->Description}}</span><br>
                    <span class="icon icon-picture" style="font-size: 14px;">   : <img
                                src="{{asset('backend/photo/cvform/'.$careermessage->Image)}}" alt=""></span> <br>
                </div>
            </div>
        </div>
    </div>
@endsection