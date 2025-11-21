<div>
    <x-ui.topbar/>
    <x-customer.details.buttons/>
    <x-ui.title title="Customers Details"/>
    <x-customer.details.information :$customer/>
    <x-customer.details.tasklist :$customer/>
    <x-customer.details.files :$customer/>

    {{--    file delete form--}}
    <x-file.deleteform :$deleteFileForm/>
</div>
