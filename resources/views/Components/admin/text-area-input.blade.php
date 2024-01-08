<div class="form-group"><label class="form-label">{{trans('admin/datatable.'.$name)}} <span
            class="text-red">*</span></label>
    <textarea data-skip-name="true"
              class="form-control"
              id="{{$name}}"
              name="{{$name}}"
              rows="{{$rows}}"
              placeholder="{{trans('admin/datatable.input_placeholder', ['attribute' => trans('admin/datatable.'.$name)])}}"
              spellcheck="false"> {{$value}}</textarea>
</div>

