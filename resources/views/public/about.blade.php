@extends ('layouts.app')

@section ('title', 'About')

@section ('description', 'Wavesync is a small, hands-on digital studio — ' . config('wavesync.founded_summary') . ' designing websites, building brands, and automating growth for clients around the world.')

@section ('image', '/images/founder.jpg')

@section ('content')
    <div>
        <x-about-page />
    </div>
@endsection
