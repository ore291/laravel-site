@extends('frontend.layouts.app')

@section('title')
    {{ setting('app_name') }}
@endsection

@section('content')
    <script>
        window.sport = @json($sport);
    </script>

    <div id="other-sports-pred">
        <Sports />
    </div>
    @if (setting('other_sports_ad') !== null)
        <section class="my-5 md:my-10 p-1 lg:p-0 max-w-6xl mx-auto">
            <img src="/{{ setting('other_sports_ad') }}" class="w-full object-cover" alt="">
        </section>
    @endif
@endsection
