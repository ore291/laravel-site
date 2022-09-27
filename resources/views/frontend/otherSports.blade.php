@extends('frontend.layouts.app')

@section('title')
    {{ $sport['sport_name'] . " " . "Predictions"}}
@endsection

@section('content')
    <script>
        window.sport = @json($sport);
    </script>

    <div id="other-sports-pred">
        <Sports />
    </div>
    @if (setting('other_sports_ad') !== null)
        <section class="my-5 md:my-12 p-1 lg:p-0 max-w-6xl mx-auto">
            <a href={{ setting('other_sports_ad_link') }} class="appearance-none ">
                <img src="/{{ setting('other_sports_ad') }}" class="w-full object-cover" alt="">
            </a>
        </section>
    @endif
@endsection
