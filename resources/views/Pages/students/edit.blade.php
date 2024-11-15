@extends('All')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Student</h3> <!-- Changed to Edit Student -->
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
                        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="password">Password</label><br>
                                @error('password')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Password"
                                    name="password"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label><br>
                                @error('age')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    type="number"
                                    class="form-control"
                                    id="age"
                                    placeholder="Enter age"
                                    name="age"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label><br>
                                @error('phone')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="phone"
                                    placeholder="Enter phone"
                                    name="phone"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label><br>
                                @error('image')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    type="text"
                                    class="form-control"
                                    id="image"
                                    placeholder="Upload student photo"
                                    accept="image/*"
                                    name="image"
                                />
                            </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('students.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
