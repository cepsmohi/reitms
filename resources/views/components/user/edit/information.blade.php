<div class="fcols gap-2">
    <div
        @class([
            "rounded-xl p-2 uppercase",
            'bg-green-500' => $user->status == 'active',
            'bg-red-500' => $user->status == 'blocked',
            'bg-red-500' => $user->status == 'inactive'
        ])
    >
        {{ $user->status }}
    </div>
    <div class="card w-full p-4">
        <div class="frows gap-2 items-start">
            <img
                src="{{ $user->image }}"
                alt="{{ $user->name }}"
                class="w-28 md:w-44"
            />
            <div class="fcols gap-1 md:gap-8">
                <div>
                    <div>User Name</div>
                    <div class="title text-grad">{{ $user->name }}</div>
                </div>
                <div>
                    <div>Official Name</div>
                    <div class="title text-grad">{{ $user->name }}</div>
                </div>
            </div>
        </div>
        <div class="adtr">
            <x-ui.icon :icon="$user->role" width="w-12"/>
        </div>
    </div>
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
    <div class="card w-full">
        <div class="text-xl p-2">Signature</div>
        <div class="pr-2 pb-2 frowe">
            <img
                src="{{ $user->signature }}"
                alt="{{ $user->name }}"
                class="w-40 rounded-xl"
            />
        </div>
    </div>
</div>
