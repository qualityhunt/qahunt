@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . 'Anlaşmalı Firmalar')

@section('content')
<br>

<nav class="uk-navbar-container uk-margin" style="background-color:white; " uk-navbar="mode: click">
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav" style="text-color:white; text-align:center;">
       
        </ul>

    </div>
</nav>

<section class="uk-section uk-section-small">
    <div class="uk-container">


        <div class="uk-flex uk-flex-middle uk-grid-small " uk-grid>
            <div id="mobilya" class="uk-panel uk-width-1-3@m">
                <h2>Anlaşmalı Firmalar</h2>
                <div class="tm-title-border-top span-block uk-width-2-4@m">
                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
        <div uk-slider>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            <br>
            <div class="uk-child-width-1-3@m" uk-grid  >
        @foreach ($companies as $coma)
            <div>
            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top" style="text-align:center;">
                                    <a href="{{route('frontend.companie',$coma->slug)}}"></a> 
                                    <img src="{{ URL::to('uploads/company',$coma->src)}}" style="height:100px;" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <a href="{{route('frontend.companie',$coma->slug)}}">
                                        <h3 class="uk-card-title">{{$coma->name}}</h3>
                                    </a>
                                    <p>{!!\Illuminate\Support\str::limit($coma->detail,120)!!}</p>
                                    <a href="{{route('frontend.companie',$coma->slug)}}"><button class="uk-button uk-button-danger">Detaylar</button></a>
                                </div>
                                

                            </div>
             
            </div>
            @endforeach
        </div>
           

       

            </div>
        </div>
    </div>

    
    



     </div>

</section>



@endsection 