<div
    @class([
        "rounded-xl p-2 uppercase text-white",
        'bg-green-500' => $user->status == 'active',
        'bg-red-500' => $user->status == 'blocked' || $user->status == 'inactive',
        'cursor-pointer' => cusr()->role == 'admin'
    ])
    @can('admin', cusr())
        wire:click="$toggle('userStatusForm')"
    @endcan
>
    {{ $user->status }}
</div>
@if($userStatusForm)
    @teleport('body')
    <x-form.form-modal
        formTitle="Change Status"
        formId="changeUserStatusForm"
        formCondition="userStatusForm"
        :submitCondition="false"
    >
        <div class="w-full fcol gap-2">
            @php
                $statuses = ['active', 'inactive', 'blocked'];
            @endphp
            @foreach($statuses as $s)
                @if($user->status != $s)
                    <div
                        class="w-full submit-button bg-red-100"
                        wire:click="setUserStatus('{{ $s }}')"
                    >
                        {{ $s }}
                    </div>
                @endif
            @endforeach
        </div>
    </x-form.form-modal>
    @teleport('body')
@endif
