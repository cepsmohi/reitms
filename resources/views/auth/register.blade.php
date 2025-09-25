<x-master>
    <div class="modalback">
        <x-form.header
            :href="route('login')"
        />
        <div class="modal -mt-12">
            <div class="w-full h-14"></div>
            <form
                method="POST"
                action="{{ route('register') }}"
                id="registerForm"
            >
                @csrf
                <x-form.input
                    name="name"
                    :value="old('name')"
                    placeholder="name"
                    autocomplete="name"
                    icon="name"
                    autofocus="autofocus"
                />
                <x-form.input
                    name="email"
                    :value="old('email')"
                    placeholder="email"
                    autocomplete="email"
                    icon="email"
                />
                <x-form.input
                    name="password"
                    placeholder="Password"
                    autocomplete="new-password"
                    icon="pass"
                    type="password"
                />
                <x-form.input
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    autocomplete="new-password"
                    icon="pass"
                    type="password"
                />
                <x-form.submit-button
                    form="registerForm"
                    icon="register"
                    tag="Register"
                />
            </form>
        </div>
    </div>
</x-master>
