@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
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
                        <form class="mx-8 space-y-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black ring-0 !outline-none opacity-50 focus:border-blue-400"
                                        placeholder="Full Name" />
                                </div>
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black outline-none opacity-50 focus:border-blue-400"
                                        placeholder="Your Number" />

                                </div>
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black outline-none opacity-50 focus:border-blue-400"
                                        placeholder="Your Email" />
                                </div>
                                {{-- </div> <span class="text-xs text-red-600">Email field required</span> --}}
                                <div class="border-b border-black">
                                    <input type="text"
                                        class="w-full p-2 text-sm border-none focus:ring-0 border-black outline-none opacity-50 focus:border-blue-400"
                                        placeholder="Subject" />
                                </div>
                            </div>




                            <div class="border-b border-black">
                                <textarea name="message"
                                    class="w-full p-6 text-sm border-none focus:ring-0 border-black rounded-lg outline-none opacity-50 focus:border-blue-400"
                                    placeholder="Enter your message"></textarea>
                            </div>

                            <button class="block w-full px-2 py-4 mt-2 text-white bg-black rounded-full">Send
                                Form</button>
                        </form>

                    </div>
                </div>
                <div class="bg-black p-[30px] w-full rounded">
                    <div class="contact-information" style="background:#000;">
                        <div class="about-site">
                            <h6 style="color:#ee5253;">Site Name</h6>
                            <h5 class="text-white">Sportverified.</h5>
                        </div>
                        <ul class="info-list mt-0">
                            <div>
                                <h6 class="mt-0" style="color:#ee5253;">Address</h6>
                            </div>
                            <li style="border-bottom-color: red;">
                                <span class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <small class="text text-white">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx.</small>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <small class="text text-white">
                                    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.
                                </small>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-phone text-white"></i>
                                </span>
                                <small class="text text-white">
                                    Calls &amp;WhatsApp:

                                    0812 483 9413 (Nigeria), 0703200262 (Kenya)
                                </small>
                            </li>





                            <li>
                                <span class="icon">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <span class="text">
                                    contact@sportverified.com
                                </span>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fab fa-whatsapp" style="color:#090;"></i>
                                </span>
                                <small class="text">
                                    <a class="section-title2" href="https://api.whatsapp.com/send?phone=2348124839413"
                                        style="color:#090;">Click here to contact us via WhatApp.</a>
                                </small>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fab fa-telegram" style="color:dodgerblue;"></i>
                                </span>
                                <small class="text text-white"><a href="https://t.me/sportverified"
                                        style="color:#fff;">https://t.me/sportverified</a></small>
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
                                    advert@sportverified.com
                                </span>
                            </li>
                        </ul>
                        <ul class="social-link">





                            <li>
                                <a href="#https://twitter.com/">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#https://www.instagram.com//">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#https://www.linkedin.com/in//">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#https://www.youtube.com/channel/">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    @endsection
