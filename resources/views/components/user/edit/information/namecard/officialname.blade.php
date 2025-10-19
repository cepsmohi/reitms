<div>
    <div>Official Name</div>
    <div
        @class([
            "title text-grad",
            'cursor-pointer' => cusr()->role == 'admin'
        ])
        @can('admin', cusr())
            wire:click="openUserValueChangeForm(
                            'Change Official Name',
                            'setUserDetailValue',
                            'name',
                            'Official Name',
                            'user'
                        )"
        @endcan
    >
        {{ $user->detail->name }}
    </div>
</div>
