@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . __('frontend.board_of_directors'))

@section('content')
<div class="main-content">

<section class="uk-section uk-section-small ">
              <div class="uk-container">

                  <div class="uk-flex uk-flex-middle uk-grid-small" uk-grid>
                      <div class="uk-panel uk-width-1-3@m">
                          <div class="tm-title-border-top span-block uk-width-2-3@m">
                              <h2>
                                  <span>Yönetim</span>
                                  <span>Kurulu</span>
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
                  @foreach ($members as $member)
                      <article>
                          <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                              <div class="tm-card-media uk-text-center">
                                  <img src="{{asset('storage')}}/{{$member->profile_image}}" alt="{{ $member->full_name}}"
                                     uk-img>
                              </div>
                              <h5 class="tm-text-primary uk-margin-remove-bottom uk-margin-top uk-text-bold">{{ $member->full_name}}</h5>
                              <p class="uk-text-small">{{ $member->position}}</p>
                          </div>
                      </article>
                      @endforeach
                  </div>
              </div>
          </section>

@endsection


