<div class="card">
    <div class="card-header ">
        <div class="fs-16">{{trans('admin/datatable.'.$name)}}</div>
    </div>
    <div class="form-group p-2">
        <input type="file" name="{{$name}}" class="dropify input_field p-5"
                data-default-file="{{$defaultValue}}"
               data-height="180"/>
        <input type="hidden" id="{{$name}}">
    </div>
</div>
