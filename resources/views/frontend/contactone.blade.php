@extends('frontend.layout.master')


@section('title','Contact')


@section('content')
    <div class="container-fluid">
        <div class="head_img" >
            <h2>Contact Us</h2>
        </div>
    </div>

    <div class="container-fluid contact">

        <div class="row" style="margin-top: -50px;">

            <div class="col-sm-5 col-sm-offset-1">
                <form class="form-horizontal" style="padding-right: 20px">
                    <h1 class="text-center contactTitle" style="font:italic bold 29px Georgia,Times New Romanm,Tims,serif">ဆက္သြယ္ရန္ပံုစံ</h1>

                    <div class="form-group" id="name">
                        <label for="inputname3" class="col-sm-3 control-label" style="color: #333333">အမည္:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputname3" placeholder="သင့္အမည္ေရးပါ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAdd3" class="col-sm-3 control-label" style="color: #333333">ေနရပ္လိပ္စာ:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputAdd3" placeholder="သင့္ေနရပ္လိပ္စာ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPass3" class="col-sm-3 control-label" style="color: #333333">ဖုန္းနံပါတ္:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPass3" placeholder="သင့္ဖုန္းနံပါတ္">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label" style="color: #333333">အီးေမးလ္</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="လံုၿခံဳေစရမယ္လို့ကတိေပးပါတယ္">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-sm-3 control-label" style="color: #333333">အကူညီေတာင္းရန္:</label>
                        <div class="col-sm-9">
                            <textarea name="area" id="text" class="form-control" rows="10" placeholder="သင့္ကိုကူညီႏိုင္ရန္ေတာင္းဆိုမႈမ်ားေရးခဲ့ေပးပါ"></textarea>
                        </div>
                    </div>
                   <div class="form-group" >
                       <div class="col-sm-3"></div>
                       <div class="col-sm-9">
                       <input type="submit" value="ပို့မည္" class="button-orange">
                       <input type="submit" value="မပို့ပါ" class="button-grey">
                       </div>
                   </div>
                </form>
            </div>
            <div class="col-sm-5">
                <div class="cont_info">
                    <h1 class="text-center" style="font:italic bold 29px Georgia,Times New Romanm,Times,serif">Company info</h1> <br>
                    <p><span class="fa fa-user" ></span>&nbsp;&nbsp;A Myin Thit Construction</p>
                    <p><span class="fa fa-home"></span>&nbsp;&nbsp;No.2, SanYakeNyei(2)St, Heledan, Kamayut</p>
                    <p><span class="fa fa-phone"></span>&nbsp;&nbsp;092345633233</p>
                    <p><span class="fa fa-envelope"></span>&nbsp;&nbsp;72coder@gmail.com</p>
                </div>
                <div class="clocations" id="map" >
                </div>
                <div class="my_social" style="margin-bottom: 20px">
                    <span class="fa fa-facebook ee text-center"></span>
                    <span class="fa fa-google-plus ff text-center" ></span>
                    <span class="fa fa-twitter gg text-center" ></span>
                    <span class="fa fa-instagram  hh text-center"></span>
                </div>
            </div>
        </div>
    </div>

    @endsection