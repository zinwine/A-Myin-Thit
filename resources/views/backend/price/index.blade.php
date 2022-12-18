@extends('backend.layouts.tablelayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="" class="current">Price</a>
@endsection

@section('pagetitle')
    <h1>Price</h1>
@endsection

@section('price','active')

@section('content')
    <hr width="100%">

    <div class="row-fluid">
        <div class="table-responsive">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5>Price Informations</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <table class="table table-bordered data-table table-responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Sent At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($contacts as $contact)--}}
                            {{--<tr class="gradeX">--}}
                            {{--<td>{{$contact->id}}</td>--}}
                            {{--<td>{{$contact->name}}</td>--}}
                            {{--<td>{{$contact->email}}</td>--}}
                            {{--<td>{{$contact->address}}</td>--}}
                            {{--<td>{{$contact->phno}}</td>--}}
                            {{--<td>{{substr($contact->message,0,30)}}....</td>--}}
                            {{--<td>{{$contact->created_at}}</td>--}}
                            {{--<td>--}}
                            {{--<div class="text-center">--}}
                            {{--<a href="{{action('backend\ContactMessageController@show',$contact->id)}}"--}}
                            {{--class="btn btn-success btn-sm">View</a>--}}

                            {{--<a href="{{action('backend\ContactMessageController@destroy',$contact->id)}}"--}}
                            {{--class="btn btn-danger btn-sm">Delete</a>--}}
                            {{--</div>--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            {{--<ul class="gradeX">--}}
                            {{--<li>First</li>--}}
                            {{--<li>second</li>--}}
                            {{--<li>third</li>--}}
                            {{--</ul>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection