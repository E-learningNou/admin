@extends('All')

@section('content')
<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Enter Number of Questions</h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('questions.create') }}" method="GET">

                        @csrf

                        <div class="form-group">
                            <label for="question_number">Number of Questions</label>
                            <input
                                id="question_number"
                                name="question_number"
                                required
                                type="number"
                                class="form-control"
                                placeholder="Enter a number"
                            >
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
