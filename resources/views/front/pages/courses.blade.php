@extends('front.app')

@section('content')
    <h1 class="text-center">Available Courses</h1>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($courses as $cor)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                        <div class="overflow-hidden">
                            <!-- Ensure that the image URL is a direct link to the image on Google -->
                            <img class="img-fluid w-100 h-100" src="{{$cor->image_url}}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate mb-0">{{ $cor->name }}</h5>
                            <a href="{{ route('studentregister') }}">
                                <button type="button" style="background-color: #1E60AA; color: white; padding: 14px 20px; border: none; cursor: pointer; font-size: 16px;">
                                    Register now
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
