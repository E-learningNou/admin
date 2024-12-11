@extends('front.app')

@section('content')
    <h1 class="text-center ">Available Courses</h1>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/course-1.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate  mb-0">Learing English</h5>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                        Register now </button></a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-3 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-90 h-90" src="{{asset('sit/img/course-2.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Marketing</h5>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                        Register now </button></a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/course-3.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0"> Content Writing</h>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                        Register now </button>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/course-4.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0"> Logo Design </h5>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                        Register now </button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/course-5.avif')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">UI/UX </h5>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                        Register now </button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-90" src="{{asset('sit/img/course-6.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0"> Animation</h5>
                        <button type="submit" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                        Register now </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/course-7.png')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Flutter</h5>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                        Register now </button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/course-8.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0">Project Managemen</h5>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white;border: none; cursor: pointer; font-size: 16px;height: 44px;
    width: 128px;">
                        Register now </button></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/course-9.webp')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                        <h5 class="text-truncate me-3 mb-0"> Project Managemen </h5>
                        <a href="{{route('studentregister')}}"><button type="submit" style="background-color: #1E60AA; color: white;  border: none; cursor: pointer; font-size: 16px;height: 44px;
    width: 128px;">
                        Register now </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


