@extends('All')

@section('content')
<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6">

            <div class="card">

                <div class="card-header">


                <div class="card-body">
                    <h3 class="fw-bold mb-3">Add Quiz</h3>

                    <form action="{{ route('quizes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="QuizName">Quiz Name</label><br>
                            @error('QuizName')
                                <span class='text-danger'>{{$message}}</span>
                            @enderror
                            <input
                                type="text"
                                class="form-control"
                                id="QuizName"
                                placeholder="Enter Name"
                                name="QuizName"
                                required
                            />
                        </div>

                        <div class="form-group">
                            <label for="course_id">Select Course</label>
                            <select name="course_id" id="course_id" class="form-control" required>
                                <option value="" disabled selected>Select a Course</option> <!-- Placeholder -->
                                @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{ route('quizes.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
