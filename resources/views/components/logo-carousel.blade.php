@php
    $clients = [
        ['name' => 'Biscayne Bay Preparatory Academy', 'logo' => '/clients/bbpa.svg'],
        ['name' => 'Digitowered', 'logo' => '/clients/digitowered.svg'],
        ['name' => 'Dope Queens', 'logo' => '/clients/dopequeens.svg'],
        ['name' => 'Dupuy Insurance', 'logo' => '/clients/dupuyinsurance.svg'],
        ['name' => 'Global Workplace', 'logo' => '/clients/globalworkplace.svg'],
        ['name' => 'Hoque Consulting', 'logo' => '/clients/hoquecolsunting.svg'],
        ['name' => 'Karmic', 'logo' => '/clients/karmic.svg'],
        ['name' => 'LeafFilter', 'logo' => '/clients/leaffilter.svg'],
        ['name' => 'LearnFX Trading', 'logo' => '/clients/learnfxtrading.svg'],
        ['name' => 'Legacy Bible', 'logo' => '/clients/legacybible.svg'],
        ['name' => 'Legacy Builder Church', 'logo' => '/clients/legecybuilderchurch.svg'],
        ['name' => 'Legacy Builder Church Leadership', 'logo' => '/clients/legecybuilderchurchleadership.svg'],
        ['name' => 'Ntombi', 'logo' => '/clients/ntombi.svg'],
        ['name' => 'Parrot Mom', 'logo' => '/clients/parrotmom.svg'],
        ['name' => 'Pretty Corner Shop', 'logo' => '/clients/prettycornershop.svg'],
        ['name' => 'Rapid Signup', 'logo' => '/clients/rapidsignup.svg'],
        ['name' => 'Sabor & Style', 'logo' => '/clients/saborandstyle.svg'],
        ['name' => 'TechPeak Digital', 'logo' => '/clients/techpeakdigital.svg'],
    ];

    // Two rows, split from the same list, scrolling in opposite directions
    // (the second carries reverse="true", which the CSS below keys off of).
    $half = (int) ceil(count($clients) / 2);
    $rowA = array_slice($clients, 0, $half);
    $rowB = array_slice($clients, $half);

    // Exactly 2 copies per row. The CSS keyframe (--animate-scroll in
    // app.css) translates the track by exactly -50%, which only produces a
    // seamless loop when the track is precisely two identical halves back
    // to back — 3+ copies breaks that math and causes a visible gap/jump
    // at the wrap.
    $rowALooped = collect($rowA)->concat($rowA);
    $rowBLooped = collect($rowB)->concat($rowB);
@endphp

<div class="flex flex-col gap-4 sm:gap-6 md:gap-8">
    <div
        class="carousel group relative w-full overflow-hidden mask-[linear-gradient(to_right,transparent,#000_10%_90%,transparent)] sm:w-[95%] md:w-full"
    >
        <div
            class="track flex w-max will-change-transform animate-scroll group-[[reverse=true]]:[animation-direction:reverse]"
        >
            @foreach ($rowALooped as $client)
                <div
                    class="item group/item w-24 h-12 sm:w-32 sm:h-14 md:h-16 shrink-0 rounded-lg mr-10 sm:mr-14 md:mr-24 overflow-hidden px-2"
                >
                    <img
                        src="{{ $client['logo'] }}"
                        alt="{{ $client['name'] }}"
                        class="w-full h-full object-contain block"
                    />
                </div>
            @endforeach
        </div>
    </div>

    <div
        class="carousel group relative w-full overflow-hidden mask-[linear-gradient(to_right,transparent,#000_10%_90%,transparent)] sm:w-[95%] md:w-full"
        reverse="true"
    >
        <div
            class="track flex w-max will-change-transform animate-scroll group-[[reverse=true]]:[animation-direction:reverse]"
        >
            @foreach ($rowBLooped as $client)
                <div
                    class="item group/item w-24 h-12 sm:w-32 sm:h-14 md:h-16 shrink-0 rounded-lg mr-10 sm:mr-14 md:mr-24 overflow-hidden px-2"
                >
                    <img
                        src="{{ $client['logo'] }}"
                        alt="{{ $client['name'] }}"
                        class="w-full h-full object-contain block"
                    />
                </div>
            @endforeach
        </div>
    </div>
</div>
