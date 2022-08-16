@extends('frontend.layouts.app')

@section('title')
    Make Payment
@endsection

@section('content')
    <div class="parent md:h-screen md:grid md:grid-cols-6">
        @include('frontend.includes.sidebar')
        <main class="main bg-white text-black md:col-span-5 p-10">
          <div class="ml-5">
            <div id="payment-div">
              <payment></payment>
            </div>
          </div>
        </main>
    </div>
@endsection
