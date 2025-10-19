<div class="frows flex-wrap gap-2">
    <div class="frows gap-2">
        <x-ui.icon icon="email" width="w-12"/>
        <div class="text-xl">{{ $user->email }}</div>
    </div>
    <div class="frows gap-2">
        <x-ui.icon icon="phone" width="w-12"/>
        <div class="text-xl">{{ $user->phone_number }}</div>
    </div>
    <div class="frows gap-2">
        <x-ui.icon icon="rank" width="w-12"/>
        <div class="text-xl">{{ $user->designation ?? '---' }}</div>
    </div>
    <div class="frows gap-2">
        <x-ui.icon icon="code" width="w-12"/>
        <div class="text-xl">{{ $user->code ?? '---' }}</div>
    </div>
</div>
