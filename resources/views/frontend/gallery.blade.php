@extends('frontend.layouts.app')
@section('title', 'Videolar')
@section('content')



    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-6">
            <div class="container">
                <div class="content-part text-center pt-160 pb-160">
                    <h1 class="breadcrumbs-title white-color mb-0">Videolar</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Portfolio Section Start -->
        <div id="rs-portfolio" class="rs-portfolio single pt-100 pb-100 md-pt-80 md-pb-80">
            <div class="container">

                @foreach ($galleries as $gallery)
 <h2> {{$gallery->title}}</h2>
                    <div class="slider-area mb-50">
                        <div class="rs-carousel owl-carousel nav-style1 nav-mod" data-loop="true" data-items="1" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-lg-device="1" data-md-device-nav="true" data-md-device-dots="false">
                            <div>

                                <iframe width="100%" height="450" src="{{ $gallery->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>

                @endforeach

            </div>
        </div>
        <!-- Portfolio Section End -->
    </div>
    <!-- Main content End -->


@endsection



