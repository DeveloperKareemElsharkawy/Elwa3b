@extends('admin-panel.layouts.master')

@section('content')
    <div class="side-app">
        <ol class="breadcrumb1">
            <li class="breadcrumb-item1"><a href="{{route('admin.dashboard.home')}}" class=""><i class="fe fe-home me-2"
                                                                                                 aria-hidden="true"></i>{{trans('admin/dashboard.dashboard')}}
                </a></li>
            <li class="breadcrumb-item1 active"> {{trans('admin/dashboard.menus.users')}}</li>
        </ol>


        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <livewire:admin.user-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EFFECTS -->
    <div class="modal fade" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Message Preview</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="model-body">
                    <h6>Why We Use Electoral College, Not Popular Vote</h6>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection

@push('scripts')

    <script>
        // Open modal in AJAX callback
        // $('.modal-info').click(function (event) {
        //      $('#model-body').html('test')
        //
        //
        // });
        $(document).ready(function () {
            $('.modal-body').on('show.bs.modal', function (e) {
                var _button = $(e.relatedTarget);
                var result = "";
                var $row = $(_button).closest("tr"); // Find the row
                var $tds = $row.find("td");
                $.each($tds, function () {
                    var t = $(this).attr('data-title');
                    var v = $(this).text();
                    result += '<div>' + t + ' : ' + v + '</div>';
                });
                $(this).find("#container").html(result);
            });
        });
    </script>
@endpush
