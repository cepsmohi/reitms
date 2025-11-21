@if($customercode != '' && $customers != null)
    <x-customer.list.items :$customers/>
    <x-customer.createbutton :$customercode/>
@endif
