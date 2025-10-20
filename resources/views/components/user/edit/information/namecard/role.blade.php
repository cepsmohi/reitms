<div
    @class([
        "adtr",
        'cursor-pointer' => cusr()->role == 'admin'
    ])
    @can('admin', cusr())
        wire:click="$toggle('userRoleForm')"
    @endcan
>
    <x-ui.icon :icon="$user->role" width="w-12"/>
</div>
@if($userRoleForm)
    @teleport('body')
    <x-form.form-modal
        formTitle="Change Role"
        formId="changeUserRoleForm"
        formCondition="userRoleForm"
        :submitCondition="false"
    >
        <div class="w-full fcol gap-2">
            @php
                $roles = ['user', 'checker', 'admin'];
            @endphp
            @foreach($roles as $r)
                @if($user->role != $r)
                    <div
                        class="w-full submit-button justify-center"
                        wire:click="setUserRole('{{ $r }}')"
                    >
                        <div class="fcol">
                            <img
                                src="{{ asset('images/icon/'.$r.'.svg') }}"
                                class="w-20"
                                alt="{{ $r }}"
                            />
                            <div class="uppercase">{{ $r }}</div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </x-form.form-modal>
    @teleport('body')
@endif
