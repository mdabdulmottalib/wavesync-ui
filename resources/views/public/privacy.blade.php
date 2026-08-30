@extends ('layouts.app')

@section ('title', 'Privacy Policy')

@section ('description', 'What Wavesync collects through the contact form, how it\'s used, and what happens to it — no third-party trackers, no data sold or shared.')

@section ('content')
    <div>
        <x-privacy-page />
    </div>
@endsection

@php
    $at = '@';

    $privacyBreadcrumbLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'BreadcrumbList',
        'itemListElement' => [
            [$at . 'type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
            [$at . 'type' => 'ListItem', 'position' => 2, 'name' => 'Privacy Policy', 'item' => route('privacy')],
        ],
    ];
@endphp

@push ('schema')
    <script type="application/ld+json">
        {!! json_encode($privacyBreadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
