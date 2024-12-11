@extends('All')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 400px;">
        <div class="card-body">


                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="quiz_id" value="{{ session('quiz_id') }}">

                    @for ($i = 1; $i <= $number; $i++)
                        <div class="form-group">
                            <label for="question{{ $i }}">Question Number {{ $i }}</label>
                            @error('Question') <!-- Adjusted error handling -->
                               <span class='text-danger'>{{ $message }}</span>
                            @enderror
                            <input
                                type="text"
                                required
                                name="Question[{{$i}}]"
                                id="question{{ $i }}"
                                class="form-control"
                            >
                        </div>
                    @endfor
                    <button type="submit" class="btn btn-primary btn-block">Create Questions</button>
                </form>

        </div>
    </div>
</div>
@endsection
