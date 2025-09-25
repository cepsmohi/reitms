<div class="px-2 relative print:hidden">
    <div
        class="w-full frowe gap-2 my-1 transition-all ease-in-out duration-300"
        x-transition
    >
        <div
            @click="isDarkMode=!isDarkMode"
            class="px-1 frow gap-4 rounded-full cursor-pointer shadow-inner border border-zinc-500"
            :class="isDarkMode ? 'bg-zinc-400' : 'bg-theme-500/50'"
        >
            <div
                x-cloak
                x-show="isDarkMode"
            >
                <x-ui.icon icon="moon" padding="p-0" width="w-6" dark=""/>
            </div>
            <div class="w-1"></div>
            <div
                x-cloak
                x-show="!isDarkMode"
            >
                <div></div>
                <x-ui.icon icon="sun" padding="p-0" width="w-6"/>
            </div>
        </div>
    </div>
</div>
