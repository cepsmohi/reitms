<div
    @class([
        'w-24 relative z-50',
        'frow gap-2',
        $bg ?? '',
        'rounded-full',
        'print:hidden'
    ])
>
    <div class="frows gap-4 drop-shadow">
        <div class="frows gap-2 text-base font-bold md:text-xl">
            <a
                class="text-4xl uppercase drop-shadow"
                href="{{ $href ?? '#' }}"
            >
                <img
                    class="w-24"
                    src="{{ asset('images/logo/logo.svg') }}"
                    alt=""
                />
            </a>
        </div>
    </div>
</div>
