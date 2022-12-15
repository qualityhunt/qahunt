@extends('frontend.layouts.app')

@section('title', 'Sıkça Sorulan Sorular')

@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-2">
            <div class="container">
                <div class="content-part text-center pt-160 pb-160">
                    <h1 class="breadcrumbs-title white-color mb-0">Sıkça Sorulan Sorular</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Faq Section Start -->
        <div class="rs-faq inner pt-92 md-pt-72 pb-100 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pr-55 md-pr-15 md-mb-30">
                        <div class="sec-title mb-43">
                            <div class="sub-title primary">Bizimle İletişime Geçmekten Çekinmeyin</div>
                            <h2 class="title mb-16">Sormak istediğiniz bir şey var mı?</h2>
                         </div>
                        <div id="accordion" class="accordion">

@foreach($sss as $s)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">  {{ $s->title }}
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">                            {!!  $s->text  !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Faq Section End -->
    </div>
    <!-- Main content End -->


@endsection

