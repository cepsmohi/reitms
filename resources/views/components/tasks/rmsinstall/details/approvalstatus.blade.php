<div class="my-4">
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
            <div class="mt-2 frowb gap-2">
                <x-ui.awiretag
                    wireclick="downloadReport"
                    icon="download"
                    tag="Download PDF"
                    color="bg-green-300"
                />
                <x-ui.awiretag
                    wireclick="resetTask"
                    icon="reset"
                    tag="Reset to Pending"
                    color="bg-red-300"
                />
            </div>
        @else
            <div class="mt-2 frows gap-2">
                <x-ui.awiretag
                    wireclick="resetTask"
                    icon="reset"
                    tag="Reset to Pending"
                    color="bg-red-300"
                />
                <x-ui.awiretag
                    wireclick="approveTask"
                    icon="tickcircle"
                    tag="Approve"
                    color="bg-green-300"
                />
            </div>
        @endif
    @else
        <div class="mt-2 frows gap-2">
            <x-ui.awiretag
                wireclick="checkTask"
                icon="tickcircle"
                tag="Check Done"
                color="bg-green-300"
            />
        </div>
    @endif
</div>
