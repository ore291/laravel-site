@extends('frontend.layouts.app')

@section('title')
    Make Payment
@endsection

@section('content')
    <div class="parent md:h-screen md:grid md:grid-cols-6">
        @include('frontend.includes.sidebar')
        <main class="main bg-white text-black md:col-span-5 p-10">
          <div class="ml-10">
             <p>ghana payment</p>
            <h3>IP: {{ $location->ip }}</h3>
            <h3>Country Name: {{ $location->countryName }}</h3>
            <h3>Country Code: {{ $location->countryCode }}</h3>
            <h3>Region Code: {{ $location->regionCode }}</h3>
            <h3>Region Name: {{ $location->regionName }}</h3>
            <h3>City Name: {{ $location->cityName }}</h3>
            <h3>Zipcode: {{ $location->zipCode }}</h3>
            <h3>Latitude: {{ $location->latitude }}</h3>
            <h3>Longitude: {{ $location->longitude }}</h3>
          </div>
        </main>
    </div>
@endsection
