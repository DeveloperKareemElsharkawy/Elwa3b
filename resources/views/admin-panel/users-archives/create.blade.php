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
                                aria-hidden="true"></i>{{trans('admin/dashboard.dashboard')}}
                        </a></li>
                    <li class="breadcrumb-item1"><a href="{{route('admin.users.index')}}"
                                                    class=""> {{trans('admin/dashboard.menus.users')}}
                        </a></li>

                    <li class="breadcrumb-item1"><a href="{{route('admin.users.show',['user_id'=>$user])}}"
                                                    class=""> {{$user->name}}
                        </a></li>
                    <li class="breadcrumb-item1"><a href="{{route('admin.users_archives.index',['user_id'=>$user])}}"
                                                    class="">  @lang('admin/dashboard.menus.user_archive')
                        </a></li>
                    <li class="breadcrumb-item1 active">  @lang('admin/datatable.buttons.c_user_archive')
                    </li>
                </ol>

            </div>

        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary  fs-25"> @lang('admin/datatable.buttons.c_user_archive')</h1>
        </div>
        <form method="post" id="myform" autocomplete="off"
              action="{{route('admin.users_archives.store',['user_id' => $user->id])}}"
              enctype="multipart/form-data"
              class="">
            @csrf
            <div class="row">

                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <x-admin.text-input name="title"></x-admin.text-input>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.text-area-input name="description"></x-admin.text-area-input>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <label class="form-label">@lang('admin/datatable.file')</label>
                                    <div class="input-group file-browser mb-5 form-group">
                                        <input type="text" class="form-control border-end-0 browse-file"
                                               placeholder="choose" readonly="false">
                                        <label class="input-group-text btn btn-primary">
                                            Browse <input type="file" id="file" name="file" class="file-browserinput"
                                                          style="display: none;"
                                                          multiple="">
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.multi-image-input gallery-name-key="images"></x-admin.multi-image-input>
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
                            <a href="{{ route('admin.users_archives.index',['user_id' => $user->id]) }}"
                               class="btn btn-danger "> <span
                                    class="fs-15"><i class="fe fe-edit me-1"></i>@lang('admin/datatable.buttons.general.cancel')</span></a>
                        </div>
                    </div>

                </div>


            </div>

        </form>


        @endsection

        @push('scripts')

            <script src="{{ URL::asset('admin_asset/plugins/fileupload/js/dropify.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/formelementadvnced.js"') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/form-elements.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/file-upload.js') }}"></script>


    @include('vendor.lrgt.ajax_script', ['form' => '#myform','name_class'=>'',
'request'=>'App/Http/Requests/Admin/System/Admin/CreateSystemUserRequest','on_start'=>false])


    @endpush
