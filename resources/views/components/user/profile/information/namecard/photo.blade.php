<div class="relative">
    <img
        src="{{ $user->image }}"
        alt="{{ $user->name }}"
        @class([
            "w-28 md:w-44 border-2 border-transparent rounded-full hover:border-green-400 cursor-pointer"
        ])
        wire:click="$toggle('userPhotoForm')"
    />
    <x-user.edit.information.namecard.photoform
        :$user
        :$userPhotoForm
        :$pic
        :src="$user->image"
    />
</div>
