<form wire:submit="createUser" id="createUserForm">
    <div class="mt-8 fcol">
        <div class="w-xs bg-gray-100 dark:bg-gray-700 p-4 rounded-3xl">
            <x-form.inputwire
                name="name"
                placeholder="User name"
                icon="name"
            />
            <x-form.inputwire
                name="email"
                type="email"
                placeholder="User email address"
                icon="email"
            />
            <x-form.inputwire
                name="phone_number"
                placeholder="User phone number"
                icon="phone"
                hints="01xxxxxxxx"
            />
            <x-form.submit-button
                form="createUserForm"
                icon="plus"
                tag="Create"
            />
        </div>
    </div>
</form>
