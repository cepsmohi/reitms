<x-form.form-create
    wiresubmit="changePass"
    formId="changePassForm"
    :submitCondi="true"
    submitIcon="refresh"
    submitTag="Change"
>
    <x-form.inputwire
        name="oldpass"
        icon="pass"
        placeholder="Current Password"
        type="password"
    />
    <x-form.inputwire
        name="newpass"
        icon="pass"
        placeholder="New Password"
        type="password"
    />
    <x-form.inputwire
        name="confirm"
        icon="pass"
        placeholder="Confirm Password"
        type="password"
    />
</x-form.form-create>
