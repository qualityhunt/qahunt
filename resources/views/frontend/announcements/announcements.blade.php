@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')



<!-- Main content Start -->
<div class="main-content">
    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-8">
        <div class="container">
            <div class="content-part text-center pt-160 pb-160">
                <h1 class="breadcrumbs-title white-color mb-0">Duyurular</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Blog Section  Start -->
    <div class="rs-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @foreach ($announcements as $announcement)
                    <div class="blog-wrap shadow mb-70 xs-mb-50">
                            <div class="image-part">
                                <a href="{{route('frontend.announcement',$announcement->slug)}}"> <img src="{{asset('uploads/announcements/')}}/{{$announcement->f_image}}" alt="{{$announcement->title}}" style="max-height:200px;"></a>

                            </div>
                            <div class="content-part">
                                <h3 class="title mb-10"><a href="{{route('frontend.announcements',$announcement->slug)}}">{{$announcement->title_tr}}</a></h3>
                                <ul class="blog-meta mb-22">
                                    <li><i class="fa fa-calendar-check-o"></i>{{ date('d',strtotime($announcement->date)) }} {{ date('M',strtotime($announcement->date)) }}</li>
                                </ul>
                                <p class="desc mb-20">{!! Str::words($announcement->text_tr,30,'...')!!}</p>
                                <div class="btn-part">
                                    <a class="readon-arrow" href="{{route('frontend.announcement',$announcement->slug)}}">Devamını Gör</a>

                                </div>
                            </div>
                        </div>



                    @endforeach



                    {{ $announcements->links() }}

                </div>



                <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                    <div id="sticky-sidebar" class="blog-sidebar">




                        <div class="sidebar-categories sidebar-grid shadow">
                            <div class="sidebar-title">
                                <h3 class="title semi-bold mb-20">Diğer Bloglar</h3>
                            </div>
                            <ul>
                                @foreach ($announcements as $announcement)

                                    <li><a href="{{route('frontend.new',$announcement->slug)}}">{{$announcement->title_tr}}</a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-end"></div>
        </div>
    </div>
    <!-- Blog Section  End -->
</div>



@endsection
