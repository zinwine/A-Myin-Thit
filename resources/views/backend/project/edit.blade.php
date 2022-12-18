@extends('backend.layouts.formlayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/project')}}" title="Go to Project" class="tip-bottom">Project</a>
    <a href="" class="current">Edit</a>
@endsection

@section('pagetitle')
    <h1>Edit Project</h1>
@endsection

@section('project','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span10 offset1">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-align-justify"></i>
                    </span>
                    <h5>Project Information</h5>
                </div>
                <div class="widget-content nopadding">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                        <div class="control-group">
                            <label class="control-label">Title:</label>
                            <div class="controls">
                                <input type="text" class="span11" name="title" value="{{$project->title}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Category:</label>
                            <div class="controls">
                                <select id="pj" name="category" style="width: 91.5%;">
                                    <option value="finish"
                                            @if($project->category=="finish")
                                            selected
                                            @endif
                                    >Finish Project
                                    </option>
                                    <option value="current"
                                            @if($project->category=="current")
                                            selected
                                            @endif
                                    >Current Project
                                    </option>
                                    <option value="future"
                                            @if($project->category=="future")
                                            selected
                                            @endif
                                    >Future Project
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Area:</label>
                            <div class="controls">
                                <input type="text" class="span11" name="area" value="{{$project->area}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Floor:</label>
                            <div class="controls">
                                <input type="number" class="span11" name="floor" value="{{$project->floor}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Elevator:</label>
                            <div class="controls">
                                <select name="elevator" style="width: 91.5%;">
                                    <option value="available"
                                            @if($project->elevator=="available")
                                            selected
                                            @endif
                                    >available
                                    </option>
                                    <option value="unavailable"
                                            @if($project->elevator=="unavailable")
                                            selected
                                            @endif>unavailable
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Take Time:</label>
                            <div class="controls">
                                <input type="text" class="span11" name="time" placeholder="Take Time"
                                       value="{{$project->long_time}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Corners:</label>
                            <div class="controls">
                                <textarea type="text" class="span11" name="corner"
                                          rows="4">{{$project->corner}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span11" name="description" rows="8">{{$project->desp}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                @for($i=0; $i<count(unserialize($project->img));$i++)
                                    <img
                                            src="{{asset('backend/photo/upload/'.unserialize($project->img)[$i])}}"
                                            alt=""
                                            width="150px" height="150px">
                                @endfor
                            </div>
                            <label class="control-label">Choose image:</label>
                            <div class="controls">
                                <a class="btn btn-danger" id="img" onclick="new function () {
                                $('.control-group>.controls>img').hide();
                                $('.controls>a').hide();
                                        }">Remove
                                </a>
                                <input type="file" class="span11" name="file[]" multiple/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="pull-right">
                                <a href="{{url('admin/project')}}" class="btn btn-success">
                                    &nbsp;&nbsp;Back&nbsp;&nbsp;
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-success">&nbsp;Update&nbsp;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection