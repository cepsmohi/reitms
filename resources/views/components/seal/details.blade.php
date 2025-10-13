<div class="mt-4">
    <div class="mb-4 frows">
        <x-seal.carddetail :$seal/>
    </div>
    @if($seal->task)
        <div class="stitle text-grad">Used</div>
        <div class="frows gap-2">
            <x-ui.icon icon="date"/>
            <div>{{ $seal->task->created_at->format('d/m/Y') }}</div>
        </div>
        <div class="frows gap-2">
            <x-ui.icon icon="industry" ext=".png"/>
            <div>{{ $seal->task->customer->name }}</div>
        </div>
        <div class="frows gap-2">
            <x-ui.icon icon="tag"/>
            <div>{{ $seal->task->customer->code }}</div>
        </div>
        <div class="frows gap-2">
            <x-ui.icon icon="location"/>
            <div>{{ $seal->task->customer->detail->address }}</div>
        </div>

        <div class="mt-4">
            @if($seal->sealRegister)
                <div class="fcols gap-0">
                    <div class="stitle text-grad">Seal Position</div>
                    <div class="uppercase">{{ $seal->sealRegister->position }}</div>
                </div>
            @endif
        </div>

        <div class="mt-4 fcols gap-0">
            <div class="stitle text-grad">Reported By</div>

            <div class="frows gap-2">
                <x-ui.icon icon="user"/>
                <div>{{ $seal->task->user->name }}</div>
            </div>
            <div class="frows gap-2">
                <x-ui.icon icon="rank"/>
                <div>{{ $seal->task->user->designation }}</div>
            </div>
            <div class="frows gap-2">
                <x-ui.icon icon="code"/>
                <div>{{ $seal->task->user->code }}</div>
            </div>
        </div>
    @endif
    @if($seal->task && $seal->task->photos)
        <div class="mt-4 stitle text-grad">Possible Photos</div>
        <div class="mt-2 frows flex-wrap gap-4">
            @foreach($seal->task->photos as $photo)
                <x-seal.photocard :$photo/>
            @endforeach
        </div>
    @endif
    @if(!$seal->task)
        <div class="stitle text-grad">Not Used</div>
    @endif
</div>
