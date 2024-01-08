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
                            {{trans('admin/dashboard.dashboard')}}</a>

                    </li>
                    <li class="breadcrumb-item1"><a href="{{route('admin.users.index')}}" class="">
                            {{trans('admin/dashboard.menus.users')}}</a>
                    </li>

                    <li class="breadcrumb-item1 active">{{trans('admin/datatable.buttons.u_user')}}</li>
                </ol>

            </div>

        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="text-center mb-5">
            <h1 class="page-title mb-0 text-primary  fs-25">{{trans('admin/datatable.buttons.u_user')}}</h1>
        </div>
        <form method="post" id="myform" autocomplete="off"
              action="{{route('admin.users.update',['user_id'=>$user->id])}}"
              enctype="multipart/form-data"
              class="">
            @csrf

            <input type="hidden" name="user_id" value="{{$user->id}}">

            <div class="row">

                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="form-label">{{trans('admin/datatable.name')}} <span
                                                class="text-red">*</span></label>
                                        <input type="text" name="name"
                                               class="form-control mb-3 input_field"
                                               placeholder="name"
                                               id="name"
                                               value="{{  $user->name }}">

                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="email" class="form-label">{{trans('admin/datatable.email')}} <span
                                                class="text-red">*</span> </label>
                                        <input type="text" name="email"
                                               class="form-control mb-3 input_field"
                                               placeholder="email"
                                               autocomplete="off"
                                               id="email"
                                               value="{{  $user->email }}">

                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="mobile" class="form-label">{{trans('admin/datatable.mobile')}} <span
                                                class="text-red">*</span> </label>
                                        <input type="text" name="mobile"
                                               class="form-control mb-3 input_field"
                                               placeholder=" mobile"
                                               id="mobile"
                                               value="{{  $user->mobile }}">

                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.drop-down-input :selected="$user->state_id" name="state_id" :options="$states" key-of-option="id"
                                                             key-of-value="name"></x-admin.drop-down-input>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.text-input name="zone" value="{{$user->zone}}"></x-admin.text-input>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <x-admin.text-input name="street" value="{{$user->street}}"></x-admin.text-input>
                                </div>


                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="password" class="form-label">{{trans('admin/datatable.password')}}
                                            <span
                                                class="text-red">*</span> </label>
                                        <input type="password" name="password"
                                               class="form-control mb-3 input_field"
                                               placeholder="password"
                                               id="password"
                                               autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label mb-5">{{trans('admin/datatable.status')}} <span
                                                class="text-red">*</span></label>
                                        <div class="material-switch">
                                            <input id="status" name="status"
                                                   type="checkbox" @checked($user->status) >
                                            <label for="status" class="label-success"></label>
                                        </div>
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
                                    class="fs-15"><i class="fe fe-save me-1"></i>Save</span>
                            </button>
                            <a href="{{ route('admin.users.index') }}" class="btn btn-danger "> <span
                                    class="fs-15"><i class="fe fe-edit me-1"></i>Cancel</span></a>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header ">
                            <div class="card-title">{{trans('admin/datatable.image')}}</div>
                        </div>
                        <div class="form-group p-2">
                            <input type="file" id="image" name="image" class="dropify input_field p-5"
                                   data-default-file="{{  $user->imageUrl }}"
                                   data-height="180"/>
                        </div>
                    </div>
                </div>


            </div>

        </form>


        @endsection

        @push('scripts')

            <script src="{{ URL::asset('admin_asset/plugins/fileupload/js/dropify.js') }}"></script>
            <script src="{{ URL::asset('admin_asset/js/filupload.js') }}"></script>

    @include('vendor.lrgt.ajax_script', ['form' => '#myform','name_class'=>'',
'request'=>'App/Http/Requests/Admin/Driver/UpdateDriverRequest'])


    @endpush
