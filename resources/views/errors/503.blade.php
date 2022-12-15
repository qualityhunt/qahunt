@extends('frontend.auth.includes.app')
@section('content')
<section id="basic-input">
    <section class="row flexbox-container">
        <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
            <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img src="{{asset('backend/app-assets/images/pages/500.png')}}"
                            class="img-fluid align-self-center" alt="branding logo">
                        <h1 class="font-large-2 mt-1 mb-0">Sizin için yenileniyoruz!</h1>
                        <br><br><br><br><br><br>
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


                     <a href="https://b2b.QA Hunt.com.tr/login.aspx?ReturnUrl=%2f"> Bayi Portalına Giriş İçin Tıklayın</a>
                        <br><br><br>
                        <p>QA Hunt.com.tr Yakında Sizlerleyiz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
