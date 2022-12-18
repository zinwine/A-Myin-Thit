@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/blog')}}" title="Go to Blog" class="tip-bottom">Blog</a>
    <a href="" class="current">Detail</a>
@endsection

@section('pagetitle')
    <h1>Blog Detail</h1>
@endsection

@section('blog','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                {{--<div class="widget-title">--}}
                {{--</div>--}}
                <div class="widget-content">
                    <img src="{{asset('backend/photo/upload/'.unserialize($blog->img)[0])}}" alt=""
                         style="width: 300px;height: 300px;"><br>
                    <p style="font-size: 20px; font-weight: bold; padding-top: 10px;">
                        {{ $blog->title}} :By {{$user->name}}</p>
                    <p>
                        <span style="font-size: small">
                           Date: {{date("F-d-Y",strtotime($blog->created_at))}}
                            <span class="icon icon-time"></span>{{date("h:i:sa",strtotime($blog->created_at))}}</span>
                    </p>
                    <p class="text-justify"> {{$blog->content}}</p>
                </div>

                <p class="bg bg-primary"
                   style="padding:10px 15px; color: whitesmoke; font-weight: bold;font-size: 20px; line-height: 20px; background-color: gray;">
                    COMMENTS
                </p>

                <div class="widget-content">
                    <div class="comments">
                        @foreach($comments as $comment)
                            {{--<p class="alert alert-warning">{{$comment->content}}</p>--}}
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <!-- <img class="media-object" src="components/img/c.jpg" alt="..." width="80px"> -->
                                        <span class="user-thumb icon-user"></span>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading name">User{{$comment->user_id}}</h4>
                                    {{date('D.M.Y',strtotime($comment->created_at))}}<br>
                                    <p>
                                        {{$comment->content}}
                                    </p>
                                    <a href="{{url('admin/comment/'.$comment->id.'/delete')}}" class=" btn btn-small
                           btn-danger">Delete</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                    <!-- ******************************************************* -->
                        <!-- ************************************************************** -->
                        @if(Auth::check())
                            {{--<div class="panel-heading">Insert a comment</div>--}}
                            @if(session('status'))
                                <p class="alert alert-success">{{session('status')}}</p>
                            @endif
                            <div class="media">
                                <h4>LEAVE A COMMENTS</h4>
                                <form action="{{url('backend/comment/create')}}" method="post">
                                    {{csrf_field()}}
                                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon" id="sizing-addon2">Name</span>--}}
                                    {{--<input type="text" class="textbox" placeholder="&nbsp;&nbsp;Name"--}}
                                    {{--aria-describedby="sizing-addon2">--}}
                                    {{--</div>--}}
                                    {{--<br>--}}
                                    {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon" id="sizing-addon2">Email</span>--}}
                                    {{--<input type="text" class="textbox" placeholder="&nbsp;&nbsp;Email"--}}
                                    {{--aria-describedby="sizing-addon2">--}}
                                    {{--</div>--}}
                                    {{--<br>--}}
                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="commendable_id" value="{{$blog->id}}">
                                        <input type="hidden" name="commendable_type" value="App\Blog">
                                        <label>Comment</label>
                                        <textarea class="textarea" name="comment" cols="10" placeholder="  Comment"
                                                  required></textarea><br>
                                    </div>
                                    {{--<a hrclass="btn btn-success" style="margin-bottom: 20px;margin-top:20px;">Cancel</a>--}}
                                    <button class="btn btn-success" style="margin-bottom: 20px;margin-top:20px;">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection