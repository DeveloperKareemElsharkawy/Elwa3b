@extends('admin-panel.layouts.master')
<link href="{{ URL::asset('admin_asset/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('admin_asset/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}"
      rel="stylesheet"/>
<link href="{{ URL::asset('admin_asset/css/jquery.imagesloader.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('admin_asset/plugins/date-picker/date-picker.css') }}" rel="stylesheet"/>

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
                    <li class="breadcrumb-item1"><a href="{{route('admin.workers.index')}}" class="">
                            @lang('admin/dashboard.menus.workers')</a>
                    </li>
                    <li class="breadcrumb-item1 active">  @lang('admin/datatable.buttons.u_worker')
                    </li>
                </ol>

            </div>

        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary  fs-25"> @lang('admin/datatable.buttons.u_worker')</h1>
        </div>
        <form method="post" id="myform" autocomplete="off"
              action="{{route('admin.workers.update',['worker_id'=>$worker->id])}}"
              enctype="multipart/form-data"
              class="repeater">
            @csrf

            <input type="hidden" name="worker_id" value="{{$worker->id}}">

            <div class="row">

                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-header ">
                            <div class="fs-16">@lang('admin/datatable.education_and_experience')</div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.text-input name="name" :value="$worker->name"></x-admin.text-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.multi-select-input name="languages"
                                                                :selected-values="$worker->languages"
                                                                :options="[__('admin/datatable.arabic') =>  'arabic',__('admin/datatable.english') => 'english']">
                                    </x-admin.multi-select-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.drop-down-input name="category_id"
                                                             :selected="$worker->category_id"
                                                             :options="$categories" key-of-value="name"
                                                             key-of-option="id"></x-admin.drop-down-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.multi-select-input name="additional_skills"
                                                                :selected-values="$worker->additional_skills->pluck('id')->toArray()"
                                                                :options="$categories"
                                                                key-of-value="name"
                                                                key-of-option="id"></x-admin.multi-select-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.number-input name="experience"
                                                          :value="$worker->experience"></x-admin.number-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.text-input name="scientific_degree"
                                                        :value="$worker->scientific_degree"></x-admin.text-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.number-input name="salary" :value="$worker->salary"
                                                          group-with-text="$"></x-admin.number-input>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header ">
                            <div class="fs-16">@lang('admin/datatable.passport_information')</div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.text-input name="passport_number"
                                                        :value="$worker->passport_number"></x-admin.text-input>
                                </div>


                                <div class="col-sm-4 col-md-4">
                                    <x-admin.drop-down-input name="nationality_id"
                                                             :selected="$worker->nationality_id"
                                                             :options="$nationalities" key-of-value="name"
                                                             key-of-option="id"></x-admin.drop-down-input>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <x-admin.drop-down-input name="gender"
                                                             :selected="$worker->gender"
                                                             :options="['male' => __('admin/datatable.male'),'female' => __('admin/datatable.female')]"></x-admin.drop-down-input>
                                </div>

                                <div class="col-sm-4 col-md-4">
                                    <x-admin.drop-down-input name="religion"
                                                             :selected="$worker->religion"
                                                             :options="[
                                                             'muslim' => __('admin/datatable.muslim'),
                                                             'christian' => __('admin/datatable.christian'),
                                                             'buddhist' => __('admin/datatable.buddhist'),
                                                             'hindu' => __('admin/datatable.hindu'),
                                                             'other' => __('admin/datatable.other'),
                                                             ]"></x-admin.drop-down-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.date-picker-input name="release_date"
                                                               :value="$worker->release_date"></x-admin.date-picker-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.date-picker-input name="expiry_date" date-time-format="fa-datepicker"
                                                               :value="$worker->expiry_date"></x-admin.date-picker-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.text-input name="place_of_birth"
                                                        :value="$worker->place_of_birth"></x-admin.text-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.text-input name="living_town"
                                                        :value="$worker->living_town"></x-admin.text-input>
                                </div>


                                <div class="col-sm-6 col-md-6">
                                    <x-admin.text-input name="place_of_issue"
                                                        :value="$worker->place_of_issue"></x-admin.text-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.date-picker-input name="dob" date-time-format="fd-datepicker"
                                                               :value="$worker->dob"></x-admin.date-picker-input>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.number-input name="contract_full" :value="$worker->contract_full"
                                                          group-with-text="{{__('admin/datatable.month')}}"></x-admin.number-input>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header ">
                            <div class="fs-16">@lang('admin/datatable.experience_years')</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div id="repeater">
                                        <!-- Repeater Heading -->

                                        <div class="col-sm-12 col-md-12">
                                            <div class="items" data-group="experience">
                                                <!-- Repeater Content -->
                                                <div class="item-content">
                                                    <div class="row">

                                                        <div data-repeater-list="worker_experience">
                                                            @forelse ($worker->workerExperience as $workerExperience)
                                                                <div data-repeater-item="worker_experience">
                                                                    <div class="row mb-5">

                                                                        <div class="col-sm-3 col-md-3">
                                                                            <x-admin.drop-down-input
                                                                                :options="$nationalities"
                                                                                :selected="$workerExperience->country_id"
                                                                                key-of-option="id"
                                                                                key-of-value="name"
                                                                                name="country_id"></x-admin.drop-down-input>
                                                                        </div>

                                                                        <div class="col-sm-4 col-md-4">
                                                                            <x-admin.date-picker-input name="start_date"
                                                                                                       date-time-format="fe-datepicker"
                                                                                                       :value="$workerExperience->start_date"></x-admin.date-picker-input>
                                                                        </div>

                                                                        <div class="col-sm-3 col-md-3">
                                                                            <x-admin.date-picker-input name="end_date"
                                                                                                       date-time-format="fe-datepicker"
                                                                                                       value="{{$workerExperience->end_date}}"></x-admin.date-picker-input>
                                                                        </div>

                                                                        <div class="col-sm-2 col-md-2">
                                                                            <input data-repeater-delete="" type="button"
                                                                                   class="delete-owner btn btn-icon btn-md mt-6 btn-danger remove-btn"
                                                                                   value="Delete">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            @empty
                                                                <div data-repeater-list="worker_experience">
                                                                    <div data-repeater-item="worker_experience">
                                                                        <div class="row mb-5">

                                                                            <div class="col-sm-3 col-md-3">
                                                                                <x-admin.drop-down-input
                                                                                    :options="$nationalities"
                                                                                    key-of-option="id"
                                                                                    key-of-value="name"
                                                                                    name="country_id"></x-admin.drop-down-input>
                                                                            </div>

                                                                            <div class="col-sm-4 col-md-4">
                                                                                <x-admin.date-picker-input
                                                                                    name="start_date"
                                                                                ></x-admin.date-picker-input>
                                                                            </div>

                                                                            <div class="col-sm-3 col-md-3">
                                                                                <x-admin.date-picker-input
                                                                                    name="end_date"
                                                                                ></x-admin.date-picker-input>
                                                                            </div>

                                                                            <div class="col-sm-2 col-md-2">
                                                                                <input data-repeater-delete=""
                                                                                       type="button"
                                                                                       class="delete-owner btn btn-icon btn-md mt-6 btn-danger remove-btn"
                                                                                       value="Delete">
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            @endforelse

                                                        </div>

                                                        <div class="col-sm-12 col-md-12">

                                                            <div class="form-group">
                                                                <input type="hidden" id="worker_experience">
                                                            </div>

                                                        </div>

                                                        <input data-repeater-create="" type="button"
                                                               class="btn btn-primary repeater-add-btn mt-repeater-add btn btn-secondary fs-17 printPageButton"
                                                               value="أضف سنين خبره جديده">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header ">
                            <div class="fs-16">@lang('admin/datatable.personal_info')</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <x-admin.drop-down-input name="marital_status"
                                                             :selected="$worker->marital_status"
                                                             :options="['single' => __('admin/datatable.single'),'married' => __('admin/datatable.married'),'divorced' => __('admin/datatable.divorced')]"></x-admin.drop-down-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.number-input name="no_of_children" :value="$worker->no_of_children"
                                    ></x-admin.number-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.text-input name="skin_colour"
                                                        :value="$worker->skin_colour"></x-admin.text-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.text-input name="height" group-with="CM"
                                                        :value="$worker->height"></x-admin.text-input>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <x-admin.text-input name="weight" group-with="K"
                                                        :value="$worker->weight"></x-admin.text-input>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <label class="form-label">@lang('admin/datatable.video')</label>
                                    <div class="input-group file-browser mb-5 form-group">
                                        <input type="text" class="form-control border-end-0 browse-file"
                                               placeholder="choose" readonly="false">
                                        <label class="input-group-text btn btn-primary">
                                            Browse <input type="file" id="video_url" name="video_url" class="file-browserinput"
                                                          style="display: none;"
                                                          multiple="">
                                        </label>
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
                            <button type="submit" id="submit_button" value="apply" name="action"
                                    class="btn btn-success me-2"><span
                                    class="fs-15"><i class="fe fe-save me-1"></i>@lang('admin/datatable.buttons.general.save')</span>
                            </button>
                            <a href="{{ route('admin.workers.index') }}" class="btn btn-danger "> <span
                                    class="fs-15"><i class="fe fe-edit me-1"></i>@lang('admin/datatable.buttons.general.cancel')</span></a>
                        </div>
                    </div>

                    <x-admin.image-input name="face_image"
                                         default-value="{{$worker->faceImageUrl}}"></x-admin.image-input>

                    <x-admin.image-input name="worker_image"
                                         default-value="{{$worker->workerImageUrl}}"></x-admin.image-input>

                    <div class="card">
                        <div class="card-header ">
                            <div class="fs-16">@lang('admin/datatable.worker_statuses')</div>
                        </div>
                        <div class="form-group p-2">
                            <div class="col-sm-12 col-md-12">
                                <x-admin.checkbox-input name="status" :value="$worker->status"
                                                        details="{{__('admin/datatable.worker_availability_status')}}"></x-admin.checkbox-input>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <x-admin.checkbox-input name="location_status" :value="$worker->location_status"
                                                        details="{{__('admin/datatable.location_status_details')}}"></x-admin.checkbox-input>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <x-admin.checkbox-input name="employment_status" :value="$worker->employment_status"
                                                        details="{{__('admin/datatable.employment_status_details')}}"></x-admin.checkbox-input>
                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </form>


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

            <script src="{{ URL::asset('admin_asset/js/workers-custom.js') }}"></script>


            <script src="{{ URL::asset('admin_asset/js/file-upload.js') }}"></script>

    @include('vendor.lrgt.ajax_script', ['form' => '#myform','name_class'=>'',
'request'=>'App/Http/Requests/Admin/System/Admin/UpdateSystemUserRequest'])
    @endpush
