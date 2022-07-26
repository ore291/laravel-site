<footer class="bg-black text-white relative ">
    <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">

        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-4 justify-between gap-y-3">
                <div class="md:col-span-2 px-2  md:px-14">
                    <div class="about-widget">
                        <a class="logo" href="/">
                            <img class="object-contain max-w-[200px]" src="{{ asset(setting('site_logo')) }}" alt="{{ app_name() }}">
                        </a>
                        <p class="text-[#ccc] text-[16px] leading-[26px] my-2 font-semibold uppercase">
                            {{ setting('app_name') }} YOUR NO 1 GUIDE TO FOOTBALL BETTING AND PREDICTION.
                        </p>
                        <div class="social">
                            <ul class="list-none">
                                <li class="list-none flex space-x-4 items-center ">
                                    <a href="{{ setting('facebook_url') }}" class="social-icon">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="{{ setting('twitter_url') }}" class="social-icon">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="{{ setting('instagram_url') }}" class="social-icon">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="{{ setting('linkedin_url') }}" class="social-icon">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="support list-none my-5">
                            <ul style="display:block;">
                                <li>
                                    <span class="icon">

                                    </span>
                                    <span class="text flex flex-col space-y-2">
                                        <span class="footer-mail ml-2">Mail Us</span>
                                        <span
                                            class="descr ml-2 opacity-30 text-sm text-[#ddd]">{{ setting('email') }}</span>
                                    </span>
                                </li>
                                <br>
                                <li>
                                    <span class="icon">

                                    </span>
                                    <span class="text flex flex-col space-y-2">
                                        <span class="footer-mail ml-2">Get In Touch</span>
                                        <span class="descr text-white opacity-30 text-sm ml-2">
                                            Calls &amp; WhatsApp:

                                            {{ setting('ng_whatsapp') }} (Nigeria), {{ setting('kenya_whatsapp') }}
                                            (Kenya) <br>
                                            <i class="fab fa-whatsapp" style="color:#32CD32;"></i>
                                            <a class="section-title2"
                                                href="https://api.whatsapp.com/send?phone={{ setting('ng_whatsapp') }}"
                                                style="color:#32CD32;">Click here to contact us via
                                                WhatApp(Nigeria).</a>
                                            <br>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="useful-links">
                        <h3 class="text-lg text-[#ddd] uppercase mb-[15px] font-medium">Useful links</h3>
                        <ul class="list-none footer-ul">
                            @guest
                                <li><a href="/register" class="footer-links" id="session_out_register">Register</a></li>
                            @endguest
                            @auth
                                <li><a href="/dashboard" class="footer-links" id="session_in_account">My Account</a></li>
                            @endauth
                            <li><a href="/pricing" class="footer-links">Pricing Plan</a></li>
                            <li><a href="/how-to-pay" class="footer-links">How to Pay</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="useful-links">
                        <h3 class="text-lg text-[#ddd] uppercase mb-[15px] font-medium">Support Center</h3>
                        <ul class="list-none footer-ul">

                            <li><a href="#" class="footer-links">Mail Update</a></li>
                            <li><a href="#" class="footer-links">FAQs</a></li>
                            <li><a href="/contact-us" class="footer-links">Contact Us</a></li>
                            <li><a href="#" class="footer-links">Terms and Conditions</a></li>
                            <li><a href="#" class="footer-links">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container bg-black text-white mt-[60px] pb-20">
                <div class="flex items-center justify-center flex-col space-y-5">
                    <h6 class="payment-method-title text-center text-sm font-semibold my-2 text-[#ddd] uppercase">

                        Payment we accept

                    </h6>
                    <div class="all-method">
                        <div class="">
                            <img src="/img/Pay-with-22.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notes">
            <div class="container">
                <div class="flex justify-center">
                    <div class="w-5/6">
                        <center>
                            <div class="plusr_lab"
                                style="border:2px solid red;border-radius: 50px;width:40px;color:red;">
                                18+
                            </div>
                        </center>

                        <div class="plusr_labws text-center">
                            Players must be 18 or older to register or play at Sportverified.<br> Please note that
                            gambles may have negative effects if not made with temperance.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-footer p-3">
            <div class="container">
                <div class="flex flex-col md:flex-row space-y-2 items-center justify-between">
                    <div class="md:flex block align-center px-2">
                        <p class="copyright-text">
                            <a href="/">{{ setting('app_name') }}</a> ©
                            <script>
                                var d = new Date();
                                var n = d.getFullYear();
                                document.write(n)
                            </script>. PRIVACY POLICY
                        </p>
                    </div>
                    <div class="text-right col-md-6 col-xl-4 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                        <p class="copyright-text">
                            {!! setting('footer_text') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-xs font-medium text-center mt-1">
            @if (setting('show_copyright'))
                @lang('Copyright') &copy; {{ date('Y') }}
            @endif {{ setting('app_name') }}, 
        </p>

    </div>
</footer>
