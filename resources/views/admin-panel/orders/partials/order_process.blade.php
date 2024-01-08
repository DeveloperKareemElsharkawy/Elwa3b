@foreach($orderProcesses as $orderProcess)

    <tr>
        <td class="">
            {{$orderProcess->process->title}}

            @if($orderProcess->status == 'pending')
                <i class="fa fa-clock-o text-primary" data-bs-toggle="tooltip" title=""
                   data-bs-original-title="fa fa-clock-o"
                   aria-label="fa fa-clock-o"></i>
            @else
                <i class="fa fa-check-circle text-success"></i>
            @endif
            <input name="order_process[{{$loop->index}}][process_id]" value="{{$orderProcess->id}}" type="hidden">
        </td>

        <td class="">
            <div class="input-group">
                <input name="order_process[{{$loop->index}}][start_date]" class="form-control  fa-datepicker  " data-name="start_date"
                       placeholder="MM/DD/YYYY"
                       value="{{$orderProcess->start_date ? $orderProcess->start_date->format('Y-m-d') : ''}}"
                       type="text">
            </div>
            <input id="start_date" value="{{$orderProcess->id}}" type="hidden">
        </td>


        <td class="">
            <div class="input-group">
                <input name="order_process[{{$loop->index}}][end_date]" class="form-control  fa-datepicker  " data-name="end_date"
                       placeholder="YYYY/DD/MM"
                       value="{{$orderProcess->end_date ? $orderProcess->end_date->format('Y-m-d') : ''}}"
                       type="text">
            </div>
            <input id="end_date" value="{{$orderProcess->id}}" type="hidden">
        </td>


        <td>
            <select name="order_process[{{$loop->index}}][status]" id="status"
                    class="form-control SlectBox ">
                <option
                    @selected($orderProcess->status == "pending") value="pending">pending
                </option>
                <option
                    @selected($orderProcess->status == "completed") value="completed">completed
                </option>
            </select>
        </td>
    </tr>

@endforeach
