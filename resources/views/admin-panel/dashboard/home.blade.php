@extends('admin-panel.layouts.master')
@section('content')
    <!--app-content open-->

    <div class="side-app">
        <div class="row mt-4">
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center list-icons">

                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon2 text-primary icon-dropshadow-primary"
                             width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"></path>
                        </svg>
                        <p class="card-text mt-3 mb-0 font-weight-semibold">@lang('admin/dashboard.analytics.new_orders')</p>
                        <p class="h2 text-center font-weight-bold">{{\App\Models\Order::count()}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center list-icons">

                        <svg class="svg-icon2 text-primary icon-dropshadow-primary" xmlns="http://www.w3.org/2000/svg"
                             enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                             fill="#38cb89">
                            <g>
                                <rect fill="none" height="24" width="24"></rect>
                            </g>
                            <g>
                                <g>
                                    <path d="M9,15c-2.67,0-8,1.34-8,4v2h16v-2C17,16.34,11.67,15,9,15z"></path>
                                    <path
                                        d="M22.1,6.84c0.01-0.11,0.02-0.22,0.02-0.34c0-0.12-0.01-0.23-0.03-0.34l0.74-0.58c0.07-0.05,0.08-0.15,0.04-0.22l-0.7-1.21 c-0.04-0.08-0.14-0.1-0.21-0.08L21.1,4.42c-0.18-0.14-0.38-0.25-0.59-0.34l-0.13-0.93C20.36,3.06,20.29,3,20.2,3h-1.4 c-0.09,0-0.16,0.06-0.17,0.15L18.5,4.08c-0.21,0.09-0.41,0.21-0.59,0.34l-0.87-0.35c-0.08-0.03-0.17,0-0.21,0.08l-0.7,1.21 c-0.04,0.08-0.03,0.17,0.04,0.22l0.74,0.58c-0.02,0.11-0.03,0.23-0.03,0.34c0,0.11,0.01,0.23,0.03,0.34l-0.74,0.58 c-0.07,0.05-0.08,0.15-0.04,0.22l0.7,1.21c0.04,0.08,0.14,0.1,0.21,0.08l0.87-0.35c0.18,0.14,0.38,0.25,0.59,0.34l0.13,0.93 C18.64,9.94,18.71,10,18.8,10h1.4c0.09,0,0.16-0.06,0.17-0.15l0.13-0.93c0.21-0.09,0.41-0.21,0.59-0.34l0.87,0.35 c0.08,0.03,0.17,0,0.21-0.08l0.7-1.21c0.04-0.08,0.03-0.17-0.04-0.22L22.1,6.84z M19.5,7.75c-0.69,0-1.25-0.56-1.25-1.25 s0.56-1.25,1.25-1.25s1.25,0.56,1.25,1.25S20.19,7.75,19.5,7.75z"></path>
                                    <path
                                        d="M19.92,11.68l-0.5-0.87c-0.03-0.06-0.1-0.08-0.15-0.06l-0.62,0.25c-0.13-0.1-0.27-0.18-0.42-0.24l-0.09-0.66 C18.12,10.04,18.06,10,18,10h-1c-0.06,0-0.11,0.04-0.12,0.11l-0.09,0.66c-0.15,0.06-0.29,0.15-0.42,0.24l-0.62-0.25 c-0.06-0.02-0.12,0-0.15,0.06l-0.5,0.87c-0.03,0.06-0.02,0.12,0.03,0.16l0.53,0.41c-0.01,0.08-0.02,0.16-0.02,0.24 c0,0.08,0.01,0.17,0.02,0.24l-0.53,0.41c-0.05,0.04-0.06,0.11-0.03,0.16l0.5,0.87c0.03,0.06,0.1,0.08,0.15,0.06l0.62-0.25 c0.13,0.1,0.27,0.18,0.42,0.24l0.09,0.66C16.89,14.96,16.94,15,17,15h1c0.06,0,0.12-0.04,0.12-0.11l0.09-0.66 c0.15-0.06,0.29-0.15,0.42-0.24l0.62,0.25c0.06,0.02,0.12,0,0.15-0.06l0.5-0.87c0.03-0.06,0.02-0.12-0.03-0.16l-0.52-0.41 c0.01-0.08,0.02-0.16,0.02-0.24c0-0.08-0.01-0.17-0.02-0.24l0.53-0.41C19.93,11.81,19.94,11.74,19.92,11.68z M17.5,13.33 c-0.46,0-0.83-0.38-0.83-0.83c0-0.46,0.38-0.83,0.83-0.83s0.83,0.38,0.83,0.83C18.33,12.96,17.96,13.33,17.5,13.33z"></path>
                                    <path
                                        d="M4.74,9h8.53c0.27,0,0.49-0.22,0.49-0.49V8.49c0-0.27-0.22-0.49-0.49-0.49H13c0-1.48-0.81-2.75-2-3.45V5.5 C11,5.78,10.78,6,10.5,6S10,5.78,10,5.5V4.14C9.68,4.06,9.35,4,9,4S8.32,4.06,8,4.14V5.5C8,5.78,7.78,6,7.5,6S7,5.78,7,5.5V4.55 C5.81,5.25,5,6.52,5,8H4.74C4.47,8,4.25,8.22,4.25,8.49v0.03C4.25,8.78,4.47,9,4.74,9z"></path>
                                    <path d="M9,13c1.86,0,3.41-1.28,3.86-3H5.14C5.59,11.72,7.14,13,9,13z"></path>
                                </g>
                            </g>
                        </svg>

                        <p class="card-text mt-3 mb-0 font-weight-semibold">@lang('admin/dashboard.analytics.new_workers')</p>
                        <p class="h2 text-center font-weight-bold">{{\App\Models\Worker::count()}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center list-icons">
                        <svg class="svg-icon2 fill-secondary icon-dropshadow-secondary"
                             xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-headset" viewBox="0 0 16 16">
                            <path
                                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
                        </svg>
                        <p class="card-text mt-3 mb-0 font-weight-semibold">@lang('admin/dashboard.analytics.support_tickets')</p>
                        <p class="h2 text-center font-weight-bold">{{\App\Models\Contact::count()}}</p>
                    </div>
                </div>
            </div>
        </div>

        <!--Row-->

        <div class="text-center mb-3">
            <h4 class="page-title mb-0 text-primary">@lang('admin/dashboard.menus.orders')</h4>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-12 col-lg-6">
                <div class="card overflow-hidden bg-success text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-2 fs-18">
                                    @lang('admin/dashboard.analytics.orders.finished')
                                </div>
                                <h1 class="font-weight-bold mb-1">{{\App\Models\Order::query()->where('status','completed')->count()}}</h1>
                             </div>
                            <div class="col col-auto">
                                <div class="mx-auto chart-circle chart-circle-md mt-sm-0 mb-0" data-value="0.60"
                                     data-thickness="6" data-color="#008a4c">
                                    <div class="mx-auto chart-circle-value text-center fs-20">60%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-12 col-lg-6">
                <div class="card overflow-hidden bg-primary text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-2 fs-18">
                                    @lang('admin/dashboard.analytics.orders.pending')
                                </div>
                                <h1 class="font-weight-bold mb-1">{{\App\Models\Order::query()->where('status','pending')->count()}}</h1>
                             </div>
                            <div class="col col-auto">
                                <div class="mx-auto chart-circle chart-circle-md  mt-sm-0 mb-0" data-value="0.30"
                                     data-thickness="6" data-color="#4422c9">
                                    <div class="mx-auto chart-circle-value text-center fs-20">30%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-12 col-lg-6">
                <div class="card overflow-hidden bg-warning text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-2 fs-18">
                                    @lang('admin/dashboard.analytics.orders.canceled')
                                </div>
                                <h1 class="font-weight-bold mb-1">{{\App\Models\Order::query()->where('status','rejected')->count()}}</h1>
                             </div>
                            <div class="col col-auto">
                                <div class="mx-auto chart-circle chart-circle-md mt-sm-0 mb-0" data-value="0.08"
                                     data-thickness="6" data-color="#d18d02">
                                    <div class="mx-auto chart-circle-value text-center fs-20">08%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-12 col-lg-6">
                <div class="card overflow-hidden bg-danger text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-2 fs-18">
                                    @lang('admin/dashboard.analytics.orders.rejected')
                                </div>
                                <h1 class="font-weight-bold mb-1">{{\App\Models\Order::query()->where('status','canceled')->count()}}</h1>
                            </div>
                            <div class="col col-auto">
                                <div class="mx-auto chart-circle chart-circle-md mt-sm-0 mb-0" data-value="0.02"
                                     data-thickness="6" data-color="#eb2323">
                                    <div class="mx-auto chart-circle-value text-center fs-20">02%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->

    </div>

@endsection

@push('scripts')

@endpush
