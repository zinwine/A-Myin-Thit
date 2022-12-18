@extends('frontend.layout.master')

@section('title','Home')


@section('content')

    <div class="container-fluid slide-img">
        <div class="row">
            <div class="jumborton">
                <div class="pag col-lg-6 col-md-12 am">
                    <p class="text-center title wow lightSpeedIn">A Myin Thit</p>
                    <p class="text-center">BEST CONSTRUCTION (IN MYANMAR) </p>
                    <br>
                    <a role="button" class="btn btn-lg" href="{{ url('/contact') }}"
                       style="text-decoration: none;background-color: rgba(46,45,34,0.8);color:orange">Contact Us</a>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!---------------end Jumborton ----------- -->
    <!--  Start Section  -->

    <div class="container II ">
        <div class="row sections">
            <div class="col-lg-3 col-md-6 col-sm-6  wow fadeInLeft"
                 data-wow-delay="0.2s">
                <div class=" thumbnail">
                    <img src="{{ asset('frontend/photo/logo/counter-1.png') }}" class="center-block img-responsive"
                         style="margin-top: 10px">
                    <p class="text-center">
                        ကၽြႏု္ပ္တို႔၏အမ်ိဳးမ်ိဳးေသာ တည္ေဆာက္ေရးလုပ္ငန္းမ်ားထိေရာက္
                        လွ်င္ျမန္စြာျပီးစီးႏိုင္ေစရန္ dump trucks, back hoes, bulldozers, water browsers, crushers
                        rollers and tower cranes, batching plants ကဲ့သို႔ေသာကုမၸဏီပိုင္
                        ေဆာက္လုပ္ေရးလုပ္ငန္းသံုး စက္ႀကီး မ်ား,
                        ကိရိယာတန္ဆာပလာမ်ားကုိ အသံုးျပဳ၍ တည္ေဆာက္လုပ္ကိုင္ေနပါသည္။
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  wow fadeInLeft"
                 data-wow-delay="0.4s">
                <div class="index thumbnail">
                    <img src="{{ asset('frontend/photo/logo/counter-2.png') }}" class="center-block img-responsive"
                         alt="" style="margin-top: 10px">
                    <p class="text-center">
                        ကၽြႏု္ပ္တို႔၏အမ်ိဳးမ်ိဳးေသာ တည္ေဆာက္ေရးလုပ္ငန္းမ်ားထိေရာက္
                        လွ်င္ျမန္စြာျပီးစီးႏိုင္ေစရန္ dump trucks, back hoes, bulldozers, water browsers, crushers
                        rollers and tower cranes, batching plants ကဲ့သို႔ေသာကုမၸဏီပိုင္
                        ေဆာက္လုပ္ေရးလုပ္ငန္းသံုး စက္ႀကီးမ်ား့,
                        ကိရိယာတန္ဆာပလာမ်ားကုိ အသံုးျပဳ၍ တည္ေဆာက္လုပ္ကိုင္ေနပါသည္။
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6   wow fadeInLeft"
                 data-wow-delay="0.6s">
                <div class="thumbnail">
                    <img src="{{ asset('frontend/photo/logo/counter-3.png') }}" class="center-block img-responsive"
                         alt="" style="margin-top: 10px">
                    <p class="text-center">
                        ကၽြႏု္ပ္တို႔၏အမ်ိဳးမ်ိဳးေသာ တည္ေဆာက္ေရးလုပ္ငန္းမ်ားထိေရာက္
                        လွ်င္ျမန္စြာျပီးစီးႏိုင္ေစရန္ dump trucks, back hoes, bulldozers, water browsers, crushers
                        rollers and tower cranes, batching plants ကဲ့သို႔ေသာကုမၸဏီပိုင္
                        ေဆာက္လုပ္ေရးလုပ္ငန္းသံုး စက္ႀကီးမ်ား,
                        ကိရိယာတန္ဆာပလာမ်ားကုိ အသံုးျပဳ၍ တည္ေဆာက္လုပ္ကိုင္ေနပါသည္။
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6  wow fadeInLeft"
                 data-wow-delay="0.8s">
                <div class="thumbnail">
                    <img src="{{ asset('frontend/photo/logo/counter-4.png') }}" class="center-block img-responsive"
                         alt="" style="margin-top: 10px">
                    <p class="text-center">
                        ကၽြႏု္ပ္တို႔၏အမ်ိဳးမ်ိဳးေသာ တည္ေဆာက္ေရးလုပ္ငန္းမ်ားထိေရာက္
                        လွ်င္ျမန္စြာျပီးစီးႏိုင္ေစရန္ dump trucks, back hoes, bulldozers, water browsers, crushers
                        rollers and tower cranes, batching plants ကဲ့သို႔ေသာကုမၸဏီပိုင္
                        ေဆာက္လုပ္ေရးလုပ္ငန္းသံုး စက္ႀကီးမ်ား.
                        ကိရိယာတန္ဆာပလာမ်ားကုိ အသံုးျပဳ၍ တည္ေဆာက္လုပ္ကိုင္ေနပါသည္။
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!----------------- start Service -----------  -->

    <div class="container-fluid service">
        <h1 class="text-center .serviceHeading">၀န္ေဆာင္မႈမ ်ား</h1>
        <hr style="width: 250px;height: 2px;margin:auto;background-color: orange">
        <br><br>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/photo/service/icon-bu2.png') }}" class="img-thumbnai center-block">
            <br>
            <div class="serviceHeading">
                <h4 class="text-center">ေခတ္မီျခင္း</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis cumque eius
                exercitationem,
                <a href="{{ url('/inno') }}">View Details</a>
            </p>
            <br><br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/photo/service/icon-bu-3.png') }}" class="img-thumbnai center-block">
            <br>
            <div class="serviceHeading">
                <h4 class="text-center">ေဆာက္လုပ္ေရးလွ ်င္ျမန္ျခင္း</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis cumque eius
                exercitationem,
                <a href="{{ url('/fast') }}">View Details</a>
            </p>
            <br><br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/photo/service/icon-bu-4.png') }}" class="img-thumbnai center-block">
            <br>
            <div class="serviceHeading">
                <h4 class="text-center .serviceHeading">ေဆာက္လုပ္ေရးပစၥည္းမ ်ားေကာင္းျခင္း</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis cumque eius
                exercitationem,
                <a href="{{ url('/support') }}">View Details</a>
            </p>

            <br><br>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/photo/service/icon-bu-5.png') }}" class="img-thumbnai center-block">
            <br>
            <div class="serviceHeading">
                <h4 class="text-center .serviceHeading">ကြ ်မ္းက ်င္ေသာအင္ဂ ်င္နီယာမ ်ား</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis cumque eius
                exercitationem,
                <a href="{{ url('/pro') }}">View Details</a>
            </p>

            <br><br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <img src="{{ asset('frontend/photo/service/icon-bu-6.png') }}" class="img-thumbnai center-block">
            <br>
            <div class="serviceHeading">
                <h4 class="text-center">ေကာင္းမြန္လွပေသာဒီဇိုင္းမ ်ား</h4>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis corporis cumque eius
                exercitationem,
                <a href="{{ url('/design') }}">View Details</a>
            </p>

            <br><br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 safety">
            <img src="{{ asset('frontend/photo/service/icon-bu-1.png') }}" class="center-block ic1">
            <!-- <img src="image/service/icon1.png"  class="center-block ic2"> -->
            <br>
            <h4 class="text-center .serviceHeading">လံုျခံဳစိတ္ခ ်ရျခင္း</h4>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi aut cum cumque, d
                <a href="{{ url('/safety') }}">View Details</a>
            </p>

            <br><br>
        </div>
    </div>
    <span></span>
    <!---------------- end Service ------------------ -->

    {{-- Start WHO WE ARE--}}

    <div class="container all-border">
        <div class="row border-row">
            <div class="col-md-4 col-md-4-edit" style="padding-left: 3%;
    padding-right: 3%;padding-top: 1%;">
                <h2>Who We Are</h2>
                <p class="text-justify">
                    1996ခုႏွစ္မွယေန႔ကာလအထိနိုင္ငံေတာ္တည္ေဆာက္ေရး တြင္သာမကပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္း &nbsp; တြင္ပါ
                    ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို(Htoo Group of
                    companies)၏စီမံခန္႔ခြဲမႈေအာက္တြင္ေအာင္ျမင္တိုးတက္လွ်က္ ရွိေသာ ေဆာက္လုပ္ေရးကုမၸဏီတစ္ခု ျဖစ္သည္။
                </p>
                <a href="{{ url('/about') }}" role="button" class="btn btn-default"
                   style="margin-bottom: 10px;background-color: orange;color: white">View More</a>
            </div>
            <div class="col-md-8 col-md-8-edit" style=" padding-left: 0;
    padding-right: 0;">
                <div class="view view-first">
                    <img class="who-image" src="{{ asset('frontend/photo/back/construction1.png') }}">
                    <div class="mask">
                        <h2>Lorem ipsum dolor sit amet</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-row-1">
            <div class="col-md-4 col-md-4-edit-1" style="padding-left: 0;
    padding-right: 0;">
                <div class="view view-first">
                    <img class="who-image" src="{{ asset('frontend/photo/back/construction1.png') }}">
                    <div class="mask">
                        <h2>Lorem ipsum dolor sit amet</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-8-edit-1" style=" padding-left: 3%;
    padding-right: 3%;padding-top: 1%;">
                <h2>Who we are</h2>
                <p style="text-align: justify">
                    ႏိုင္ငံေတာ္ တည္ေဆာက္ေရး စီမံကိန္းမ်ားတြင္ Htoo Construction Development Group အေနျဖင့္သမၼတအိမ္ေတာ္၊
                    အစိုးရႏွင့္ဆိုင္ေသာ အေဆာက္အဦးမ်ားႏွင့္ရုံးမ်ား ၊ႏိုင္ငံေတာ္ဧည့္ေဂဟာ၊ ၀န္ႀကီးမ်ားႏွင့္
                    အဆင့္ျမင့္အရာရွိႀကီးမ်ား၏ အိမ္ယာမ်ား ၊ေက်ာက္မ်က္ရတနာျပတိုက္၊
                    အစိုးရ၀န္ထမ္းမ်ားအတြက္ေနအိမ္တိုက္ခန္းမ်ား၊ နည္းပညာတကၠသိုလ္မ်ား ၊ေဆးရုံမ်ား၊
                    မုန္တိုင္းခံအေဆာက္အဦးမ်ား(Cyclone shelters)၊ ေစတီပုထိုးမ်ား၊ ဘာသာေရးႏွင့္ ဆိုင္ေသာအေဆာက္အဦးမ်ား၊
                    စက္ရုံမ်ား၊ ေရေလွာင္ကန္မ်ား ၊ ေရကာတာႏွင့္ဆည္ႀကီးမ်ား၊ ေရအားလ ွ်ပ္စစ္စက္ရုံႀကီးမ်ားႏွင့္
                    အျခားေသာစက္မႈလုပ္ငန္းႏွင့္ ဆုိင္ေသာအေဆာက္အအံုႀကီးမ်ားကို တည္ေဆာက္ေအာင္ျမင္ခဲ့ျပီးျဖစ္ပါသည္။
                </p>
                <a href="{{ url('/about') }}" role="button" class="btn btn-default"
                   style="margin-bottom: 10px;background-color: orange;color: white">View More</a>
                <br>
            </div>
            <br>
        </div>
    </div>

    {{--END WHO WE ARE--}}


    <!--start Why Choose Us-->

    <div class="container why" id="why">
        <div class="row">
            <h1 class="text-center">Why Choose Us</h1>
            <hr style="width: 250px;height: 2px;background-color: orange;margin: auto">
            <br><br><br>
            <div class="col-lg-5">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="im">
                            <img src="{{asset('frontend/photo/back/project-1-480x300.jpg')}}" alt="" width="100%"
                                 class="image"></div>
                        <p class="text-center"><b>
                                Project 1
                            </b>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <div class="im">
                            <img src="{{asset('frontend/photo/back/project-1-480x300.jpg')}}" alt="" width="100%"
                                 class="image"></div>
                        <p class="text-center"><b>
                                Project 2
                            </b>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <div class="im">
                            <img src="{{asset('frontend/photo/back/project-1-480x300.jpg')}}" alt="" width="100%"
                                 class="image"></div>
                        <p class="text-center"><b>
                                Project 3
                            </b>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <div class="im">
                            <img src="{{asset('frontend/photo/back/project-1-480x300.jpg')}}" alt="" width="100%"
                                 class="image"></div>
                        <p class="text-center"><b>
                                Project 4
                            </b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="why">
                    <p class="text-justify">
                        Htoo Construction Development Group အေနျဖင့္သမၼတအိမ္ေတာ္၊ အစိုးရႏွင့္ဆိုင္ေသာ
                        အေဆာက္အဦးမ်ားႏွင့္ရုံးမ်ား ၊ႏိုင္ငံေတာ္ဧည့္ေဂဟာ၊ ၀န္ႀကီးမ်ားႏွင့္ အဆင့္ျမင့္အရာရွိႀကီးမ်ား၏
                        အိမ္ယာမ်ား ၊ေက်ာက္မ်က္ရတနာျပတိုက္၊ အစိုးရ၀န္ထမ္းမ်ားအတြက္ေနအိမ္တိုက္ခန္းမ်ား၊
                        နည္းပညာတကၠသိုလ္မ်ား ၊ေဆးရုံမ်ား၊ မုန္တိုင္းခံအေဆာက္အဦးမ်ား(Cyclone shelters)၊ ေစတီပုထိုးမ်ား၊
                        ဘာသာေရးႏွင့္ ဆိုင္ေသာအေဆာက္အဦးမ်ား၊ စက္ရုံမ်ား၊ ေရေလွာင္ကန္မ်ား ၊ ေရကာတာႏွင့္ဆည္ႀကီးမ်ား၊
                        ေရအားလ ွ်ပ္စစ္စက္ရုံႀကီးမ်ားႏွင့္ အျခားေသာစက္မႈလုပ္ငန္းႏွင့္ ဆုိင္ေသာအေဆာက္အအံုႀကီးမ်ားကို
                        တည္ေဆာက္ေအာင္ျမင္ခဲ့ျပီးျဖစ္ပါသည္။ယံုၾကည္စိတ္ခ ်ရျခင္း၊လွပေရြ႔ေစ ်းသက္သာေသာေၾကာင့္ ျပည္တြင္းတြင္
                        Htoo ေဆာက္လုပ္ေရးကို ေရြးခ ်ယ္သူမ ်ား မ ်ားျပားေနျပီျဖစ္သည္။
                    </p>
                    <a href="{{ url('/why') }}" class="" >View More......</a>
                </div>
            </div>
        </div>
    </div>

    <!--/*-end Why Choose Us*/

        <!--Our Partaners-->

    <div class="container-fluid partaners">
        <div class="row">
            <h1 class="text-center" style="font:italic bold 29px Georgia,Times New Romanm,Times,serif">Our Partners</h1>
            <hr style="width: 250px;height: 2px;background-color: orange;margin: auto">
            <br><br>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <a href="#"> <img src="{{asset('frontend/photo/logo/plogo1.png')}}" alt=""
                                          class="img-responsive center-block" style="margin-bottom: 20px"></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <a href="#"><img src="{{asset('frontend/photo/logo/plogo2.png')}}" alt=""
                                         class="img-responsive center-block" style="margin-bottom: 20px"></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <a href="#"><img src="{{asset('frontend/photo/logo/plogo1.png')}}" alt=""
                                         class="img-responsive center-block" style="margin-bottom: 20px"></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <a href="#"> <img src="{{asset('frontend/photo/logo/plogo2.png')}}" alt=""
                                          class="img-responsive center-block" style="margin-bottom: 20px"></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <a href="#"><img src="{{asset('frontend/photo/logo/plogo1.png')}}" alt=""
                                         class="img-responsive center-block" style="margin-bottom: 20px"></a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <a href="#"><img src="{{asset('frontend/photo/logo/plogo2.png')}}" alt=""
                                         class="img-responsive center-block" style="margin-bottom: 20px"></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end Our Partners -->

    <style>
        .view {

            float: left;
            /*border: 10px solid #fff;*/
            overflow: hidden;
            position: relative;
            box-shadow: 1px 1px 2px #e6e6e6;
        }

        .view .mask {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
        }

        .view h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            margin: 20px 0 0 0;
        }

        .view-first img {
            transition: all 0.2s linear;
            width: 100%;
            height: 100%;
        }

        .view-first .mask {
            opacity: 0;
            background-color: rgba(0, 0, 0, 0.4);
            transition: all 0.4s ease-in-out;
        }

        .view-first h2 {
            transform: translateY(-100px);
            opacity: 0;
            transition: all 0.2s ease-in-out;
        }

        .view-first a.info {
            opacity: 0;
            transition: all 0.2s ease-in-out;
        }

        .view-first:hover img {
            transform: scale(1.1);
        }

        .view-first:hover .mask {
            opacity: 1;
        }

        .view-first:hover h2 {
            opacity: 1;
            transform: translateY(0px);
        }

    </style>
@endsection






