@extends('backend.layouts.formlayout')

@section('pagelink')
    <a href="{{url('admin')}}" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a>
    <a href="{{url('admin/career')}}" title="Go to Career" class="tip-bottom">Career</a>
    <a href="" class="current">Create</a>
@endsection

@section('pagetitle')
    <h1>Create Career Post</h1>
@endsection

@section('career','active')

@section('content')
    <hr width="100%">
    <style>
        .controls > li > a {
            float: right;
            text-decoration: none;
            font-weight: bold;
            color: #900;
            padding: 0 8px;
            display: none
        }

        .controls > li:hover a {
            display: inline;
        }
    </style>
    <div class="row-fluid">
        <div class="span10 offset1">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-align-justify"></i>
                    </span>
                    <h5>Career Post Information</h5>
                </div>
                <div class="widget-content nopadding">
                    <form method="post" class="form-horizontal">
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
                                <input type="text" class="span11" name="title" placeholder="Job Title"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Location:</label>
                            <div class="controls">
                                <input type="text" class="span11" name="location" placeholder="Location"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Salary:</label>
                            <div class="controls">
                                <input type="text" class="span11" name="salary" placeholder="$1000 - $2000"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Remark:</label>
                            <div class="controls">
                                <textarea class="span11" name="remark" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span11" name="description" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Job Responsibility:</label>
                            <div class="controls">
                                <ol id="restasks" style="list-style-type: decimal;"></ol>
                                <input type="text" class="span10" id="responsibility" name="responsibility"
                                       placeholder="Job Responsibility"/>
                                <a id="resadd" class="btn btn-primary">&nbsp;&nbsp;Add&nbsp;</a>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Job Requirement:</label>
                            <div class="controls">
                                <ol id="reqtasks" style="list-style-type: decimal;"></ol>
                                <input type="text" class="span10" name="requirement" id="requirement"
                                       placeholder="Job Requirement"/>
                                <a id="reqadd" class="btn btn-primary">&nbsp;&nbsp;Add&nbsp;</a>
                            </div>
                        </div>
                        <input type="hidden" name="res[]" id="resname" value="">
                        <input type="hidden" name="req[]" id="reqname" value="">
                        <div class="form-actions">
                            <div class="pull-right">
                                <a href="{{url('admin/career')}}" class="btn btn-success">
                                    Back
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
    <script type="text/javascript">
        var msgarray = [];
        var reqarray = [];
        var count = 0;
        var reqcount = 0;
        var resadd = document.getElementById('resadd');
        var reqadd = document.getElementById('reqadd');
        resadd.addEventListener('click', function () {
            var task = $("#responsibility").val();
            if (!task) return false;
            buildTask(task, count, msgarray).appendTo("#restasks");
            count++;
            $("#responsibility").val("").focus();
            $('#resname').val(msgarray);
            console.log(msgarray);
        });
        reqadd.addEventListener('click', function () {
            var task = $("#requirement").val();
            if (!task) return false;
            buildTask(task, reqcount, reqarray).appendTo("#reqtasks");
            count++;
            $("#requirement").val("").focus();
            $('#reqname').val(reqarray);
            console.log(reqarray);
        });

        function buildTask(msg, count, allarray) {
            var task = $("<span>").html(msg);
            allarray.push(msg);
            var del = $("<a>", {
                href: "#"
            }).html("&times;").click(function () {
                var place = $(this).parent().index();
                alert(allarray[place]);
                allarray.splice(place, 1);
                $(this).parent().remove();
            });
            return $("<li>").append(task).append(del);
        }
    </script>
@endsection