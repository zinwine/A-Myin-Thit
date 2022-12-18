@extends('frontend.layout.master')

@section('title','Price')

@section('content')


    <div class="container-fluid">
        <div class="head_img">
            <h2>Pricing</h2>
        </div>
    </div>

    <div class="container" style="margin-top: -10px">
        <div class="row" style="margin: 20px;">
            <div class="col-md-4 aaa" style="border:1px solid #ccc; padding-top: 10px;">
                <img src="{{ asset('frontend/photo/head/th3.jpg') }}" style="border: 8px solid #eee; border-radius: 5px; width: 100%
          ">
                <h4 style="display:inline; padding:15px;">Our Project's Price</h4>
                <div class="de_info">
                    <a href="{{ url('/pricedetail') }}" class="btn btn-warning pull-right">Detail Info</a>
                </div>
            </div>
            <div class="col-md-8 bbb">
                <p style="text-align: left;">If you want to Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt.If you want to Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt</p>
                <div class="row price_data">
                    <div class="col-xs-5 col-sm-4">
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Prices </b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Area </b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Type</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Time Taken</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Payment</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; No. of Floors</b></span>
                    </div>
                    <div class="col-xs-7 col-sm-8">
                        <span>&nbsp; : $10000</span> <br>
                        <span>&nbsp; : 200 sqft</span><br>
                        <span>&nbsp; : Family House</span><br>
                        <span>&nbsp; : 6 Months</span> <br>
                        <span>&nbsp; : 50%-30%-20%</span> <br>
                        <span>&nbsp; : 2 floors</span> <br>
                    </div>

                </div>
                <div class="appointment">
                    <a href="{{ url('/book') }}" class="btn btn-warning pull-right">Appointment</a>
                </div>
            </div>

        </div>
        <!-- ******************************************************* -->
        <div class="row" style="margin: 20px;">
            <div class="col-md-4 aaa" style="border:1px solid #ccc; padding-top: 10px;">
                <img src="{{ asset('frontend/photo/head/th2.jpg') }}" class="price_img"
                     style="border: 8px solid #eee; border-radius: 5px; width: 100% ;height: 192.2px;">
                <h4 style="display:inline; padding:15px;">Our Project's Price</h4>
                <div class="de_info">
                    <a href="{{ url('/pricedetail') }}" class="btn btn-warning pull-right">Detail Info</a>
                </div>
            </div>
            <div class="col-md-8 bbb">
                <p style="text-align: left;">If you want to Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt.If you want to Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt</p>
                <div class="row price_data">
                    <div class="col-xs-5 col-sm-4">
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Prices </b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Area </b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Type</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Time Taken</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Payment</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; No. of Floors</b></span>
                    </div>
                    <div class="col-xs-7 col-sm-8">
                        <span>&nbsp; : $10000</span> <br>
                        <span>&nbsp; : 200 sqft</span><br>
                        <span>&nbsp; : Family House</span><br>
                        <span>&nbsp; : 6 Months</span> <br>
                        <span>&nbsp; : 50%-30%-20%</span> <br>
                        <span>&nbsp; : 2 floors</span> <br>
                    </div>

                </div>
                <div class="appointment">
                    <a href="{{ url('/book') }}" class="btn btn-warning pull-right">Appointment</a>
                </div>
            </div>

        </div>
        <!--********************************************************* -->
        <div class="row" style="margin: 20px;">
            <div class="col-md-4 aaa" style="border:1px solid #ccc; padding-top: 10px;">
                <img src="{{ asset('frontend/photo/head/th3.jpg') }}"
                     style="border: 8px solid #eee; border-radius: 5px; width: 100% ;height: 192.2px;">
                <h4 style="display:inline; padding:15px;">Our Project's Price</h4>
                <div class="de_info">
                    <a href="{{ url('/pricedetail') }}" class="btn btn-warning pull-right">Detail Info</a>
                </div>
            </div>
            <div class="col-md-8 bbb">
                <p style="text-align: left;">If you want to Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt.If you want to Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt</p>
                <div class="row price_data">
                    <div class="col-xs-5 col-sm-4">
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Prices </b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Area </b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Type</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Time Taken</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; Payment</b></span><br>
                        <i class="fa fa-arrow-circle-right"></i><span><b>&nbsp; No. of Floors</b></span>
                    </div>
                    <div class="col-xs-7 col-sm-8">
                        <span>&nbsp; : $10000</span> <br>
                        <span>&nbsp; : 200 sqft</span><br>
                        <span>&nbsp; : Family House</span><br>
                        <span>&nbsp; : 6 Months</span> <br>
                        <span>&nbsp; : 50%-30%-20%</span> <br>
                        <span>&nbsp; : 2 floors</span> <br>
                    </div>

                </div>
                <div class="appointment">
                    <a href="{{ url('/book') }}" class="btn btn-warning pull-right">Appointment</a>
                </div>
            </div>

        </div>
        <!-- ************************************************************* -->
    </div>
    <div class="pag center-block" style="text-align: center;">
        <ul class="pagination pagination-md">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>

@endsection