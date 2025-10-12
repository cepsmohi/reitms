<thead>
@foreach($stocks as $stock)
    <tr class="">
        <td class="text-left">{{ $stock->created_at->format('d/m/Y') }}</td>
        <td class="text-left">
            {{ $stock->miv_no ? $stock->miv_no : '' }}
            {{ $stock->task_id ? 'TID '.$stock->task_id : '' }}
        </td>
        <td class="text-left">{{ $stock->material->unit }}</td>
        <td class="text-right">
            {{ $stock->stock_in >0 ? $stock->stock_in : '' }}
            {{ $stock->stock_out >0 ? '-'.$stock->stock_out : '' }}
        </td>
        <td class="text-right">{{ $stock->material->stock }}</td>
    </tr>
@endforeach
</thead>
