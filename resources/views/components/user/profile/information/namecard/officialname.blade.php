<div>
    <div>Official Name</div>
    <div
        @class([
            "title text-grad cursor-pointer"
        ])
        wire:click="openUserValueChangeForm(
            'Change Official Name',
            'setUserDetailValue',
            'name',
            'Official Name',
            'user'
        )"
    >
        {{ $user->detail->name ?? 'Set Official Name' }}
    </div>
</div>
