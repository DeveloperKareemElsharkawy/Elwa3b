<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

<!-- Jquery js-->
<script src="{{ URL::asset('admin_asset/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap5 js-->
<script src="{{ URL::asset('admin_asset/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Othercharts js-->
<script src="{{ URL::asset('admin_asset/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

<!-- Jquery-rating js-->
<script src="{{ URL::asset('admin_asset/plugins/rating/jquery.rating-stars.js') }}"></script>

<!--Sidemenu js-->
<script src="{{ URL::asset('admin_asset/plugins/sidemenu/sidemenu.js') }}"></script>


<script src="{{ URL::asset('admin_asset/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/p-scrollbar/p-scroll1.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/p-scrollbar/p-scroll.js') }}"></script>

<!--INTERNAL Flot Charts js-->
<script src="{{ URL::asset('admin_asset/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/dashboard.sampledata.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/chart.flot.sampledata.js') }}"></script>

<!-- INTERNAL Chart js -->
<script src="{{ URL::asset('admin_asset/plugins/chart/chart.bundle.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL Apexchart js -->
<script src="{{ URL::asset('admin_asset/js/apexcharts.js') }}"></script>

<!--INTERNAL Moment js-->
<script src="{{ URL::asset('admin_asset/plugins/moment/moment.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/index1.js') }}"></script>


<script src="{{ URL::asset('admin_asset/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/select2.js') }}"></script>

<!-- Simplebar JS -->

<!-- Rounded bar chart js-->
<script src="{{ URL::asset('admin_asset/js/rounded-barchart.js') }}"></script>

<script src="{{ URL::asset('admin_asset/plugins/sweet-alert/jquery.sweet-modal.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ URL::asset('admin_asset/js/sweet-alert.js')}}"></script>


<!-- Jquery-rating js-->
<script src="{{ URL::asset('admin_asset/plugins/rating/jquery.rating-stars.js')}}"></script>

<!--Sidemenu js-->
<!-- Circle-progress js-->
<script src="{{ URL::asset('admin_asset/plugins/circle-progress/circle-progress.min.js')}}"></script>

<!-- INTERNAL Gallery js -->
<script src="{{ URL::asset('admin_asset/plugins/gallery/picturefill.js')}}"></script>
<script src="{{ URL::asset('admin_asset/plugins/gallery/lightgallery.js')}}"></script>
<script src="{{ URL::asset('admin_asset/plugins/gallery/lg-pager.js')}}"></script>
<script src="{{ URL::asset('admin_asset/plugins/gallery/lg-autoplay.js')}}"></script>
<script src="{{ URL::asset('admin_asset/plugins/gallery/lg-fullscreen.js')}}"></script>
<script src="{{ URL::asset('admin_asset/plugins/gallery/lg-zoom.js')}}"></script>
<script src="{{ URL::asset('admin_asset/plugins/gallery/lg-hash.js')}}"></script>
<script src="{{ URL::asset('admin_asset/plugins/gallery/lg-share.js')}}"></script>
<script src="{{ URL::asset('admin_asset/js/gallery.js')}}"></script>

<!-- Custom js-->
<script src="{{ URL::asset('admin_asset/js/custom.js') }}"></script>

<script src="{{ URL::asset('admin_asset/plugins/notify/js/rainbow.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/notify/js/sample.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/notify/js/jquery.growl.js') }}"></script>
<script src="{{ URL::asset('admin_asset/plugins/notify/js/notifIt.js') }}"></script>

<script src="{{ URL::asset('admin_asset/js/home.js') }}"></script>

<script>

    @if (session('successful_message'))
    notif({
        type: "success",
        msg: @json(session('successful_message')),
        timeout: 5000
    });
    @endif

    @if(session('successful_message'))
    notif({
        type: "success",
        msg: @json(session('successful_message')),
        timeout: 5000,
        width: 300
    });
    @endif
</script>


<!-- Switcher js -->
@livewireScripts
@powerGridScripts
@livewire('livewire-ui-modal')
@stack('scripts')
@stack('scripts_bottom')
