<div
    @class([
        "rounded-xl p-2 uppercase text-white",
        'bg-green-500' => $user->status == 'active',
        'bg-red-500' => $user->status == 'blocked' || $user->status == 'inactive'
    ])
>
    {{ $user->status }}
</div>
