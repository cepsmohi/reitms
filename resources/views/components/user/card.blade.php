<a
    class="card buttonhover glass block h-52 group"
    href="{{ route('users.edit', $user) }}"
>
    <!-- Header -->
    <div class=" px-4 py-3 border-b border-gray-100 frowb group-hover:rounded-t-2xl">
        <div>
            <x-ui.h3 :title="$user->name"/>
        </div>
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
            <p class="truncate"><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Status:</strong> {{ $user->status }}</p>
        </div>
        <img class="w-32 rounded-full" src="{{ $user->image }}" alt="">
    </div>
</a>
