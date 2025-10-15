<div class="frows gap-2">
    <div class="font-bold">EVC Number (If any)</div>
    <x-ui.vline/>
    <x-tasks.values :$task field="evc number" tag="EVC Part Number?"/>
</div>
<div class="frows gap-2">
    <div class="font-bold">Initial Mech Reading</div>
    <x-ui.vline/>
    <x-tasks.values :$task field="mech reading"/>
</div>
<div class="frows gap-2">
    <div class="font-bold">Initial EVC Reading</div>
    <x-ui.vline/>
    <x-tasks.values :$task field="Vb" title="Vb"/>
    <x-tasks.values :$task field="Vm" title="Vm"/>
    <x-tasks.values :$task field="VbT" title="VbT"/>
    <x-tasks.values :$task field="VmT" title="VmT"/>
</div>
