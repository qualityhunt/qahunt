@extends('frontend.layouts.app')
@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('backend.gallery'))
@section('content')


<section id="tm-home-news" class="uk-section tm-filter-after">
    <div class="uk-container">

        <div class="uk-grid-large" uk-grid uk-height-match="target: > div > .uk-panel;">
             <div class="uk-width-1-1@m">
            @foreach ($advert as $gallery)
            <h2><b>{{ $gallery->title_tr}}</b></h2> <br>
      
                 <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                    <!-- Portfolio Item Start -->
                    

                    <!-- Portfolio Item Start -->
               
                    <div class="uk-child-width-1-4@m" uk-grid uk-lightbox="animation: scale">
                        @foreach ($gallery->gallery_images->take(4) as $image)
                        <div>
                            <a class="uk-inline" href="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}"
                                data-caption="Caption 3">
                                <img src="{{asset('uploads/galleries/')}}/{{ $image->gallery_image_path}}"
                                    alt="{{ $gallery->title}}">
                            </a>
                        </div>
                        @endforeach
                        </ul>
                    </div>
                    <div> <p><h2>Konum:</h2> {{$gallery->location_tr}}</p> </div>   
                    <div> <p><h2>İlan Detayları:</h2> {!!$gallery->text_tr!!}</p> </div>   
            
                </div>

               
            </div>
            <!-- Portfolio Item End -->





            <nav>
                <ul class="pagination theme-colored">
                    {{ $advert->links() }}
                </ul>
            </nav>


          

        </div>
        <!-- End Portfolio Gallery Grid -->

    </div>
    @endforeach
    </div>
    </div>
    </div>
</section>


@endsection