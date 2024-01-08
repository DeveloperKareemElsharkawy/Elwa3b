<!--aside open-->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{route('admin.dashboard.home')}}">

            {{--            <img src="https://static.vecteezy.com/system/resources/thumbnails/005/261/209/small_2x/fast-delivery-icon-free-vector.jpg"--}}
            {{--                 class="header-brand-img desktop-lgo" alt="Azea logo">--}}

            <img src="{{ URL::asset('admin_asset/images/brand/logo.png') }}"
                 class="header-brand-img desktop-lgo" alt="Azea logo">


            {{--            <img src="https://static.vecteezy.com/system/resources/thumbnails/005/261/209/small_2x/fast-delivery-icon-free-vector.jpg"--}}
            {{--                 class="header-brand-img dark-logo" alt="Azea logo">--}}


            <img src="{{ URL::asset('admin_asset/images/brand/logo1.png') }}"
                 class="header-brand-img dark-logo" alt="Azea logo">
            <img src="{{ URL::asset('admin_asset/images/brand/favicon.png') }}"
                 class="header-brand-img mobile-logo" alt="Azea logo">
            <img src="{{ URL::asset('admin_asset/images/brand/favicon1.png') }}"
                 class="header-brand-img darkmobile-logo" alt="Azea logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.dashboard.home')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                     viewBox="0 0 24 24">
                    <path
                        d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/>
                </svg>
                <span class="side-menu__label"> @lang('admin/dashboard.menus.control_panel')</span></a>
        </li>


        @if (Auth::user()->hasPermission('read-admins') || Auth::user()->hasPermission('read-roles') )

            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">

                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                         height="24px"
                         viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24"/>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M17,11c0.34,0,0.67,0.04,1,0.09V6.27L10.5,3L3,6.27v4.91c0,4.54,3.2,8.79,7.5,9.82c0.55-0.13,1.08-0.32,1.6-0.55 C11.41,19.47,11,18.28,11,17C11,13.69,13.69,11,17,11z"/>
                                <path
                                    d="M17,13c-2.21,0-4,1.79-4,4c0,2.21,1.79,4,4,4s4-1.79,4-4C21,14.79,19.21,13,17,13z M17,14.38c0.62,0,1.12,0.51,1.12,1.12 s-0.51,1.12-1.12,1.12s-1.12-0.51-1.12-1.12S16.38,14.38,17,14.38z M17,19.75c-0.93,0-1.74-0.46-2.24-1.17 c0.05-0.72,1.51-1.08,2.24-1.08s2.19,0.36,2.24,1.08C18.74,19.29,17.93,19.75,17,19.75z"/>
                            </g>
                        </g>
                    </svg>
                    <span class="side-menu__label">@lang('admin/dashboard.menus.management')</span><i
                        class="angle fe fe-chevron-right"></i></a>
                <ul class="slide-menu">

                    @if (Auth::user()->hasPermission('read-roles'))
                        <li><a href="{{route('admin.roles.index')}}" class="slide-item btn">
                                <i class="fe fe-circle" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="fe fe-circle"
                                   aria-label="fe fe-circle"></i>
                                <span class="slide-item-label">@lang('admin/dashboard.menus.roles')</span></a></li>
                    @endif

                    @if (Auth::user()->hasPermission('read-admins'))
                        <li><a href="{{route('admin.system.users.index')}}" class="slide-item btn">
                                <i class="fe fe-stop-circle" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="fe fe-stop-circle" aria-label="fe fe-stop-circle"></i>
                                <span class="slide-item-label">@lang('admin/dashboard.menus.admins')</span></a></li>
                    @endif
                </ul>
            </li>
        @endif





        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.users.index')}}">

                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd"
                          d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                <span class="side-menu__label">{{trans('admin/dashboard.menus.users')}}</span></a>
        </li>


        @if (Auth::user()->hasPermission('read-categories'))
            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.categories.index')}}">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                         width="24px" fill="#000000">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 2l-5.5 9h11z"/>
                        <circle cx="17.5" cy="17.5" r="4.5"/>
                        <path d="M3 13.5h8v8H3z"/>
                    </svg>
                    <span class="side-menu__label">{{trans('admin/dashboard.menus.categories')}}</span></a>
            </li>
        @endif



        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                    <path
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                </svg>
                <span class="side-menu__label">@lang('admin/dashboard.menus.countries')</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">

                @if (Auth::user()->hasPermission('read-nationalities'))
                    <li><a href="{{route('admin.nationalities.index')}}" class="slide-item btn">
                            <i class="fe fe-circle" data-bs-toggle="tooltip" title=""
                               data-bs-original-title="fe fe-circle"
                               aria-label="fe fe-circle"></i>
                            <span class="slide-item-label">{{trans('admin/dashboard.menus.nationalities')}}</span></a></li>
                @endif

                @if (Auth::user()->hasPermission('read-nationalities'))
                        <li><a href="{{route('admin.countries.index')}}" class="slide-item btn">
                                <i class="fe fe-circle" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="fe fe-circle"
                                   aria-label="fe fe-circle"></i>
                                <span class="slide-item-label">{{trans('admin/dashboard.menus.countries')}}</span></a></li>
                @endif
            </ul>
        </li>


        @if (Auth::user()->hasPermission('read-nationalities'))
            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.nationality_process_steps.index')}}">
                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                        <path
                            d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
                    </svg>
                    <span
                        class="side-menu__label">{{trans('admin/dashboard.menus.nationality_process_steps')}}</span></a>
            </li>
        @endif


        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.slider.index')}}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    <path
                        d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                </svg>
                <span class="side-menu__label">{{trans('admin/dashboard.menus.slider')}}</span></a>
        </li>


        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg class="side-menu__icon"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
                    <path d="M6 12v-2h3v2H6z"/>
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
                </svg>
                <span class="side-menu__label">@lang('admin/datatable.reports')</span><i
                    class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">

                @if (Auth::user()->hasPermission('read-nationalities'))
                    <li><a href="{{route('admin.reports.reports.orders')}}" class="slide-item btn">
                            <i class="fe fe-circle" data-bs-toggle="tooltip" title=""
                               data-bs-original-title="fe fe-circle"
                               aria-label="fe fe-circle"></i>
                            <span class="slide-item-label">{{trans('admin/datatable.order_report')}}</span></a></li>
                @endif

                @if (Auth::user()->hasPermission('read-nationalities'))
                        <li><a href="{{route('admin.reports.reports.clients')}}" class="slide-item btn">
                                <i class="fe fe-circle" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="fe fe-circle"
                                   aria-label="fe fe-circle"></i>
                                <span class="slide-item-label">{{trans('admin/datatable.client_report')}}</span></a></li>
                @endif

                    @if (Auth::user()->hasPermission('read-nationalities'))
                        <li><a href="{{route('admin.reports.reports.top_workers')}}" class="slide-item btn">
                                <i class="fe fe-circle" data-bs-toggle="tooltip" title=""
                                   data-bs-original-title="fe fe-circle"
                                   aria-label="fe fe-circle"></i>
                                <span class="slide-item-label">{{trans('admin/datatable.top_workers_report')}}</span></a></li>
                    @endif
            </ul>
        </li>


        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.dashboard.send_notification')}}">

                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                </svg>
                <span class="side-menu__label">{{trans('admin/datatable.send_notifications')}}</span></a>
        </li>

        @if (Auth::user()->hasPermission('read-workers'))
            <li class="slide">
                <a class="side-menu__item" href="{{route('admin.workers.index')}}">

                    <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                         height="24px"
                         viewBox="0 0 24 24" width="24px" fill="#000000">
                        <g>
                            <rect fill="none" height="24" width="24"/>
                        </g>
                        <g>
                            <g>
                                <path d="M9,15c-2.67,0-8,1.34-8,4v2h16v-2C17,16.34,11.67,15,9,15z"/>
                                <path
                                    d="M22.1,6.84c0.01-0.11,0.02-0.22,0.02-0.34c0-0.12-0.01-0.23-0.03-0.34l0.74-0.58c0.07-0.05,0.08-0.15,0.04-0.22l-0.7-1.21 c-0.04-0.08-0.14-0.1-0.21-0.08L21.1,4.42c-0.18-0.14-0.38-0.25-0.59-0.34l-0.13-0.93C20.36,3.06,20.29,3,20.2,3h-1.4 c-0.09,0-0.16,0.06-0.17,0.15L18.5,4.08c-0.21,0.09-0.41,0.21-0.59,0.34l-0.87-0.35c-0.08-0.03-0.17,0-0.21,0.08l-0.7,1.21 c-0.04,0.08-0.03,0.17,0.04,0.22l0.74,0.58c-0.02,0.11-0.03,0.23-0.03,0.34c0,0.11,0.01,0.23,0.03,0.34l-0.74,0.58 c-0.07,0.05-0.08,0.15-0.04,0.22l0.7,1.21c0.04,0.08,0.14,0.1,0.21,0.08l0.87-0.35c0.18,0.14,0.38,0.25,0.59,0.34l0.13,0.93 C18.64,9.94,18.71,10,18.8,10h1.4c0.09,0,0.16-0.06,0.17-0.15l0.13-0.93c0.21-0.09,0.41-0.21,0.59-0.34l0.87,0.35 c0.08,0.03,0.17,0,0.21-0.08l0.7-1.21c0.04-0.08,0.03-0.17-0.04-0.22L22.1,6.84z M19.5,7.75c-0.69,0-1.25-0.56-1.25-1.25 s0.56-1.25,1.25-1.25s1.25,0.56,1.25,1.25S20.19,7.75,19.5,7.75z"/>
                                <path
                                    d="M19.92,11.68l-0.5-0.87c-0.03-0.06-0.1-0.08-0.15-0.06l-0.62,0.25c-0.13-0.1-0.27-0.18-0.42-0.24l-0.09-0.66 C18.12,10.04,18.06,10,18,10h-1c-0.06,0-0.11,0.04-0.12,0.11l-0.09,0.66c-0.15,0.06-0.29,0.15-0.42,0.24l-0.62-0.25 c-0.06-0.02-0.12,0-0.15,0.06l-0.5,0.87c-0.03,0.06-0.02,0.12,0.03,0.16l0.53,0.41c-0.01,0.08-0.02,0.16-0.02,0.24 c0,0.08,0.01,0.17,0.02,0.24l-0.53,0.41c-0.05,0.04-0.06,0.11-0.03,0.16l0.5,0.87c0.03,0.06,0.1,0.08,0.15,0.06l0.62-0.25 c0.13,0.1,0.27,0.18,0.42,0.24l0.09,0.66C16.89,14.96,16.94,15,17,15h1c0.06,0,0.12-0.04,0.12-0.11l0.09-0.66 c0.15-0.06,0.29-0.15,0.42-0.24l0.62,0.25c0.06,0.02,0.12,0,0.15-0.06l0.5-0.87c0.03-0.06,0.02-0.12-0.03-0.16l-0.52-0.41 c0.01-0.08,0.02-0.16,0.02-0.24c0-0.08-0.01-0.17-0.02-0.24l0.53-0.41C19.93,11.81,19.94,11.74,19.92,11.68z M17.5,13.33 c-0.46,0-0.83-0.38-0.83-0.83c0-0.46,0.38-0.83,0.83-0.83s0.83,0.38,0.83,0.83C18.33,12.96,17.96,13.33,17.5,13.33z"/>
                                <path
                                    d="M4.74,9h8.53c0.27,0,0.49-0.22,0.49-0.49V8.49c0-0.27-0.22-0.49-0.49-0.49H13c0-1.48-0.81-2.75-2-3.45V5.5 C11,5.78,10.78,6,10.5,6S10,5.78,10,5.5V4.14C9.68,4.06,9.35,4,9,4S8.32,4.06,8,4.14V5.5C8,5.78,7.78,6,7.5,6S7,5.78,7,5.5V4.55 C5.81,5.25,5,6.52,5,8H4.74C4.47,8,4.25,8.22,4.25,8.49v0.03C4.25,8.78,4.47,9,4.74,9z"/>
                                <path d="M9,13c1.86,0,3.41-1.28,3.86-3H5.14C5.59,11.72,7.14,13,9,13z"/>
                            </g>
                        </g>
                    </svg>
                    <span class="side-menu__label">{{trans('admin/dashboard.menus.workers')}}</span></a>
            </li>
        @endif

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.orders.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="16" height="16"
                     fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                </svg>
                <span class="side-menu__label">{{trans('admin/dashboard.menus.orders')}}</span></a>
        </li>


        {{--        <li class="slide">--}}
        {{--            <a class="side-menu__item" href="#">--}}
        {{--                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="16" height="16"--}}
        {{--                     fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">--}}
        {{--                    <path--}}
        {{--                        d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>--}}
        {{--                </svg>--}}
        {{--                <span class="side-menu__label">{{trans('admin/dashboard.menus.archives')}}</span></a>--}}
        {{--        </li>--}}

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.pages.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24"
                     width="24px" fill="#000000">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path
                        d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
                </svg>

                <span class="side-menu__label">{{trans('admin/dashboard.menus.pages')}}</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.contacts.index')}}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"></path>
                </svg>
                <span class="side-menu__label">{{trans('admin/dashboard.menus.support_tickets')}}</span></a>
        </li>


        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.settings.admin.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="16" height="16"
                     fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                    <path
                        d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                </svg>
                <span class="side-menu__label">{{trans('admin/dashboard.menus.admin_settings')}}</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.settings.app.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="16" height="16"
                     fill="currentColor" class="bi bi-sliders"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                </svg>
                <span class="side-menu__label">{{trans('admin/dashboard.menus.app_settings')}}</span></a>
        </li>

        {{--        <li class="slide">--}}
        {{--            <a class="side-menu__item" href="{{route('admin.vehicles.owners.create')}}">--}}

        {{--                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M11.99 2c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10zm3.61 6.34c1.07 0 1.93.86 1.93 1.93 0 1.07-.86 1.93-1.93 1.93-1.07 0-1.93-.86-1.93-1.93-.01-1.07.86-1.93 1.93-1.93zm-6-1.58c1.3 0 2.36 1.06 2.36 2.36 0 1.3-1.06 2.36-2.36 2.36s-2.36-1.06-2.36-2.36c0-1.31 1.05-2.36 2.36-2.36zm0 9.13v3.75c-2.4-.75-4.3-2.6-5.14-4.96 1.05-1.12 3.67-1.69 5.14-1.69.53 0 1.2.08 1.9.22-1.64.87-1.9 2.02-1.9 2.68zM11.99 20c-.27 0-.53-.01-.79-.04v-4.07c0-1.42 2.94-2.13 4.4-2.13 1.07 0 2.92.39 3.84 1.15-1.17 2.97-4.06 5.09-7.45 5.09z"/></svg>--}}
        {{--                <span class="side-menu__label">{{trans('admin/dashboard.menus.clients')}}</span></a>--}}
        {{--        </li>--}}

        {{--        <li class="slide">--}}
        {{--            <a class="side-menu__item" href="{{route('admin.vehicles.owners.create')}}">--}}
        {{--                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="682.667" height="682.667"--}}
        {{--                     viewBox="0 0 512 512"--}}
        {{--                     preserveAspectRatio="xMidYMid meet" xmlns:v="https://vecta.io/nano">--}}
        {{--                    <path--}}
        {{--                        d="M137.4 4.5c-12.9 2.8-25.9 12.1-33.6 23.9-13.3 20.6-10.1 48.2 7.8 66 20.8 20.9 53.9 20.8 74.7 0C197.1 83.7 202 71.7 202 56.5c0-15.1-4.6-26.1-15.5-37.2C173.1 5.7 155.8.5 137.4 4.5zm-24.9 123.2c-13.4 1.9-29 11.4-34.9 21.3l-1.8 3.1 5.1-3.9c7.9-5.9 13.8-7.7 25.6-7.7 9.1.1 10.6.4 16.6 3.3 11.4 5.5 19.6 14.4 23.3 25.4 1.1 3.4 4.6 25.6 4.6 29.4 0 .2 4.1-1.4 9.2-3.5 10.5-4.2 10.6-4.3 10.7-16.1.1-9.2-1.1-14.6-5-22.8-9.3-19.4-31.9-31.5-53.4-28.5zm-13 30.2c-11 2.9-19.5 13.5-19.5 24.6 0 9.9 8.8 83 10.4 87 2.6 6.1 5.9 9.8 11.7 13 4.3 2.3 6.6 2.9 11.9 2.9 6.1.1 8.6-.7 36.3-11.8l29.8-11.9 2.7 2.6c4.5 4.3 7.1 4.7 30.3 4.7H235v100.2c0 95.4.1 100.5 1.9 104.3 4 8.7 8.1 10.5 24.4 10.5h12.2l1.7 4.7c6.5 18.2 30.4 24.2 45 11.3 4-3.4 7.7-9.3 9.2-14.3.5-1.6 2.9-1.7 32.9-1.7h32.4l1.1 3.8c1.8 5.9 7.3 12.4 13.3 15.7 4.8 2.7 6.3 3 13.9 3 7.4 0 9.1-.3 13.1-2.7 6-3.5 11.2-9.4 13.4-15.1l1.8-4.7h11c9.9 0 11.4-.2 15.3-2.5 4.8-2.8 8.4-9.1 8.4-14.5s-3.6-11.7-8.4-14.5l-4.3-2.5H371.7 270l-.2-101.8-.3-101.7-2.2-3.5c-1.2-2-4.1-4.7-6.5-6-3.9-2.2-5.7-2.5-18.9-2.8l-14.6-.4.5-6.9c.6-8.5-1.3-14.1-6.7-19.6-5.6-5.8-10.4-7.8-18.6-7.8-6.6 0-8.6.7-36.4 11.8l-29.6 11.5c-.2-.2-1.5-10.6-2.9-23.1-2.7-23.1-3.7-27.6-8-33.2-5-6.5-17.9-10.8-26.1-8.6zm204.4 26.5c-5.6 2-9.6 5.3-12.6 10.4l-2.8 4.7V234c0 33.4.1 34.6 2.2 38.5 2.7 5.1 6.8 9 11.5 10.9 5.6 2.4 101 2.4 106.6 0 4.7-1.9 8.8-5.8 11.5-10.9 2.1-3.9 2.2-5.1 2.2-38 0-33.7 0-34-2.4-38.8-2.5-5.2-7.1-9.2-12.8-11.3-5.4-1.9-98.1-1.9-103.4 0zM44.1 235.1c-11.8 32.3-18.6 52.6-19.1 56.4-1.5 12.6.5 20.9 16.5 65.7l12.7 36.1c.2.9-10.9 16.6-24.5 35.1-13.6 18.4-25.8 35.7-27 38.3C1.1 470.3.5 473.4.5 479c.1 9.1 2.9 15.3 9.8 21.7 6.4 5.9 10.8 7.6 19.7 7.6 8.3 0 14.1-1.9 19.7-6.7 3.9-3.2 63.1-83.3 66.3-89.5 3.9-7.7 3.7-17.4-.6-28.6-.5-1.2 18.2 9.3 21.4 12 .2.1-1.3 18-3.3 39.6-2 21.7-3.5 42.4-3.2 46 1.2 18 17.6 30.4 35.6 26.8 10.7-2.1 19.2-9.6 22.5-19.8 1.5-4.4 10.6-98.7 10.6-109 0-2.6-.7-6.9-1.6-9.5-3-8.7-9.2-13.8-40.9-33.2l-30.3-18.9c-1-.9-.7-2.7 1.8-9.4 2.5-6.8 2.7-8.2 1.4-7.7-9.9 3.8-23.2 3.3-32.9-1.2-10.8-5.1-19.1-14.1-23-25.2-1-2.6-3.7-22.5-6.4-46.9l-4.7-42.4-18.3 50.4zm278.5 82.6c-3.9 1-9.6 5.4-12.3 9.5l-2.8 4.2-.3 37.5c-.2 25.8 0 38.8.8 41.4.6 2.2 2.9 5.9 5.1 8.2 7.3 7.9 2.6 7.6 98 7.3 84.2-.3 84.4-.3 88.4-2.5 5.1-2.7 7.9-5.7 10.4-11.3 1.9-4.3 2.1-6.4 2.1-40 0-22-.4-37-1.1-39.3-1.3-4.9-7.3-11.5-12.4-13.8-3.8-1.8-8.8-1.9-89-1.8l-86.9.6z"/>--}}
        {{--                </svg>--}}
        {{--                <span class="side-menu__label">{{trans('admin/dashboard.menus.suppliers')}}</span></a>--}}
        {{--        </li>--}}



        {{--        <li class="slide">--}}
        {{--            <a class="side-menu__item" href="{{route('admin.dashboard.home')}}">--}}
        {{--                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"--}}
        {{--                     width="24px" fill="#000000">--}}
        {{--                    <path d="M0 0h24v24H0z" fill="none"/>--}}
        {{--                    <path d="M12 2l-5.5 9h11z"/>--}}
        {{--                    <circle cx="17.5" cy="17.5" r="4.5"/>--}}
        {{--                    <path d="M3 13.5h8v8H3z"/>--}}
        {{--                </svg>--}}
        {{--                <span class="side-menu__label">الأقسام</span></a>--}}
        {{--        </li>--}}

        {{--        <li class="slide">--}}
        {{--            <a class="side-menu__item" href="{{route('admin.dashboard.home')}}">--}}
        {{--                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"--}}
        {{--                     width="24">--}}
        {{--                    <path d="M0 0h24v24H0V0z" fill="none"></path>--}}
        {{--                    <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3"></path>--}}
        {{--                    <path--}}
        {{--                        d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"></path>--}}
        {{--                </svg>--}}
        {{--                <span class="side-menu__label">الصفحات</span></a>--}}
        {{--        </li>--}}

        {{--        <li class="slide">--}}
        {{--            <a class="side-menu__item" href="{{route('admin.dashboard.home')}}">--}}
        {{--                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"--}}
        {{--                     width="24px" fill="#000000">--}}
        {{--                    <path d="M0 0h24v24H0z" fill="none"/>--}}
        {{--                    <path--}}
        {{--                        d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"/>--}}
        {{--                </svg>--}}
        {{--                <span class="side-menu__label">الإعدادات</span></a>--}}
        {{--        </li>--}}
    </ul>
</aside>
<!--aside closed-->
