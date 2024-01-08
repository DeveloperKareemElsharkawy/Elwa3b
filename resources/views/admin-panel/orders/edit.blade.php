@extends('admin-panel.layouts.master')
@push('styles')
    <link href="{{ URL::asset('admin_asset/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}"
          rel="stylesheet"/>
    <link href="{{ URL::asset('admin_asset/css/jquery.imagesloader.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('admin_asset/plugins/date-picker/date-picker.css') }}" rel="stylesheet"/>

@endpush
@section('content')
    <div class="side-app">
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">

                <ol class="breadcrumb1">
                    <li class="breadcrumb-item1"><a href="{{route('admin.dashboard.home')}}" class=""><i
                                class="fe fe-home me-2"
                                aria-hidden="true"></i>
                            @lang('admin/dashboard.dashboard')</a>
                    </li>
                    <li class="breadcrumb-item1"><a href="{{route('admin.orders.index')}}" class="">
                            @lang('admin/dashboard.menus.orders')</a>
                    </li>
                    <li class="breadcrumb-item1 active">  @lang('admin/datatable.buttons.u_order')
                    </li>
                </ol>

            </div>

        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary mb-3 fs-25">   @lang('admin/datatable.buttons.u_order') رقم
                {{$order->order_number}}</h1>
            <h3 class="mb-0   bold text-primary  fs-22">{{$order->created_at}}</h3>
        </div>

        <form method="post" class="repeater" id="myform" autocomplete="off"
              action="{{route('admin.orders.update',['order_id'=>$order->id])}}"
              enctype="multipart/form-data"
              class="">
            @csrf

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title fs-19">@lang('admin/datatable.client_info')</h3>
                        </div>
                        <div class="card-body" style="padding: 5px;">
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
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header bg-success ">
                            <h3 class="card-title fs-19 text-white">  @lang('admin/datatable.order_nationality_processes') </h3>
                        </div>
                        <div class="card-body" style="padding: 5px;">
                            <table class="table table-bordered mb-1">
                                <thead>
                                <tr>
                                    <th>@lang('admin/datatable.order_nationality_processes')</th>
                                    <th>@lang('admin/datatable.start_date')</th>
                                    <th>@lang('admin/datatable.end_date')</th>
                                    <th>@lang('admin/datatable.order_nationality_status')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include('admin-panel.orders.partials.order_process',['orderProcesses' =>$order->processes])
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="card mb">
                            <div class="card-header">
                                <h3 class="card-title fs-19">  @lang('admin/datatable.order_status') </h3>
                            </div>
                            <div class="card-body mb-5 mt-3" style="padding: 5px;">
                                <div class="col-sm-12 col-md-12">
                                    <select name="status" id="status" class="form-control SlectBox ">

                                        <option @selected($order->status == 'pending') value="pending">pending
                                        </option>
                                        <option @selected($order->status == 'accepted') value="accepted">accepted
                                        </option>
                                        <option @selected($order->status == 'rejected') value="rejected">rejected
                                        </option>
                                        <option @selected($order->status == 'completed') value="completed">completed
                                        </option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card mb">
                            <div class="card-header">
                                <h3 class="card-title fs-19">  حاله الطلب </h3>
                            </div>
                            <div class="card-body mb-5 mt-3" style="padding: 5px;">
                                <div class="col-sm-12 col-md-12">
                                    <x-admin.number-input name="total_price" :value="$order->total_price"></x-admin.number-input>
                                    <x-admin.number-input name="amount_paid" :value="$order->amount_paid"></x-admin.number-input>
                                </div>
                            </div>
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
                                        <div data-repeater-item="">
                                            <div class="row mb-5">
                                                <div class="col-sm-10 col-md-10">

                                                    <x-admin.text-area-input name="notes" value="{{$note->note}}" ></x-admin.text-area-input>

                                                </div>

                                                <div class="col-sm-10 col-md-10">
                                                    <x-admin.date-picker-input name="note_date" value="{{$note->note_date}}"></x-admin.date-picker-input>
                                                </div>

                                                <div class="col-sm-2 col-md-2">
                                                    <input data-repeater-delete="" type="button"
                                                           class="delete-owner btn btn-icon btn-md mt-6 btn-danger remove-btn"
                                                           value="Delete">
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        <div data-repeater-item="">
                                            <div class="row mb-5">
                                                <div class="col-sm-10 col-md-10">

                                                    <x-admin.text-area-input name="notes" ></x-admin.text-area-input>

                                                </div>

                                                <div class="col-sm-10 col-md-10">
                                                    <x-admin.date-picker-input name="note_date"  ></x-admin.date-picker-input>
                                                </div>

                                                <div class="col-sm-2 col-md-2">
                                                    <input data-repeater-delete="" type="button"
                                                           class="delete-owner btn btn-icon btn-md mt-6 btn-danger remove-btn"
                                                           value="Delete">
                                                </div>
                                            </div>
                                        </div>

                                    @endforelse
                                </div>

                                <input data-repeater-create="" type="button"
                                       class="btn btn-primary repeater-add-btn mt-repeater-add btn btn-secondary fs-17 printPageButton"
                                       value="أضف ملاحظه جديده">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Row-->
            <div class="col-xl-12 col-lg-12">

                <div class="card overflow-hidden">
                    <div class="card-footer text-center card-form-footer">
                        <button type="submit" id="submit_button" value="apply" name="action"
                                class="btn btn-success me-2 fs-17"><span
                                class="fs-15"><i class="fe fe-save me-1"></i>@lang('admin/datatable.buttons.general.save')</span>
                        </button>


                    </div>
                </div>

            </div>
        </form>
    </div>

@endsection

@push('scripts')

    <script src="{{ URL::asset('admin_asset/plugins/fileupload/js/dropify.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/js/filupload.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/js/jquery.imagesloader.js') }}"></script>


    <script src="{{ URL::asset('admin_asset/plugins/date-picker/date-picker.js')}}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/date-picker/jquery-ui.js')}}"></script>
    <script src="{{ URL::asset('admin_asset/plugins/input-mask/jquery.maskedinput.js')}}"></script>

    <script src="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

    <script src="{{ URL::asset('admin_asset/js/formelementadvnced.js') }}"></script>
    <script src="{{ URL::asset('admin_asset/js/form-elements.js') }}"></script>

    <script src="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

    <script src="{{ URL::asset('admin_asset/js/js-repeater.js') }}"></script>

    <script src="{{ URL::asset('admin_asset/js/orders.js') }}"></script>

    @include('vendor.lrgt.ajax_script', ['form' => '#myform','name_class'=>'',
'request'=>'App/Http/Requests/Admin/System/Admin/UpdateSystemUserRequest'])

@endpush
