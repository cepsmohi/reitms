<div class="card w-full">
    <div class="text-xl p-2">Signature</div>
    <div
        class="frowe"
        @can('admin', cusr())
            wire:click="$toggle('userSignatureForm')"
        @endcan
    >
        <img
            src="{{ $user->signature }}"
            alt="{{ $user->name }}"
            @class([
                'w-40 rounded-xl mr-2 mb-2',
                'border-2 border-transparent hover:border-green-400 cursor-pointer' => cusr()->role == 'admin'
            ])
        />
    </div>
</div>
<x-user.edit.information.signature.form
    :$user
    :$userSignatureForm
    :$pic
    :src="$user->signature"
/>
