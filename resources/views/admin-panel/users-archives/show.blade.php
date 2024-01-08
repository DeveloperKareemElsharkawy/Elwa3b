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
            <li class="breadcrumb-item1"><a href="{{route('admin.users.index')}}"
                                            class=""> {{trans('admin/dashboard.menus.users')}}
                </a></li>

            <li class="breadcrumb-item1"><a href="{{route('admin.users.show',['user_id'=>$user->id])}}"
                                            class=""> {{$user->name}}
                </a></li>
            <li class="breadcrumb-item1 active"> {{trans('admin/dashboard.menus.user_archive')}}
            </li>
        </ol>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">

                    <div class="card-body">
                        <img src="{{$user->ImageURL}}" style="    width: 450px;
    height: 250px;" alt="image" class="card-image1 worker-image">
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive" style="min-height:250px ">
                            <table class="table table-bordered mb-0">
                                <tbody>
                                <tr>
                                    <td class="">
                                        <span class="font-weight-semibold w-50">@lang('admin/datatable.name') </span>
                                    </td>
                                    <td class="">{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.email')  </span>
                                    </td>
                                    <td class="">{{$user->email}}  </td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span class="font-weight-semibold w-50"> @lang('admin/datatable.mobile')</span>
                                    </td>
                                    <td class="">{{$user->mobile}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50"> @lang('admin/datatable.state_id')</span>
                                    </td>
                                    <td class="">{{$user->state->name}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span class="font-weight-semibold w-50"> @lang('admin/datatable.zone')</span>
                                    </td>
                                    <td class="">{{$user->zone}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span class="font-weight-semibold w-50"> @lang('admin/datatable.street')</span>
                                    </td>
                                    <td class="">{{$user->street}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <livewire:admin.user-archive-table user_id="{{$user->id}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        @foreach($user->archives as $archive)
        lightGallery(document.getElementById('lightgallery{{$archive['id']}}'), {
            speed: 500,
        });
        @endforeach
    </script>

@endpush
