@extends('frontend.layout.master')

@section('title','About')

@section('content')

    <div class="container-fluid">
        <div class="row" style="overflow: hidden">
            <div class="head_img">
                <h2>About Us</h2>
            </div>
        </div>
    </div>

    <div class="container history">
        <div class="row">
            <div class="col-sm-4 ">
                <img src="{{ asset('frontend/photo/back/project-1-480x300.jpg') }}" alt="" class="img-responsive"
                     width="100%" height="100%">
            </div>
            <div class="col-sm-8">
                <h1 class="text-center">Our History</h1>
                <hr style="width:300px;height: 2px;background-color: orange;margin:auto">
                <br>
                <p class="pull-right text-center">
                    1996 ခုႏွစ္မွ ယေန႔ကာလအထိ နိုင္ငံေတာ္ တည္ေဆာက္ေရးတြင္သာမက ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ
                    ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို Htoo Group of companies ၏ စီမံခန္႔ခြဲမႈေအာက္တြင္
                    ေအာင္ျမင္တိုးတက္လွ်က္ ရွိေသာ ေဆာက္လုပ္ေရးကုမၸဏီတစ္ခု ျဖစ္သည္။
                    ႏိုင္ငံေတာ္ တည္ေဆာက္ေရး စီမံကိန္းမ်ားတြင္ Htoo Construction Development Group အေနျဖင့္သမၼတအိမ္ေတာ္၊
                    အစိုးရႏွင့္ဆိုင္ေသာ အေဆာက္အဦးမ်ားႏွင့္ရုံးမ်ား ၊ႏိုင္ငံေတာ္ဧည့္ေဂဟာ၊ ၀န္ႀကီးမ်ားႏွင့္
                    အဆင့္ျမင့္အရာရွိႀကီးမ်ား၏ အိမ္ယာမ်ား ၊ေက်ာက္မ်က္ရတနာျပတိုက္၊
                    အစိုးရ၀န္ထမ္းမ်ားအတြက္ေနအိမ္တိုက္ခန္းမ်ား၊ နည္းပညာတကၠသိုလ္မ်ား ၊ေဆးရုံမ်ား၊
                    မုန္တိုင္းခံအေဆာက္အဦးမ်ား(Cyclone shelters)၊ ေစတီပုထိုးမ်ား၊ ဘာသာေရးႏွင့္ ဆိုင္ေသာအေဆာက္အဦးမ်ား၊
                    စက္ရုံမ်ား၊ ေရေလွာင္ကန္မ်ား ၊ ေရကာတာႏွင့္ဆည္ႀကီးမ်ား၊ ေရအားလ ွ်ပ္စစ္စက္ရုံႀကီးမ်ားႏွင့္
                    အျခားေသာစက္မႈလုပ္ငန္းႏွင့္ ဆုိင္ေသာအေဆာက္အအံုႀကီးမ်ားကို တည္ေဆာက္ေအာင္ျမင္ခဲ့ျပီးျဖစ္ပါသည္။
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid mission">
        <div class="row">
            <div class="col-sm-8">
                <h1 class="text-center">Our Mission</h1>
                <hr style="width:300px;height: 2px;background-color: orange;margin:auto">
                <br>
                <p class="pull-right text-center">
                    1996 ခုႏွစ္မွ ယေန႔ကာလအထိ နိုင္ငံေတာ္ တည္ေဆာက္ေရးတြင္သာမက ပုဂၢလိကတည္ေဆာက္ေရးလုပ္ငန္းတြင္ပါ
                    ေဆာက္လုပ္ေရးစီမံကိန္းလုပ္ငန္းမ်ားကို Htoo Group of companies ၏ စီမံခန္႔ခြဲမႈေအာက္တြင္
                    ေအာင္ျမင္တိုးတက္လွ်က္ ရွိေသာ ေဆာက္လုပ္ေရးကုမၸဏီတစ္ခု ျဖစ္သည္။
                    ႏိုင္ငံေတာ္ တည္ေဆာက္ေရး စီမံကိန္းမ်ားတြင္ Htoo Construction Development Group အေနျဖင့္သမၼတအိမ္ေတာ္၊
                    အစိုးရႏွင့္ဆိုင္ေသာ အေဆာက္အဦးမ်ားႏွင့္ရုံးမ်ား ၊ႏိုင္ငံေတာ္ဧည့္ေဂဟာ၊ ၀န္ႀကီးမ်ားႏွင့္
                    အဆင့္ျမင့္အရာရွိႀကီးမ်ား၏ အိမ္ယာမ်ား ၊ေက်ာက္မ်က္ရတနာျပတိုက္၊
                    အစိုးရ၀န္ထမ္းမ်ားအတြက္ေနအိမ္တိုက္ခန္းမ်ား၊ နည္းပညာတကၠသိုလ္မ်ား ၊ေဆးရုံမ်ား၊
                    မုန္တိုင္းခံအေဆာက္အဦးမ်ား(Cyclone shelters)၊ ေစတီပုထိုးမ်ား၊ ဘာသာေရးႏွင့္ ဆိုင္ေသာအေဆာက္အဦးမ်ား၊
                    စက္ရုံမ်ား၊ ေရေလွာင္ကန္မ်ား ၊ ေရကာတာႏွင့္ဆည္ႀကီးမ်ား၊ ေရအားလ ွ်ပ္စစ္စက္ရုံႀကီးမ်ားႏွင့္
                    အျခားေသာစက္မႈလုပ္ငန္းႏွင့္ ဆုိင္ေသာအေဆာက္အအံုႀကီးမ်ားကို တည္ေဆာက္ေအာင္ျမင္ခဲ့ျပီးျဖစ္ပါသည္။
                </p>
            </div>
            <div class="col-sm-4 ">
                <img src="{{ asset('frontend/photo/back/project-1-480x300.jpg') }}" alt="" class="img-responsive"
                     width="100%" height="100%">
            </div>
        </div>
    </div>

    <div class="container team" style="margin-bottom: 30px">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Meet Our Teams</h1>
                <hr style="width: 250px;height: 2px;background-color: orange;margin: auto">
                <br><br>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="{{ asset('frontend/photo/back/image1.jpg') }}" alt=""
                     class="img-responsive center-block img-circle ">
                <h2 class="text-center">Our CEO</h2>
                <h4 class="text-center">ဦးေနေအာင္</h4>
                <p class="text-center">
                    ကၽြႏ္ုပ္တို႕သည္လုပ္ငန္းမွအစုရွယ္ရာရွင္မ်ား အက်ဳိးခံစားရေစမည့္အျမတ္ရရွိရုံ
                    သက္သက္မ်ွသာမဟုတ္ဘဲ ရုိးသားျခင္း ၊ ေပါင္းစည္းျခင္း ၊ ျမန္ဆန္မ ႈ၊ လူမွဳေရးတာ၀န္ႏွင္႕
                    မိသားစုစိတ္ဓာတ္ စသည္တို႔ျဖင့္ လူသားျခင္းစာနာေထာက္ထားျခင္းမ်ားကို
                    လည္း မ်ွေ၀ခံစားပါသည္။
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="{{ asset('frontend/photo/back/image1.jpg') }}" alt=""
                     class="img-responsive center-block img-circle ">
                <h2 class="text-center">Our Manager</h2>
                <h4 class="text-center">ဦးေမာင္ေမာင္</h4>
                <p class="text-center">
                    ကၽြႏ္ုပ္တို႕သည္လုပ္ငန္းမွအစုရွယ္ရာရွင္မ်ား အက်ဳိးခံစားရေစမည့္အျမတ္ရရွိရုံ
                    သက္သက္မ်ွသာမဟုတ္ဘဲ ရုိးသားျခင္း ၊ ေပါင္းစည္းျခင္း ၊ ျမန္ဆန္မ ႈ၊ လူမွဳေရးတာ၀န္ႏွင္႕
                    မိသားစုစိတ္ဓာတ္ စသည္တို႔ျဖင့္ လူသားျခင္းစာနာေထာက္ထားျခင္းမ်ားကို
                    လည္း မ်ွေ၀ခံစားပါသည္။
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="{{ asset('frontend/photo/back/image1.jpg') }}" alt=""
                     class="img-responsive center-block img-circle ">
                <h2 class="text-center">Site Engineers</h2>
                <h4 class="text-center">ကိုေအာင္ေအာင္(team leader)</h4>
                <p class="text-center">
                    ကၽြႏ္ုပ္တို႕သည္လုပ္ငန္းမွအစုရွယ္ရာရွင္မ်ား အက်ဳိးခံစားရေစမည့္အျမတ္ရရွိရုံ
                    သက္သက္မ်ွသာမဟုတ္ဘဲ ရုိးသားျခင္း ၊ ေပါင္းစည္းျခင္း ၊ ျမန္ဆန္မ ႈ၊ လူမွဳေရးတာ၀န္ႏွင္႕
                    မိသားစုစိတ္ဓာတ္ စသည္တို႔ျဖင့္ လူသားျခင္းစာနာေထာက္ထားျခင္းမ်ားကို
                    လည္း မ်ွေ၀ခံစားပါသည္။
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="{{ asset('frontend/photo/back/image1.jpg') }}" alt=""
                     class="img-responsive center-block img-circle ">
                <h2 class="text-center">Support Teams</h2>
                <h4 class="text-center">ဦးလွဦး(team leader)</h4>
                <p class="text-center">
                    ကၽြႏ္ုပ္တို႕သည္လုပ္ငန္းမွအစုရွယ္ရာရွင္မ်ား အက်ဳိးခံစားရေစမည့္အျမတ္ရရွိရုံ
                    သက္သက္မ်ွသာမဟုတ္ဘဲ ရုိးသားျခင္း ၊ ေပါင္းစည္းျခင္း ၊ ျမန္ဆန္မ ႈ၊ လူမွဳေရးတာ၀န္ႏွင္႕
                    မိသားစုစိတ္ဓာတ္ စသည္တို႔ျဖင့္ လူသားျခင္းစာနာေထာက္ထားျခင္းမ်ားကို
                    လည္း မ်ွေ၀ခံစားပါသည္။
                </p>
            </div>
        </div>
    </div>

@endsection