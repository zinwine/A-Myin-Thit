@extends('frontend.layout.master')


@section('title','Contact')


@section('content')
    <div class="container-fluid">
        <div class="head_img">

            <h2>Contact Us</h2>

        </div>
    </div>

    <div class="container-fluid contact">

        <div class="row" style="margin-top: -10px;">

            <div class="col-sm-5 col-sm-offset-1">
                <form method="post" class="form-horizontal" style="padding-right: 20px">
                    {{csrf_field()}}
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                    @if(session('success_status'))
                        <p class="alert alert-success">{{session('success_status')}}</p>
                    @endif
                    <h1 style="text-align: center;" id="contact">ဆက္သြယ္ရန္ပံုစံ</h1>

                    <div class="form-group" id="name">
                        <label for="inputname3" class="col-sm-2 control-label" style="color: #333333">အမည္:</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputname3"
                                   placeholder="သင့္အမည္ေရးပါ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label" style="color: #333333">အီးေမးလ္:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail3"
                                   placeholder="လံုၿခံဳေစရမယ္လို့ကတိေပးပါတယ္">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAdd3" class="col-sm-2 control-label"
                               style="color: #333333">ေနရပ္လိပ္စာ:</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" id="inputAdd3"
                                   placeholder="သင့္ေနရပ္လိပ္စာ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPass3" class="col-sm-2 control-label"
                               style="color: #333333">ဖုန္းနံပါတ္:</label>
                        <div class="col-sm-10">
                            <input type="number" name="phno" class="form-control" id="inputPass3"
                                   placeholder="သင့္ဖုန္းနံပါတ္">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-2 control-label" style="color: #333333">အကူညီေတာင္းရန္:</label>
                        <div class="col-sm-10">
                            <textarea name="message" id="text" class="form-control" rows="10"
                                      placeholder="သင့္ကိုကူညီႏိုင္ရန္ေတာင္းဆိုမႈမ်ားေရးခဲ့ေပးပါ">

                            </textarea>
                        </div>
                    </div>
                    <a type="button" class="btn btn-success" style="margin-left: 60px">မပို့ပါ</a>
                    <button type="submit" class="btn btn-success">ပို့မည္</button>
                </form>
            </div>

            <div class="col-sm-5">
                <div class="cont_info">
                    <h2 id="company"><b>Company info</b></h2> <br>
                    <p><span class="glyphicon glyphicon-user"></span>&nbspA Myin Thit Construction</p>
                    <p><span class="glyphicon glyphicon-home"></span>&nbspNo.2, SanYakeNyei(2)St, Heledan, Kamayut</p>
                    <p><span class="glyphicon glyphicon-phone-alt"></span>&nbsp092345633233</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>&nbsp72coder@gmail.com</p>
                </div>

                <div class="clocations" id="map">

                </div>
                <div class="my_social" style="margin-bottom: 20px">
                    <span class="fa fa-facebook ee text-center"></span>
                    <span class="fa fa-google-plus ff text-center"></span>
                    <span class="fa fa-twitter gg text-center"></span>
                    <span class="fa fa-instagram  hh text-center"></span>
                </div>

            </div>

        </div>

    </div>

@endsection