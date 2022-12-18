@extends('frontend.layout.master')

@section('title','CareerDetails')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="head_img">
                <h2>Career</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 details">
                <div class="row ">
                    <div class="col-xs-3">
				<span>
					<i class="glyphicon glyphicon-calendar"></i>
				</span>
                    </div>
                    <div class="col-xs-9">
                        <p style="font-size: 15px; margin-left: 20px; margin-top: 30px;">Dated Post <br>
                            <small>{{date('M-d-Y',strtotime($career->created_at))}}</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3">
				<span>
					<i class="glyphicon glyphicon-map-marker"></i>
				</span>
                    </div>
                    <div class="col-xs-9">
                        <p style="font-size: 15px; margin-left: 20px; margin-top: 30px;">Location <br>
                            <small> {{$career->location}}</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3">
				<span>
					<i class="glyphicon glyphicon-pencil"></i>
				</span>
                    </div>
                    <div class="col-xs-9">
                        <p style="font-size: 15px; margin-left: 20px; margin-top: 30px;">Job Title <br>
                            <small>{{$career->title}}</small>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3">
				<span>
					<i class="glyphicon glyphicon-usd"></i>
				</span>
                    </div>
                    <div class="col-xs-9">
                        <p style="font-size: 15px;margin-left: 20px; margin-top: 30px;">Salary <br>
                            <small> {{$career->salary}}</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 last-detail" style="margin-left: 20px">
                <h4 class="detail-title">{{$career->title}}</h4>
                <h3 class="title-little">Job Description</h3><br>
                <p class="detail-para">
                    {{$career->desp}}
                </p>
                <h3 class="title-little">Job Responsibility</h3>
                @foreach($job_res as $value)
                    <span>
				<i class="glyphicon glyphicon-star"
                   style="color:#009688;font-size: 17px; padding-right:10px;"></i>{{$value->responsibility}}</span>
                    <br>
                @endforeach
                <br>
                <p class="detail-para">{{$career->remark}}</p>
                <h3 class="title-little">Job Requirement</h3>
                @foreach($job_req as $value)
                    <span>
			    <i class="glyphicon glyphicon-chevron-right"
                   style="color: #009688; font-size: 17px; padding-right:10px;"></i>{{$value->requirement}}
		        </span><br>
                @endforeach
                <br><br>
                <div class="row">
                    <a href="{{ url('/career/apply') }}" class="button devart"
                       style="margin-bottom: 30px;margin-left: 20px">Apply
                        Now</a>
                </div>
            </div>

        </div>
    </div>


@endsection