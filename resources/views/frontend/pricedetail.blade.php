@extends('frontend.layout.master')

@section('title','PriceDetail')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="head_img">
                <h2>Price Details</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pricedetailrowone">
            <div class="col-md-3 floor_plan">
                <h4 class="center-block fp">Floor Plan</h4><br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/fp1.jpg')}}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/fp2.jpg')}}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/fp3.jpg')}}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo//head/fp4.jpg')}}"></div>
                <br>
            </div>
            <div class="col-md-3 front_view">
                <h4 class="center-block fv">Front View</h4><br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/fv1.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/fv2.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/fv3.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/fv4.jpg') }}"></div>
                <br>
            </div>
            <div class="col-md-3 side_view ">
                <h4 class="center-block sv">Side View</h4><br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/sv1.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/sv2.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/sv3.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/sv4.jpg') }}"></div>
                <br>
            </div>
            <div class="col-md-3 threeD">
                <h4 class="center-block td">3D</h4><br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/3D1.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/3D1.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/3D1.jpg') }}"></div>
                <br>
                <div class="imaff"><img class="center-block" src="{{ asset('frontend/photo/head/3D1.jpg') }}"></div>
                <br>
            </div>
        </div>
        <br>
        <p class="text-center" style="padding-bottom: 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit irure dolor in reprehenderit in
            voluptate velit voluptate.
    </div>

@endsection