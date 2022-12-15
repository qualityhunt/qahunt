@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')
<!-- Start main-content -->
<div class="main-content">

<section class="uk-section uk-section-small ">
              <div class="uk-container">

                  <div class="uk-flex uk-flex-middle uk-grid-small" uk-grid>
                      <div class="uk-panel uk-width-1-3@m">
                          <div class="tm-title-border-top span-block uk-width-3-3@m">
                              <h2>
                              Danışma ve İstişare Kurulu
                              </h2>
                          </div>
                      </div>

                      <div class="uk-width-expand">

                      </div>
                  </div>
              </div>
          </section>

          <section class="uk-section uk-section-small">
              <div class="uk-container">
                  <div class="uk-child-width-1-4@m" uk-grid uk-height-match="target: > article > .uk-card;">
                  @foreach ($advisory as $ad)
                      <article>
                          <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                              <div class="tm-card-media uk-text-center">
                                  <img  src="{{asset('uploads/advisory')}}/{{$ad->image}}" alt="{{ $ad->name_tr}}"
                                     uk-img>
                              </div>
                              <div class="uk-card-media-left uk-cover-container">

                              <h5 class="tm-text-primary uk-margin-remove-bottom uk-margin-top uk-text-bold">{{ $ad->name_tr}} - {{ $ad->position_tr}}</h5>
                             
                              Telefon : {!! $ad->phone !!} <br>
                             E-Posta : {!! $ad->e_mail !!} 
                              <p style="color:Red;">Özgeçmiş</p>
                              <p class="uk-text-small">{!! $ad->text_tr !!}</p>
                          </div> </div>
                      </article>
                      @endforeach
                  </div>
              </div>
          </section>

@endsection
