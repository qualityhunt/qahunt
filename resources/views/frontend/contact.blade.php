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
                            <form id="contact-form" method="post" action="https://rstheme.com/products/html/reobiz/mailer.php">
                                <div class="sec-title mb-53 md-mb-42">
                                    <div class="sub-title white-color">İletişim</div>
                                    <h2 class="title white-color mb-0">Bizimle İletişime Geçin.</h2>
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
                                        <button type="submit" class="readon modify">Gönder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


               <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6370732.087084005!2d30.054689523540755!3d38.77037730219455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d345fa6277d8e9%3A0xfc176c5fa42579cd!2sNetcom%20Bilgisayar%20A.S.!5e0!3m2!1str!2str!4v1669894433879!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- Contact Section End -->
    </div>
    <!-- Main content End -->




@endsection


