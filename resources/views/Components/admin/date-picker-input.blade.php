<div class="form-group">
    <label class="form-label">@lang('admin/datatable.'.$label )</label>
    <div class="input-group">
        <input name="{{$name}}" class="form-control {{$dateTimeFormat}}" data-name="{{$name}}"
               placeholder="MM/DD/YYYY"
               value="{{$value}}"
               type="text">
    </div>
    <input id="{{$name}}" type="hidden">
</div>
