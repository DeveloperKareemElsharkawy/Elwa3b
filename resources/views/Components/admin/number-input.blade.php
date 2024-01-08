<div class="form-group">
    <label class="form-label">@lang('admin/datatable.'.$name)</label>

    <div class="input-group">

        @if($groupWithHTML)
            <span class="input-group-text" id="inputGroupPrepend2">{!! $groupWithHTML !!}</span>
        @endif

        @if($groupWithText)
            <span class="input-group-text" id="inputGroupPrepend2">{{$groupWithText}}</span>
        @endif

        <input
            id="{{$name}}"
            value="{{$value}}"
            placeholder="{{trans('admin/datatable.input_placeholder', ['attribute' => trans('admin/datatable.'.$name)])}}"
            class="form-control input_field" type="number" name="{{$name}}">
    </div>
</div>
