<div>
    <x-ui.topbar/>
    <x-ui.title title="Create Task"/>
    <x-task.create.type :$type/>
    <x-task.create.selectcustomer
        :$type
        :$customers
        :$customer
        :$search
    />
    <x-task.create.submit-button :$customer/>
</div>
