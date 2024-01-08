<!DOCTYPE html>
<html dir="ltr" style="direction: ltr;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        * {
            font-family: DejaVu Sans, sans-serif !important;
            direction: ltr !important;
        }

        .text-muted {
            font-family: DejaVu Sans, sans-serif !important;
            direction: ltr !important;
        }

        .custom-font {
            font-family: DejaVu Sans, sans-serif !important;
        }

    </style>

</head>
<body dir="rtl">
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4">
        <div class="card box-widget widget-user ">

            <div class="card-body text-center mt-6">
                <div class="pro-user">
                    <h4 class="pro-user-username mb-1 font-weight-bold">{{$worker->name}}</h4>
                    <h6 class=" text-muted pro-user-username mb-1 font-weight-bold">{{$worker->job->name}}</h6>

                </div>
            </div>
            <div class="card-footer p-0">
                <div class="row">

                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="description-header mb-1   "
                    style="text-align: right;font-weight: 400">@lang('admin/datatable.education_and_experience')</h3>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-striped ">
                        <tbody>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->name}}</td>

                            <td class="" style="text-align: right">
                                <span class="font-weight-semibold w-50">@lang('admin/datatable.name') </span>
                            </td>
                        </tr>
                        <tr>
                            <td class=""
                                style="text-align: right ;direction: rtl !important;">
                                {{$worker->experience}}
                            </td>

                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.experience')  </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">
                                @foreach($worker->languages as $language)
                                    @lang('admin/datatable.'.$language) ,
                                @endforeach

                            </td>
                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.languages')  </span>
                            </td>

                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->job->name}} </td>

                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.category_id')  </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">
                                @foreach($worker->additional_skills as $skill)
                                    {{$skill->name}}  ,
                                @endforeach
                            </td>
                            <td class="" style="text-align: right">
                                    <span
                                        class="font-weight-semibold w-50">@lang('admin/datatable.additional_skills')  </span>
                            </td>

                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->salary}} </td>

                            <td class="" style="text-align: right">
                                <span class="font-weight-semibold w-50"> @lang('admin/datatable.salary')</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->scientific_degree}}</td>

                            <td class="" style="text-align: right">
                                    <span
                                        class="font-weight-semibold w-50">@lang('admin/datatable.scientific_degree') </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="description-header mb-1   "
                    style="text-align: right;font-weight: 400">@lang('admin/datatable.passport_information')</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-striped ">
                        <tbody>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->passport_number}}</td>

                            <td class="" style="text-align: right">
                                    <span
                                        class="font-weight-semibold w-50">@lang('admin/datatable.passport_number') </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->nationality->name}}</td>

                            <td class="" style="text-align: right">
                                    <span
                                        class="font-weight-semibold w-50">@lang('admin/datatable.nationality_id') </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->gender}} </td>

                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.gender')  </span>
                            </td>
                        </tr>

                        <tr>
                            <td class=""  style="text-align: right">{{$worker->religion}} </td>

                            <td class=""  style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.religion')  </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->release_date}}  </td>

                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.release_date')  </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="" style="text-align: right">{{$worker->expiry_date}} </td>

                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.expiry_date')  </span>
                            </td>
                        </tr>

                        <tr>
                            <td class=""style="text-align: right">{{$worker->place_of_issue}} </td>

                            <td class=""style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.place_of_issue')  </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="" style="text-align: right">{{$worker->place_of_birth}} </td>

                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.place_of_birth')  </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="" style="text-align: right">{{$worker->expiry_date}} </td>
                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.expiry_date')  </span>
                            </td>
                        </tr>


                        <tr>
                            <td class="" style="text-align: right">{{$worker->contract_full}}</td>

                            <td class="" style="text-align: right">
                                    <span
                                        class="font-weight-semibold w-50">@lang('admin/datatable.contract_full') </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="description-header mb-1   "
                    style="text-align: right;font-weight: 400">@lang('admin/datatable.personal_info')</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-striped ">
                        <tbody>
                        <tr>
                            <td class=""  style="text-align: right">{{$worker->marital_status}}</td>
                            <td class=""  style="text-align: right">
                                    <span
                                        class="font-weight-semibold w-50">@lang('admin/datatable.marital_status') </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->no_of_children}}</td>
                            <td class="" style="text-align: right">
                                    <span
                                        class="font-weight-semibold w-50">@lang('admin/datatable.no_of_children') </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="" style="text-align: right">{{$worker->dob}}  </td>
                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.dob')  </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="" style="text-align: right">{{$worker->skin_colour}} </td>

                            <td class="" style="text-align: right">
                                        <span
                                            class="font-weight-semibold w-50">@lang('admin/datatable.skin_colour')  </span>
                            </td>
                        </tr>


                        <tr>
                            <td class="" style="text-align: right">{{$worker->height}}</td>

                            <td class="" style="text-align: right">
                                <span class="font-weight-semibold w-50">@lang('admin/datatable.height') </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="" style="text-align: right">{{$worker->weight}}</td>
                            <td class="" style="text-align: right">
                                <span class="font-weight-semibold w-50">@lang('admin/datatable.weight') </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
