@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')




<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-9">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">Duyurular</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Blog Section Start -->
    <div class="rs-blog inner single pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-part">
                        <div class="blog-img">
                            <a href="{{route('frontend.announcement',$announcement->slug)}}"><img src="{{asset('uploads/announcements/')}}/{{$announcement->f_image}}" alt="{{$announcement->title}}"></a>
                        </div>
                        <div class="article-content shadow mb-60">
                            <ul class="blog-meta mb-22">
                                <li><i class="fa fa-calendar-check-o"></i>{{ date('d',strtotime($announcement->date)) }} {{ date('M',strtotime($announcement->date)) }}</li>
                            </ul>

                            <h2>{{$announcement->title}}</h2>

                            <p class="desc">{!! $announcement->text_tr !!}</p>





                        </div>


                    </div>
                </div>

                <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                    <div id="sticky-sidebar" class="blog-sidebar">


                        <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                            <div class="sidebar-title">
                                <h3 class="title mb-20">Diğer Duyurular</h3>
                            </div>

                            @foreach ($announcements as $announcement)
                                <div class="single-post mb-20">
                                    <div class="post-image">
                                        <a href="{{route('frontend.announcements',$announcement->slug)}}"><img src="{{asset('uploads/announcements/')}}/{{$announcement->f_image}}" alt="{{$announcement->title}}"></a>
                                    </div>
                                    <div class="post-desc">
                                        <div class="post-title">
                                            <h5 class="margin-0"><a href="{{route('frontend.announcements',$announcement->slug)}}">{{$announcement->title}} </a></h5>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-calendar"></i>{{ date('d',strtotime($announcement->date)) }} {{ date('M',strtotime($announcement->date)) }}</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
            <div id="sticky-end"></div>
        </div>
    </div>
    <!-- Blog Section End -->
</div>
<!-- Main content End -->

@endsection
