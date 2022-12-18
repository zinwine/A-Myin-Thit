@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/contactmessage')}}" title="Go to Contact Message" class="tip-bottom">Contact Message</a>
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
                    <span class="icon icon-user" style="font-size: 14px;">   : {{$contact->name}}</span> <br>
                    <span class="icon icon-envelope" style="font-size: 14px;">   : {{$contact->email}}</span> <br>
                    <span class="icon icon-home" style="font-size: 14px;">   : {{$contact->address}}</span> <br>
                    <span class="icon icon-phone" style="font-size: 14px;">   : {{$contact->ph_no}}</span> <br>
                    <span class="icon icon-time" style="font-size: 14px;">
                    : {{date("Y-M-D",strtotime($contact->created_at))}} {{date("h:i:sa",strtotime($contact->created_at))}}
                   </span>
                    <br>
                    <span class="icon icon-envelope-alt" style="font-size: 14px;"> : {{$contact->message}}</span><br>
                </div>
            </div>
        </div>
    </div>
@endsection