<div class="mt-4">
    <div class="stitle border-b">Installed Security Seals</div>
    <div class="frowe gap-1 text-xs text-red-500">
        <strong>Instruction:</strong>
        <p>to add seal click on position</p>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Inlet Valve</div>
        <x-ui.vline/>
        <div class="alink" wire:click="openSealForm('inlet valve: in flange')">
            In Flange
        </div>
        @php
            use App\Livewire\Tasks\Rmsinstalldetails;
            $seals = Rmsinstalldetails::where('task_id', $task->id)
                ->where('type', 'inlet valve: in flange')
                ->get();
        @endphp
        @foreach($seals as $seal)
            <div>{{ $seal->number }}</div>
        @endforeach
        <div class="alink" wire:click="openSealForm('inlet valve: out flange')">Out Flange</div>
        <div>On Valve</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Inlet Pressure Gauge</div>
        <x-ui.vline/>
        <div>Nipple</div>
        <div>On Valve</div>
        <div>On Body</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Strainer</div>
        <x-ui.vline/>
        <div>In Flange</div>
        <div>Out Flange</div>
        <div>Cover</div>
        <div>Screw/Nut</div>
        <div>Drain Point</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Regulator</div>
        <x-ui.vline/>
        <div>In Flange</div>
        <div>Out Flange</div>
        <div>Orifice/Piston Cover</div>
        <div>Restrictor</div>
        <div>Pilot</div>
        <div>Sensing</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Meter</div>
        <x-ui.vline/>
        <div>In Flange</div>
        <div>Out Flange</div>
        <div>Other Seals</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">EVC Part</div>
        <x-ui.vline/>
        <div>Seals</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Outlet Pressure Gauge</div>
        <x-ui.vline/>
        <div>Nipple</div>
        <div>On Valve</div>
        <div>On Body</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Purging Point</div>
        <x-ui.vline/>
        <div>Nipple</div>
        <div>On Valve/Liver</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Relief Valve</div>
        <x-ui.vline/>
        <div>Flange/Nipple</div>
        <div>Screw/Nut</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Outlet Valve</div>
        <x-ui.vline/>
        <div>In Flange</div>
        <div>Out Flange</div>
        <div>On Valve</div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">Others</div>
        <x-ui.vline/>
        <div>Seals</div>
    </div>
</div>
