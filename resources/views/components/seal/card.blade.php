<a
    @class([
        'block relative',
        'bg-green-200' => $seal->status == 'stock',
        'bg-yellow-200' => $seal->status == 'install',
        'bg-red-600' => $seal->status == 'damage',
    ])
    href="{{ route('seals.show', $seal) }}"
>
    <img
        src="{{ asset('images/icon/barcode.png') }}"
        alt="{{ $seal->number }}"
        class="w-44"
    />
    <div class="adbr bg-white px-1">
        {{ $seal->number }}
    </div>
</a>
