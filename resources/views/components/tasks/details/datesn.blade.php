<div>
    <div class="frows gap-2">
        <div class="font-bold">তারিখ:</div>
        <div>
            {{ $task->created_at->format('d-m-Y') }}
        </div>
    </div>
    <div class="frows gap-2">
        <div class="font-bold">ক্রম নং:</div>
        <div>
            {{ $task->id }}
        </div>
    </div>
</div>
