<div
    x-data="{ isOpen:false }"
    class="relative print:hidden"
>
    <div
        @click="isOpen = !isOpen"
        class="frowe gap-2"
    >
        <div class="hidden md:block  stitle whitespace-nowrap">{{ cusr()->name }}</div>
        <img
            class="buttonhover w-12 cursor-pointer rounded-full shadow dark:bg-gray-500"
            src="{{ cusr()->image }}"
            alt=""
        />
    </div>
    <x-ui.transtogglediv width="w-44">
        <x-ui.ahreftag
            icon="user"
            tag="Profile"
            :href="route('users.profile')"
            width="w-full"
        />
        <x-ui.ahreftag
            icon="pass"
            tag="Change Pass"
            :href="route('users.password')"
            width="w-full"
        />
        <form
            class="w-full"
            id="logoutForm"
            action="{{ route('logout') }}"
            method="POST">
            @csrf
            <x-form.submit-button
                form="logoutForm"
                icon="logout"
                tag="Logout"
                width="w-full"
                color="bg-red-400 dark:bg-red-500 hover:bg-red-300"
            />
        </form>
    </x-ui.transtogglediv>
</div>
