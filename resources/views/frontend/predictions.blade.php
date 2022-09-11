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

<div id="football-pred">
    <Football/>
</div>
<section class="my-10 max-w-6xl mx-auto">
    <img src="/img/1xbet2.jpeg" class="w-full object-cover" alt="">
</section>

@endsection