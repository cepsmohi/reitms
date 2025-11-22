<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{ isDarkMode: $persist('') }"
    :class="isDarkMode ? 'dark' : 'light'"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $_ENV['APP_NAME'] }}</title>
    <link type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}" rel="icon"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bodycss @if(isset($bg) && $bg == 'yes') overflow-hidden @endif">
@if(isset($bg) && $bg == 'yes')
    <x-ui.bg/>
@endif
<div>
    {{ $slot }}
</div>
@livewireScripts
<x-ui.toast/>
<x-ui.scrptis/>
</body>
</html>
