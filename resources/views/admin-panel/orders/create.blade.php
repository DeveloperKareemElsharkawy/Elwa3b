@extends('admin-panel.layouts.master')

@push('styles')
    <link href="{{ URL::asset('admin_asset/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}"
          rel="stylesheet"/>
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
                    <li class="breadcrumb-item1 active">  @lang('admin/datatable.buttons.c_order')
                    </li>
                </ol>

            </div>

        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary  fs-25"> @lang('admin/datatable.buttons.c_order')</h1>
        </div>
        <form method="post" id="myform" autocomplete="off" action="{{route('admin.orders.store')}}"
              enctype="multipart/form-data"
              class="">
            @csrf
            <div class="row">

                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-header ">
                            <div class="fs-16">@lang('admin/datatable.order_details')</div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <x-admin.drop-down-input name="user_id" :options="$users" key-of-value="name"
                                                             key-of-option="id"></x-admin.drop-down-input>
                                </div>

                                <div class="col-md-12">
                                    <x-admin.drop-down-input name="worker_id" :options="$workers" key-of-value="name"
                                                             key-of-option="id"></x-admin.drop-down-input>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-sm-10 col-md-10">

                                        <x-admin.text-area-input name="notes" ></x-admin.text-area-input>

                                    </div>

                                    <div class="col-sm-10 col-md-10">
                                        <x-admin.date-picker-input name="note_date"  ></x-admin.date-picker-input>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                </div>
                <!-- End Row-->
                <div class="col-xl-3 col-lg-3">

                    <div class="card overflow-hidden">
                        <div class="card-footer text-center card-form-footer">
                            <button type="submit" id="submit_button"
                                    class="btn btn-success me-2"><span
                                    class="fs-15"><i class="fe fe-save me-1"></i>@lang('admin/datatable.buttons.general.save')</span>
                            </button>
                            <a href="{{ route('admin.orders.index') }}" class="btn btn-danger "> <span
                                    class="fs-15"><i class="fe fe-edit me-1"></i>@lang('admin/datatable.buttons.general.cancel')</span></a>
                        </div>
                    </div>

                </div>


            </div>

        </form>


        @endsection

        @push('scripts')
            <script src="{{ URL::asset('admin_asset/plugins/fileupload/js/dropify.js') }}"></script>

            <script src="{{ URL::asset('admin_asset/plugins/date-picker/date-picker.js')}}"></script>
            <script src="{{ URL::asset('admin_asset/plugins/date-picker/jquery-ui.js')}}"></script>
            <script src="{{ URL::asset('admin_asset/plugins/input-mask/jquery.maskedinput.js')}}"></script>

            <script src="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>


            <script src="{{ URL::asset('admin_asset/js/formelementadvnced.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/form-elements.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/jquery.repeater.js') }}"></script>

            <!--Date Range Picker-->
            <script src="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

            <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
            <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.1.57/js/jquery.inputmask.js"></script>
            <script src="{{ URL::asset('admin_asset/js/repeater-owners.js') }}"></script>

    @include('vendor.lrgt.ajax_script', ['form' => '#myform','name_class'=>'','on_start'=>false])


    @endpush
