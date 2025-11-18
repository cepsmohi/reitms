<div
    x-cloak
    x-show="isOpen"
    @if(!isset($outside) || $outside)
        @click.outside="isOpen = false"
    @endif
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    @class([
        $class ?? 'absolute right-0 z-50 fcol gap-2 p-2 mt-2 bg-gray-50 dark:bg-gray-800 rounded-xl',
        $width ?? 'w-full'
    ])
>
    {{ $slot }}
</div>
