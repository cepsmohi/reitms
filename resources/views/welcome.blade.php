<x-master>
    <livewire:ui.darkmode/>
    <div class="relative">
        <div class="w-full h-[90vh] fcol">
            <x-ui.auth/>
            <div class="adtl">
                <img
                    class="w-20 md:w-32"
                    src="{{ asset('images/logo/logo.svg') }}"
                    alt="Titas Gas Logo"
                />
            </div>
            <div class="title text-center md:text-left">
                <span class="text-sm">Welcome to</span> <br>
                <span class="text-2xl text-grad">Inventory & Tasks</span> <br>
                <span class="text-sm">Management System</span>
            </div>
        </div>
    </div>
</x-master>
