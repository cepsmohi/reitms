<div class="frowe gap-2 print:hidden">
    @if($task->isApproved())
        <x-ui.print/>
    @endif
    <x-ui.ahref
        :href="route('tasks.rmsinstall')"
        icon="back"
        width="w-10"
        title="to Dashboard"
    />
</div>
