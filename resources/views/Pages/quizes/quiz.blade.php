@extends('All')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($quizs && $questions) <!-- Check if quizzes and questions exist -->
                    @foreach ($quizs as $quiz)
                        <h3 class="text-center mb-4">{{ $quiz->QuizName }}</h3> <!-- Display the quiz name -->
                    @endforeach

                    <div class="row">
                        @foreach ($questions as $index => $question) <!-- Use $index to get the question number -->
                            <div class="col-md-12 mb-3">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $index + 1 }}. {{ $question->Question }}</h5> <!-- Dotted format -->
                                        {{-- //<input type="text" class="form-control" name="answers[{{ $question->id }}]" placeholder="Your answer here" required> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Button to return to home -->
                    <div class="text-center mt-4">
                        <a href="{{ route('quizes.index') }}" class="btn btn-primary">Return to Home</a> <!-- Link styled as a button -->
                    </div>
                @else
                    <p class="text-center">No quiz found.</p> <!-- Message if no quiz is found -->
                @endif
            </div>
        </div>
    </div>

    <style>
        .card {
            border: 1px solid #007bff; /* Blue border for each card */
            border-radius: 10px; /* Rounded corners */
        }
        .card-title {
            font-weight: bold; /* Make the question title bold */
        }
        .form-control {
            margin-top: 10px; /* Space between question and input */
        }
    </style>
@endsection
