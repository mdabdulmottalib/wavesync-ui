<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="/favicon.ico" sizes="any" />
    {{-- TODO(content): add favicon.svg and apple-touch-icon.png (180x180) as real brand assets, then restore these two tags --}}
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css" />

    @fonts

    @vite (['resources/css/app.css', 'resources/js/app.js'])

    @include ('partials.seo-meta')
    @include ('partials.schema-organization')
    @stack ('schema')

    @stack ('styles')
</head>
<body class="font-sans antialiased">
    <x-site-header />

    @yield ('content')

    @include ('layouts.footer')

    <x-whatsapp-button />

    <x-contact-form-submitting />

    @stack ('scripts')
</body>
</html>
