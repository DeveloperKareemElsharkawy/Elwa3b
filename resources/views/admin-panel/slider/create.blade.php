@extends('admin-panel.layouts.master')
<link href="{{ URL::asset('admin_asset/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet"/>

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
                    <li class="breadcrumb-item1"><a href="{{route('admin.slider.index')}}" class="">
                            @lang('admin/dashboard.menus.slider')</a>
                    </li>
                    <li class="breadcrumb-item1 active">  @lang('admin/datatable.buttons.c_slider')
                    </li>
                </ol>

            </div>

        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary  fs-25"> @lang('admin/datatable.buttons.c_slider')</h1>
        </div>
        <form method="post" id="myform" autocomplete="off"
              action="{{route('admin.slider.store')}}"
              enctype="multipart/form-data"
              class="">
            @csrf


            <div class="row">

                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">{{trans('admin/datatable.title_ar')}} <span
                                                class="text-red">*</span></label>
                                        <input type="text" name="title[ar]"
                                               class="form-control mb-3 input_field"
                                               placeholder="@lang('admin/datatable.title_ar')"
                                               id="title_ar"
                                        >

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">{{trans('admin/datatable.title_en')}} <span
                                                class="text-red">*</span></label>
                                        <input type="text" name="title[en]"
                                               class="form-control mb-3 input_field"
                                               placeholder="@lang('admin/datatable.title_en')"
                                               id="title_en"
                                        >

                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group"><label
                                            class="form-label">@lang('admin/datatable.description_ar')
                                            <span class="text-red">*</span></label>
                                        <textarea data-skip-name="true"
                                                  class="form-control" id="description_ar" name="description[ar]"
                                                  rows="4"
                                                  placeholder="{{trans('admin/datatable.input_placeholder', ['attribute' => trans('admin/datatable.description')])}}"
                                                  spellcheck="false"> </textarea>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group"><label
                                            class="form-label">@lang('admin/datatable.description_en')
                                            <span class="text-red">*</span></label>
                                        <textarea data-skip-name="true"
                                                  class="form-control" id="description_en" name="description[en]"
                                                  rows="4"
                                                  placeholder="{{trans('admin/datatable.input_placeholder', ['attribute' => trans('admin/datatable.description')])}}"
                                                  spellcheck="false"> </textarea>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-12">
                                    <x-admin.drop-down-input name="target" :options="[
                                                             'url' => __('admin/datatable.options.url'),
                                                             'category' => __('admin/datatable.options.category'),
                                                             'worker' => __('admin/datatable.options.worker'),
                                                             ]"/>
                                </div>

                                <div class="col-sm-12 col-md-12" id="url_target">
                                    <x-admin.text-input name="url"></x-admin.text-input>
                                </div>

                                <div class="col-sm-12 col-md-12" id="category_target">
                                    <x-admin.drop-down-input name="category" key-of-value="name" key-of-option="id"
                                                             :options="$categories"></x-admin.drop-down-input>
                                </div>

                                <div class="col-sm-12 col-md-12" id="worker_target">
                                    <div class="form-group">
                                        <label class="form-label"> @lang('admin/datatable.worker')</label>
                                        <select name="worker" id="worker" class="select2-show-search form-control SlectBox "
                                                data-placeholder="Choose one (with searchbox)">
                                            @foreach($workers as $worker)
                                                <option value="{{$worker->id}}">{{$worker->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.checkbox-input name="status"></x-admin.checkbox-input>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Row-->
                <div class="col-xl-3 col-lg-3">

                    <div class="card overflow-hidden">
                        <div class="card-footer text-center card-form-footer">
                            <button type="submit" id="submit_button" value="apply" name="action"
                                    class="btn btn-success me-2"><span
                                    class="fs-15"><i class="fe fe-save me-1"></i>@lang('admin/datatable.buttons.general.save')</span>
                            </button>
                            <a href="{{ route('admin.slider.index') }}" class="btn btn-danger "> <span
                                    class="fs-15"><i class="fe fe-edit me-1"></i>@lang('admin/datatable.buttons.general.cancel')</span></a>
                        </div>
                    </div>

                    <x-admin.image-input name="image"></x-admin.image-input>
                </div>


            </div>

        </form>


        @endsection

        @push('scripts')

            <script src="{{ URL::asset('admin_asset/plugins/fileupload/js/dropify.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/filupload.js') }}"></script>


            <script src="{{ URL::asset('admin_asset/js/slider.js') }}"></script>

    @include('vendor.lrgt.ajax_script', ['form' => '#myform','name_class'=>'',
'request'=>'App/Http/Requests/Admin/System/Admin/UpdateSystemUserRequest'])


    @endpush
