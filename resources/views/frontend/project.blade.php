@extends('frontend.layout.master')

@section('title','Project')

@section('content')


    <div style="margin-top: 0" class="header">
        <div class="container-fluid">
            <div class="head_img">
                <h2>Projects</h2>
            </div>
        </div>
    </div>
    <!------start project----->
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <p class="center-block text-center title text-info">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur deleniti dolore ex hic
                    incidunt minima natus nobis recusandae voluptates! Nisi nulla obcaecati veniam voluptatem. Ab
                    explicabo odio sit tenetur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis est,
                    incidunt. Aspernatur esse excepturi facilis minima repellendus. Eveniet nihil placeat sed! Ab dolore
                    iste odit quasi quidem soluta vel voluptatem?
                    Eveniet nihil placeat sed! Ab dolore iste odit quasi quidem soluta vel voluptatem?
                </p>
                <br><br><br>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="alltap">
                <div class="tab mytab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs my_nav" role="tablist">
                        <li role="presentation" title="Completed projects" class="active">
                            <a href="#complete" aria-controls="complete" role="tab" data-toggle="tab">
                                <i class="fa fa-th-large proj" style="font-size: 17px"></i>
                                <p style="display: inline-block" class="pa"><b>Completed Projects</b></p>
                            </a>
                        </li>
                        <li role="presentation" title="Current projects"><a href="#current" aria-controls="current"
                                                                            role="tab" data-toggle="tab"><i
                                        class="fa fa-th-large proj" style="font-size: 17px"></i>
                                <p style="display: inline-block" class="pa"><b>Current Projects</b></p>
                            </a>
                        </li>
                        <li role="presentation" title="Up Coming projects"><a href="#upcoming" aria-controls="upcoming"
                                                                              role="tab" data-toggle="tab">
                                <i class="fa fa-th-large proj" style="font-size: 17px"> </i>
                                <p style="display: inline-block" class="pa"><b>Up Coming Projects</b></p>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mytab-content" style="border: 1px solid orange">
                        <!--complete-->
                        <div role="tabpanel" class="tab-pane active" id="complete">
                            <div class="row">
                                @foreach($completedProject as $project)
                                    <div class="col-sm-6 col-xs-12 fonttap">
                                        <br>
                                        <h3><b>{{$project->title}}</b></h3>
                                        <p>
                                            {{substr($project->desp,0,200)}}
                                            <br>
                                            <a href="{{ url('/project/'.$project->id.'/show') }}" class="linkcolor">View
                                                Detail...</a>
                                            <br><br>
                                            <a href="{{ url('/project/'.$project->id.'/show') }}">
                                                <img src="{{ asset('backend/photo/upload/'.unserialize($project->img)[0]) }}"
                                                     class="my-image img-responsive">
                                            </a>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!--end-complete-->
                        <!--current-->
                        <div role="tabpanel" class="tab-pane" id="current">
                            <div class="row">
                                @foreach($currentProject as $project)
                                    <div class="col-sm-6 col-xs-12 fonttap">
                                        <br>
                                        <h3><b>{{$project->title}}</b></h3>
                                        <p>
                                            {{substr($project->desp,0,200)}}
                                            <br>
                                            <a href="{{ url('/project/'.$project->id.'/show') }}" class="linkcolor">View
                                                Detail...</a>
                                            <br><br>
                                            <a href="{{ url('/project/'.$project->id.'/show') }}">
                                                <img src="{{ asset('backend/photo/upload/'.unserialize($project->img)[0]) }}"
                                                     class="my-image img-responsive">
                                            </a>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--end-current-->
                        <!--upcoming-->
                        <div role="tabpanel" class="tab-pane" id="upcoming">
                            <div class="row">
                                @foreach($futureProject as $project)
                                    <div class="col-sm-6 col-xs-12 fonttap">
                                        <br>
                                        <h3><b>{{$project->title}}</b></h3>
                                        <p>
                                            {{substr($project->desp,0,200)}}
                                            <br>
                                            <a href="{{ url('/project/'.$project->id.'/show') }}" class="linkcolor">View
                                                Detail...</a>
                                            <br><br>
                                            <a href="{{ url('/project/'.$project->id.'/show') }}">
                                                <img src="{{ asset('backend/photo/upload/'.unserialize($project->img)[0]) }}"
                                                     class="my-image img-responsive">
                                            </a>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end-upcoming-->
                </div>
            </div>
        </div>
    </div>


@endsection