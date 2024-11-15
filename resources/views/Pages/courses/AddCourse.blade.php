 @extends('All')

 @section('content')
 <div class="container">
     <div class="page-inner">
         <div class="page-header">
             <h3 class="fw-bold mb-3">Add Course</h3>
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
                         <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
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
                                 <label for="ins">Instructor</label><br>
                                 @error('instructor')
                                 <span class='text-danger'>{{$message}}</span>
                                 @enderror
                                 <input
                                     type="text"
                                     class="form-control"
                                     id="ins"
                                     placeholder="Enter Email"
                                     name="instructor"
                                     {{-- required --}}
                                 />
                             </div>
                             <div class="form-group">
                                 <label for="desk">Description</label><br>
                                 @error('description')
                                 <span class='text-danger'>{{$message}}</span>
                                 @enderror
                                 <textarea

                                     class="form-control"
                                     id="desk"
                                     placeholder="Description"
                                     name="description"
                                     required
                                 ></textarea>
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
