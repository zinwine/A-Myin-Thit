@extends('backend.layouts.master')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="" class="current">blog</a>
@endsection

@section('pagetitle')
    <h1>Blog</h1>
@endsection

@section('blog','active')

@section('content')
    <hr width="100%">

    <div class="row-fluid">
        <div class="span10 offset1">
            <a href="{{url('admin/blog/create')}}" class="button devart">Add New Blog</a>
            <div class="widget-box">
                <div class="widget-title"><span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Our Posts</h5>
                </div>
                <div class="widget-content nopadding">
                    <ul class="recent-posts">

                        {{$blogwriter=""}}
                        @foreach($blogs as $blog)
                            <li>
                                <div class="user-thumb" style="overflow: hidden;width: 100px;height: 100px;">
                                    <img width="100px" height="100px" alt="User" class="img-responsive"
                                         src="{{asset('backend/photo/upload/'.unserialize($blog->img)[0])}}">
                                </div>
                                <div class="article-post">
                                    <div class="fr">
                                        <a href="{{action('backend\BlogController@show',$blog->id)}}"
                                           class="button devart">Show</a>
                                        <a href="{{action('backend\BlogController@edit',$blog->id)}}"
                                           class="button blue_alt">Edit</a>
                                        <a href="{{action('backend\BlogController@destroy',$blog->id)}}"
                                           class="button dsgnmoo">Delete</a>
                                    </div>
                                    <span class="user-info">
                                          <p><b>{{$blog->title }}</b> By:
                                              @foreach($users as $user)
                                                  @if($user->id==$blog->user_id)
                                                      {{$blogwriter = $user->name}}
                                                  @endif
                                              @endforeach
                                              <br>Date: {{date("Y-M-d",strtotime($blog->created_at))}}<br>
                                             <span class="icon"> <i
                                                         class="icon-time"></i></span>{{date("h:i:sa",strtotime($blog->created_at))}}</p>
                                    </span>
                                    <p>{{substr($blog->content,0,200)}}.......</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

