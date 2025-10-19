<div
    class="card group"
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 frowb group-hover:rounded-t-2xl">
        <a href="">
            <x-ui.h3 :title="$user->name"/>
        </a>
        <span
            @class([
                'px-2 py-1 text-xs rounded-full border',
                'bg-green-100 text-green-700' => $user->role == 'user',
                'bg-red-100 text-red-700' => $user->role == 'admin'
            ])
        >
            {{ ucfirst($user->role) }}
        </span>
    </div>

    <!-- Body -->
    <div class="relative px-4 py-3 frowb text-sm">
        <div class="w-full fcols gap-2">
            <p><strong>Designation:</strong> {{ $user->designation }}</p>
            <p><strong>Code:</strong> {{ $user->code }}</p>
            <p><strong>Phone:</strong> {{ $user->phone_number }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Status:</strong> {{ $user->status }}</p>
        </div>
        <img class="w-32 rounded-full" src="{{ $user->image }}" alt="">
    </div>

    <!-- Footer / Actions -->
    @can('admin', cusr())
        <div
            class="p-1 adbr rounded-2xl hidden group-hover:flex frowe gap-2 bg-gray-200"
        >
            <x-ui.ahref
                :href="route('users.edit', $user)"
                icon="edit"
            />
        </div>
    @endcan
</div>
