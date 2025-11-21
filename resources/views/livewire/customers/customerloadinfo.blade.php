<div>
    <x-ui.topbar/>
    <x-customer.create.buttons/>
    <x-ui.title title="Add Load Information"/>
    <x-customer.basicinfo :$customer/>
    <x-customer.create.loadinfoform
        :$hourlyload
        :$setpressure
        :$diversityfactor
        :$dailyrun
        :$hourlyrun
        :$monthlyload
        :$minload
    />
</div>
