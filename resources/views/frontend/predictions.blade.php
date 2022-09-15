@extends('frontend.layouts.app')

@section('title')
{{setting('app_name')  }}
@endsection

@section('content')

<script>
    window.user = @json($user);
    window.subs = @json($subs);
    window.cats = @json($sport_categories);

  
 
</script>

<div id="football-pred" class="mb-5">
    <Football/>
</div>

@if (setting('football_ad') !== null)
<section class="my-5 md:my-10 p-1 lg:p-0 max-w-6xl mx-auto">
    <img src="/{{ setting('football_ad') }}" class="w-full object-cover" alt="">
</section>
@endif

@endsection