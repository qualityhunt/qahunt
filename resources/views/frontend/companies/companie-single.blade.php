@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')
        
<div class="uk-section">
     <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-expand">
                <article class="uk-article uk-card uk-card-default uk-border-rounded">
                    <div class="uk-card-body">
                        <h1 class="uk-h3 uk-link-text uk-text-center">{{$companie->name}}</h1>
                        <div id="exportContent" class="uk-margin">
                                                            <div class="uk-margin uk-text-center">
                                    <img src="{{ URL::to('uploads/company',$companie->src)}}" style="max-width:30%;" alt="Anıtkabir Ziyareti">
                                </div>
                            <p>{!!$companie->detail!!}</p>
                           


                        </div>

                        
                                            </div>
                </article>
            </div>
        </div>
    </div>
</div>


@endsection
