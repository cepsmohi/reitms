<div>
    <div class="text-center my-8 text-red-500">
        No seals in stock.
    </div>
    <a
        @class([
            'block relative',
            'bg-gray-200'
        ])
        href="{{ route('seals.create') }}"
    >
        <img
            src="{{ asset('images/icon/barcode.png') }}"
            alt="New Seal"
            class="w-44"
        />
        <div class="adbr bg-white dark:text-black px-1">
            Add Seal
        </div>
    </a>
</div>
