<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">



    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto" >
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <div class="brand-logo"></div>
                   <img src="https://harpsantuketim.com/uploads/settings/16260374462255.png" style="width: 100px; height:auto; padding: 3px;height: auto;text-align: center;" alt="{{ GeneralSiteSettings('site_title')}}">
                </a>
                </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content" style="margin-top:50px;">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="
    margin-top: 55px;
">


            @can('view backend')

            <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i><span
                        class="menu-title" data-i18n="Dashboard">@lang('navs.frontend.user.administration')</span><span
                        class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
            </li>

            @endcan


            @auth

            <li class=" nav-item"><a href="{{route('frontend.user.dashboard')}}"><i class="feather icon-home"></i><span
                        class="menu-title" data-i18n="Dashboard">@lang('navs.frontend.dashboard')</span><span
                        class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
            </li>
            <li class=" nav-item"><a href="{{route('frontend.user.dues')}}"><i class="feather icon-check-square"></i><span
                        class="menu-title" data-i18n="Aidat">Aidat</span><span
                        class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
            </li>
            <li class=" nav-item"><a href="{{route('frontend.user.deposites')}}"><i class="feather icon-check-square"></i><span
                class="menu-title" data-i18n="Aidat">Depozito</span><span
                class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
    </li>
    <li class=" nav-item"><a href="{{route('frontend.shoppings.dues')}}"><i class="feather icon-check-square"></i><span
        class="menu-title" data-i18n="Aidat">Alışveriş </span><span
        class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
</li>
<li class=" nav-item"><a href="{{route('frontend.user.financeones')}}"><i class="feather icon-check-square"></i><span
    class="menu-title" data-i18n="Aidat">Finans-1</span><span
    class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
</li>
<li class=" nav-item"><a href="{{route('frontend.user.financetwos')}}"><i class="feather icon-check-square"></i><span
    class="menu-title" data-i18n="Aidat">Finans-2</span><span
    class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
</li>
<li class=" nav-item"><a href="{{route('frontend.user.financetotals')}}"><i class="feather icon-check-square"></i><span
    class="menu-title" data-i18n="Aidat">Finans Detayı</span><span
    class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
</li>




                <li class=" nav-item"><a href="{{ route('frontend.user.account') }}"><i class="feather icon-user"></i><span
                            class="menu-title" data-i18n="Dashboard">@lang('navs.frontend.user.account')</span><span
                            class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>

                <li class=" nav-item"><a href="{{ route('frontend.auth.logout') }}"><i class="feather icon-power"></i><span
                            class="menu-title" data-i18n="Dashboard">@lang('navs.general.logout')</span><span
                            class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
                </li>



                @endauth











        </ul>
    </div>

</div>
<!-- END: Main Menu-->
