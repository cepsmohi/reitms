<div>
    <div>User Name</div>
    <div
        @class([
            "title text-grad",
            'cursor-pointer' => cusr()->role == 'admin'
        ])
        @can('admin', cusr())
            wire:click="openUserValueChangeForm(
                            'Change User Name',
                            'setUserValue',
                            'name',
                            'User Name',
                            'user'
                        )"
        @endcan
    >
        {{ $user->name }}
    </div>
</div>
