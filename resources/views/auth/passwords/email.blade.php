<x-master>
    <div class="modalback">
        <x-form.header
            :href="route('login')"
        />
        <div class="modal -mt-12">
            <div class="w-full h-14"></div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form
                method="POST"
                action="{{ route('password.update') }}"
                id="resetPassword"
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
                <x-form.submit-button
                    form="resetPassword"
                    icon="link"
                    tag="Send Reset Link"
                />
            </form>
        </div>
    </div>
</x-master>
