@extends('frontend.layouts.app')

@section('title', 'Nereden Alınır?')

@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-2">
            <div class="container">
                <div class="content-part text-center pt-160 pb-160">
                    <h1 class="breadcrumbs-title white-color mb-0">Nereden Alınır?</h1>
                </div>
            </div>
        </div>

        <!-- Breadcrumbs Section End -->
        <div id="rs-services" class="rs-services style1 modify2 pt-100 pb-84 md-pt-80 md-pb-64">
            <div class="container">
                <div class="row gutter-16">
                   <div class="col-lg-12 col-sm-6 mb-16"> <h2 style="text-align: center;">Toptancılarımız</h2></div>

@foreach($toptanci as $top)
                    <div class="col-lg-3 col-sm-6 mb-16">
                        <div class="service-wrap">
                            <div class="icon-part">
                                <img src="{{asset('uploads/company/')}}/{{ $top->src}}" style="
    max-width: 240px;
" alt="{{ $top->name}}">
                            </div>
                            <div class="content-part">
                                <h5 class="title"> {{ $top->name}} </h5>
                                <div class="desc">{{ $top->category_il }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row gutter-16">
                    <div class="col-lg-12 col-sm-6 mb-16"> <h2 style="text-align: center;">Çözüm Ortağımız</h2></div>

                    @foreach($bayi as $ba)
                        <div class="col-lg-3 col-sm-6 mb-16">
                            <div class="service-wrap">
                                <div class="icon-part">
                                    <img src="{{asset('uploads/company/')}}/{{ $ba->src}}" style="max-width: 240px;" alt="{{ $ba->name}}">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"> {{ $ba->name}} </h5>
                                    <div class="desc">{{ $ba->il_getir->name }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main content End -->


@endsection

