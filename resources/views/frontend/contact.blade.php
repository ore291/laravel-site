@extends('frontend.layouts.app')

@section('title')
    {{ 'Contact Us' }}
@endsection

@section('content')
    <div class="contact max-w-7xl mx-auto p-2 md:p-10">
        <div class="container w-full">
            <div class="flex justify-center">
                <div class="md:w-1/2 ">
                    <div class="section-title text-center ">
                        <h2 class="text-5xl font-extrabold uppercase">Get In Touch</h2>
                        <p>Send us a message by using the form below, and a team member will get back to you as soon as
                            possible.</p>
                    </div>
                </div>
            </div>

            <div class="w-full grid grid-cols-1 md:grid-cols-3 ">

                <div class="col-span-2 flex items-center justify-center min-h-screen  p-2">

                    <div class="w-full px-1 py-16 bg-white rounded-lg border shadow-2xl">
                        <h2 class="mb-4 text-xl antialiased font-semibold text-center text-black">Send Us a Message
                        </h2>
                        @if (Session::has('success'))
                            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                                role="alert">
                                <div class="flex">
                                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                                        </svg></div>
                                    <p>
                                        {{ Session::get('success') }}
                                    </p>
                                </div>
                            </div>
                        @endif
                        <form class="mx-8 space-y-8" method="POST" action="{{ route('frontend.contact.us.store') }}"
                            id="contactUSForm">
                            {{ csrf_field() }}
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black ring-0 !outline-none opacity-50 focus:border-blue-400"
                                        type="text" name="full_name" placeholder="Name" value="{{ old('full_name') }}" />
                                    @if ($errors->has('full_name'))
                                        <span class="text-red-500">{{ $errors->first('full_name') }}</span>
                                    @endif
                                </div>
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black outline-none opacity-50 focus:border-blue-400"
                                        type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
                                    @if ($errors->has('phone'))
                                        <span class="text-red-500">{{ $errors->first('phone') }}</span>
                                    @endif

                                </div>
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black outline-none opacity-50 focus:border-blue-400"
                                        type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                                    @if ($errors->has('email'))
                                        <span class="text-red-500">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                {{-- </div> <span class="text-xs text-red-600">Email field required</span> --}}
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black outline-none opacity-50 focus:border-blue-400"
                                        type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" />
                                    @if ($errors->has('subject'))
                                        <span class="text-red-500">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>




                            <div class="border-b border-black">
                                <textarea name="message"
                                    class="w-full p-6 text-sm border-none focus:ring-0 border-black rounded-lg outline-none opacity-50 focus:border-blue-400"
                                    name="message" rows="3">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-red-500">{{ $errors->first('message') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="block w-full px-2 py-4 mt-2 text-white bg-black rounded-full">Send
                                Form</button>
                        </form>

                    </div>
                </div>
                <div class="bg-black p-[30px] w-full rounded">
                    <div class="contact-information" style="background:#000;">
                        <div class="about-site">
                            <h6 style="color:#ee5253;">Site Name</h6>
                            <h5 class="text-white">{{ setting('app_name') }}</h5>
                        </div>
                        <ul class="info-list mt-0">
                            <div>
                                <h6 class="mt-0" style="color:#ee5253;">Address</h6>
                            </div>
                            <li style="border-bottom-color: red;">
                                <span class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <small class="text text-white">{{ setting('address') }}</small>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>

                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-phone text-white"></i>
                                </span>
                                <small class="text text-white">
                                    Calls &amp;WhatsApp:

                                    {{ setting('ng_whatsapp') }} (Nigeria), {{ setting('kenya_whatsapp') }} (Kenya)
                                </small>
                            </li>





                            <li>
                                <span class="icon">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <span class="text">
                                    {{ setting('email') }}
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fab fa-whatsapp" style="color:#090;"></i>
                                </span>
                                <small class="text">
                                    <a class="section-title2"
                                        href="https://api.whatsapp.com/send?phone={{ setting('ng_whatsapp') }}"
                                        style="color:#090;">Click here to contact us via WhatApp.</a>
                                </small>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fab fa-telegram" style="color:dodgerblue;"></i>
                                </span>
                                <small class="text text-white"><a href="{{ setting('telegram_url') }}"
                                        style="color:#fff;">{{ setting('telegram_url') }}</a></small>
                            </li>
                        </ul>
                        <ul class="info-list mt-0">
                            <div>
                                <h6 style="color:#ee5253; font-size:15px;">For advert and sponsorship please contact</h6>
                            </div>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <span class="text">
                                    {{ setting('email') }}
                                </span>
                            </li>
                        </ul>
                        <ul class="social-link">





                            <li>
                                <a href="{{ setting('twitter_url') }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ setting('instagram_url') }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ setting('linkedin_url') }}">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ setting('facebook_url') }}">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    @endsection
