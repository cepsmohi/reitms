@if (session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 1000)"
        x-show="show"
        x-transition
        class="modalback bg-gray-500/50"
    >
        <div
            class="p-4 bg-green-200 rounded modal"
        >
            {{ session('success') }}
        </div>
    </div>
@endif
