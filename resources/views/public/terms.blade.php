@extends ('layouts.app')

@section ('title', 'Terms of Service')

@section ('description', 'The terms behind using wavesync.agency and working with Wavesync — scoping, ownership of deliverables, payment, and liability.')

@section ('content')
    <div>
        <x-terms-page />
    </div>
@endsection

@php
    $at = '@';

    $termsBreadcrumbLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'BreadcrumbList',
        'itemListElement' => [
            [$at . 'type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
            [$at . 'type' => 'ListItem', 'position' => 2, 'name' => 'Terms of Service', 'item' => route('terms')],
        ],
    ];
@endphp

@push ('schema')
    <script type="application/ld+json">
        {!! json_encode($termsBreadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
