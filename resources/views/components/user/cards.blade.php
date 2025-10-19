<div class="mt-4 frow flex-wrap gap-6">
    @foreach($users as $user)
        <x-user.card :$user/>
    @endforeach
</div>
