@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') )

@section('content')
<!-- Start main-content -->
<br>
<nav class="uk-navbar-container uk-margin" style="background-color:white; " uk-navbar="mode: click">
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav" style="text-color:white; text-align:center;">
        <p uk-margin>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#konut">Konut</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#arac">Araç </a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#diger">Diğer</a></li></button>
</p>
        </ul>

    </div>
</nav>
<section class="uk-section uk-section-small">
    <div class="uk-container">


        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="konut" class="uk-panel uk-width-1-3@m">
                <h4>Konut</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
               
             
                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($member_postingsa as $posta )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    @foreach ($posta->gallery_images->take(1) as $image)
                                    <div>
                                        
                                        <a href="{{ route('frontend.member_posting',$posta->slug) }}"></a> <img
                                        src="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}" style="max-height:200px;"
                                        alt="{{ $posta->title_tr}}"></a>
                                    </div>
                                    @endforeach
                                  
                                    </div>

                                <div class="uk-card-body">
                                    <a href="{{route('frontend.member_posting',$posta->slug)}}">
                                        <h3 class="uk-card-title">{{$posta->title_tr}}</h3>
                                    </a>
                                    
                                    <p>{!!\Illuminate\Support\str::limit($posta->text_tr,200)!!}</p>
                                    <a href="{{route('frontend.member_posting',$posta->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>
                                </div>
                                

                            </div>

                        </div>
                    </li>
                    @endforeach
                </ul>

                <a style="background-color:black;" class="uk-position-center-left uk-position-small uk-hidden-hover"
                    href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a style="background-color:black;" class="uk-position-center-right uk-position-small uk-hidden-hover"
                    href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>
        </div>
    </div>

    <br><br> <div class="uk-container">


<div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
    <div id="arac" class="uk-panel uk-width-1-3@m">
        <h4>Araç</h4>
        <div class="tm-title-border-top span-block uk-width-2-4@m">

        </div>
    </div>

    <div class="uk-width-expand">

    </div>
</div>
<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
            @foreach ($member_postingsb as $posta )
            <li>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top" style="text-align:center;">
                            <a href="{{ route('frontend.member_posting',$posta->slug) }}"></a> <img
                                src="{{  asset('uploads/member_postings/')}}/{{ $posta->image }}" style="max-height:200px;"
                                alt=""></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="{{route('frontend.member_posting',$posta->slug)}}">
                                <h3 class="uk-card-title">{{$posta->name_tr}}</h3>
                            </a>
                            <p>{!!\Illuminate\Support\str::limit($posta->text_tr,200)!!}</p>
                            <a href="{{route('frontend.member_posting',$posta->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>
                        </div>
                        

                    </div>

                </div>
            </li>
            @endforeach
        </ul>

        <a style="background-color:black;" class="uk-position-center-left uk-position-small uk-hidden-hover"
            href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a style="background-color:black;" class="uk-position-center-right uk-position-small uk-hidden-hover"
            href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
</div>
</div>

<br><br> <div class="uk-container">


<div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
    <div id="diger" class="uk-panel uk-width-1-3@m">
        <h4>Diğer</h4>
        <div class="tm-title-border-top span-block uk-width-2-4@m">

        </div>
    </div>

    <div class="uk-width-expand">

    </div>
</div>
<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
            @foreach ($member_postingsc as $posta )
            <li>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top" style="text-align:center;">
                            <a href="{{ route('frontend.member_posting',$posta->slug) }}"></a> <img
                                src="{{  asset('uploads/member_postings/')}}/{{ $posta->image }}" style="max-height:200px;"
                                alt=""></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="{{route('frontend.member_posting',$posta->slug)}}">
                                <h3 class="uk-card-title">{{$posta->name_tr}}</h3>
                            </a>
                            <p>{!!\Illuminate\Support\str::limit($posta->text_tr,200)!!}</p>
                            <a href="{{route('frontend.member_posting',$posta->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>
                        </div>
                        

                    </div>

                </div>
            </li>
            @endforeach
        </ul>

        <a style="background-color:black;" class="uk-position-center-left uk-position-small uk-hidden-hover"
            href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a style="background-color:black;" class="uk-position-center-right uk-position-small uk-hidden-hover"
            href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
</div>
</div>

<br><br> 
    



     </div>

</section>



@endsection 