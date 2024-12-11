@extends('All')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 400px;">
        <div class="card-body">


                <form action="{{ route('answers.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ session('question_id') }}">

                    @for ($i = 1; $i <=$questionn; $i++)
                        <div class="form-group">
                            <label for="Answer{{ $i }}">Answer  {{ $i }}</label>
                            @error('name') <!-- Adjusted error handling -->
                               <span class='text-danger'>{{ $message }}</span>
                            @enderror
                            <input
                                type="text"
                                required
                                name="name"
                                id="Answer{{ $i }}"
                                class="form-control"
                            >
                            <label for="is_correct">Is_correct</label>
                            <input
                            type="checkbox"
                            required
                            name="is_correct"
                            id="is_correct"
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
