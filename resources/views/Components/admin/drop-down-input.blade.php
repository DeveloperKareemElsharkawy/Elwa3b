<div class="form-group">
    <label class="form-label">@lang('admin/datatable.'.$name) <span
            class="text-red">*</span></label>
    <select name="{{$name}}" id="{{$name}}"
            class="form-control SlectBox ">
        <option disabled @selected($selected == null) value="0">--Select--</option>

        @if($keyOfValue && $keyOfOption)
            @foreach($options as  $option)
                <option @selected($selected == $option->id) value="{{$option[$keyOfOption]}}">{{$option[$keyOfValue]}}</option>
            @endforeach
        @else
            @foreach($options as $key => $option)
                <option @selected($selected == $key) value="{{$key}}">{{$option}}</option>
            @endforeach
        @endif

    </select>
    <input id="{{$name}}" type="hidden">

</div>

