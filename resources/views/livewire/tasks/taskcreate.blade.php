<div>
    <x-ui.topbar/>
    <x-task.create.buttons/>
    <x-ui.title title="Create Task"/>
    <x-task.create.type :$type :$types/>
    <x-task.create.selectcustomer
        :$type
        :$customers
        :$customer
        :$search
    />
    <x-task.create.submit-button :$customer/>
</div>
