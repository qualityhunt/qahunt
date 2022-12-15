@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.board_of_directors'))

@section('content')
<!-- Start main-content -->
<div class="main-content">


                    
<section class="uk-section uk-section-small ">
      
<div class="uk-container">

<div class="uk-flex uk-flex-middle uk-grid-small" uk-grid>

    <div class="uk-panel uk-width-1-3@m">
        <div class="tm-title-border-top span-block uk-width-2-3@m">
            <h2>Örgütsel Yapı </h2>
        </div>
    </div>

</div>

<div class="uk-margin">
                        <img src="{{asset('uploads/static')}}/{{$o_s->o_image}}" alt="Organizasyon Şeması" uk-img>
                </div>
                {!! $o_s->o_title_tr !!}
                {!! $o_s->o_text_tr !!}

</div>
    </section>

   

@endsection
