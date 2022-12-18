@extends('frontend.layout.master')

@section('title','SingleBlog')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="head_img">

                <h2>Blog Details</h2>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <img src="{{asset('backend/photo/upload/'.unserialize($blog->img)[0])}}" class="blogimg" width="100%">
                <h3 id="blogtitle">{{$blog->title}}</h3>
                <p class="summery">
                    {{$blog->content}}
                </p>

            </div>

            <div class="col-md-4">
                <h3 id="latestnews">Latest News and Updates</h3>
                <hr>
                @foreach($latestPost as $latest)
                    <div class="media">
                        <div class="media-left">
                            <a href="{{action('HomeController@showBlog',$latest->id)}}">
                                <img class="media-object"
                                     src="{{asset('backend/photo/upload/'.unserialize($latest->img)[0])}}" alt="..."
                                     style="width: 100px; height: 100px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$latest->title}}</h4>
                            {{date('d.m.Y',strtotime($latest->created_at))}}
                            <br>
                            {{substr($latest->content,0,200)}}
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>

        <div class="row" style="background-color: #eeeeee;">
            <div class="comments">
                <h4>COMMENTS</h4>
                @foreach($comments as $comment)
                    {{--<p class="alert alert-warning">{{$comment->content}}</p>--}}
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <!-- <img class="media-object" src="components/img/c.jpg" alt="..." width="80px"> -->
                                <span class="glyphicon glyphicon-user icon"></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading name">User{{$comment->user_id}}</h4>
                            {{date('D.M.Y',strtotime($comment->created_at))}}<br>
                            <p>
                                {{$comment->content}}
                            </p>
                            <a href="#" class="reply">Reply</a>
                        </div>
                    </div>
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
                        <form action="{{url('comment/create')}}" method="post">
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
                                <label>Comment</label><br>
                                <textarea class="textarea" name="comment" cols="10" placeholder="  Comment"
                                          required></textarea><br>
                            </div>
                            {{--<a hrclass="btn btn-success" style="margin-bottom: 20px;margin-top:20px;">Cancel</a>--}}
                            <button class="btn btn-success" style="margin-bottom: 20px;margin-top:20px;">Submit</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>


    </div>

@endsection