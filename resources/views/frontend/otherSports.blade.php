@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

<script>
    window.sport = @json($sport);
</script>

<div id="other-sports-pred">
    <Sports/>
</div>
<section class="my-10 max-w-6xl mx-auto">
    <img src="/img/1xbet2.jpeg" class="w-full object-cover" alt="">
</section>

@endsection