@extends ('layouts.app')

@section ('title', 'About')

@section ('description', 'Wavesync is a founder-led digital studio — ' . config('wavesync.founded_summary') . ' designing, building, and automating for clients around the world.')

@section ('image', '/images/founder.jpg')

@section ('content')
    <div>
        <x-about-page />
    </div>
@endsection
