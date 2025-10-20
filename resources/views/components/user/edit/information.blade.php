<div class="fcols gap-2">
    <x-user.edit.information.status
        :$user
        :$userStatusForm
    />
    <x-user.edit.information.namecard
        :$user
        :$userPhotoForm
        :$photos
        :$pic
        :$userRoleForm
    />
    <x-user.edit.information.others :$user/>
    @if($user->detail)
        <x-user.edit.information.signature
            :$user
            :$userSignatureForm
            :$pic
        />
    @endif
</div>
