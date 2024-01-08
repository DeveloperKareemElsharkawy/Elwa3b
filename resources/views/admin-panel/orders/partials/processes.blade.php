<table class="table table-bordered mb-1">
    <tbody>
    <tr>

        <td class="">

            {{$orderProcess->process->title}}

            @if($orderProcess->status == 'pending')
                <i class="fa fa-clock-o text-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-clock-o"
                   aria-label="fa fa-clock-o"></i>
            @else
                <i class="fa fa-check-circle text-success"></i>
             @endif

        </td>

        @if($orderProcess->start_date )
            <td class="">{{$orderProcess->start_date->format('Y/m/d')}}   <small>تاريخ البدايه</small></td>
        @else
            <td class=""> --/--/----   <small>تاريخ البدايه</small></td>

        @endif


        @if($orderProcess->end_date)
            <td class="">{{$orderProcess->end_date->format('Y/m/d')}}   <small>تاريخ النهاية</small></td>

        @else
            <td class=""> --/--/----   <small>تاريخ النهاية</small></td>

        @endif


    </tr>
    </tbody>
</table>
