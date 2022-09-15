@extends('frontend.layouts.app')

@section('title')
    Make Payment
@endsection

@section('content')
    <script>
        window.user = @json($user);
        window.country_code = @json($country_code);
        window.flutter_key = '{{ setting('fw_public_key') }}';
        window.paystack_key = '{{ setting('paystack_key') }}';
        window.mpesa_name = '{{ setting('mpesa_user_name') }}';
        window.mpesa_acct = '{{ setting('mpesa_bank_acct') }}';
        window.ng_bank_name = '{{ setting('ng_bank_name') }}';
        window.ng_bank_acct = '{{ setting('ng_bank_acct') }}';
        window.ng_bank_user = '{{ setting('ng_bank_user') }}';
        window.con_trans = '{{ setting('transfer_comfirm_number') }}';
        window.app_name = '{{ setting('app_name') }}';
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
