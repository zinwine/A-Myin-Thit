@extends('frontend.layout.master')

@section('title','Career')

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
            @foreach($careers as $career)
                <div class="col-md-4 col-sm-4 col-xs-12 one" style="margin-bottom: 15px;">
            <span class="span-edit center-block">
                  <i class="fa fa-user iconuser" style="font-size: 30px"></i>
              </span><br>
                    <p class="litt-name text-center">{{$career->title}}</p>
                    <p class="para">
                        {{substr($career->desp,0,200)}}
                    </p><br>
                    <div class="text-center">
                        <a class="button devart" role="button" href="{{ url('/career/'.$career->id.'/show') }}"
                           style="text-decoration: none">View Details</a>
                    </div>
                    <br><br>
                </div>
            @endforeach
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="pagination pull-right">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

@endsection