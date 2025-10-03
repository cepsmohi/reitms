<div>
    <x-ui.topbar/>
    <x-user.create.buttons/>
    <x-ui.title title="Create User"/>
    <x-user.create.form
        :$name
        :$email
        phone_number="{{ $phone_number }}"
    />
</div>
