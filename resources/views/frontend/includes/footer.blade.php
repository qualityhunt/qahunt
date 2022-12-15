 <!-- Footer Start -->
 <footer id="rs-footer" class="rs-footer">
     <div class="container">
         <div class="footer-newsletter">
             <div class="row y-middle">
                 <div class="col-md-6 sm-mb-26">
                     <h3 class="title white-color mb-0">Bültenimize Abone Olun</h3>
                 </div>
                 <div class="col-md-6 text-right">
                     <form class="newsletter-form">
                         <input type="email" name="email" placeholder="E-Posta Adresinizi Yazın." required="">
                         <button type="submit"><i class="fa fa-paper-plane"></i> Abone Ol</button>
                     </form>
                 </div>
             </div>
         </div>
         <div class="footer-content pt-62 pb-79 md-pb-64 sm-pt-48">
             <div class="row">
                 <div class="col-lg-4 col-md-12 col-sm-12 footer-widget md-mb-39">
                     <div class="about-widget pr-15">
                         <div class="logo-part">
                             <a href="{{route('frontend.index')}}"><img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" alt="{{ GeneralSiteSettings('site_title') }}"></a>

                         </div>
                         <p class="desc" style="color: white;">2019 yılı başında kurulmuş olup merkezi Kayseri' dir.
                             <br>

                             “ Hızlı, Güvenilir, Katma Değerli ” sloganı ile çıktığımız bu yolda amacımız yazılım kalitesine yeni bir soluk getirmektir.
                          

                     </div>
                 </div>
                 <div class="col-lg-4 col-md-12 col-sm-12 md-mb-32 footer-widget">
                     <h4 class="widget-title">İletişim Bilgilerimiz</h4>
                     <ul class="address-widget pr-40">
                         <li>
                             <i class="flaticon-location"></i>
                             <div class="desc">{{ GeneralSiteSettings('site_address')}}</div>
                         </li>
                         <li>
                             <i class="flaticon-call"></i>
                             <div class="desc">
                                 <a href="tel:{{ GeneralSiteSettings('site_mobile')}}">{{ GeneralSiteSettings('site_mobile')}}</a>
                             </div>
                         </li>
                         <li>
                             <i class="flaticon-email"></i>
                             <div class="desc">
                                 <a href="{{ GeneralSiteSettings('site_email')}}">{{ GeneralSiteSettings('site_email')}}</a>
                             </div>
                         </li>

                     </ul>
                 </div>
                 <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                     <h4 class="widget-title">Bloglar</h4>
                     <div class="footer-post">
                         @foreach($posts->take(4) as $post )
                         <div class="post-wrap mb-15">
                             <div class="post-img">
                                 <a href="{{route('frontend.new',$post->slug)}}">
                                     <img src="{{asset('uploads/posts/')}}/{{$post->f_image}}" alt="{{$post->title}}"></a>                             </div>
                             <div class="post-desc">
                                 <a href="{{route('frontend.new',$post->slug)}}">{{$post->title}}</a>
                                 <div class="date-post">
                                     <i class="fa fa-calendar"></i>{{ date('d',strtotime($post->date)) }} {{ date('M',strtotime($post->date)) }}
                                 </div>
                             </div>
                         </div>
                         @endforeach


                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-bottom">
             <div class="row y-middle">
                 <div class="col-lg-6 col-md-8 sm-mb-21">
                     <div class="copyright">
                         <p>   © 2019 Tüm Hakları Saklıdır. | QAHunt

                           </p>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-4 text-right sm-text-center">
                     <ul class="footer-social">
                         <li><a href="{{GeneralSiteSettings('site_instagram_url') }}"><i class="fa fa-instagram"></i></a></li>
                         <li><a href="{{GeneralSiteSettings('site_youtube_url') }}"><i class="fa fa-youtube"></i></a></li>
                         <li><a href="{{GeneralSiteSettings('site_linkedin_url') }}"><i class="fa fa-linkedin"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer End -->

 <!-- start scrollUp  -->
 <div id="scrollUp">
     <i class="fa fa-angle-up"></i>
 </div>
 <!-- End scrollUp  -->

 <!-- Search Modal Start -->
 <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span class="flaticon-cross"></span>
     </button>
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="search-block clearfix">
                 <form>
                     <div class="form-group">
                         <input class="form-control" placeholder="Search Here..." type="text" required="">
                         <button type="submit"><i class="fa fa-search"></i></button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <!-- Search Modal End -->
 <!-- modernizr js -->
 <script src="{{asset('frontend/assets/js/modernizr-2.8.3.min.js')}}"></script>
 <!-- jquery latest version -->
 <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
 <!-- Bootstrap v4.4.1 js -->
 <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
 <!-- Menu js -->
 <script src="{{asset('frontend/assets/js/rsmenu-main.js')}}"></script>
 <!-- op nav js -->
 <script src="{{asset('frontend/assets/js/jquery.nav.js')}}"></script>
 <!-- owl.carousel js -->
 <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
 <!-- Slick js -->
 <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
 <!-- isotope.pkgd.min js -->
 <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
 <!-- imagesloaded.pkgd.min js -->
 <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
 <!-- wow js -->
 <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
 <!-- aos js -->
 <script src="{{asset('frontend/assets/js/aos.js')}}"></script>
 <!-- Skill bar js -->
 <script src="{{asset('frontend/assets/js/skill.bars.jquery.js')}}"></script>
 <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
 <!-- counter top js -->
 <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
 <!-- video js -->
 <script src="{{asset('frontend/assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
 <!-- magnific popup js -->
 <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
 <!-- Nivo slider js -->
 <script src="{{asset('frontend/assets/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>
 <!-- plugins js -->
 <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
 <!-- contact form js -->
 <script src="{{asset('frontend/assets/js/contact.form.js')}}"></script>
 <!-- main js -->
 <script src="{{asset('frontend/assets/js/main.js')}}"></script>
 </body>


 </html>
