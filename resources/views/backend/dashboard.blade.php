@extends('backend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<section id="dashboard-analytics">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card bg-analytics text-white">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img src="{{ asset('backend/app-assets/images/elements/decore-left.png')}}" class="img-left" alt="{{asset('storage')}}/{{ $logged_in_user->full_name }}">
                        <img src="{{ asset('backend/app-assets/images/elements/decore-right.png')}}" class="img-right" alt="{{ $logged_in_user->full_name }}">
                        <div class="avatar avatar-xl bg-primary shadow mt-0">

                        </div>
                        <div class="text-center">
                            <h1 class="mb-2 text-white">@lang('strings.backend.dashboard.welcome')
                                {{ $logged_in_user->full_name }}!
                            </h1>
                            <p class="m-auto w-75">
                                {{ GeneralSiteSettings('site_title')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="statistics-card">



    <div class="row">
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.post.index') }}"><i class="feather icon-edit font-medium-5 text-primary font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.post.index') }}">
                            <h2 class="text-bold-700">{{ $posts}}</h2>
                            <p class="mb-0 line-ellipsis">Blog</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.activity.index') }}"> <i class="feather icon-activity text-warning font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.shopping.index') }}">
                            <h2 class="text-bold-700">{{ $shoppings}}</h2>
                            <p class="mb-0 line-ellipsis">Ürünler</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.slider.index') }}"><i class="feather icon-monitor text-info font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.slider.index') }}">
                            <h2 class="text-bold-700">{{ $sliders }}</h2>
                            <p class="mb-0 line-ellipsis">{{ trans('backend.sliders') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.testimonial.index') }}"> <i class="feather icon-award text-success font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.gallery.index') }}">
                            <h2 class="text-bold-700">{{ $gallery}}</h2>
                            <p class="mb-0 line-ellipsis">Videolar</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.company.index') }}"> <i class="feather icon-award text-success font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.company.index') }}">
                            <h2 class="text-bold-700">{{ $company}}</h2>
                            <p class="mb-0 line-ellipsis">Nereden Alınır?</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <a href="{{ route('admin.document.index') }}"><i class="feather icon-mail text-warning font-medium-5"></i></a>
                            </div>
                        </div>
                        <a href="{{ route('admin.document.index') }}">
                            <h2 class="text-bold-700">{{ $documents }}</h2>
                            <p class="mb-0 line-ellipsis">Dökümanlar</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>





</section>
@endsection
