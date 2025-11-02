<div class="frowe gap-2 print:hidden">
    @if($task->isApproved())
        <x-ui.print/>
    @endif
    @if($task->isDeletable())
        <x-ui.awire
            wireclick="$toggle('deleteTaskForm')"
            icon="trash"
            width="w-10"
            title="Delete Task"
        />
    @endif
    <x-ui.ahref
        :href="$href"
        icon="back"
        width="w-10"
        title="to Dashboard"
    />
</div>
