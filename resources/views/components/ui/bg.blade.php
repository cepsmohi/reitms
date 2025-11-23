<div
    @class([
        'bg-light-layer',
        'absolute inset-0 bg-cover bg-center bg-no-repeat',
        'transition-opacity duration-700 ease-in-out',
        'opacity-50 dark:opacity-0',
        'bg-[url({ $bg })]'
    ])
    style="background-image: url('/images/background/{{ strtolower($_ENV['APP_AREA']) }}-bg.png')"
></div>
<div
    @class([
        'bg-dark-layer',
        'absolute inset-0 bg-cover bg-center bg-no-repeat',
        'transition-opacity duration-700 ease-in-out',
        'opacity-0 dark:opacity-50',
    ])
    style="background-image: url('/images/background/{{ strtolower($_ENV['APP_AREA']) }}-bg-dark.png')"
></div>
