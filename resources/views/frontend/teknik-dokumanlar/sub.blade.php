@extends('frontend.layouts.app')

@section('title', 'Teknik Dökümanlar Alt Kategori')

@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-2">
            <div class="container">
                <div class="content-part text-center pt-160 pb-160">
                    <h1 class="breadcrumbs-title white-color mb-0">Teknik Dökümanlar</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->
        <div class="rs-featured style1 gray-bg4 pt-104 pb-75 md-pt-66 md-pb-35">
            <div class="container">
                <div class="sec-title text-center mb-62 md-mb-34 sm-mb-45">
                         <h2 class="title mb-0 bottom-wave">Alt Başlıklar</h2>

                </div>
                <div class="row">
                    @foreach($categories as $category)

                        <div class="col-lg-4 col-sm-6 mb-37">
                            <div class="featured-wrap">
                                <div class="icon-part pt-7">
                                    <img src="{{asset('frontend/assets/images/services/icons/style10/1.png')}}" alt="">
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><a href="{{route('frontend.document_detay',$category->id)}}">{{$category->category_name}}</a></h5>
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

