<div>
    <div>User Name</div>
    <div
        @class([
            "title text-grad cursor-pointer"
        ])
        wire:click="openUserValueChangeForm(
            'Change User Name',
            'setUserValue',
            'name',
            'User Name',
            'user'
        )"
    >
        {{ $user->name }}
    </div>
</div>
