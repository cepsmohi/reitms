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
    <link rel="stylesheet" href="{{ asset('leaflet/leaflet.css') }}">
    <link href="{{ asset('leaflet/leaflet.draw.css') }}?{{ filemtime(public_path('leaflet/leaflet.draw.css')) }}"
          rel="stylesheet"
    />
    <link href="{{ asset('css/boxzoom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ruler.css') }}" rel="stylesheet">
    <script src="{{ asset('leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('leaflet/leaflet.draw.js') }}"></script>
    <script src="{{ asset('leaflet/group-layer-control.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
<div>
    {{ $slot }}
</div>
@livewireScripts
<x-ui.toast/>
</body>
</html>
