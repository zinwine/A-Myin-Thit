@extends('backend.layouts.formlayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/project')}}" title="Go to Project" class="tip-bottom">Project</a>
    <a href="" class="current">Create</a>
@endsection

@section('pagetitle')
    <h1>Create Project</h1>
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
                                <input type="text" class="span11" name="title" placeholder="Project Title"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Category:</label>
                            <div class="controls">
                                <select id="pj" name="category" style="width: 91.5%;">
                                    <option value="finish">Finish Project</option>
                                    <option value="current">Current Project</option>
                                    <option value="future">Future Project</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Area:</label>
                            <div class="controls">
                                <input type="text" class="span11" name="area" placeholder="Area"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Floor:</label>
                            <div class="controls">
                                <input type="number" class="span11" name="floor" placeholder="Floor"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Elevator:</label>
                            <div class="controls">
                                <select name="elevator" style="width: 91.5%;">
                                    <option value="available">available</option>
                                    <option value="unavailable">unavailable</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Take Time:</label>
                            <div class="controls">
                                <input type="text" class="span11" name="time" placeholder="Take Time"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Corners:</label>
                            <div class="controls">
                                <textarea type="text" class="span11" name="corner" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span11" name="description" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Choose image:</label>
                            <div class="controls">
                                <input type="file" class="span11" name="file[]" required multiple/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="pull-right">
                                <a href="{{url('admin/project')}}" class="btn btn-success">
                                    &nbsp;&nbsp;Back&nbsp;&nbsp;
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-success">&nbsp;Create&nbsp;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection