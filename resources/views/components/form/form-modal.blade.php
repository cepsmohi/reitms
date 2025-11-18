<div class="modalback bg-gray-900/90">
    <div class="modal bg-gray-500/50 p-4 rounded-3xl">
        <x-ui.closeform wireclick="$toggle('{{ $formCondition }}')"/>
        <form
            @if($submitCondition)
                wire:submit="{{ $submitFun }}"
            @endif
            id="{{ $formId }}"
            @isset($enctype) enctype="{{ $enctype }}" @endisset
        >
            <div class="fcols">
                <div class="mb-2 stitle text-grad">{!! $formTitle !!}</div>
                {{ $slot }}
                @if($submitCondition)
                    <x-form.submit-button
                        form="{{ $formId }}"
                        icon="{{ $submitIcon ?? 'refresh' }}"
                        tag="{{ $submitTag ?? 'Update' }}"
                    />
                @endif
            </div>
        </form>
    </div>
</div>
