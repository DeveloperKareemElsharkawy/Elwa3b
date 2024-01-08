@extends('admin-panel.layouts.master')
<link href="{{ URL::asset('admin_asset/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('admin_asset/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('admin_asset/plugins/date-picker/date-picker.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet"/>

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
                    <li class="breadcrumb-item1"><a href="{{route('admin.shipments.index')}}" class="">
                            @lang('admin/dashboard.menus.transport_fee')</a>
                    </li>
                    <li class="breadcrumb-item1 active"> @lang('admin/datatable.buttons.u_shipment')</li>
                </ol>

            </div>

        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary  fs-25">@lang('admin/datatable.buttons.u_shipment')</h1>
        </div>
        <form method="post" id="myform" autocomplete="off"
              action="{{route('admin.shipments.update',['shipment_id'=>$shipment->id])}}"
              enctype="multipart/form-data"
              class="">
            @csrf

            <input type="hidden" name="shipment_id" value="{{$shipment->id}}">

            <div class="row">

                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="tracking_number"
                                               class="form-label">@lang('admin/datatable.tracking_number') <span
                                                class="text-red">*</span></label>
                                        <input type="text" name="tracking_number"
                                               class="form-control mb-3 input_field"
                                               placeholder="tracking_number"
                                               id="tracking_number"
                                               readonly
                                               value="{{$shipment->tracking_number}}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6"> {{-- Shipment Start Date --}}
                                    <div class="form-group">
                                        <label class="form-label">@lang('admin/datatable.start_date')</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18"
                                                         viewBox="0 0 24 24" width="18">
                                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                                        <path
                                                            d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/>
                                                        <path d="M4 5.01h16V8H4z" opacity=".3"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <input name="start_date" id="start_date" class="form-control fc-datepicker"
                                                   placeholder="MM/DD/YYYY"
                                                   type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6"> {{-- Shipment Start Time --}}
                                    <label class="form-label">@lang('admin/datatable.start_time')</label>

                                    <div class="d-flex">
                                        <div class="input-group wd-150">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18"
                                                         viewBox="0 0 24 24" width="18">
                                                        <path d="M0 0h24v24H0V0z" fill="none"/>
                                                        <path
                                                            d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.25 12.15L11 13V7h1.5v5.25l4.5 2.67-.75 1.23z"
                                                            opacity=".3"/>
                                                        <path
                                                            d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                                    </svg>
                                                </div><!-- input-group-text -->
                                            </div><!-- input-group-prepend -->
                                            <input class="form-control" name="start_time"
                                                   value="{{date('h:i A',strtotime($shipment->start_time) )}}" id="tp3"
                                                   placeholder="Set time" type="text">
                                            <button class="btn btn btn-primary br-tl-0 br-bl-0" id="setTimeButton">Set
                                                Current Time
                                            </button>
                                        </div><!-- input-group -->
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="owner"
                                               class="form-label">@lang('admin/datatable.vehicle') <span
                                                class="text-red">*</span> </label>
                                        <select name="vehicle_id" id="owner_ids"
                                                class="form-control SlectBox owner_id_input">
                                            <option value="0">-- تحديد عربه النقل --</option>
                                            @foreach($vehicles as $vehicle)
                                                <option
                                                    @selected($shipment->vehicle_id ==$vehicle->id) value="{{$vehicle->id}}">{{$vehicle->name}}
                                                    / {{$vehicle->plate_number}} </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="owner"
                                               class="form-label">@lang('admin/datatable.trailer') <span
                                                class="text-red">*</span> </label>
                                        <select name="trailer_id" id="owner_ids"
                                                class="form-control SlectBox owner_id_input">
                                            <option value="0">-- تحديد المقطوره --</option>
                                            @foreach($trailers as $trailer)
                                                <option
                                                    @selected($shipment->trailer_id ==$trailer->id) value="{{$trailer->id}}">{{$trailer->name}}
                                                    / {{$trailer->serial_number}} </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="owner"
                                               class="form-label">@lang('admin/datatable.client') <span
                                                class="text-red">*</span> </label>
                                        <select name="client_id" id="client_id"
                                                class="form-control SlectBox owner_id_input">
                                            <option value="0">-- تحديد الوجهة --</option>
                                            @foreach($clients as $client)
                                                <option
                                                    @selected($shipment->client_id ==$client->id) value="{{$client->id}}">{{$client->name}}   </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="owner"
                                               class="form-label">@lang('admin/datatable.destination') <span
                                                class="text-red">*</span> </label>
                                        <select name="destination_id" id="destination_id"
                                                class="form-control SlectBox owner_id_input">
                                            @foreach($destinations as $destination)
                                               <option @selected($shipment->destination_id ==$destination->id) value="{{$destination->id}}
                                                ">{{' من ' . $destination->from_where . ' - إلى ' . $destination->to_where . ' - ' . $destination->price . ' جنيه '}}   </option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="owner"
                                               class="form-label">@lang('admin/datatable.driver') <span
                                                class="text-red">*</span> </label>
                                        <select name="driver_id" id="driver_id"
                                                class="form-control SlectBox owner_id_input">
                                            <option value="0">-- تحديد السائق --</option>
                                            @foreach($drivers as $driver)
                                                <option @selected($shipment->driver_id ==$driver->id)  value="{{$driver->id}}">{{$driver->name}}   </option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">  {{-- Plate Number --}}
                                    <div class="form-group">
                                        <label for="pocket_money"
                                               class="form-label">@lang('admin/datatable.driver_pocket_money') <span
                                                class="text-red">*</span> </label>
                                        <input type="text" name="pocket_money"
                                               class="form-control mb-3 input_field"
                                               placeholder=" pocket_money"
                                               id="pocket_money"
                                               value="{{ $shipment->pocket_money }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">  {{-- Plate Number --}}
                                    <div class="form-group">
                                        <label for="cargo_weight"
                                               class="form-label">@lang('admin/datatable.cargo_weight') <span
                                                class="text-red">*</span> </label>
                                        <input type="text" name="cargo_weight"
                                               class="form-control mb-3 input_field"
                                               onInput="edValueKeyPress()"
                                               placeholder=" cargo_weight"
                                               id="cargo_weight"
                                               value="{{ $shipment->cargo_weight }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">  {{-- Plate Number --}}
                                    <div class="form-group">
                                        <label for="total_shipment"
                                               class="form-label">@lang('admin/datatable.total_shipment') <span
                                                class="text-red">*</span> </label>
                                        <input type="text" name="total_shipment_cost"
                                               class="form-control mb-3 input_field"
                                               placeholder=" total_shipment"
                                               id="total_shipment"
                                               readonly
                                               value="{{ $shipment->total_shipment_cost }}">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Row-->
                <div class="col-xl-3 col-lg-3">

                    <div class="card overflow-hidden">
                        {{--                        <div class="card-header ">--}}
                        {{--                            <div class="card-title">{{trans('admin/datatable.buttons.publish')}}</div>--}}
                        {{--                        </div>--}}
                        <div class="card-footer text-center card-form-footer">
                            <button type="submit" id="submit_button" value="apply" name="action"
                                    class="btn btn-success me-2"><span
                                    class="fs-15"><i class="fe fe-save me-1"></i>@lang('admin/datatable.buttons.general.save')</span>
                            </button>
                            <a href="{{ route('admin.transport.fees.index') }}" class="btn btn-danger "> <span
                                    class="fs-15"><i class="fe fe-edit me-1"></i>@lang('admin/datatable.buttons.general.cancel')</span></a>
                        </div>
                    </div>


                </div>


            </div>

        </form>


        @endsection

        @push('scripts')

            <script src="{{ URL::asset('admin_asset/plugins/date-picker/date-picker.js')}}"></script>
            <script src="{{ URL::asset('admin_asset/plugins/date-picker/jquery-ui.js')}}"></script>
            <script src="{{ URL::asset('admin_asset/plugins/input-mask/jquery.maskedinput.js')}}"></script>

            <script src="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

            @javascript('start_date', $shipment->start_date->format('m/d/Y'))


            <script src="{{ URL::asset('admin_asset/js/formelementadvnced.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/form-elements.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/jquery.repeater.js') }}"></script>

            <!--Date Range Picker-->
            <script src="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

            <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
            <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.1.57/js/jquery.inputmask.js"></script>
            <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.1.57/js/jquery.inputmask.js"></script>
            <script src="{{ URL::asset('admin_asset/js/repeater-owners.js') }}"></script>

            <script src="{{ URL::asset('admin_asset/plugins/time-picker/jquery.timepicker.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/plugins/time-picker/toggles.min.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/shipment.js') }}"></script>

            <script>
                $(document).ready(function () {
                    $("#start_date").datepicker("setDate", start_date).datepicker("refresh");
                });

            </script>


    @include('vendor.lrgt.ajax_script', ['form' => '#myform','name_class'=>'',
'request'=>'App/Http/Requests/Admin/VehiclesTypes/UpdateVehiclesTypeRequest'])


    @endpush
