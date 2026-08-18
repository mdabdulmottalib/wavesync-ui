@extends ('layouts.app')

@section ('title', 'Portfolio')

@section ('description', 'Real client work from Wavesync — websites and brand identities we\'ve designed and built.')

@section ('image', 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Biscayne-bay-prep.jpg')

@section ('content')
    <div>
        <x-portfolio-page :case-studies="$caseStudies" />
    </div>
@endsection
