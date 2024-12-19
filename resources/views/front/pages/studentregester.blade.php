<!-- resources/views/student/register.blade.php -->
    @extends('front.app')
    @section('content')
    <h1 class="text-center" >Student Course Registration</h1>
    <!-- Success message -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
        <!-- Registration Form -->
        <form style="text-align:left; "  action="{{ route('lesson.index') }}" method="POST">
            @csrf

                            <div  class="row mb-3">
                            <label  class="col-md-4 col-form-label text-md-end" for="name">Name</label>
                                <div class="col-md-3 mb-3"   style="    width: 254px;  height: 35px;">
                                <input  style="width:100%;     height: 35px;" type="text" id="name" name="name" value="{{ old('name') }}" required><br>
                                    @error('name')
                                        <span class="invalid-feedback alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div style="text-align: center;" class="row mb-3">
            <!-- Email Field -->
                              <label class="col-md-4 col-form-label text-md-end" for="email">Email </label>
                                <div class="col-md-6">
                                    <input   class="form-control @error('password') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required><br>
                                    @error('email')
                                        <span class="invalid-feedback  alert alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div style="text-align: center;" class="row mb-3">
                                <label style="padding-left:10;" class="col-md-4 col-form-label text-md-end" for="course_id">Select Course: </label>
                                <div   style="width: 254px;  height: 35px;" class="col-md-6">


                                        <select style="width: 100%;  height: 35px;"  class="col-md-20 w-100" id="course_id" name="course_id" required>
                                            <option value="" disabled selected>Select a Student</option>
                                    @foreach ($courses as $cours )
                                            <option value={{$cours->id}}>{{$cours->name}}</option>
                                            @endforeach
                                               </select>

                                </div>
                            </div>
                            <div text-align: center; class="row mb-3">

            <label class="col-md-4 col-form-label text-md-end" for="message">Message (optional):</label>
                                <div   style="    width: 254px;  height: 45px;" class="col-md-6">
                                <textarea style="  width:100%;  height: 55px;" id="message" name="message">{{ old('message') }}</textarea><br>

                                    @error('password')
                                        <span class="invalid-feedback  alert alert-danger" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div style="text-align: center;" class="col-md-6">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


