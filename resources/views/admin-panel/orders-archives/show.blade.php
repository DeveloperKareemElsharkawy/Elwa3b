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

            <li class="breadcrumb-item1"><a href="{{route('admin.orders.index')}}" class=""> {{trans('admin/dashboard.menus.orders')}}
                </a></li>
            <li class="breadcrumb-item1 active">{{trans('admin/dashboard.menus.workers_archives')}}
            </li>
        </ol>

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">@lang('admin/datatable.order_info')</h3>
                    </div>
                    <div class="card-body" style="padding: 5px;">
                        <div class="table-responsive" style="min-height: 190px;">
                            <table class="table table-bordered mb-0 table-striped ">
                                <tbody>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50">@lang('admin/datatable.order_number') </span>
                                    </td>
                                    <td class="">
                                        <a class="btn-link fs-16" target="_blank"
                                           href="{{route('admin.orders.show',['order_id' => $order->id])}}">{{$order->order_number}}</a>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50">@lang('admin/datatable.client') </span>
                                    </td>
                                    <td class="">
                                        <img class="avatat avatar-md brround me-2"
                                             src="{{ asset('storage/' . $order->user->image)}}" alt="img">
                                        <a class="btn-link fs-16" target="_blank"
                                           href="{{route('admin.users.show',['user_id' => $order->user_id])}}">{{$order->user->name}}
                                        </a>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50">@lang('admin/datatable.worker') </span>
                                    </td>
                                    <td class="">
                                        <img class="avatat avatar-md brround me-2"
                                             src="{{ asset('storage/' . $order->worker->face_image)}}" alt="img">
                                        <a class="btn-link fs-16" target="_blank"
                                           href="{{route('admin.workers.show',['worker_id' => $order->worker_id])}}">{{$order->worker->name}}
                                        </a>
                                </tr>

                                <tr>
                                    <td class="">
                                            <span
                                                class="font-weight-semibold w-50">@lang('admin/datatable.order_status') </span>
                                    </td>
                                    <td class="">
                                    {{$order->status}}
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">  @lang('admin/datatable.order_nationality_processes') </h3>
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


        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <livewire:admin.order-archives-table order_id="{{$order->id}}"/>
                    </div>
                </div>
            </div>
        </div>
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
