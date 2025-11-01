@if (session('processing'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 2000)"
        x-show="show"
        x-transition
        class="modalback bg-gray-500"
    >
        <div class="modal glass bg-gray-500/50 p-4 rounded-3xl">
            <div class="frows gap-2">
                <x-ui.icon icon="info"/>
                <div>{{ session('processing') }}</div>
            </div>
            <div class="mt-4 h-1 w-full bg-green-300 rounded overflow-hidden">
                <div
                    class="h-1 bg-green-600"
                    x-init="$el.style.width = '100%';
                            setTimeout(() => $el.style.width = '0%', 50)"
                    style="width: 100%; transition: width 2s linear;"
                ></div>
            </div>
        </div>
    </div>
@endif
@if (session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 2000)"
        x-show="show"
        x-transition
        class="modalback bg-gray-500"
    >
        <div class="modal glass bg-gray-500/50 p-4 rounded-3xl">
            <div class="sa success">
                <div class="sa-success">
                    <div class="sa-success-tip"></div>
                    <div class="sa-success-long"></div>
                    <div class="sa-success-placeholder"></div>
                    <div class="sa-success-fix"></div>
                </div>
            </div>
            <x-ui.h3 :title="session('success')"/>
        </div>
    </div>
@endif
@if (session('alert'))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-transition
        class="modalback bg-gray-500"
    >
        <div class="modal glass bg-gray-500/50 p-4 rounded-3xl">
            <div class="sa error">
                <div class="sa-error">
                    <div class="sa-error-x">
                        <div class="sa-error-left"></div>
                        <div class="sa-error-right"></div>
                    </div>
                    <div class="sa-error-placeholder"></div>
                    <div class="sa-error-fix"></div>
                </div>
            </div>
            <x-ui.h3 :title="session('alert')"/>
            <div class="mt-4 w-full frow">
                <div
                    class="submit-button mx-3 bg-red-600 text-white text-center"
                    @click="show = false"
                >
                    Got it...
                </div>
            </div>
        </div>
    </div>
@endif
<script>
    (() => {
        document.addEventListener('submit', e => {
            const f = e.target;
            if (f.tagName === 'FORM' && [...f.attributes].some(a => a.name.startsWith('wire:submit')))
                localStorage.setItem('scroll-position', window.scrollY);
        }, true);

        const restore = () => {
            const y = localStorage.getItem('scroll-position');
            if (!y) return;
            const ok = () => getComputedStyle(document.body).overflow !== 'hidden' && !document.body.classList.contains('overflow-hidden');
            const scroll = () => {
                if (ok()) {
                    window.scrollTo(0, +y);
                    localStorage.removeItem('scroll-position');
                    return true;
                }
            };
            if (!scroll()) {
                const t = setInterval(() => scroll() && clearInterval(t), 200);
                setTimeout(() => clearInterval(t), 8000);
            }
        };

        document.addEventListener('DOMContentLoaded', restore);
    })();
</script>


