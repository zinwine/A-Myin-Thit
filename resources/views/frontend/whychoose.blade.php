@extends('frontend.layout.master')

@section('title','Why Choose Us')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="head_img">
                <h2>Why Choose Us</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container header2">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="header1 text-center">The Right Team For Your Project</h3>
                <p class="para1 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam
                    asperiores autem cumque distinctio dolore, fugiat harum impedit numquam possimus, quam, saepe
                    similique suscipit vero. Nisi perspiciatis soluta totam veritatis voluptates?Lorem sit amet,
                    consectetur adipisicing elit. Accusantium assumenda consequatur cumque delectus dignissimos esse
                    expedita hic illum nam nisi omnis optio, perferendis quidem quo ratione recusandae similique
                    suscipit unde.</p>
                <p class="para1 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam
                    consequuntur, cupiditate laudantium libero magnam nostrum officiis placeat possimus qui, quidem sint
                    suscipit voluptas. Aliquam </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('frontend/photo/back/choose.jpg') }}" alt="" class="img-responsive">
            </div>


        </div>
        <br>
        <h3 class="text-center">
            <mark style="color:orange;font-weight: bold">Choose Amyin Thit Construction Because</mark>
        </h3>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <h4><span class="fa fa-check" style="color: darkorange"></span>We listen</h4>
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis cumque
                    deleniti distinctio dolor doloribus, eaque eveniet fuga ipsam, maiores modi molestiae molestias
                    nobis recusandae repellendus sapiente sed similique tenetur.</p>
            </div>
            <div class="col-sm-6">
                <h4><span class="fa fa-check" style="color: darkorange"></span>Experienced</h4>
                <p class="text-left">Lorem ipsum dolor sit exercitationem incidunt ipsum quibusdam, sapiente sunt
                    veritatis voluptates! Atque, autem blanditiis consectetur consequuntur delectus ducimus libero
                    molestias pariatur quasi suscipit!</p>
            </div>
            <div class="col-sm-6">
                <h4><span class="fa fa-check" style="color: darkorange"></span>Faster Team Work</h4>
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis cumque
                    deleniti distinctio dolor doloribus, eaque eveniet fuga ipsam, maiores modi molestiae molestias
                    nobis recusandae repellendus sapiente sed similique tenetur.</p>
            </div>
            <div class="col-sm-6">
                <h4><span class="fa fa-check" style="color: darkorange"></span>Attractive Building</h4>
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque
                    exercitationem incidunt ipsum quibusdam, sapiente sunt veritatis voluptates! Atque, autem blanditiis
                    consectetur consequuntur delectus ducimus libero molestias pariatur quasi suscipit!</p>
            </div>
            <div class="col-sm-6">
                <h4><i class="fa fa-check" style="color: darkorange"></i>Beautiful Decoration</h4>
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi corporis cumque
                    deleniti distinctio dolor doloribus, eaque eveniet fuga ipsam, maiores modi molestiae molestias
                    nobis recusandae repellendus sapiente sed similique tenetur.</p>
            </div>
            <div class="col-sm-6">
                <h4><span class="fa fa-check" style="color: darkorange"></span>Affordable Price</h4>
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque
                    exercitationem incidunt ipsum quibusdam, sapiente sunt veritatis voluptates! Atque, autem blanditiis
                    consectetur consequuntur delectus ducimus libero molestias pariatur quasi suscipit!</p>
            </div>
        </div>
        <img src="{{asset('frontend/photo/back/save.png')}}" class="img-responsive" alt="">
    </div>


@endsection