<div>
    <form
        wire:submit="{{ $wiresubmit }}"
        id="{{ $formId }}"
        @isset($enctype) enctype="{{ $enctype }}" @endisset
    >
        <div class="mt-8 fcol">
            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
                {{ $slot }}
                @if($submitCondi != null)
                    <x-form.submit-button
                        form="{{ $formId }}"
                        icon="{{ $submitIcon }}"
                        tag="{{ $submitTag }}"
                    />
                @endif
            </div>
        </div>
    </form>
    <script>
        function formatByPattern(el, pattern) {
            if (el._busy) return;
            el._busy = true;
            let digits = (el.value || '').replace(/\D/g, '');
            const parts = [];
            for (const size of pattern) {
                if (!digits.length) break;
                parts.push(digits.slice(0, size));
                digits = digits.slice(size);
            }
            const formatted = parts.join('-');
            const oldLen = el.value.length;
            const oldPos = el.selectionStart ?? oldLen;
            el.value = formatted;
            const newLen = formatted.length;
            const delta = newLen - oldLen;
            const nextPos = Math.max(0, Math.min(newLen, oldPos + delta));
            requestAnimationFrame(() => {
                try {
                    el.setSelectionRange(nextPos, nextPos);
                } catch {
                }
                el._busy = false;
            });
        }
    </script>
</div>
