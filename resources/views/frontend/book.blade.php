@extends('frontend.layout.master')

@section('title','Book Service')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="head_img">

                <h2>Appointment</h2>

            </div>
        </div>
    </div>

    <div class="container book" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url('/threeblog') }}" role="button"
                   class="btn btn-lg btn-block btn-primary">Look Our Projects</a>
                <h3>IF CAN'T FIND WHAT YOU'RE LOOKING FOR?</h3>
                <P>
                    Call our support team to disscus our design.
                <h2>094504545</h2>
                </P>
                {{--   <div class="locations center-block" id="map">

                   </div>--}}
            </div>
            <div class="col-md-8">
                <form class="form-horizontal book" method="post">
                    <legend class="text-center" style="font-size: 26px;">Book A Service</legend>
                    {{csrf_field()}}
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                    @if(session('success_status'))
                        <p class="alert alert-success">{{session('success_status')}}</p>
                    @endif
                    <div class="form-group">
                        <label for="fname" class="col-sm-2  control-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="Enter Your Name"
                                   name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="col-sm-2 control-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="mail" placeholder="Enter Your Email"
                                   name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="state" class="col-sm-2 control-label">Address:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="state" placeholder="Enter Your Address"
                                   name="address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ph" class="col-sm-2 control-label">Phone Number:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="ph" placeholder="Enter Your PhNo"
                                   name="phno">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pro" class="col-sm-2 control-label">Choose Product Type</label>
                        <div class="col-sm-10">
                            <select name="type" id="pro" class="form-control">
                                <option value="Condo" selected>Condo</option>
                                <option value="House">House</option>
                                <option value="Hostel">Hostel</option>
                                <option value="Hospital">Hospital</option>
                                <option value="Market">Market</option>
                                <option value="Hotel">Hotel</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service" class="col-sm-2 control-label">Service Requirements</label>
                        <div class="col-sm-10">
                            <textarea name="message" id="service"
                                      placeholder="Enter Your Wish" class="form-control" cols="10"
                                      style="width: 100%"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a type="submit" class="btn btn-primary">Cancel</a>
                            &nbsp;&nbsp;
                            <button type="submit" class="btn btn-primary">Book</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>

@endsection