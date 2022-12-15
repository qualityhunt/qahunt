@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title'))

@section('content')



<section class="uk-section uk-section-small ">
    <div class="uk-container">

        <div class="uk-flex uk-flex-middle uk-grid-small" uk-grid>
            <div class="uk-panel uk-width-1-3@m"><h2>{{ trans('frontend.activities') }}</h2>
                <div class="tm-title-border-top span-block uk-width-2-4@m">
                    
                </div>
            </div>

            <div class="uk-width-expand">

            </div>
        </div>
    </div>
</section>

<section class="uk-section uk-section-small">
    <div class="uk-container">
        
        
        <div class="uk-child-width-1-3@m" uk-grid  >
        @foreach ($activities as $activity)
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top" style="text-align:center;" >
                        <a href="{{route('frontend.activity',$activity->slug)}}"> <img src="{{ URL::to('uploads/activities',$activity->f_image)}}" alt="" style="max-height:200px;"></a>
                    </div>
                    <div class="uk-card-body">

                        <a href="{{route('frontend.activity',$activity->slug)}}"> <h3 class="uk-card-title">{{$activity->title_tr}}</h3></a>  
                        <p  style="    text-align: justify;" class="mt-10">{!! Str::words($activity->text_tr,30,'...')!!}</p>
                        <ul style="margin-left:10px;"> 
                            <li class="font-16 text-white font-weight-600">{{ date('d',strtotime($activity->date)) }} {{ date('M',strtotime($activity->date)) }}</li>
                            

                          </ul>
                          <a style="float:right;" href="{{route('frontend.activity',$activity->slug)}}" class="btn-read-more"> <button class="uk-button uk-button-default uk-button-small">{{ trans('frontend.read_more') }}</button></a>
                     
                    </div>
                    
                    
                </div>
             
            </div>
            @endforeach
        </div>
       
</div>
       
</section>



@endsection