@extends('All')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Student</h3>
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
                        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label><br>
                                @error('name')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror


                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="Enter Name"
                                    name="name"
                                    required
                                />

                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label><br>
                                @error('email')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Enter Email"
                                    name="email"
                                    {{-- required --}}
                                />
                            </div>
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
                                <label for="ag">Age</label><br>
                                @error('age')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    type="number"
                                    class="form-control"
                                    id="ag"
                                    placeholder="Enter age"
                                    name="age"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="phon">Phone</label><br>
                                @error('phone')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="phon"
                                    placeholder="Enter phone"
                                    name="phone"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="imag">Image</label><br>
                                @error('image')
                                <span class='text-danger'>{{$message}}</span>
                                @enderror
                                <input
                                    {{-- //type="file" --}}
                                    type="text"
                                    class="form-control"
                                    id="imag"
                                    placeholder="Upload student photo"
                                    accept="image/*"
                                    name="image"
                                />
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
