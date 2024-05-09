<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Booking Details</title>
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
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>

<body id="page-top">
    <header class="masthead">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Household Services</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#login">Logout</a></li>
                        <!--SHOULD BE LOGOUT BUTTON-->
                    </ul>
                </div>
            </div>
        </nav>
        <section class=" bg-primary">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Place your booking</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="container px-4 px-lg-5">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                        <div class="col-lg-6">
                            <form id="contactForm" action="{{ route('booking.store') }}" method="POST">
                                @csrf

                                <!-- Date input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="date" type="date" name="date"
                                        placeholder="Select a date" required>
                                    <label for="date">Select Date</label>
                                    <div class="invalid-feedback" data-sb-feedback="date:required">A date is required.
                                    </div>
                                </div>

                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" name="name"
                                        placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Full name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                    </div>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                        required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                    </div>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" name="phone"
                                        placeholder="(123) 456-7890" data-sb-validations="required" />
                                    <label for="phone">Phone number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                        required.</div>
                                </div>

                                <!-- Address input -->
                                <div class="form-floating mb-3">
                                    <textarea name="address" class="form-control" id="address" type="text"
                                        placeholder="Enter your address here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="address">Address</label>
                                    <div class="invalid-feedback" data-sb-feedback="address:required">An address is
                                        required.</div>
                                </div>

                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <!-- Submit Button-->
                                <div class="d-grid"><button class="btn btn-primary btn-xl " id="submitButton"
                                        type="submit">Continue</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </header>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2024 - Nur Syazweena Mohd Noor</div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('#date').datepicker({
                format: 'yyyy-mm-dd', // Match the format expected by your server
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>

</body>

</html>
