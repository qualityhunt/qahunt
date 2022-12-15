@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('frontend.about'))

@section('content')




    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-1">
            <div class="container">
                <div class="content-part text-center">
                    <h1 class="breadcrumbs-title white-color mb-0">Hakkımızda</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- About Section Start -->
        <div class="rs-about inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <div class="row y-middle mb-64 lg-mb-30 md-mb-0">
                    <div class="col-lg-6 md-mb-95">
                        <div class="image-part">
                            <img src="{{ URL::to('uploads/about',$about->about_image)}}" alt="{{ $about->about_title}}">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-50 md-pl-15 pr-50 lg-pr-15">
                        <div class="sec-title mb-25">
                            <div class="sub-title primary">QA Hunt Hakkında</div>
                            <h2 class="title mb-18">{{ $about->about_title}}</h2>
                            <div class="desc">{!! $about->about_text !!}</div>
                        </div>

                        <div class="btn-part">
                            <a class="readon" href="{{ (route('frontend.contact')) }}">İletişim</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Counter Section Start -->
        <div class="rs-counter style1 modify bg21 pt-92 pb-100 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-52 md-mb-29">
                    <div class="sub-title white-color">Sayılarla Biz</div>
                    <h2 class="title mb-0 white-color">Bizi Tercih Etmeniz İçin Gerçekler</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="couter-part plus">
                            <div class="rs-count">81</div>
                            <h5 class="title">Çalışılan il sayısı</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="couter-part plus">
                            <div class="rs-count">500</div>
                            <h5 class="title">Bayilerimiz</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                        <div class="couter-part plus">
                            <div class="rs-count">100000</div>
                            <h5 class="title">Mutlu müşteri sayısı</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="couter-part plus">
                            <div class="rs-count">750000</div>
                            <h5 class="title">Satılan cihaz sayısı</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Section End -->


    </div>
    <!-- Main content End -->



@endsection

