<div class="mt-2 frowb gap-2 items-start">
    <div class="w-full px-2 fcols gap-0 border-r">
        <div class="title w-full text-center border-b">Installed Meter</div>
        @php
            $meter = $task->meterAssignment->meter;
        @endphp
        <x-ui.tagvalue tag="Serial" :value="$meter->number"/>
        <x-ui.tagvalue tag="Type" :value="$meter->type"/>
        <x-ui.tagvalue tag="Model" :value="$meter->model"/>
        <x-ui.tagvalue tag="Manufacturer" :value="$meter->manufacturer"/>
        <x-ui.tagvalue tag="Prod Year" :value="$meter->production_year"/>
        <x-ui.tagvalue tag="Size" :value="$meter->diameter" unit='"Ø'/>
        <x-ui.tagvalue tag="EVC number" :value="$task->getValue('evc number')"/>
        <div class="stitle border-b">Readings</div>
        <x-ui.tagvalue tag="Mechanical reading" :value="$task->getValue('mech reading')"/>
        <div class="frows gap-2">
            <x-ui.tagvalue tag="Vb" :value="$task->getValue('Vb')"/>
            <x-ui.tagvalue tag="Vm" :value="$task->getValue('Vm')"/>
        </div>
        <div class="frows gap-2">
            <x-ui.tagvalue tag="VbT" :value="$task->getValue('VbT')"/>
            <x-ui.tagvalue tag="VmT" :value="$task->getValue('VmT')"/>
        </div>
    </div>
    <div class="w-full px-2 fcols gap-0">
        <div class="title w-full text-center border-b">Installed Regulator</div>
        @php
            $regulator = $task->regulatorAssignment->regulator;
        @endphp
        <x-ui.tagvalue tag="Serial" :value="$regulator->number"/>
        <x-ui.tagvalue tag="Type/Model" :value="$regulator->type"/>
        <x-ui.tagvalue tag="Manufacturer" :value="$regulator->manufacturer"/>
        <x-ui.tagvalue tag="Prod Year" :value="$regulator->production_year"/>
        <x-ui.tagvalue tag="Size" :value="$regulator->diameter" unit='"Ø'/>
        <x-ui.tagvalue tag="Approved Pressure" :value="$task->getValue('appr pressure')" unit='psig'/>
        <x-ui.tagvalue tag="Set Pressure" :value="$task->getValue('set pressure')" unit='psig'/>
    </div>
</div>
