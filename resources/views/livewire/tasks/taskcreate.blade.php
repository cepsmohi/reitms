<div>
    <x-ui.topbar/>
    <x-task.create.buttons/>
    <x-ui.title title="Creating Task"/>
    <x-task.create.type :$type :$types/>
    <x-tasks.create.assigncustomerform
        :$customercode
        :$customers
    />
</div>
