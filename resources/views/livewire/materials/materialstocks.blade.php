<div>
    <x-ui.topbar/>
    <x-material.stocks.buttons
        :$years :$syear
        :$months :$smonth
        :$days :$sday
        :items="$stocks"
    />
    <x-ui.title title="Stock Entries"/>
    <div class="frows gap-2">{{ $title }}</div>
    <x-material.stocks.table :$stocks/>

    <x-material.stocks.addmivform
        :$mivno
        :$code
        :$quantity
        :$addMivForm
    />
</div>
