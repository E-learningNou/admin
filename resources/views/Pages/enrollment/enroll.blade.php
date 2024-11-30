@extends('All')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Course Enrollement</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('home') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Forms</a>
                </li>
            </ul>
        </div>
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Elements</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('enrolls.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">



                                <label for="name1">Student_name</label><br>

                                {{-- @error('student_id') --}}
                                {{-- <span class='text-danger'>{{$message}}</span>
                                @enderror --}}
                                <select name="student_id" id="student_id">
                                    <option value="" disabled selected>Select a Student</option> <!-- Placeholder -->

                                    @foreach ($students as $stud )
                                 <option value="{{$stud->id}}">{{$stud->name}} </option>
                                 @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ins">Course_name</label><br>
                                {{-- @error('course_id')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror --}}
                                <select name="course_id" id="course_id" >
                                    <option value="" disabled selected>Select a course</option> <!-- Placeholder -->

                                    @foreach ($courses as $cour )

                                    <option value="{{$cour->id}}">{{$cour->name}} </option>
                                    @endforeach
                                   </select>


                            </div>
                            <div class="form-group">
                                <label for="cv">Upload_cv</label><br>
                                @error('CV_link')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                               <input type="url" id="cv" name='CV_link'>

                            </div>


                    </div>
                    <div class="card-action">

                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('home') }}" class="btn btn-danger">Cancel</a>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
