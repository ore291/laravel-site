@extends('frontend.layouts.app')

@section('title')
    Make Payment
@endsection

@section('content')
    <script>
        window.user = @json($user);
        localStorage.setItem("currency", "NGN");
    </script>
    <div class="parent md:grid md:grid-cols-6">
        @include('frontend.includes.sidebar')
        <main class="main bg-white text-black md:col-span-5 p-1 md:p-10">
            <div class="md:ml-5">

                <div id="payment-div">
                    <payment ></payment>
                </div>
            </div>
        </main>
    </div>
@endsection
