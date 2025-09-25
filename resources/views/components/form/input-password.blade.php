<div
    x-data="{ isOpen: false, openedWithKeyboard: false }"
    @keydown.esc.prevent="isOpen = false, openedWithKeyboard = false"
    @class(['relative',$width ?? 'w-full',$mb ?? ''])
>
    <x-form.input
        :name="$name"
        :placeholder="$placeholder ?? 'Password'"
        :autocomplete="$autocomplete ?? 'off'"
        icon="pass"
        type="password"
    />
    <div
        id="viewpassword"
        class="adtr cursor-pointer rounded-full hover:bg-gray-100"
        onclick="changePassInputType()"
        @click="isOpen = ! isOpen"
        @contextmenu.prevent="isOpen = true"
        @keydown.space.prevent="openedWithKeyboard = true"
    >
        <div x-cloak x-show="isOpen">
            <x-ui.icon icon="eye-slash" padding="p-0"/>
        </div>
        <div x-cloak x-show="!isOpen">
            <x-ui.icon icon="eye" padding="p-0"/>
        </div>
    </div>
    <script>
        function changePassInputType() {
            const x = document.getElementById("{{ $name }}");
            const a = x.getAttribute('type');
            if (a === 'password') {
                x.setAttribute('type', 'text');
            } else {
                x.setAttribute('type', 'password');
            }
        }
    </script>
    @isset($forgetpass)
        @error('email')
        <div class="absolute -bottom-6 right-0 text-xs frowe text-red-600">
            @if (Route::has('password.request'))
                <x-ui.ahref
                    :href="route('password.request')"
                    tag="Forgot Pass?"
                />
            @endif
        </div>
        @enderror
    @endisset
</div>
