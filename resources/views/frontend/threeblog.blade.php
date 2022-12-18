@extends('frontend.layout.master')

@section('title','Blog')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="head_img">
                <h2>Blog Details</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: -20px">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
                    <div class="thumbnail i">
                        <img src="{{asset('backend/photo/upload/'.unserialize($blog->img)[0])}}" class="blogs"
                             alt="..." style="height: auto; width: 100%">
                        <div class="caption">
                            <h4>{{$blog->title}}</h4>
                            <span id="date" class="fa fa-calendar" style="color: orange">
                                {{date('Y/M/D',strtotime($blog->created_at))}}
                            </span> &nbsp;&nbsp;
                            <span class="fa fa-user">
                            @foreach($users as $user)
                                    @if($user->id==$blog->user_id)
                                        {{$blogwriter = $user->name}}
                                    @endif
                                @endforeach
                            </span>
                            <br>
                            <p class='text-justify'>
                                {{substr($blog->content,0,300)}}.....
                            </p>
                            <a href="{{ action('HomeController@showBlog',$blog->id)}}" role="button"
                               class="btn btn-primary btn-sm">View Details</a>
                            <br>

                        </div>
                    </div>
                </div>
            @endforeach
            {{--<div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">--}}
                {{--<div class="thumbnail i">--}}
                    {{--<img src="{{ asset('frontend/photo/back/construction1.png') }}" class="blogs" alt="...">--}}
                    {{--<div class="caption">--}}
                        {{--<h4>Summery by Admin</h4>--}}
                        {{--<span id="date" class="fa fa-calendar" style="color: orange"> 22/2/2017</span> &nbsp;&nbsp;--}}
                        {{--<span class="fa fa-user"> User</span>--}}
                        {{--<br>--}}
                        {{--<p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
                        {{--</p>--}}
                        {{--<a href="{{ url('/blog') }}" class="button devart">View Detail</a>--}}
                        {{--<br>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">--}}
                {{--<div class="thumbnail i">--}}
                    {{--<img src="{{ asset('frontend/photo/back/image1.jpg') }}" class="blogs" alt="...">--}}
                    {{--<div class="caption">--}}
                        {{--<h4>Summery by Admin</h4>--}}
                        {{--<span id="date" class="fa fa-calendar" style="color: orange"> 22/2/2017</span> &nbsp;&nbsp;--}}
                        {{--<span class="fa fa-user"> User</span>--}}
                        {{--<p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
                        {{--</p>--}}
                        {{--<a href="{{ url('/blog') }}" class="button devart">View Detail</a>--}}
                        {{--<br>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 wow fadeIn" data-wow-delay="0.6s">--}}
                {{--<div class="thumbnail i">--}}
                    {{--<img src="{{ asset('frontend/photo/back/image2.jpg') }}" class="blogs" alt="...">--}}
                    {{--<div class="caption">--}}
                        {{--<h4>Summery by Admin</h4>--}}
                        {{--<span id="date" class="fa fa-calendar" style="color: orange"> 22/2/2017</span> &nbsp;&nbsp;--}}
                        {{--<span class="fa fa-user"> User</span>--}}
                        {{--<p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
                            {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
                        {{--</p>--}}
                        {{--<a href="{{ url('/blog') }}" class="button devart">View Detail</a>--}}
                        {{--<br>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    </div>


    {{-- < <div class="container"> -->--}}
@endsection