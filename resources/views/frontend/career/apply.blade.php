@extends('frontend.layout.master')

@section('title','Apply')

@section('content')
    <style>
        #inputFile {
            width: 200px;
            border: 1px solid lavender;
            outline: none;
            border-radius: 5px;
            padding-left: 10px;
        }
    </style>

    <div class="container-fluid">
        <div class="head_img">
            <h2>Apply Form</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="border: 1px solid gainsboro; background: ghostwhite;padding: 3%">
                <form class="form-vertical" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                    @if(session('success_status'))
                        <p class="alert alert-success">{{session('success_status')}}</p>
                    @endif
                    <div class="form-group">
                        <label for="inputName" class="col-xs-12 control-label" style="color: #333333">Name:</label>
                        <br>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="inputName" name="name"
                                   placeholder="Type your name here">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-xs-12 control-label" style="color: #333333">Email:</label>
                        <br>
                        <div class="col-xs-12">
                            <input type="email" class="form-control" id="inputEmail" name="email"
                                   placeholder="Your Email">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAdd" class="col-xs-12 control-label" style="color: #333333">Address:</label>
                        <br>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="inputAdd" name="address"
                                   placeholder="Your Address">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPass" class="col-xs-12 control-label" style="color: #333333">Ph_No:</label>
                        <br>
                        <div class="col-xs-12">
                            <input type="text" class="form-control" id="inputPass" name="phone"
                                   placeholder="Your Ph number">
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputGender" class="col-xs-12 control-label" style="color: #333333">Gender:</label>
                        <br>
                        <div class="col-xs-12">
                            <select class="form-control" name="gender" id="inputGender">
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputJob" class="col-xs-12 control-label" style="color: #333333">Job
                            Position:</label>
                        <br>
                        <div class="col-xs-12">
                            <select class="form-control" name="job_position" id="inputJob">
                                <option value="Contractor" selected>Contractors</option>
                                <option value="Estimator">Construction Estimator</option>
                                <option value="Manager">Construction Manager</option>
                                <option value="Designer">Engineering Designer</option>
                                <option value="Surveryor">Surveyors</option>
                                <option value="Engineer">Mechanical Engineers</option>
                            </select>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFile" class="col-xs-12 control-label" style="color: #333333">Upload CV:</label>
                        <br>
                        <div class="col-xs-12">
                            <input type="file" id="CV" name="cv" required>
                            <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-xs-12 control-label" style="color: #333333">Description:</label>
                        <br>
                        <div class="col-xs-12">
                            <textarea id="text" name="description" class="form-control" rows="10"
                                      placeholder="Your Description"></textarea>
                            <br>
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-12 ">
                        <button type="submit" class="button-orange">Apply</button>
                        <a href="{{url('career')}}" class="btn button-grey">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection