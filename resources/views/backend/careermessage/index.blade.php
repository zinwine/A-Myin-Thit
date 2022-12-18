@extends('backend.layouts.tablelayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="" class="current">Career Message</a>
@endsection

@section('pagetitle')
    <h1>Career Message</h1>
@endsection

@section('message','active')

@section('content')
    <hr width="100%">

    <div class="row-fluid">
        <div class="table-responsive">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Career Messages</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered data-table table-responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Ph_No</th>
                                <th>Job Position</th>
                                <th>Gender</th>
                                <th>Message</th>
                                <th>Sent At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($careermessage as $message)
                                <tr class="gradeX">
                                    <td>{{$message->id}}</td>
                                    <td>{{$message->Name}}</td>
                                    <td>{{$message->Email}}</td>
                                    <td>{{$message->Address}}</td>
                                    <td>{{$message->Ph_No}}</td>
                                    <td>{{$message->Job_Position}}</td>
                                    <td>{{$message->Gender}}</td>
                                    <td>{{substr($message->Description,0,30)}}....</td>
                                    <td>{{$message->created_at}}</td>
                                    <td>
                                        <div class="text-center">
                                            <a href="{{action('backend\CareerMessageController@show',$message->id)}}"
                                               class="btn btn-success btn-sm">View</a>

                                            <a href="{{action('backend\CareerMessageController@destroy',$message->id)}}"
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
    </div>
@endsection