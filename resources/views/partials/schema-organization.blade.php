{{--
    Only verified facts are included here. Do not add aggregateRating, review,
    foundingDate, or sameAs entries until they are independently confirmed —
    see config/wavesync.php for the same TODO markers used in the footer.

    Note: JSON-LD keys are built with $at.'context' etc. rather than written
    literally, because Blade's compiler matches '@context' as a directive
    even inside a plain PHP string and silently corrupts it.
--}}
@php
    $at = '@';

    $organizationLd = [
        $at . 'type' => 'Organization',
        $at . 'id' => config('app.url') . '/#organization',
        'name' => config('app.name'),
        'url' => config('app.url'),
        'logo' => asset('images/logo.svg'),
        'founder' => [
            $at . 'type' => 'Person',
            'name' => config('wavesync.founder_name'),
        ],
    ];

    $websiteLd = [
        $at . 'type' => 'WebSite',
        $at . 'id' => config('app.url') . '/#website',
        'name' => config('app.name'),
        'url' => config('app.url'),
        'publisher' => [
            $at . 'id' => config('app.url') . '/#organization',
        ],
    ];

    $graphLd = [
        $at . 'context' => 'https://schema.org',
        $at . 'graph' => [$organizationLd, $websiteLd],
    ];
@endphp

<script type="application/ld+json">
{!! json_encode($graphLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
