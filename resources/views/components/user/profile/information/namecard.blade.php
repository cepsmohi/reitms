<div class="card w-full p-4">
    <div class="frows gap-2 items-start">
        <x-user.profile.information.namecard.photo
            :$user
            :$userPhotoForm
            :$pic
        />
        <div class="fcols gap-1 md:gap-8">
            <x-user.profile.information.namecard.username :$user/>
            <x-user.profile.information.namecard.officialname :$user/>
        </div>
    </div>
    <x-user.profile.information.namecard.role
        :$user
    />
</div>
