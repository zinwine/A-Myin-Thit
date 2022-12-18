@extends('backend.layouts.tablelayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="" class="current">Service Message</a>
@endsection

@section('pagetitle')
    <h1>Service Message</h1>
@endsection

@section('message','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                    <h5>Service Messages</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>PhNO</th>
                            <th>Type</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr class="gradeX">
                                <td>{{$service->id}}</td>
                                <td>{{$service->name}}</td>
                                <td>{{$service->email}}</td>
                                <td>{{$service->address}}</td>
                                <td>{{$service->ph_no}}</td>
                                <td>{{$service->type}}</td>
                                <td>{{substr($service->message,0,30)}}...</td>
                                <td>{{$service->created_at}}</td>
                                <td>
                                    <div class="text-center">
                                        <a href="{{action('backend\ServiceMessageController@show',$service->id)}}"
                                           class="btn btn-success btn-sm">View</a>

                                        <a href="{{action('backend\ServiceMessageController@destroy',$service->id)}}"
                                           class="btn btn-danger btn-sm">Delete</a>
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