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
            <h2>Dernek Tüzüğü </h2>
        </div>
    </div>

</div>


                {!! $bylaws->g_title_tr !!}
                {!! $bylaws->g_text_tr !!}

</div>
    </section>

@endsection
