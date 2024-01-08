@extends('admin-panel.layouts.master')
@push('styles')
    <link href="{{ URL::asset('admin_asset/plugins/gallery/gallery.css')}}" rel="stylesheet">
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
                    <li class="breadcrumb-item1"><a href="{{route('admin.workers.index')}}" class="">
                            @lang('admin/dashboard.menus.workers')</a>
                    </li>
                    <li class="breadcrumb-item1 active"> {{$worker->name}}
                    </li>
                </ol>

            </div>

        </div>
        <!--End Page header-->
        <!-- Row -->
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card box-widget widget-user ">
                    <div class="widget-user-image mx-auto custom-widget-user mt-5"><img alt="User Avatar"
                                                                                        class="rounded-circle custom-rounded-circle"
                                                                                        src="{{$worker->faceImageUrl}}">
                    </div>
                    <div class="card-body text-center mt-6">
                        <div class="pro-user">
                            <h4 class="pro-user-username mb-1 font-weight-bold">{{$worker->name}}</h4>
                            <h6 class="pro-user-desc text-muted fw-bold">{{$worker->job->name}}</h6>

                            <a href="{{route('admin.workers.edit',['worker_id' =>$worker->id])}}"
                               class="btn btn-success mt-1"><i
                                    class="fa fa-pencil me-2"></i>@lang('admin/datatable.buttons.general.update_info')
                            </a>

                            <a href="{{route('admin.workers.download',['worker_id' =>$worker->id])}}"
                               class="btn btn-primary mt-1"><i
                                    class="fa fa-pencil me-2"></i>@lang('admin/datatable.buttons.general.download_pdf')
                            </a>
                        </div>
                    </div>
                    <div class="card-footer p-0">
                        <div class="row">
                            <div class="col-sm-6 border-end text-center">
                                <div class="description-block p-4">
                                    <h5 class="description-header mb-1 font-weight-bold  number-font">{{$worker->salary}}</h5>
                                    <span class="text-muted">@lang('admin/datatable.salary')</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="description-block text-center p-4">
                                    <h5 class="description-header mb-1 font-weight-bold number-font">{{$worker->age}} @lang('admin/datatable.year') </h5>
                                    <span class="text-muted">@lang('admin/datatable.age')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">@lang('admin/datatable.worker_image')</h3>
                    </div>
                    <div class="card-body">
                        <img src="{{$worker->workerImageURL}}" alt="image" class="card-image1 worker-image">
                    </div>
                </div>

                @if($worker->video_url)
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title fs-19">@lang('admin/datatable.worker_video')</h3>
                        </div>
                        <div class="card-body" style="margin-top: 0px;padding-top: 0px;">
                            <video width="500" height="250" controls>
                                <source src="{{asset('storage/' . $worker->video_url)}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                @endif


            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">@lang('admin/datatable.education_and_experience')</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-striped ">
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
                                            class="font-weight-semibold w-50">@lang('admin/datatable.languages')  </span>
                                    </td>
                                    <td class="">
                                        @foreach($worker->languages as $language)
                                            @lang('admin/datatable.'.$language) ,
                                        @endforeach

                                    </td>
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
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.scientific_degree') </span>
                                    </td>
                                    <td class="">{{$worker->scientific_degree}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.status') </span>
                                    </td>
                                    @if($worker->status == 1)
                                        <td class="">@lang('admin/datatable.active_worker')</td>

                                    @else
                                        <td class="">@lang('admin/datatable.inactive_worker')</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.location_status') </span>
                                    </td>
                                    @if($worker->location_status == 1)
                                        <td class="">@lang('admin/datatable.active_worker_location')</td>

                                    @else
                                        <td class="">@lang('admin/datatable.inactive_worker_location')</td>

                                    @endif
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.employment_status') </span>
                                    </td>

                                    @if($worker->employment_status == 1)
                                        <td class="">@lang('admin/datatable.active_worker_employment')</td>

                                    @else

                                        <td class="">@lang('admin/datatable.inactive_worker_employment')</td>

                                    @endif
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">@lang('admin/datatable.passport_information')</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-striped ">
                                <tbody>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.passport_number') </span>
                                    </td>
                                    <td class="">{{$worker->passport_number}}</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.nationality_id') </span>
                                    </td>
                                    <td class="">{{$worker->nationality->name}}</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.gender')  </span>
                                    </td>
                                    <td class="">{{$worker->gender}} </td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.religion')  </span>
                                    </td>
                                    <td class="">{{$worker->religion}} </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.release_date')  </span>
                                    </td>
                                    <td class="">{{$worker->release_date}}  </td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.expiry_date')  </span>
                                    </td>
                                    <td class="">{{$worker->expiry_date}} </td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.place_of_issue')  </span>
                                    </td>
                                    <td class="">{{$worker->place_of_issue}} </td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.place_of_birth')  </span>
                                    </td>
                                    <td class="">{{$worker->place_of_birth}} </td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.expiry_date')  </span>
                                    </td>
                                    <td class="">{{$worker->expiry_date}} </td>
                                </tr>


                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.contract_full') </span>
                                    </td>
                                    <td class="">{{$worker->contract_full}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-19">@lang('admin/datatable.personal_info')</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-striped ">
                                <tbody>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.marital_status') </span>
                                    </td>
                                    <td class="">{{$worker->marital_status}}</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.no_of_children') </span>
                                    </td>
                                    <td class="">{{$worker->no_of_children}}</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.dob')  </span>
                                    </td>
                                    <td class="">{{$worker->dob}}  </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.skin_colour')  </span>
                                    </td>
                                    <td class="">{{$worker->skin_colour}} </td>
                                </tr>


                                <tr>
                                    <td class="">
                                        <span class="font-weight-semibold w-50">@lang('admin/datatable.height') </span>
                                    </td>
                                    <td class="">{{$worker->height}}</td>
                                </tr>

                                <tr>
                                    <td class="">
                                        <span class="font-weight-semibold w-50">@lang('admin/datatable.weight') </span>
                                    </td>
                                    <td class="">{{$worker->weight}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                @if(count($worker->archives))
                    <div class="col-xl-12 col-lg-12">
                        <div class="text-center mb-5">
                            <h1 class="page-title mb-0 text-primary mb-3 fs-25">أرشيف الطلب
                            </h1>
                        </div>
                    </div>
                    @foreach($worker->archives as $archive)
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title fs-19">{{$archive->title}}</h3>
                                </div>
                                <div class="card-body">
                                    <div class="text-muted fs-15 mb-3"> {{$archive->description}}</div>

                                    <div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            @foreach(json_decode($archive->images) as $image)
                                                <button type="button" data-bs-target="#carousel-indicators"
                                                        data-bs-slide-to="{{$loop->index}}"
                                                        class="active"></button>
                                            @endforeach
                                        </div>

                                        <div class="carousel-inner">
                                            <div class="card-body">
                                                <ul id="lightgallery" class="list-unstyled row">
                                                    @foreach(json_decode($archive->images) as $image)
                                                        <li class="col-xs-4 col-sm-4 col-md-4 col-lg-4  "
                                                            data-responsive="{{asset('storage/' . $image)}}"
                                                            data-src="{{asset('storage/' . $image)}}"
                                                            data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="#">
                                                                <img class="img-responsive br-7 img-archive"
                                                                     style="width: 300px; height: 200px; object-fit: fill;"
                                                                     src="{{asset('storage/' . $image)}}"
                                                                     alt="Thumb-1">
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


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
