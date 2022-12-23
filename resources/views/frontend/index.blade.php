@extends('frontend.layouts.app') @section('title',
GeneralSiteSettings('site_title') . ' | ' . __('navs.general.home'))
@section('content')
<div class="main-content">

    <!-- Main content Start -->
    <!-- Slider Start -->
    <!-- Slider Start -->
    <div id="rs-slider" class="rs-slider slider1">

        <div class="bend niceties">

            <div id="nivoSlider" class="slides">
                @foreach ($sliders as $slider)

                <img
                    src="{{asset('uploads/sliders/')}}/{{$slider->image}}"
                    alt=""
                    title="#slide-{{ $loop->index + 1 }}"/>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Slider End -->

    <!-- Services Mini Section Start <div class="rs-services style1 pt-100 pb-84
    md-pt-80 md-pb-64"> <div class="container"> <h2 align="center" ;><b>Distribütörü
    Olduğumuz Markalar</b> </h3> <br> <div class="row gutter-16"> <div
    class="col-lg-3 col-sm-6 mb-16"> <div class="service-wrap"> <div
    class="content-part"> <a href="QA Huntdraytek.php"><img
    src="{{('frontend/assets/img/marka/dry.png')}}" width="100%" height="auto"
    /></a> </div> </div> </div> <div class="col-lg-3 col-sm-6 mb-16"> <div
    class="service-wrap"> <div class="content-part"> <a href="QA Huntengenius.php">
    <img src="{{('frontend/assets/img/marka/engenius_logo.png')}}" width="100%"
    height="auto" /></a> </div> </div> </div> <div class="col-lg-3 col-sm-6 mb-16">
    <div class="service-wrap"> <div class="content-part"> <a href="QA
    Huntsynology.php"><img
    src="{{('frontend/assets/img/marka/Synology_logo_Black.png')}}" width="100%"
    height="auto" /></a> </div> </div> </div> <div class="col-lg-3 col-sm-6 mb-16">
    <div class="service-wrap"> <div class="content-part"> <a href="lr-link.php"><img
    src="{{('frontend/assets/img/marka/lr-link-logo.png')}}" width="100%"
    height="auto" /></a> </div> </div> </div> </div> </div> </div> Services Mini
    Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 bg1 md-pt-80">
        <div class="container">
            <div class="row y-bottom">

                <div class="col-lg-12 pl-66 pt-75 pb-75 md-pt-42 md-pb-72">
                    <div class="sec-title mb-47 md-mb-42">
                        <h2 class="title mb-0">{{ $about->about_title }}</h2>
                    </div>

                    <div class="services-part">

                        <div class="services-text">
                            <div class="desc">{!! $about->about_text !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Services Section Start -->
    <div
        id="rs-services"
        class="rs-services style1 modify pt-92 pb-84 md-pt-72 md-pb-64">
        <div class="container">
            <div class="sec-title text-center mb-47 md-mb-42">
                <h2 class="title mb-0">Ne Yapıyoruz ?</h2>
            </div>

            <div class="row gutter-16">
                @foreach ($shopping as $shop)
                <div class="card" style="width: 22rem; margin-left:auto;">
                    <img
                        src="{{  URL::to('uploads/shopping/')}}/{{ $shop->image }}"
                        alt="{{$shop->name}}">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="services-single.html">{{$shop->name}}</a>
                        </h5>
                        <p class="card-text" style="position: absolute;">{!! Illuminate\Support\Str::limit($shop->description,120) !!}</p>
                            <a href="services-single.html"  >
                            <button type="button" style="position: absolute; bottom: 20px; right:20px; background-color:#8C52FF;color:white" class="btn btn-lg">Devamını Görüntüle <i class="fa fa-arrow-right" aria-hidden="true"></i>
</i></button>
                      </a>
                       
                    </div>
                </div>

                <!-- <div class="col-lg-12 col-sm-12 mb-16"> <div class="card mb-3"
                style="max-width: 100%"> <div class="row no-gutters" > <div class="col-md-4">
                <img src="{{ URL::to('uploads/shopping/')}}/{{ $shop->image }}"
                alt="{{$shop->name}}"> </div> <div class="col-md-8"> <div class="card-body"> <h5
                class="title"> <a href="services-single.html">{{$shop->name}}</a> </h5> <p
                class="card-text">{!! $shop->description !!}</p> </div> </div> </div> </div>
                <div class="service-wrap"> <div class="row"> <div class="col-3"> <img src="{{
                URL::to('uploads/shopping/')}}/{{ $shop->image }}" alt="{{$shop->name}}"> </div>
                <div class="col-9"> <div class="content-part"> <h5 class="title"> <a
                href="services-single.html">{{$shop->name}}</a> </h5> <div class="desc">{!!
                $shop->description !!}</div> </div> </div> </div> </div> </div>-->

                @endforeach

            </div>

        </div>
    </div>
    <!-- Services Section End -->

    <!-- Skillbar Section Start <div class="rs-skillbar style1 pt-92 pb-100 md-pt-72
    md-pb-80 sm-pt-80"> <div class="container"> <div class="gray-bg"> <div
    class="row"> <img src="{{asset('frontend/assets/img/netcom-banner.jpeg')}}"
    alt=""> <div class="col-lg-6 pl-0 md-order-first md-pl-pr-15"> <div
    class="bg-part md-pt-200 md-pb-200"></div> </div> </div> </div> </div> </div>
    Skillbar Section End -->

    <!-- Contact Section Start -->
    <div class="rs-contact style1 gray-bg pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="white-bg">
                <div class="row">
                    <div class="col-lg-8 form-part">
                        <div class="sec-title mb-35 md-mb-30">
                            <h2 class="title mb-0">Bizimle İletişime Geçin</h2>
                        </div>
                        <div id="form-messages"></div>
                        <form
                            id="contact-form"
                            class="contact-form"
                            method="post"
                            action="smtp.hostinger.com">
                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="text" name="name" placeholder="Ad - Soyad" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="email" name="email" placeholder="E-posta" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="text" name="phone" placeholder="Telefon Numarası" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control">
                                        <input type="text" name="website" placeholder="Firma Adı" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="common-control">
                                        <textarea name="message" placeholder="Mesajınızı Yazınız" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-btn">
                                        <button type="submit" class="readon">Gönder</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 pl-0 md-pl-pr-15 md-order-first">
                        <div class="contact-info">
                            <h3 class="title">Bize Ulaşın</h3>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="content-part">
                                    {{ GeneralSiteSettings('site_address')}}
                                </div>
                            </div>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Telefon</h4>
                                    <p>P:
                                        <a href="tel:{{ GeneralSiteSettings('site_mobile')}}">{{ GeneralSiteSettings('site_mobile')}}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="info-wrap mb-20">
                                <div class="icon-part">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="content-part">
                                    <h4>E-posta</h4>
                                    <p>E:
                                        <a href="mailto:{{ GeneralSiteSettings('site_email')}}">{{ GeneralSiteSettings('site_email')}}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="info-wrap">
                                <div class="icon-part">
                                    <i class="flaticon-clock"></i>
                                </div>
                                <div class="content-part">
                                    <h4>Çalışma Saatlerimiz</h4>
                                    <p>Pzt-Cuma:09:00-18:00</p>
                                    <p>Ctesi-Pazar: Kapalı</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Blog Section Start -->
    <div class="rs-blog style1 pt-91 pb-92 md-pt-71 md-pb-72 sm-pb-75">
        <div class="container">
            <div class="row y-middle mb-53 md-mb-40 sm-mb-50">
                <div class="col-md-6 sm-mb-22">
                    <div class="sec-title">
                        <span class="sub-title primary right-line">Bizden Haberler</span>
                        <h2 class="title mb-0">Blog</h2>
                    </div>
                </div>

            </div>
            <div
                class="rs-carousel owl-carousel dot-style1"
                data-loop="true"
                data-items="3"
                data-margin="30"
                data-autoplay="true"
                data-hoverpause="true"
                data-autoplay-timeout="5000"
                data-smart-speed="800"
                data-dots="true"
                data-nav="false"
                data-nav-speed="false"
                data-center-mode="false"
                data-mobile-device="1"
                data-mobile-device-nav="false"
                data-mobile-device-dots="false"
                data-ipad-device="2"
                data-ipad-device-nav="false"
                data-ipad-device-dots="true"
                data-ipad-device2="1"
                data-ipad-device-nav2="false"
                data-ipad-device-dots2="false"
                data-md-device="3"
                data-lg-device="3"
                data-md-device-nav="false"
                data-md-device-dots="true">
                @foreach($posts as $post)
                <div class="blog-wrap">
                    <div class="img-part">
                        <img
                            src="{{asset('uploads/posts/')}}/{{$post->f_image}}"
                            alt="{{$post->title}}">
                        <div class="fly-btn">
                            <a href="{{route('frontend.new',$post->slug)}}">
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content-part">
                        <a class="categories" href="{{route('frontend.new',$post->slug)}}">{{$post->title_tr}}</a>
                        <h3 class="title">
                            <a href="{{route('frontend.new',$post->slug)}}">{!! Str::words($post->text_tr,30,'...')!!}</a>
                        </h3>
                        <div class="blog-meta">
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                {{ date('d',strtotime($post->date)) }}
                                {{ date('M',strtotime($post->date)) }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
</div>
<!-- Main content End -->

@endsection