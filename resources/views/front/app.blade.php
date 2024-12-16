@include('front.layout.hed')
@include('front.layout.nav')

<body>
    <!-- Carousel Start -->
    @yield('content')

    <!-- Carousel End -->
@yield('all courses')
    <!-- Service Start -->
    @yield('service')
    <!-- Service End -->


    <!-- About Start -->
    @yield('about')
    <!-- About End -->


    <!-- Fact Start -->
@yield('fact')
    <!-- Fact End -->


    <!-- Service Start -->
@yield('service2')
    <!-- Service End -->


    <!-- Booking Start -->
    @yield('booking')
    <!-- Booking End -->


    <!-- Team Start -->
@yield('team')
    <!-- Team End -->


    <!-- Testimonial Start -->
@yield('testimonial')
    <!-- Testimonial End -->


    @include('front.layout.footer')
