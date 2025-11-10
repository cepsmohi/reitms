<div class="adtr">
    @if (Route::has('login'))
        <nav class="frowe gap-0">
            @auth
                <x-ui.ahreftag
                    :href="route('home')"
                    tag="Dashboard"
                    icon="dashboard"
                />
            @else
                <x-ui.ahreftag
                    :href="route('login')"
                    tag="Login"
                    icon="login"
                />
            @endauth
        </nav>
    @endif
</div>
