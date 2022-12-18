@extends('frontend.layout.master')

@section('title','Support')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="head_img">
                <h2> ေဆာက္လုပ္ေရးပစၥည္းမ ်ားေကာင္းျခင္း</h2>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 service_detail">
                <img src="{{asset('frontend/photo/head/support.jpg') }}">
                <p class="text-justify">1996 ခုႏွစ္မွ ယေန႔ကာလအထိ နိုင္ငံေတာ္ တည္ေဆာက္ေရးတြင္သာမက
                    ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို Htoo Group of companies ၏
                    စီမံခန္႔ခြဲမႈေအာက္တြင္ ေအာင္ျမင္တိုးတက္လွ်က္ ရွိေသာ ေဆာက္လုပ္ေရးကုမၸဏီတစ္ခု ျဖစ္သည္။ႏိုင္ငံေတာ္
                    တည္ေဆာက္ေရး စီမံကိန္းမ်ားတြင္ Htoo Construction Development Group အေနျဖင့္သမၼတအိမ္ေတာ္၊
                    အစိုးရႏွင့္ဆိုင္ေသာ အေဆာက္အဦးမ်ားႏွင့္ရုံးမ်ား ၊ႏိုင္ငံေတာ္ဧည့္ေဂဟာ၊ ၀န္ႀကီးမ်ားႏွင့္
                    အဆင့္ျမင့္အရာရွိႀကီးမ်ား၏ အိမ္ယာမ်ား ၊ေက်ာက္မ်က္ရတနာျပတိုက္၊
                    အစိုးရ၀န္ထမ္းမ်ားအတြက္ေနအိမ္တိုက္ခန္းမ်ား၊ နည္းပညာတကၠသိုလ္မ်ား ၊ေဆးရုံမ်ား၊
                    မုန္တိုင္းခံအေဆာက္အဦးမ်ား(Cyclone shelters)၊ ေစတီပုထိုးမ်ား၊ ဘာသာေရးႏွင့္ ဆိုင္ေသာအေဆာက္အဦးမ်ား၊
                    စက္ရုံမ်ား၊ ေရေလွာင္ကန္မ်ား၊ေရကာတာႏွင့္ဆည္ႀကီးမ်ား၊ ေရအားလ ွ်ပ္စစ္စက္ရုံႀကီးမ်ားႏွင့္
                    အျခားေသာစက္မႈလုပ္ငန္းႏွင့္ ဆုိင္ေသာအေဆာက္အအံုႀကီးမ်ားကို တည္ေဆာက္ေအာင္ျမင္ခဲ့ျပီးျဖစ္ပါသည္။
                </p>

            </div>
            <div class="col-md-4" style="margin-bottom: 10px">
                <div class="servicelist">
                    <div class="ser_head">
                        <h2>Other Services</h2>
                    </div>
                    <!-- Left-aligned media object -->
                    <a href="{{url('/safety')}}" style="text-decoration: none">
                        <div class="media showsevice">
                            <div class="media-left">
                                <img src="{{ asset('frontend/photo/head/safety.jpg') }}" alt="Fast Bullilding"
                                     class="media-object" style="width:60px;height: 60px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style=" font:bold 17px Geogria,Times New Roman,Times,serif;">
                                    လံုျခံဳစိတ္ခ ်ရျခင္း</h4>
                                <p class="text-justify">1996ခုႏွစ္မွယေန႔ကာလအထိ နိုင္ငံေတာ္တည္ေဆာက္ေရးတြင္သာမက
                                    ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/pro') }}" style="text-decoration: none">
                        <div class="media showsevice">
                            <div class="media-left">
                                <img src="{{ asset('frontend/photo/head/pro.jpg') }}" alt="Support" class="media-object"
                                     style="width:60px;height: 60px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style=" font:bold 17px Geogria,Times New Roman,Times,serif;">
                                    ကြ ်မ္းက ်င္ေသာအင္ဂ ်င္နီယာမ ်ား</h4>
                                <p class="text-justify">1996ခုႏွစ္မွယေန႔ကာလအထိ နိုင္ငံေတာ္တည္ေဆာက္ေရးတြင္သာမက
                                    ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/fast') }}" style="text-decoration: none">
                        <div class="media showsevice">
                            <div class="media-left">
                                <img src="{{ asset('frontend/photo/head/fast.jpg') }}" alt="professional"
                                     class="media-object" style="width:60px;height: 60px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style=" font:bold 17px Geogria,Times New Roman,Times,serif;">
                                    ္ေဆာက္လုပ္ေရးလွ ်င္ျမန္ျခင္း</h4>
                                <p class="text-justify">1996ခုႏွစ္မွယေန႔ကာလအထိ နိုင္ငံေတာ္တည္ေဆာက္ေရးတြင္သာမက
                                    ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို</p>
                            </div>
                        </div>
                    </a>


                    <a href="{{ url('/design') }}" style="text-decoration: none;">
                        <div class="media showsevice">

                            <div class="media-left">
                                <img src="{{ asset('frontend/photo/head/design.png') }}" alt="" class="media-object"
                                     style="width:60px;height: 60px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style=" font:bold 17px Geogria,Times New Roman,Times,serif;">
                                    ေကာင္းမြန္လွပေသာဒီဇိုင္းမ ်ား</h4>
                                <p class="text-justify">1996ခုႏွစ္မွယေန႔ကာလအထိ နိုင္ငံေတာ္တည္ေဆာက္ေရးတြင္သာမက
                                    ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ url('/inno') }}" style="text-decoration: none">
                        <div class="media showsevice">
                            <div class="media-left">
                                <img src="{{ asset('frontend/photo/head/innovation.jpg') }}" alt="safety"
                                     class="media-object" style="width:60px;height: 60px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style=" font:bold 17px Geogria,Times New Roman,Times,serif;">
                                    ေခတ္မီဆန္းသစ္မႈမ ်ား</h4>
                                <p class="text-justify"> 1996ခုႏွစ္မွယေန႔ကာလအထိ နိုင္ငံေတာ္တည္ေဆာက္ေရးတြင္သာမက
                                    ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>

@endsection