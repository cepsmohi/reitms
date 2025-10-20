<div class="card w-full p-4">
    <div class="frows gap-2 items-start">
        <x-user.edit.information.namecard.photo
            :$user
            :$userPhotoForm
            :$pic
        />
        <div class="fcols gap-1 md:gap-8">
            <x-user.edit.information.namecard.username :$user/>
            <x-user.edit.information.namecard.officialname :$user/>
        </div>
    </div>
    <x-user.edit.information.namecard.role
        :$user
        :$userRoleForm
    />
</div>
