<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Household Services</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    /* Add this inside your <head> tag or in your external stylesheet */
        <style>
            .portfolio-img {
                height: 500px; /* Set the height you prefer */
                width: 100%; /* This makes the image responsive */
                object-fit: cover; /* This prevents the image from distorting */
            }
        </style>
        
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Household Services</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Services</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container-fluid px-0 h-100"
            style="background-image: url('/top3.jpg'); background-size: cover; background-position: center;">
            <!-- <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center"> -->
            <div class="row gx-0 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">HOUSEHOLD SERVICES</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Welcome to Household Services,
                        your one-stop destination for all your household needs. Whether you're looking for cleaning,
                        gardening or plumbing services, we've got you covered. Our experienced
                        professionals are dedicated to delivering top-notch service with reliability and efficiency.
                        Explore our range of services today and experience the convenience of having a home that's taken
                        care of by the best in the business.</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Services Provided: Cleaning, Gardening & Plumbing!</p>
                    <a class="btn btn-light btn-xl" href="#portfolio">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <!-- <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <div class="container-fluid p-0">
            </div>
        </section> -->
    <!-- Portfolio-->
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                @foreach ($services as $service)
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="#" title="{{ $service->serviceName }}">
                        <img class="img-fluid portfolio-img" src="{{ $service->image_url }}" alt="{{ $service->serviceName }}" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">{{ $service->serviceName }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    


    <!-- Contact
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                         * * * * * * * * * * * * * * *-->
    <!-- * * SB Forms Contact Form * *-->
    <!-- * * * * * * * * * * * * * * *-->
    <!-- This form is pre-integrated with SB Forms.-->
    <!-- To make this form functional, sign up at-->
    <!-- https://startbootstrap.com/solution/contact-forms-->
    <!-- to get an API token!-->
    <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN"> -->
    <!-- Name input-->
    <!-- <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div> -->
    <!-- Email address input-->
    <!-- <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div> -->
    <!-- Phone number input-->
    <!-- <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div> -->
    <!-- Message input-->
    <!-- <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                    style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div> -->
    <!-- Submit success message-->
    <!---->
    <!-- This is what your users will see when the form-->
    <!-- has successfully submitted-->
    <!-- <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div> -->
    <!-- Submit error message-->
    <!---->
    <!-- This is what your users will see when there is-->
    <!-- an error submitting the form-->
    <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div> -->
    <!-- Submit Button-->
    <!-- <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>-->

    <!-- LOGIN/SIGNUP-->
    <section class="page-section" id="login">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Book Now!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Ready to place a booking? Login and choose your prefered service!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- Submit Button-->
                    <div class="d-grid"><a class="btn btn-primary btn-xl" href="{{ route('booking.index') }}">Book
                            now</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2024 - Nur Syazweena Mohd Noor</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
