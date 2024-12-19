<!-- resources/views/lesson.blade.php -->

@extends('front.app') <!-- Extending a base layout file -->

@section('title', 'Lesson Page') <!-- Title for the page -->

@section('content') <!-- Section for page content -->
    <div class="container">
        <h1 class="text-center">Lesson: </h1> <!-- Dynamically display lesson title -->
        <p></p> <!-- Dynamically display lesson content -->
        <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">


                <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100 h-100" src="{{asset('sit/img/3.jpg')}}" alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-between bg-light p-4">
                    <h5 class="text-truncate me-3 mb-0">lesoon:3</h5>
                        <a href="https://www.youtube.com/watch?v=S_deJPyvtfo&list=PLp22-4PivYmIFAnru_L7fnMhSV5YffLTZ&index=3" class="btn btn-primary"> Listen to the lesson </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-xxl py-5">

    </div>


    </div>
@endsection
