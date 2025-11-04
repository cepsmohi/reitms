@can('admin', cusr())
    <x-ui.sqrbtn
        condi="1"
        header="Users"
        footer="Control"
        :color="cssbg('red')"
        icon="users.png"
        :href="route('users')"
    />
@endcan
