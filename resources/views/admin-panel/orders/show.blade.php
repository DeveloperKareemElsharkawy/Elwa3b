@extends('admin-panel.layouts.master')

@push('styles')
    <link href="{{ URL::asset('admin_asset/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="side-app">
        <ol class="breadcrumb1">
            <li class="breadcrumb-item1"><a href="{{route('admin.dashboard.home')}}" class=""><i class="fe fe-home me-2"
                                                                                                 aria-hidden="true"></i>{{trans('admin/dashboard.dashboard')}}
                </a></li>

            <li class="breadcrumb-item1"><a href="{{route('admin.orders.index')}}"
                                            class=""> {{trans('admin/dashboard.menus.orders')}}
                </a></li>
            <li class="breadcrumb-item1 active">{{trans('admin/dashboard.menus.workers_archives')}}
            </li>
        </ol>

        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary mb-3 fs-25">   @lang('admin/datatable.order_info') رقم
                {{$order->order_number}}</h1>
            <h3 class="mb-0   bold text-primary  fs-22">{{$order->created_at}}</h3>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">@lang('admin/datatable.client_info')</h3>
                    </div>
                    <div class="card-body" style="padding: 5px;">


                        <div class="card-body">
                            <img style="width: 400px;"
                                 src="{{$order->user->imageURL}}"
                                 alt="image" class="card-image1 worker-image">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-striped ">
                                <tbody>
                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50">@lang('admin/datatable.name') </span>
                                    </td>
                                    <td class="">
                                        <a class="btn-link fs-16" target="_blank"
                                           href="{{route('admin.users.show',['user_id' => $order->user_id])}}">{{$order->user->name}}</a>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.email')  </span>
                                    </td>
                                    <td class="">{{$order->user->email}}  </td>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50"> @lang('admin/datatable.mobile')</span>
                                    </td>
                                    <td class="">{{$order->user->mobile}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50"> @lang('admin/datatable.state_id')</span>
                                    </td>
                                    <td class="">{{$order->user->state->name}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50"> @lang('admin/datatable.zone')</span>
                                    </td>
                                    <td class="">{{$order->user->zone}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50"> @lang('admin/datatable.street')</span>
                                    </td>
                                    <td class="">{{$order->user->street}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">@lang('admin/datatable.worker_info')</h3>
                    </div>
                    <div class="card-body" style="padding: 5px;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <img style="max-height: 255px; width: 300px;"
                                     src="{{$order->worker->faceImageUrl}}"
                                     alt="image" class="card-image1 worker-image">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <img  style="max-height: 255px; width: 300px;"
                                    src="{{$order->worker->workerImageUrl}}"
                                    alt="image" class="card-image1 worker-image">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-striped ">
                                <tbody>
                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50">@lang('admin/datatable.name') </span>
                                    </td>
                                    <td class="">
                                        <a class="btn-link fs-16" target="_blank"
                                           href="{{route('admin.workers.show',['worker_id' => $order->worker_id])}}">{{$order->worker->name}}</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.experience')  </span>
                                    </td>
                                    <td class="">{{$order->worker->experience}} @lang('admin/datatable.years') </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.languages')  </span>
                                    </td>
                                    <td class="">
                                        @foreach($order->worker->languages as $language)
                                            @lang('admin/datatable.'.$language) ,
                                        @endforeach

                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.category_id')  </span>
                                    </td>
                                    <td class="">{{$order->worker->job->name}} </td>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50"> @lang('admin/datatable.salary')</span>
                                    </td>
                                    <td class="">{{$order->worker->salary}} </td>
                                </tr>
                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50">@lang('admin/datatable.scientific_degree') </span>
                                    </td>
                                    <td class="">{{$order->worker->scientific_degree}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header bg-success ">
                        <h3 class="card-title fs-19 text-white">  @lang('admin/datatable.order_nationality_processes') </h3>
                    </div>
                    <div class="card-body" style="padding: 5px;">
                        <table class="table table-bordered mb-1">

                            <tbody>
                            @foreach($order->processes as  $orderProcess)
                                @include('admin-panel.orders.partials.processes',['orderProcess' =>$orderProcess])
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-xl-6 col-lg-6">

                <div class="card">
                    <div class="card-header bg-primary ">
                        <div class="card-title fs-19 text-white">@lang('admin/datatable.order_notes')</div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div data-repeater-list="notes">
                                @forelse ($order->notes as $note)
                                    <div class="mb-5">

                                        <div class="text-muted fs-15 mb-3">{{$note->note}}</div>
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <div class="text-muted text-lg-right fs-15">@lang('admin/datatable.by')
                                                    : {{$note->admin->name}}</div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <div class="text-muted text-lg-left fs-15">@lang('admin/datatable.date')
                                                    : {{$note->note_date}}</div>
                                            </div>

                                        </div>
                                    </div>
                                @empty

                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @if(count($order->archives))
                <div class="col-xl-12 col-lg-12">
                    <div class="text-center mb-5">
                        <h1 class="page-title mb-0 text-primary mb-3 fs-25">أرشيف الطلب
                        </h1>
                    </div>
                </div>
                @foreach($order->archives as $archive)
                    <div class="col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title fs-19">{{$archive->title}}</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-muted fs-15 mb-3"> {{$archive->description}}</div>

                                <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        @foreach(json_decode($archive->images) as $image)
                                            <button type="button" data-bs-target="#carousel-indicators"
                                                    data-bs-slide-to="{{$loop->index}}"
                                                    class="active"></button>
                                        @endforeach
                                    </div>

                                    <div class="carousel-inner">
                                        <div class="card-body">
                                            <ul id="lightgallery" class="list-unstyled row">

                                                @foreach(json_decode($archive->images) as $image)

                                                    <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4"
                                                        data-responsive="{{asset('storage/' . $image)}}"
                                                        data-src="{{asset('storage/' . $image)}}"
                                                        data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                        <a href="#">
                                                            <img class="img-responsive br-7 img-archive"
                                                                 style="width: 300px; height: 200px; object-fit: fill;"
                                                                 src="{{asset('storage/' . $image)}}"
                                                                 alt="Thumb-1">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <p class="text-center">
            <button type="button" class="btn btn-secondary fs-17 printPageButton" onclick="javascript:window.print();"><i class="si si-printer"></i> طباعة الطلب            </button>
        </p>

    </div>

@endsection

@push('scripts')
    <script>
        @foreach($order->archives as $archive)
        lightGallery(document.getElementById('lightgallery{{$archive['id']}}'), {
            speed: 500,
        });
        @endforeach
    </script>

@endpush
