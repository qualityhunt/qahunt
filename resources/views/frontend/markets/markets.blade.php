@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . 'Anlaşmalı Firmalar')

@section('content')

<br>
<nav class="uk-navbar-container uk-margin" style="background-color:white; " uk-navbar="mode: click">
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav" style="text-color:white; text-align:center;">
        <p uk-margin>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#temel">Temel Gıdalar</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#kuru">Kuru Yemiş </a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#kuru-gıda">Kuru Gıdalar</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"> <li><a style="color:white;" href="#sıvı">Sıvı Gıdalar</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small">  <li><a style="color:white;" href="#baharat">Baharat</a></li></button>
    <button class="uk-button uk-button-primary uk-button-small"><li><a style="color:white;" href="#digerleri">Diğerleri</a></li></button>
</p>
            
            
            
           
          
            

        </ul>

    </div>
</nav>

<section class="uk-section uk-section-small">
    <div class="uk-container">


        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="temel" class="uk-panel uk-width-1-3@m">
                <h4>Temel Gıdalar</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($marketsa as $coma )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.market',$coma->slug)}}"></a> <img
                                        src="{{ URL::to('uploads/shopping/',$coma->image)}}" style="max-height: 200px;height: 150px;width: 150px;"
                                        alt=""></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.market',$coma->slug)}}">
                                        <h3 class="uk-card-title">{{$coma->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($coma->detail,200)!!}</p>
                                    <a href="{{route('frontend.market',$coma->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>
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
    <div id="kuru" class="uk-panel uk-width-1-3@m">
        <h4>Kuru Yemiş</h4>
        <div class="tm-title-border-top span-block uk-width-2-4@m">

        </div>
    </div>

    <div class="uk-width-expand">

    </div>
</div>
<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
            @foreach ($marketsb as $comb )
            <li>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top" style="text-align:center;">
                            <a href="{{route('frontend.market',$comb->slug)}}"></a> <img
                                src="{{ URL::to('uploads/shopping',$comb->image)}}" style="max-height: 200px;height: 150px;width: 150px;"
                                alt=""></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="{{route('frontend.market',$comb->slug)}}">
                                <h3 class="uk-card-title">{{$comb->name}}</h3>
                            </a>
                            <p>{!!\Illuminate\Support\str::limit($comb->detail,200)!!}</p>
                            <a href="{{route('frontend.market',$comb->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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
    <div id="kuru-gıda" class="uk-panel uk-width-1-3@m">
        <h4>Kuru Gıdalar</h4>
        <div class="tm-title-border-top span-block uk-width-2-4@m">

        </div>
    </div>

    <div class="uk-width-expand">

    </div>
</div>
<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
            @foreach ($marketsc as $comc )
            <li>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top" style="text-align:center;">
                            <a href="{{route('frontend.market',$comc->slug)}}"></a> <img
                                src="{{ URL::to('uploads/shopping',$comc->image)}}" style="max-height: 200px;height: 150px;width: 150px;"
                                alt=""></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="{{route('frontend.market',$comc->slug)}}">
                                <h3 class="uk-card-title">{{$comc->name}}</h3>
                            </a>
                            <p>{!!\Illuminate\Support\str::limit($comc->detail,200)!!}</p>
                            <a href="{{route('frontend.market',$comc->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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
    <div id="sıvı" class="uk-panel uk-width-1-3@m">
        <h4>Sıvı Gıdalar</h4>
        <div class="tm-title-border-top span-block uk-width-2-4@m">

        </div>
    </div>

    <div class="uk-width-expand">

    </div>
</div>
<div uk-slider>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
            @foreach ($marketsd as $comd )
            <li>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top" style="text-align:center;">
                            <a href="{{route('frontend.market',$comd->slug)}}"></a> <img
                                src="{{ URL::to('uploads/shopping',$comd->image)}}" style="max-height: 200px;height: 150px;width: 150px;"
                                alt=""></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="{{route('frontend.market',$comd->slug)}}">
                                <h3 class="uk-card-title">{{$comd->name}}</h3>
                            </a>
                            <p>{!!\Illuminate\Support\str::limit($comd->detail,200)!!}</p>
                            <a href="{{route('frontend.market',$comd->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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
            <div id="baharat" class="uk-panel uk-width-1-3@m">
                <h4>Baharat</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($marketse as $come )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.market',$come->slug)}}"></a> <img
                                        src="{{ URL::to('uploads/shopping',$come->image)}}" style="max-height: 200px;height: 150px;width: 150px;"
                                        alt=""></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.market',$come->slug)}}">
                                        <h3 class="uk-card-title">{{$come->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($come->detail,200)!!}</p>
                                    <a href="{{route('frontend.market',$come->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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
            <div id="digerleri" class="uk-panel uk-width-1-3@m">
                <h4>Diğerleri</h4>
                <div class="tm-title-border-top span-block uk-width-2-4@m">

                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m">
                    @foreach ($marketsf as $comf )
                    <li>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.market',$comf->slug)}}"></a> <img
                                        src="{{ URL::to('uploads/shopping',$comf->image)}}" style="max-height: 200px;height: 150px;width: 150px;"
                                        alt=""></a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.market',$comf->slug)}}">
                                        <h3 class="uk-card-title">{{$comf->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($comf->detail,200)!!}</p>
                                    <a href="{{route('frontend.market',$comf->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>

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