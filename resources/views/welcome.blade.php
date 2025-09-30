<x-master>
    <livewire:ui.darkmode/>
    <div class="relative">
        <div class="w-full h-[90vh] fcol">
            <div class="adtr">
                @if (Route::has('login'))
                    <nav class="frowe gap-0">
                        @auth
                            <x-ui.alink
                                :href="route('home')"
                                tag="Dashboard"
                            />
                        @else
                            <x-ui.alink
                                :href="route('login')"
                                tag="Log in"
                            />
                        @endauth
                    </nav>
                @endif
            </div>
            <div class="adtl">
                <img
                    class="w-20 md:w-32"
                    src="{{ asset('images/logo/logo.svg') }}"
                    alt="Titas Gas Logo"
                />
            </div>
            <div class="title">
                Welcome <br>
                <span class="text-xl">to</span> <br>
                <span class="text-4xl text-grad">RMS Engineering</span> <br>
                <span class="text-2xl">Inventory & Task Management System</span>
            </div>
        </div>
    </div>
</x-master>
