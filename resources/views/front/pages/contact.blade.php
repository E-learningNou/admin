    @extends('front.app')
    @section('title','contact')
    <!-- @section('content') -->
    @section('content')
    <div class="container-fluid page-header mb-5 py-5">
            <div class="container">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    @endsection
    @section('all courses')
    <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Get In Touch</h6>
                        <h1 class="mb-4">Contact For Any Query</h1>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <iframe class="position-relative w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light p-5 h-100 d-flex align-items-center">
                            <form  action="{{route('contact.store')}}" method="POST" id="contact-form">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="name" type="text" class="form-control" id="name" placeholder=" Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input name="email" type="email" class="form-control" id="email" placeholder=" Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('footer-script')
    <script>
    $(document).ready(function(){
        $('#contact-form').submit(function (event) {
            
            let formData  =$(this).serializeArray();
            let url       =$(this).attr('action');



             $.ajex({
            'type': 'POST',
            'url': url ,
            'data':formData,
            'success':function (response){
                if(response.success == true){
                    toastr.success(response.message)
                }
            },
        });


        });


    });
    </script>
    @endpush




