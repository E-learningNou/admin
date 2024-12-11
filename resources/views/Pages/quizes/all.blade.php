@extends('All')

@section('content')
<!-- HTML !-->
<div class="container py-5">
    <h1 class="text-center mb-4">Available Quizzes</h1>
    <div class="row">
        <!-- Quiz Item Example -->
        @foreach ($quiz as $qui)
        <div class="col-md-4 mb-4">
            <div class="quiz-card">
                <h3>{{ $qui->QuizName }}</h3>
                <a href="#" class="btn btn-primary">Start Quiz</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="d-flex justify-content-center">
                {{ $quiz->links() }}
            </div>
        </div>
    </div>
</div>

<style>
    .quiz-card {
        background: #f8f9fa; /* Light background */
        border-radius: 10px; /* Rounded corners */
        padding: 20px; /* Padding inside the card */
        text-align: center; /* Centered text */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        transition: transform 0.3s, box-shadow 0.3s; /* Animation on hover */
    }

    .quiz-card:hover {
        transform: translateY(-5px); /* Lift effect on hover */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
    }

    .btn-primary {
        background-color: #007bff; /* Bootstrap primary color */
        border: none; /* No border */
        border-radius: 5px; /* Slightly rounded corners */
        padding: 10px 20px; /* Padding for the button */
        color: white; /* White text */
        text-decoration: none; /* No underline */
        transition: background-color 0.3s; /* Smooth transition */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }
</style>

@endsection
