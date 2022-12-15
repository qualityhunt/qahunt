@extends('frontend.layouts.app')

@section('title', GeneralSiteSettings('site_title') . ' | ' . $privacy_policy->p_title)

@section('content')
<!-- Start main-content -->
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header bg-black-222">
        <div class="container pt-10 pb-10">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="text-white mt-20">

                    {{$privacy_policy->p_title }}

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row ">
                <div class="col-md-12">
                    <div class="blog-posts">
                        <div class="col-md-12">
                            <div class="row list-dashed">

                                <article class="post  mb-30">
                                    <div class="entry-header">
                                    </div>
                                    <div class="entry-content p-20 pr-10">
                                        <div class="entry-meta media mt-0 no-bg no-border">
                                            <div class="media-body pl-15">
                                                <div class="event-content pull-left flip">
                                                    <h5 style="text-align: justify;">
                                                    <h2>Gizlilik Sözleşmesi </h2>
        </div>
    </div>

</div>


               <p>© Copyrigth 2021 harpsantuketim.com tüm hakları saklıdır. Kod, haber, resim, röportaj gibi her türlü içeriğinin tüm telif hakları harpsantuketim.com’a aittir. harpsantuketim.com sitesinde yer alan bütün yazılar, materyaller, resimler, ses dosyaları, animasyonlar, videolar, dizayn, tasarım ve düzenlemelerimizin telif hakları 5846 numaralı yasa telif hakları korunmaktadır. Bunlar harpsantuketim.com’un yazılı izni olmaksızın ticari olarak herhangi bir şekilde kopyalanamaz, dağıtılamaz, değiştirilemez, yayınlanamaz. İzinsiz ve kaynak belirtilmeksizin kopyalama ve kullanımı yapılamaz.
www.harpsantuketim.com’daki harici linkler ayrı bir sayfada açılır. Yayınlanan yazı ve yorumlardan yazarları sorumludur. harpsantuketim.com’da hiçbir bildirim yapmadan, herhangi bir zaman değişikliğe gidebilir. Bu sitedeki bilgilerden kaynaklı hataların hiçbirinden sorumlu değildir.
</p>
<h2>Privacy Policy</h2>
<p>We will keep your information confidential except where disclosure is required or permitted by law (for example to government bodies and law enforcement agencies). Generally, we will only use your information within the harpsantuketim.com. However, sometimes the harpsantuketim.com uses third parties to process your information. harpsantuketim.com requires these third parties to comply strictly with its instructions and the ismitekno .com requires that they do not use your personal information for their own business purposes, unless you have explicitly consented to the use of your personal information in this way. When you interact with the harpsantuketim.com we sometimes receive personal information about you. For example, if you write to us or sign up to a newsletter, you might tell us who you are, how we can contact you and what you think of the harpsantuketim.com and its services. When you use harpsantuketim.com online services, we use cookies and collect IP addresses. You can find out more about this in the harpsantuketim.com cookies section of our full Privacy Policy.</p>  

                                                    </h5>
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
        </div>
    </section>
</div>
<!-- end main-content -->

@endsection
