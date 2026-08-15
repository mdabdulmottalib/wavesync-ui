@extends ('layouts.app')

@section ('title', $service['title'])

@section ('description', $service['desc'])

@section ('content')
    <div>
        <x-service-page :service="$service" :other-services="$otherServices" :case-studies="$relatedCaseStudies" />
    </div>
@endsection
