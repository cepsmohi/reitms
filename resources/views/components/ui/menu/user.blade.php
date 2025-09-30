<div
    x-data="{ isOpen:false }"
    class="relative z-50 print:hidden"
>
    <div
        @click="isOpen = !isOpen"
        class="frowe gap-2"
    >
        <div class="hidden md:block  stitle whitespace-nowrap">{{ cusr()->name }}</div>
        <img
            class="w-12 cursor-pointer rounded-full shadow dark:bg-gray-500"
            src="{{ cusr()->image }}"
            alt=""
        />
    </div>
    <div
        x-cloak
        x-show="isOpen"
        @click.outside="isOpen=false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="menudiv bg-gray-300 p-2 top-16 right-1"
    >
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
                color="bg-red-300 dark:bg-red-600"
            />
        </form>
    </div>
</div>
