<div class="frows flex-wrap gap-2">
    <div class="frows gap-2">
        <x-ui.icon icon="email" width="w-12"/>
        <div
            @class([
                "text-xl",
                'cursor-pointer' => cusr()->role == 'admin'
            ])
            @can('admin', cusr())
                wire:click="openUserValueChangeForm(
                            'Change Email',
                            'setUserValue',
                            'email',
                            'User Email',
                            'email'
                        )"
            @endcan
        >
            {{ $user->email }}
        </div>
    </div>
    <div class="frows gap-2">
        <x-ui.icon icon="phone" width="w-12"/>
        <div
            @class([
                "text-xl",
                'cursor-pointer' => cusr()->role == 'admin'
            ])
            @can('admin', cusr())
                wire:click="openUserValueChangeForm(
                            'Change Phone Number',
                            'setUserValue',
                            'phone_number',
                            'User Phone Number',
                            'phone'
                        )"
            @endcan
        >
            {{ $user->phone_number }}
        </div>
    </div>
    <div class="frows gap-2">
        <x-ui.icon icon="rank" width="w-12"/>
        <div
            @class([
                "text-xl",
                'cursor-pointer' => cusr()->role == 'admin'
            ])
            @can('admin', cusr())
                wire:click="openUserValueChangeForm(
                            'Change Designation',
                            'setUserValue',
                            'designation',
                            'Designation',
                            'rank'
                        )"
            @endcan
        >
            {{ $user->designation ?? '---' }}
        </div>
    </div>
    <div class="frows gap-2">
        <x-ui.icon icon="code" width="w-12"/>
        <div
            @class([
                "text-xl",
                'cursor-pointer' => cusr()->role == 'admin'
            ])
            @can('admin', cusr())
                wire:click="openUserValueChangeForm(
                            'Change Code',
                            'setUserValue',
                            'code',
                            'Employee Code',
                            'code'
                        )"
            @endcan
        >
            {{ $user->code ?? '---' }}
        </div>
    </div>
</div>
