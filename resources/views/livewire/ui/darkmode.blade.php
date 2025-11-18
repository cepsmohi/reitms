<div
    x-data
    class="px-2 frowe relative print:hidden"
>
    <div
        class="w-full frowe gap-2 my-1 "
    >
        <div
            @click="isDarkMode=!isDarkMode"
            class="px-1 buttonhover frow gap-4 rounded-full cursor-pointer shadow-inner"
            :class="isDarkMode ? 'bg-zinc-300/20' : 'bg-yellow-500/20'"
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
