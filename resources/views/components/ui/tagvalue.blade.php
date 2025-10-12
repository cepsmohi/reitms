@if($value != null || $value != '')
    <div class="frows gap-2">
        <div class="font-bold">{{ $tag }}</div>
        <x-ui.vline/>
        <div>{{ $value }}{{ $symbol ?? '' }}</div>
        <div>{{ $unit ?? '' }}</div>
    </div>
@endif
