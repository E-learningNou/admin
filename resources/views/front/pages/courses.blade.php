 @extends('front.app')

@section('title', 'Courses')

@section('content') <!-- Section for page content -->
    <div class="container">
        <h1 class="text-center mb-4">Available Courses</h1> <!-- Title for courses section -->
        <div class="row g-4"> <!-- Row for course cards -->
            @foreach($courses as $course) <!-- Loop through each course -->
                <div class="col-lg-4 col-md-6"> <!-- Responsive column for course cards -->
                    <div class="card shadow-sm border-light"> <!-- Card for each course -->
                        <img src="{{$course->image_url }}" class="card-img-top" alt="{{ $course->title }}"> <!-- Course image -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5> <!-- Course title -->
                            <p class="card-text">{{ Str::limit($course->description, 100) }}</p> <!-- Shortened course description -->
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">View Course</a> <!-- View course button -->
                            <a href="{{ route('studentregister', $course->id) }}" class="btn btn-success">Register</a> <!-- Register button -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
