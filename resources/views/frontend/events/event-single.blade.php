@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . $event->name)

@section('content')

<!-- Start main-content -->
<div class="main-content">


    <div class="uk-section">
        <div class="uk-container">

            <div uk-grid>
                <div class="uk-width-expand">
                    <article class="uk-article uk-card uk-card-default uk-border-rounded">

                        <div class="tm-event-media uk-card-media-top uk-grid-collapse" uk-grid>
                            <div class="uk-width-3-5@m">
                                <img src="{{  asset('uploads/events/')}}/{{ $event->image }}" alt="{{$event->name}}"
                                    uk-img>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-card uk-card-body">
                                    <div class="tm-event date">
                                        <p class="uk-text-small uk-margin-remove uk-text-danger">
                                            {{ trans('frontend.start_date') }}</p>
                                        <p>{{ date('d/m/Y - H:i',strtotime($event->start_date)) }}</p>
                                    </div>
                                    <div class="tm-event-name">
                                        <h1 class="uk-h4 uk-text-bold uk-margin-small-bottom">{{$event->name}}</h1>
                                    </div>
                                    <p class="tm-event-location uk-margin-remove-top">{{$event->location}}</p>

                                    <div class="tm-event-register uk-margin-medium-top">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tm-event-body uk-card-body">
                            <div uk-grid>

                                <div class="uk-width-3-5@m">
                                    <div class="tm-event-details uk-panel">
                                        <h4 class="uk-text-bold">Etkinlik Detayı</h4>

                                        <div>
                                            <p class="MsoNormal">{!! $event->text !!}
                                            <p class="MsoNormal"></p>
                                            <p></p>

                                            <p class="MsoNormal"></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-width-expand">
                                    <div class="tm-event-meta uk-panel">
                                        <h4 class="uk-text-bold uk-margin-remove-bottom">Başlangıç-Bitiş Zamanı</h4>
                                        <p class="uk-margin-small">
                                            {{ date('d/m/Y - H:i',strtotime($event->start_date)) }} /
                                            {{ date('d/m/Y - H:i',strtotime($event->end_date)) }}
                                        </p>
                                        <h4 class="uk-text-bold uk-margin-remove-bottom uk-margin-small-top">Lokasyon
                                        </h4>
                                        <p class="uk-margin-remove-top">{{$event->location}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </article>
                </div>
            </div>

        </div>
    </div>



</div>
</section>
</div>
<!-- end main-content -->

@endsection