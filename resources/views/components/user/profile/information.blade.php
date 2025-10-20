<div class="fcols gap-2">
    <x-user.profile.information.status :$user/>
    <x-user.profile.information.namecard
        :$user
        :$userPhotoForm
        :$photos
        :$pic
    />
    <x-user.profile.information.others :$user/>
    @if($user->detail)
        <x-user.profile.information.signature
            :$user
            :$userSignatureForm
            :$pic
        />
    @endif
</div>
