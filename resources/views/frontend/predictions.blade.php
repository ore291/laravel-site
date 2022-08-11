@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')

<div id="football-pred">
    <Football/>
</div>
<section class="my-10 max-w-6xl mx-auto">
    <img src="/img/1xbet2.jpeg" class="w-full object-cover" alt="">
</section>

@endsection