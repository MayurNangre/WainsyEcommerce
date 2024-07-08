{{-- <section class="bg-white border-top mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('terms') }}">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Terms & conditions') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('returnpolicy') }}">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Return Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('supportpolicy') }}">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Support Policy') }}</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left border-right text-center p-4 d-block" href="{{ route('privacypolicy') }}">
                    <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                    <h4 class="h6">{{ translate('Privacy Policy') }}</h4>
                </a>
            </div>
        </div>
    </div>
</section> --}}


<!-- Footer : start -->


<footer class="bg-dark text-center text-white" style="border-bottom: 1px solid rgba(255, 255, 255, 0.222)">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-2">
                            <input type="email" id="form5Example29" class="form-control" value="Email Address" />
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-danger mb-2">
                            Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->
    </div>
    <!-- Grid container -->
</footer>

<!-- Footer -->
<footer class="text-lg-start bg-dark text-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 flex-wrap"
        style="border-bottom: 1px solid rgba(255, 255, 255, 0.222)">
        <!-- Left -->
        <div class="d-lg-block text-light d-flex align-items-center justify-content-center"
            style="margin-left: 60px; padding: 0px;">
            <h6>Get connected with us on social networks:</h6>
        </div>
        <!-- Left -->


        <div>

            @if (get_setting('show_social_links'))
                <ul class="list-inline my-3 my-md-0 social colored text-center">
                    @if (get_setting('facebook_link') != null)
                        <li class="list-inline-item">
                            <a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook"><i
                                    class="lab la-facebook-f"></i></a>
                        </li>
                    @endif
                    @if (get_setting('twitter_link') != null)
                        <li class="list-inline-item">
                            <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter"><i
                                    class="lab la-twitter"></i></a>
                        </li>
                    @endif
                    @if (get_setting('instagram_link') != null)
                        <li class="list-inline-item">
                            <a href="{{ get_setting('instagram_link') }}" target="_blank" class="instagram"><i
                                    class="lab la-instagram"></i></a>
                        </li>
                    @endif
                    @if (get_setting('youtube_link') != null)
                        <li class="list-inline-item">
                            <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i
                                    class="lab la-youtube"></i></a>
                        </li>
                    @endif
                    @if (get_setting('linkedin_link') != null)
                        <li class="list-inline-item">
                            <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i
                                    class="lab la-linkedin-in"></i></a>
                        </li>
                    @endif
                    @if (get_setting('linkedin_link') != null)
                        <li class="list-inline-item">
                            <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i
                                    class="fa-brands fa-discord"></i></a>
                        </li>
                    @endif
                </ul>
            @endif

        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="fs-18 text-light text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        <i class="fas fa-gem me-3"></i>Siraom Pvt Ltd.
                    </h6>

                    <h6 class="text-light text-light">
                        Wainsy is an Indian origin multi-vendor e-commerce platform. Siraom Pvt Ltd is the mother
                        company of WAINSY and the company was incorporated on 23rd Dec 2020. The idea behind to open
                        this platform was to give e-commerce access to all the Indian Artists, Writers, New formed
                        brands. The main aim of this platform is to grant e-commerce excess to all Indian individual
                        irrespective of their popularity, budget or brand size. Its an OPEN FOR ALL, zero budget e-com
                        platform, which provides its services without any upfront.
                    </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                {{-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="fs-18 text-light text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
              Products
            </h6>
            <div class="mb-4 text-light">
                <h6>
                  <a href="#!" class="text-reset">Angular</a>
                </h6>
            </div> 
            <div class="mb-4 text-light">
                <h6>
                  <a href="#!" class="text-reset">React</a>
                </h6>
            </div>
            <div class="mb-4 text-light">
                <h6>
                  <a href="#!" class="text-reset">Vue</a>
                </h6>
            </div>
            <div class="mb-4 text-light">
                <h6>
                  <a href="#!" class="text-reset">Laravel</a>
                </h6>
            </div>
        
          </div> --}}
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-4 col-xl-4 mx-auto mb-4 text-center">
                    <!-- Links -->
                    <h6 class="fs-18 text-light text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        CONSUMER POLICY
                    </h6>


                    <div class="container">
                        <div class="row">
                            <div class="d-flex align-items-center text-reset text-center p-1 mb-2 col ">
                                <a href="{{ route('terms') }}"
                                    class="d-flex align-items-center justify-content-center text-reset">
                                    <i class="la la-file-text la-2x p-1 me-2 text-primary"
                                        style="border: 0.5px solid rgba(255, 255, 255, 0.111)"></i>
                                    <h6 class=" text-decoration-none m-0" style="padding-left:5px; color: white">
                                        {{ translate('Terms & conditions') }}</h6>
                                </a>
                            </div>

                            <div class="d-flex align-items-center text-reset text-center p-1 mb-2 col">
                                <a class="d-flex align-items-center justify-content-center text-reset"
                                    href="{{ route('returnpolicy') }}">
                                    <i class="la la-mail-reply la-2x p-1 me-2 text-primary"
                                        style="border: 0.5px solid rgba(255, 255, 255, 0.111)"></i>
                                    <h6 class=" text-decoration-none m-0" style="padding-left:5px; color: white">
                                        {{ translate('Return Policy') }}</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row ">

                            <div class="d-flex align-items-center text-reset text-center p-1 mb-2 col ">
                                <a class="d-flex align-items-center justify-content-center text-reset"
                                    href="{{ route('supportpolicy') }}">
                                    <i class="la la-support la-2x p-1 me-2 text-primary"
                                        style="border: 0.5px solid rgba(255, 255, 255, 0.111)"></i>
                                    <h6 class=" text-decoration-none m-0" style="padding-left:5px; color: white">
                                        {{ translate('Support Policy') }}</h6>
                                </a>
                            </div>

                            <div class="d-flex align-items-center text-reset text-center p-1 mb-2 col ">
                                <a class="d-flex align-items-center justify-content-center text-reset"
                                    href="{{ route('privacypolicy') }}">
                                    <i class="las la-exclamation-circle la-2x p-1 me-2 text-primary"
                                        style="border: 0.5px solid rgba(255, 255, 255, 0.111)"></i>
                                    <h6 class=" text-decoration-none m-0" style="padding-left:5px; color: white">
                                        {{ translate('Privacy Policy') }}</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row ">

                            <div class="d-flex align-items-center text-reset text-center p-1 mb-2 col ">
                                <a class="d-flex align-items-center justify-content-center text-reset"
                                    href="{{ route('sellerpolicy') }}">
                                    <i class="la la-mail-reply la-2x p-1 me-2 text-primary"
                                        style="border: 0.5px solid rgba(255, 255, 255, 0.111)"></i>
                                    <h6 class=" text-decoration-none m-0" style="padding-left:5px; color: white">
                                        {{ translate('Seller Policy') }}</h6>
                                </a>
                            </div>

                            <div class="d-flex align-items-center text-reset text-center p-1 col">
                                <a class="d-flex align-items-center justify-content-center text-reset"
                                    href="{{ route('returnpolicy') }}">
                                    <i class="la la-mail-reply la-2x p-1 me-2 text-primary"
                                        style="border: 0.5px solid rgba(255, 255, 255, 0.111)"></i>
                                    <h6 class=" text-decoration-none m-0" style="padding-left:5px; color: white">
                                        {{ translate('Delivery Policy') }}</h6>
                                </a>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <div class="text-center text-md-left">
                        <h4 class="fs-18 text-light text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            {{ translate('Contact Info') }}
                        </h4>
                        <ul class="list-unstyled text-light">
                            <li class="mb-2 text-light">
                                <h6 class="d-block text-light opacity-30 p-0 m-0"><i
                                        class="fa-solid fa-house p-2"></i>{{ translate('Address') }}:</h6>
                                <span class="d-block text-light opacity-70 text-reset"
                                    style="font-size: 14px;">{{ get_setting('contact_address', null, App::getLocale()) }}</span>
                            </li>
                            @if (get_setting('contact_phone') != null)
                                <li class="mb-2 text-light">
                                    <h6 class="d-block text-light opacity-30"><i
                                            class="fa-solid fa-phone p-2"></i>{{ translate('Phone') }}: <br> <span
                                            class="text-light">+ 01 234 567 88</span></h6>
                                    <span class="d-block text-light opacity-70"
                                        style="font-size: 14px;">{{ get_setting('contact_phone') }}</span>
                                </li>
                            @endif
                            <li class="mb-2 text-light">
                                <h6 class="d-block text-light opacity-30 p-0 m-0"><i
                                        class="fa-solid fa-envelope p-2"></i>{{ translate('Email') }}:</h6>
                                <span class="d-block text-light opacity-70" style="font-size: 14px;">
                                    <a href="mailto:{{ get_setting('contact_email') }}"
                                        class="text-reset m-0">{{ get_setting('contact_email') }}</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-2 mx-auto mb-md-0 mb-4">
                    <div class="text-center text-md-left mt-0">
                        <h6 class="fs-18 text-light text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            {{ translate('My Account') }}
                        </h6>
                        <ul class="list-unstyled">
                            @if (Auth::check())
                                <li class="mb-2">
                                    <a class="opacity-50 hov-opacity-100 text-reset text-light"
                                        href="{{ route('logout') }}">
                                        <h6>{{ translate('Logout') }}</h6>
                                    </a>
                                </li>
                            @else
                                <li class="mb-2 text-light">
                                    <a class="opacity-50 hov-opacity-100 text-reset"
                                        href="{{ route('user.login') }}">
                                        <h6>{{ translate('Login') }}</h6>
                                    </a>
                                </li>
                            @endif
                            <li class="mb-2 text-light">
                                <a class="opacity-50 hov-opacity-100 text-reset"
                                    href="{{ route('purchase_history.index') }}">
                                    <h6>{{ translate('Order History') }}</h6>
                                </a>
                            </li>
                            <li class="mb-2 text-light">
                                <a class="opacity-50 hov-opacity-100 text-reset"
                                    href="{{ route('wishlists.index') }}">
                                    <h6>{{ translate('My Wishlist') }}</h6>
                                </a>
                            </li>
                            <li class="mb-2 text-light">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('orders.track') }}">
                                    <h6>{{ translate('Track Order') }}</h6>
                                </a>
                            </li>
                            @if (addon_is_activated('affiliate_system'))
                                <li class="mb-2 text-light">
                                    <a class="opacity-50 hov-opacity-100 text-light"
                                        href="{{ route('affiliate.apply') }}">
                                        <h6>{{ translate('Be an affiliate partner') }}</h6>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    @if (get_setting('vendor_system_activation') == 1)
                        <div class="text-center text-md-left mt-2">
                            <h4 class="fs-13 text-light text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                                {{ translate('Be a Seller') }}
                            </h4>
                            <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                                {{ translate('Apply Now') }}
                            </a>
                        </div>
                    @endif
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center text-light p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Wainsy.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- footer : end  -->


{{-- ------------------------------------------------------------------------------------------------------ --}}


{{-- <section class="bg-dark py-5 text-light footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-xl-4 text-center text-md-left">
                <div class="mt-4">
                    <a href="{{ route('home') }}" class="d-block">
                        @if (get_setting('footer_logo') != null)
                            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}" height="44">
                        @else
                            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
                        @endif
                    </a>
                    <div class="my-3">
                        {!! get_setting('about_us_description',null,App::getLocale()) !!}
                    </div>
                    <div class="d-inline-block d-md-block mb-4">
                        <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                            @csrf
                            <div class="form-group mb-0">
                                <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                {{ translate('Subscribe') }}
                            </button>
                        </form>
                    </div>
                    <div class="w-300px mw-100 mx-auto mx-md-0">
                        @if (get_setting('play_store_link') != null)
                            <a href="{{ get_setting('play_store_link') }}" target="_blank" class="d-inline-block mr-3 ml-0">
                                <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-40px">
                            </a>
                        @endif
                        @if (get_setting('app_store_link') != null)
                            <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">
                                <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ translate('Contact Info') }}
                    </h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                           <span class="d-block opacity-30">{{ translate('Address') }}:</span>
                           <span class="d-block opacity-70">{{ get_setting('contact_address',null,App::getLocale()) }}</span>
                        </li>
                        <li class="mb-2">
                           <span class="d-block opacity-30">{{translate('Phone')}}:</span>
                           <span class="d-block opacity-70">{{ get_setting('contact_phone') }}</span>
                        </li>
                        <li class="mb-2">
                           <span class="d-block opacity-30">{{translate('Email')}}:</span>
                           <span class="d-block opacity-70">
                               <a href="mailto:{{ get_setting('contact_email') }}" class="text-reset">{{ get_setting('contact_email')  }}</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ get_setting('widget_one',null,App::getLocale()) }}
                    </h4>
                    <ul class="list-unstyled">
                        @if (get_setting('widget_one_labels', null, App::getLocale()) != null)
                            @foreach (json_decode(get_setting('widget_one_labels', null, App::getLocale()), true) as $key => $value)
                            <li class="mb-2">
                                <a href="{{ json_decode( get_setting('widget_one_links'), true)[$key] }}" class="opacity-50 hov-opacity-100 text-reset">
                                    {{ $value }}
                                </a>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <div class="text-center text-md-left mt-4">
                    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                        {{ translate('My Account') }}
                    </h4>
                    <ul class="list-unstyled">
                        @if (Auth::check())
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('logout') }}">
                                    {{ translate('Logout') }}
                                </a>
                            </li>
                        @else
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('user.login') }}">
                                    {{ translate('Login') }}
                                </a>
                            </li>
                        @endif
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('purchase_history.index') }}">
                                {{ translate('Order History') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('wishlists.index') }}">
                                {{ translate('My Wishlist') }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="opacity-50 hov-opacity-100 text-reset" href="{{ route('orders.track') }}">
                                {{ translate('Track Order') }}
                            </a>
                        </li>
                        @if (addon_is_activated('affiliate_system'))
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-light" href="{{ route('affiliate.apply') }}">{{ translate('Be an affiliate partner')}}</a>
                            </li>
                        @endif
                    </ul>
                </div>
                @if (get_setting('vendor_system_activation') == 1)
                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            {{ translate('Be a Seller') }}
                        </h4>
                        <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">
                            {{ translate('Apply Now') }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section> --}}

<!-- FOOTER -->
{{-- <footer class="pt-3 pb-7 pb-xl-3 bg-black text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="text-center text-md-left" current-verison="{{get_setting("current_version")}}">
                    {!! get_setting('frontend_copyright_text',null,App::getLocale()) !!}
                </div>
            </div>
            <div class="col-lg-4">
                @if (get_setting('show_social_links'))
                <ul class="list-inline my-3 my-md-0 social colored text-center">
                    @if (get_setting('facebook_link') != null)
                    <li class="list-inline-item">
                        <a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook"><i class="lab la-facebook-f"></i></a>
                    </li>
                    @endif
                    @if (get_setting('twitter_link') != null)
                    <li class="list-inline-item">
                        <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter"><i class="lab la-twitter"></i></a>
                    </li>
                    @endif
                    @if (get_setting('instagram_link') != null)
                    <li class="list-inline-item">
                        <a href="{{ get_setting('instagram_link') }}" target="_blank" class="instagram"><i class="lab la-instagram"></i></a>
                    </li>
                    @endif
                    @if (get_setting('youtube_link') != null)
                    <li class="list-inline-item">
                        <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i class="lab la-youtube"></i></a>
                    </li>
                    @endif
                    @if (get_setting('linkedin_link') != null)
                    <li class="list-inline-item">
                        <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i class="lab la-linkedin-in"></i></a>
                    </li>
                    @endif
                </ul>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                        @if (get_setting('payment_method_images') != null)
                            @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                <li class="list-inline-item">
                                    <img src="{{ uploaded_asset($value) }}" height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> --}}


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top"
    style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 fw-600') }}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 fw-600') }}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
            if (auth()->user() != null) {
                $user_id = Auth::user()->id;
                $cart = \App\Models\Cart::where('user_id', $user_id)->get();
            } else {
                $temp_user_id = Session()->get('temp_user_id');
                if ($temp_user_id) {
                    $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
                }
            }
        @endphp
        <div class="col-auto">
            <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span
                    class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                    style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span
                    class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'], 'opacity-100 fw-600') }}">
                    {{ translate('Cart') }}
                    @php
                        $count = isset($cart) && count($cart) ? count($cart) : 0;
                    @endphp
                    (<span class="cart-count">{{ $count }}</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i
                        class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 text-primary') }}"></i>
                    @if (Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                        <span
                            class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"
                            style="right: 7px;top: -2px;"></span>
                    @endif
                </span>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 fw-600') }}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
            @if (Auth::check())
                @if (isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @else
                    <a href="javascript:void(0)"
                        class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb"
                        data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @endif
            @else
                <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
                    <span class="d-block mx-auto">
                        <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        </div>
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif
