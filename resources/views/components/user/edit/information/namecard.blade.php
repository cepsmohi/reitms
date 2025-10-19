<div class="card w-full p-4">
    <div class="frows gap-2 items-start">
        <div class="relative">
            <img
                src="{{ $user->image }}"
                alt="{{ $user->name }}"
                @class([
                    "w-28 md:w-44",
                    'border-2 border-transparent rounded-full hover:border-green-400 cursor-pointer' => cusr()->role == 'admin'
                ])
                @can('admin', cusr())
                    wire:click="$toggle('userPhotoForm')"
                @endcan
            />
            <x-user.edit.information.namecard.photoform
                :$user
                :$userPhotoForm
                :$pic
            />
        </div>
        <div class="fcols gap-1 md:gap-8">
            <div>
                <div>User Name</div>
                <div class="title text-grad">{{ $user->name }}</div>
            </div>
            <div>
                <div>Official Name</div>
                <div class="title text-grad">{{ $user->name }}</div>
            </div>
        </div>
    </div>
    <div class="adtr">
        <x-ui.icon :icon="$user->role" width="w-12"/>
    </div>
</div>
