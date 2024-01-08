@extends('admin-panel.layouts.master')

@section('content')
    <div class="side-app">
        <ol class="breadcrumb1">
            <li class="breadcrumb-item1"><a href="{{route('admin.dashboard.home')}}" class=""><i class="fe fe-home me-2"
                                                                                   aria-hidden="true"></i>{{trans('admin/dashboard.dashboard')}}
                </a></li>
            <li class="breadcrumb-item1 active">{{trans('admin/dashboard.menus.countries')}}</li>
        </ol>

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <livewire:admin.country-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
@endpush
