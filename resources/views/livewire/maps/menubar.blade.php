<div class="w-full px-2 frowb gap-2">
    <x-map.menu.logotitle :href="route('home')"/>
    <div class="frowe">
        <x-map.menu.basemap/>
        <livewire:maps.search/>
        <x-ui.ahref
            :href="route('customers')"
            icon="back"
            width="w-10"
            title="to Customers"
        />
    </div>
</div>
