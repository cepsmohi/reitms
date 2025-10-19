<div>
    <x-ui.topbar/>
    <x-user.edit.buttons/>
    <x-ui.title title="Users Details"/>
    <x-user.edit.information
        :$user
        :$userStatusForm
        :$userPhotoForm
        :$photos
        :$pic
    />
</div>
