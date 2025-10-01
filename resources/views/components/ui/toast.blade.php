@if (session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 1000)"
        x-show="show"
        x-transition
        class="modalback bg-gray-500"
    >
        <div
            class="p-4 bg-green-200 rounded-3xl shadow modal"
        >
            <div class="frows gap-2">
                <x-ui.icon icon="info"/>
                <div>{{ session('success') }}</div>
            </div>
            <div class="mt-4 h-1 w-full bg-green-300 rounded overflow-hidden">
                <div
                    class="h-1 bg-green-600"
                    x-init="$el.style.width = '100%';
                            setTimeout(() => $el.style.width = '0%', 50)"
                    style="width: 100%; transition: width 1s linear;"
                ></div>
            </div>
        </div>
    </div>
@endif
