@extends ('layouts.app')

@section ('title', 'About')

@section ('description', 'Wavesync is led by ' . config('wavesync.founder_name') . ' — ' . config('wavesync.founded_summary') . ' designing, building, and automating for clients around the world.')

@section ('content')
    <div>
        <x-about-page />
    </div>
@endsection
