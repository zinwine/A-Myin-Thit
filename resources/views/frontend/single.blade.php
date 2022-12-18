@extends('frontend.layout.master')

@section('title','SingleProject')

@section('content')

    <div style="margin-top: 0" class="header">
        <div class="container-fluid">
            <div class="head_img">
                <h2>@if($project->category=="finish")
                        Completed
                    @endif

                    @if($project->category=="current")
                        Current
                    @endif

                    @if($project->category=="future")
                        UpComing
                    @endif

                    Projects</h2>
            </div>
        </div>
    </div>


    <br>
    <div class="container">
        <div class="row ">
            <div class="col-md-8 col-xs-12 col-sm-12 main-proj">
                <h3><b>Project 1</b></h3>
                <hr>
                <img class="img-responsive"
                     src="{{ asset('backend/photo/upload/'.unserialize($project->img)[0]) }}"><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <ul>
                                    <b>
                                        <li>At Least Area :</li>
                                        <li>How Many Floors :</li>
                                        <li>Type :</li>
                                        <li>Long Time :</li>
                                        <li>Cornerss :</li>
                                    </b>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <ul>
                                    <li>{{$project->area}}</li>
                                    <li>{{$project->floor}}</li>
                                    <li>{{$project->title}}</li>
                                    <li>{{$project->long_time}}</li>
                                    <li>{{$project->corner}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-justify">
                        {{$project->desp}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12 col-sm-12 relat-proj">
                <div class="small-proj">
                    <h3>Related Projects</h3>
                    <hr>
                    @if(count($latestPost)>0)
                        @foreach($latestPost as $project)
                            <div class="media">
                                <div class="media-left">
                                    <a href="{{action('HomeController@showProject',$project->id)}}">
                                        <img class="media-object "
                                             src="{{ asset('backend/photo/upload/'.unserialize($project->img)[0]) }}"
                                             alt="..."
                                             style="width: 100px;height: 100px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><b>{{$project->title}}</b></h4><br>
                                    <p style="text-align: justify">
                                        <a href="#" style="text-decoration: none;color: black">
                                            {{substr($project->desp,0,100)}}
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    @else
                        <h5>No project to show</h5>
                    @endif
                    {{--<a href="{{ url('/project') }}" class="previous">Go to Our Projects</a>--}}
                </div>
            </div>
        </div>
        <hr>
    </div>


@endsection