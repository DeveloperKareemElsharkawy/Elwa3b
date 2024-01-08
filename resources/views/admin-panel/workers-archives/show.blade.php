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
            <li class="breadcrumb-item1 active">{{trans('admin/dashboard.menus.workers_archives')}}
            </li>
        </ol>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">

                    <div class="card-body">
                        <img src="{{$worker->workerImageURL}}" style="    width: 450px;
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
                                    <td class="">{{$worker->name}}</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.experience')  </span>
                                    </td>
                                    <td class="">{{$worker->experience}} @lang('admin/datatable.years') </td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.category_id')  </span>
                                    </td>
                                    <td class="">{{$worker->job->name}} </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.additional_skills')  </span>
                                    </td>
                                    <td class="">
                                        @foreach($worker->additional_skills as $skill)
                                            {{$skill->name}}  ,
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span class="font-weight-semibold w-50"> @lang('admin/datatable.salary')</span>
                                    </td>
                                    <td class="">{{$worker->salary}} </td>
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
                        <livewire:admin.worker-archives-table worker_id="{{$worker->id}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        @foreach($worker->archives as $archive)
        lightGallery(document.getElementById('lightgallery{{$archive['id']}}'), {
            speed: 500,
        });
        @endforeach
    </script>

@endpush
