@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.events'))

@section('content')



    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-6">
            <div class="container">
                <div class="content-part text-center pt-160 pb-160">
                    <h1 class="breadcrumbs-title white-color mb-0">Etkinlikler</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Portfolio Section Start -->
        <div id="rs-portfolio" class="rs-portfolio single pt-100 pb-100 md-pt-80 md-pb-80">
            <div class="container">
                <div class="slider-area mb-50">
                    <div class="rs-carousel owl-carousel nav-style1 nav-mod" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="slide-item">
                            <a href="#"><img class="bdru-5" src="assets/images/portfolio/single/slider/1.jpg" alt=""></a>
                        </div>
                        <div class="slide-item">
                            <a href="#"><img class="bdru-5" src="assets/images/portfolio/single/slider/2.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($events as $event)

                        <div class="col-lg-8 pr-55 md-pr-15">


                            <div class="slider-area mb-50">
                                <div class="rs-carousel owl-carousel nav-style1 nav-mod" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1" data-md-device-nav="true" data-md-device-dots="false">
                                    @foreach ($event->gallery_images as $image)

                                    <div class="slide-item">
                                        <a href="#">  <img src="{{asset('uploads/events/')}}/{{ $image->gallery_image_path}}" alt=" {{ $event->name_tr }}">
                                        </a>

                                    </div>
                                    @endforeach
                                        <iframe width="560" height="315" src="{{$event->location}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                </div>
                            </div>


                        </div>

                                <div class="col-lg-4 md-order-first md-mb-40">
                                    <div class="project-sidebar">
                                         <div class="sb-project-detail mt-50 md-mt-0">
                                            <h4 class="title">Detaylar</h4>
                                            <ul>
                                                <li><span>Etkinlik Adı:</span> {{  $event->name_tr }}</li>

                                                <li><span>Tarih:</span> {{ date('M',strtotime($event->start_date)) }} {{ date('d',strtotime($event->start_date)) }}  {{ date('Y',strtotime($event->start_date)) }}</li>
                                                <li><span>Detay:</span> {!!  $event->text_tr  !!}  </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                </div>
            </div>
        </div>
        <!-- Portfolio Section End -->
    </div>
    <!-- Main content End -->



@endsection

