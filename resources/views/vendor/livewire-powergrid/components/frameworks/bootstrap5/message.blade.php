<div class="message mt-2">
    @if (session()->has('success'))
{{--        <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
 {{--            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--        </div>--}}
    @elseif (session()->has('error'))
{{--        <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
 {{--            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--        </div>--}}
    @endif
</div>
