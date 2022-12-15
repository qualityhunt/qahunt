<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">


    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <div class="brand-logo"></div>
                    <img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" style="width: 140px; height:120px; padding: 5px;height: auto;text-align: center;" alt="{{ GeneralSiteSettings('site_title')}}">
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>


    <div class="shadow-bottom"></div>
    @if ($logged_in_user->isAdmin())
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="
    margin-top: 55px;
">

            <li class=" nav-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">@lang('menus.backend.sidebar.dashboard')</span><span class="badge badge badge-warning badge-pill float-right mr-2"></span></a>
            </li>


            <li class="nav-item has-sub @if(Request::segment(3) == " user" ) open @endif">
                <a href="#"><i class="feather icon-users"></i>
                    <span class="menu-title" data-i18n="Data List">@lang('labels.backend.access.users.management')</span>
                </a>
                <ul class="menu-content" style="">
                    <li>
                        <a href="{{ route('admin.auth.user.index') }}"><i class="feather icon-user-check"></i>
                            <span class="menu-title" data-i18n="User">@lang('menus.backend.access.users.all')</span>
                            @if ($all_count > 0)
                            <span class="badge badge badge-primary badge-pill float-right ">{{ $all_count }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="@if(Request::segment(4) == " deactivated" ) active @endif">
                        <a href="{{ route('admin.auth.user.deactivated') }}"><i class="feather icon-user-x"></i>
                            <span style="font-size: 14px;" class="menu-title" data-i18n="User">@lang('backend.pending_approval')</span>
                            @if ($pending_approval > 0)
                            <span class="badge badge badge-primary badge-pill float-right ">{{ $pending_approval }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="@if(Request::segment(4) == " deleted" ) active @endif">
                        <a href="{{ route('admin.auth.user.deleted') }}"><i class="feather icon-user-x"></i>
                            <span class="menu-title" data-i18n="User">@lang('menus.backend.access.users.deleted')</span>
                            @if ($deleted_users > 0)
                            <span class="badge badge badge-primary badge-pill float-right ">{{ $deleted_users }}</span>
                            @endif
                        </a>
                    </li>


                    <li class=" nav-item @if(Request::segment(3) == " role" ) active @endif ">
                            <a href=" {{ route('admin.auth.role.index') }}"><i class="feather icon-shield"></i><span class="menu-title" data-i18n="User">@lang('labels.backend.access.roles.management')</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item ">
                <a href="{{ route('admin.slider.index') }}"><i class="feather icon-monitor"></i><span class="menu-title" data-i18n="User">@lang('backend.sliders')</span>
                </a>
            </li>

            <li><a href="{{ route('admin.shopping.index') }}"><i class="feather icon-shopping-cart"></i><span class="menu-item" data-i18n="Select">Ürünler</span></a>
            </li>
            <li class="@if(Request::segment(2) == " post" ) active @endif"><a href="{{ route('admin.post.index') }}"><i class="feather icon-message-square"></i><span class="menu-item" data-i18n="Select">Blog</span></a>
            </li>
            <li class="@if(Request::segment(2) == " announcement" ) active @endif"><a href="{{ route('admin.announcement.index') }}"><i class="feather icon-edit"></i><span class="menu-item" data-i18n="Select">Duyurular</span></a>
            </li>
            <li class="nav-item has-sub @if(Request::segment(2) == " document" ) open @endif">
                <a href="#"><i class="feather icon-feather"></i>
                    <span class="menu-title" data-i18n="Dökümanlar">Dökümanlar</span>
                </a>
                <ul class="menu-content" style="">
                    <li><a href="{{ route('admin.document-category.index') }}"><i class="feather icon-check-square"></i><span class="menu-item" data-i18n="Select">Döküman Kategorileri</span></a>
                    </li>
                    <li><a href="{{ route('admin.document.index') }}"><i class="feather icon-check-square"></i><span class="menu-item" data-i18n="Select">Döküman</span></a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item ">
                <a href="{{ route('admin.events.index') }}"><i class="feather icon-share-2"></i><span class="menu-title" data-i18n="User">@lang('backend.events')</span>
                </a>
            </li>
            <li class=" nav-item ">
                <a href="{{ route('admin.gallery.index') }}"><i class="feather icon-image"></i><span class="menu-title" data-i18n="User">Videolar</span>
                </a>
            </li>
            <li class=" nav-item ">
                <a href="{{ route('admin.company.index') }}"><i class="feather icon-link-2"></i><span class="menu-title" data-i18n="User">Nereden Alınır?</span>
                </a>
            </li>
            <li class=" nav-item ">
                <a href="{{ route('admin.sss.index') }}"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="User">Sıkça sorulan Sorular</span>
                </a>
            </li>


            <!-- Yoruma Alınanlar -->
{{--            <li><a href="{{ route('admin.contact_forms.index') }}"><i class="feather icon-mail"></i><span class="menu-item" data-i18n="Select">{{ trans('backend.contacts_forms') }}</span></a>--}}
{{--            </li>--}}



            <!-- <li class=" nav-item ">
    <a href="{{ route('admin.testimonial.index') }}"><i class="feather icon-message-circle"></i><span class="menu-title"
            data-i18n="User">@lang('backend.testimonials')</span>
    </a>
</li>
-->




{{--            <li class=" nav-item ">--}}
{{--                <a href="{{ route('admin.advert.index') }}"><i class="feather icon-image"></i><span class="menu-title" data-i18n="User">Üye İlanları</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class=" nav-item ">--}}
{{--                <a href="{{ route('admin.activity.index') }}"><i class="feather icon-share-2"></i><span class="menu-title" data-i18n="User">Faaliyetler</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class=" nav-item ">--}}
{{--                <a href="{{ route('admin.static.edit') }}"><i class="feather icon-layers"></i><span class="menu-title" data-i18n="User">@lang('backend.pages')</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <!--<li class=" nav-item ">
    <a href="{{ route('admin.company.index') }}"><i class="feather icon-cpu"></i><span class="menu-title"
            data-i18n="User">@lang('backend.sectors')</span>
    </a>
</li>
-->







            {{-- <li class=" nav-item ">
                    <a href="{{ route('admin.field.index') }}"><i class="feather icon-command"></i><span class="menu-title" data-i18n="User">@lang('backend.fields')</span>
            </a>
            </li> --}}


            {{-- <li class=" nav-item ">
                    <a href="{{ route('admin.shopping.index') }}"><i class="feather icon-shopping-bag"></i><span class="menu-title" data-i18n="User">Ürünler</span>
            </a>
            </li> --}}


            <!--
<li class=" nav-item ">
    <a href="{{ route('admin.activitytype.index') }}"><i class="feather icon-activity"></i><span class="menu-title"
            data-i18n="User">@lang('backend.activitytype')</span>
    </a>
</li>
-->
            {{--
                <li class=" nav-item ">
                    <a href="{{ route('admin.unittype.index') }}"><i class="feather icon-server"></i><span class="menu-title" data-i18n="User">@lang('backend.unittype')</span>
            </a>
            </li> --}}


            {{--
                <li class=" nav-item ">
                    <a href="{{ URL('/admin/forum/category')}}"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="User">@lang('backend.forum_category')</span>
            </a>
            </li> --}}



            <li class="nav-item ">
                <a href="{{ route('admin.about.edit') }}"><i class="feather icon-help-circle"></i><span class="menu-title" data-i18n="User">@lang('backend.about')</span>
                </a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('admin.setting.edit') }}"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="User">@lang('backend.setting')</span>
                </a>
            </li>

            {{-- <li class=" nav-item ">
                    <a href="{{ URL('/translations')}}"><i class="feather icon-globe"></i><span class="menu-title" data-i18n="User">@lang('backend.translations')</span>
            </a>
            </li> --}}


        </ul>
    </div>
    @endif
</div>
<!-- END: Main Menu-->
