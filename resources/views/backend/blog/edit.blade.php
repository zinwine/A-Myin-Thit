@extends('backend.layouts.formlayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/blog')}}" title="Go to Blog" class="tip-bottom">Blog</a>
    <a href="" class="current">Edit</a>
@endsection

@section('pagetitle')
    <h1>Blog Edit</h1>
@endsection

@section('blog','active')

@section('content')
    <hr width="100%">
    <div class="row-fluid">
        <div class="span10 offset1">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-align-justify"></i>
                    </span>
                    <h5>Blog Information</h5>
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
                                <input type="text" class="span11" name="title" value="{{$blog->title}}"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span11" name="content" rows="8">{{$blog->content}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                @for($i=0; $i<count(unserialize($blog->img));$i++)
                                    <img
                                            src="{{asset('backend/photo/upload/'.unserialize($blog->img)[$i])}}" alt=""
                                            width="150px" height="150px">
                                @endfor
                            </div>
                            <label class=" control-label">Choose image:</label>
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
                                <a href="{{url('admin/blog')}}" class="btn btn-success">
                                    Back
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-success">&nbsp;Edit&nbsp;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#img').click(function () {
//                $('.control-group>#image').hide();
//                $(this).hide();
                alert('click');
            });


        });
    </script>
@endsection