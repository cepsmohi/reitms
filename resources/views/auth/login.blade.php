<x-master>
    <div class="modalback">
        <x-form.header
            :href="route('welcome')"
        />
        <div class="modal -mt-12 bg-gray-100 dark:bg-gray-800 p-4 rounded-3xl">
            <div class="w-full h-14"></div>
            <form
                method="POST"
                action="{{ route('login') }}"
                id="loginForm"
            >
                @csrf
                <x-form.input
                    name="email"
                    :value="old('email')"
                    placeholder="email"
                    autocomplete="email"
                    icon="email"
                    autofocus="autofocus"
                />
                <x-form.input-password
                    name="password"
                    :forgetpass="true"
                />
                <x-form.checkbox
                    name="remember"
                    placeholder="Remember Me"
                    :value="old('remember') ? 'checked' : ''"
                />
                <x-form.submit-button
                    form="loginForm"
                    icon="login"
                    tag="Login"
                />
            </form>
        </div>
    </div>
</x-master>
