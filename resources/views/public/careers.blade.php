@extends ('layouts.app')

@section ('title', 'Careers')

@section ('description', 'Work with Wavesync — a small, remote-first studio that brings in specialists project by project for web design, SEO, and automation work.')

@section ('content')
    <div>
        <x-careers-page />
    </div>
@endsection

@php
    $at = '@';

    $careersBreadcrumbLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'type' => 'BreadcrumbList',
        'itemListElement' => [
            [$at . 'type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
            [$at . 'type' => 'ListItem', 'position' => 2, 'name' => 'Careers', 'item' => route('careers')],
        ],
    ];
@endphp

@push ('schema')
    <script type="application/ld+json">
        {!! json_encode($careersBreadcrumbLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush
