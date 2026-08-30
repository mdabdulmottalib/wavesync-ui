{{--
    Only verified facts are included here. aggregateRating and contactPoint
    were added once those numbers were independently confirmed by the site
    owner (same 4.9/5, 85+ reviews already shown on-page in testimonials.blade.php,
    and the same phone/email already public via the WhatsApp button and
    contact form). Do not add review/foundingDate/sameAs entries until they
    are independently confirmed too — see config/wavesync.php for the same
    TODO markers used in the footer (social handles specifically are still
    unverified).

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
        'description' => 'Wavesync designs and builds the websites, brand identities, search visibility, and automation systems that turn strangers into customers.',
        'founder' => [
            $at . 'type' => 'Person',
            'name' => config('wavesync.founder_name'),
        ],
        'contactPoint' => [
            $at . 'type' => 'ContactPoint',
            'contactType' => 'customer service',
            'telephone' => config('wavesync.phone'),
            'email' => config('wavesync.contact_email'),
        ],
        'aggregateRating' => [
            $at . 'type' => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '85',
            'bestRating' => '5',
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
