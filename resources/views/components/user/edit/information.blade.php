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
    />
    <x-user.edit.information.others :$user/>
    <x-user.edit.information.signature :$user/>
</div>
