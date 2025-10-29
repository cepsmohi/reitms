<div class="my-4 print:hidden">
    <div class="stitle border-b">Report Approval Status</div>

    @if($task->isChecked() || $task->isApproved())
        <div class="frows gap-2">
            <div class="font-bold">Checked By</div>
            <x-ui.vline/>
            <div>{{ $task->checker->name }}, {{ $task->checker->designation }}</div>
        </div>
        @if($task->isApproved())
            <div class="frows gap-2">
                <div class="font-bold">Approved By</div>
                <x-ui.vline/>
                <div>{{ $task->approver->name }}, {{ $task->approver->designation }}</div>
            </div>
            @can('admin', cusr())
                <div class="mt-2 frowb gap-2">
                    <div></div>
                    <x-ui.awiretag
                        wireclick="resetTask"
                        icon="reset"
                        tag="Reset to Pending"
                        color="bg-red-300"
                    />
                </div>
            @endcan
        @else
            <div class="mt-2 frows gap-2">
                <x-ui.awiretag
                    wireclick="resetTask"
                    icon="cross"
                    tag="Reject"
                    color="bg-red-300"
                />
                <x-ui.awiretag
                    wireclick="approveTask"
                    icon="tick"
                    tag="Approve Done"
                    color="bg-green-300"
                />
            </div>
        @endif
    @else
        <div class="mt-2 frows gap-2">
            @if($task->isReporting())
                <x-ui.awiretag
                    wireclick="reportTask"
                    icon="tick"
                    tag="Reporting Done"
                    color="bg-green-300"
                />
            @else
                <x-ui.awiretag
                    wireclick="resetTask"
                    icon="cross"
                    tag="Reject"
                    color="bg-red-300"
                />
                <x-ui.awiretag
                    wireclick="checkTask"
                    icon="tick"
                    tag="Checking Done"
                    color="bg-green-300"
                />
            @endif
        </div>
    @endif
</div>
@if($task->isApproved())
    <div class="hidden print:block">
        <div class="mt-14 frowb gap-12">
            <div class="w-full fcols border-t">
                <div class="font-bold">Prepared By</div>
                <div>({{ $task->user->name }})</div>
                <div>{{ $task->user->designation }}</div>
                <div>Code {{ $task->user->code }}</div>
            </div>
            <div class="w-full fcols border-t">
                <div class="font-bold">Checked By</div>
                <div>({{ $task->checker->name }})</div>
                <div>{{ $task->checker->designation }}</div>
                <div>Code {{ $task->checker->code }}</div>
            </div>
            <div class="w-full fcols border-t">
                <div class="font-bold">Approved By</div>
                <div>({{ $task->approver->name }})</div>
                <div>{{ $task->approver->designation }}</div>
                <div>Code {{ $task->approver->code }}</div>
            </div>
        </div>
    </div>
@endif
