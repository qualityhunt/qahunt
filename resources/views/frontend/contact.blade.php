@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . trans('frontend.contact_us'))

@section('content')


    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-6">
            <div class="container">
                <div class="content-part text-center">
                    <h1 class="breadcrumbs-title white-color mb-0">İletişim</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Contact Section Start -->
        <div id="rs-contact" class="rs-contact inner pt-100 md-pt-80">
            <div class="container">
                <div class="content-info-part mb-60">
                    <div class="row gutter-16">
                        <div class="col-lg-4 md-mb-30">
                            <div class="info-item">
                                <div class="icon-part">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Telefon Numarası:</h4>
                                    <a  href="tel:{{ GeneralSiteSettings('site_phone')}}"><h6 class="text-gray">{{ trans('frontend.phone') }}: <p style="direction:ltr;">{{ GeneralSiteSettings('site_phone')}}</p></h6></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="info-item">
                                <div class="icon-part">
                                    <i class="fa fa-at"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">E-posta Adresi:</h4>
                                    <a href="mailto:{{ GeneralSiteSettings('site_email')}}"><h6 class="text-gray">{{ GeneralSiteSettings('site_email')}}</h6></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-item">
                                <div class="icon-part">
                                    <i class="fa fa-map-o"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Adres:</h4>
                                    <p>{{ GeneralSiteSettings('site_address')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form-part">
                    <div class="row md-col-padding">
                        <div class="col-md-5 custom1 pr-0">
                            <div class="img-part"></div>
                        </div>
                        <div class="col-md-7 custom2 pl-0">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="{{ route('contact.send') }}">
                                 @csrf
                                <div class="sec-title mb-53 md-mb-42">
                                    <div class="sub-title white-color">İletişim</div>
                                    <h2 class="title white-color mb-0">Bizimle İletişime Geçin</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Ad Soyad" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" placeholder="E-posta" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Telefon Numarası" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="website" placeholder="Firma Adı" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Mesajınızı Yazın" required=""></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" onClick="function reload() {document.location.reload();
                                            }
                                            setTimeout(reload, 5000);" class="readon modify">Gönder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Contact Section End -->
    </div>
    <!-- Main content End -->




@endsection


