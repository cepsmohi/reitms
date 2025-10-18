<div class="mt-4">
    <div class="stitle text-grad">Files</div>
    <div class="frow flex-wrap gap-2">
        @foreach($customer->files as $file)
            <x-file.card.forcustomer :$file/>
        @endforeach
    </div>
</div>
