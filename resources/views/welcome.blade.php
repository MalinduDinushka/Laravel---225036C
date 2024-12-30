<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MediCare Plus - Your trusted healthcare partner providing comprehensive medical services with expert doctors.">
    <title>MediCare Plus - Professional Healthcare Services</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body class="antialiased welcome-page">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                @php
                    $logoPath = public_path('images/logo.jpg');
                    $logoExists = file_exists($logoPath);
                @endphp
                @if($logoExists)
                    <img src="{{ asset('images/logo.jpg') }}" alt="MediCare Plus Logo" class="navbar-logo me-2">
                @endif
                <span>MediCare Plus</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#doctors">Our Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white px-3 mx-2" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="welcome-hero">
        <div class="hero-background">
            <div class="hero-image">
                <img src="{{ asset('images/img2.webp') }}" alt="Healthcare Background">
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-pattern"></div>
        </div>
        <div class="container position-relative">
            <div class="row min-vh-100">
                <div class="col-lg-8 mx-auto text-center hero-content-wrapper">
                    <div class="hero-content" data-aos="fade-up">
                        <h1 class="display-2 fw-bold text-white mb-4">
                            <span class="welcome-text">WELCOME TO</span>
                            <span class="medicare-text">MEDICARE PLUS</span>
                        </h1>
                        <p class="lead text-white-90 mb-5">Experience world-class healthcare with our team of expert doctors</p>
                        <div class="hero-buttons">
                            @auth
                                <a href="{{ route('appointments.create') }}" class="btn btn-primary btn-glow">
                                    <span class="btn-content">Book Appointment</span>
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="btn btn-primary btn-glow">
                                    <span class="btn-content">Join Now</span>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="services" class="welcome-features py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="display-5 fw-bold">Our Services</h2>
                <p class="text-muted">We offer comprehensive healthcare services with a focus on quality and patient satisfaction</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/img1.jpg') }}" alt="Expert Consultation" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h3>Expert Consultation</h3>
                            <p>Professional medical advice from experienced doctors across various specializations</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Qualified Specialists</li>
                                <li><i class="fas fa-check-circle"></i> Personalized Care</li>
                                <li><i class="fas fa-check-circle"></i> Multiple Specialties</li>
                            </ul>
                            <a href="#doctors" class="btn btn-primary w-100 mt-4">
                                <i class="fas fa-user-md me-2"></i>Meet Our Doctors
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/img4.jpg') }}" alt="24/7 Service" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3>24/7 Service</h3>
                            <p>Round-the-clock medical services ensuring you get care whenever you need it</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Emergency Care</li>
                                <li><i class="fas fa-check-circle"></i> Quick Response</li>
                                <li><i class="fas fa-check-circle"></i> Always Available</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary w-100 mt-4">
                                <i class="fas fa-phone-alt me-2"></i>Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/img5.jpg') }}" alt="Modern Facilities" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <h3>Modern Facilities</h3>
                            <p>State-of-the-art medical equipment and facilities for the best possible care</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Latest Equipment</li>
                                <li><i class="fas fa-check-circle"></i> Clean Environment</li>
                                <li><i class="fas fa-check-circle"></i> Advanced Technology</li>
                            </ul>
                            <a href="#facilities" class="btn btn-primary w-100 mt-4">
                                <i class="fas fa-hospital me-2"></i>View Facilities
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/img2.webp') }}" alt="Specialized Care" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h3>Specialized Care</h3>
                            <p>Dedicated departments for specialized medical treatments and procedures</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Cardiology</li>
                                <li><i class="fas fa-check-circle"></i> Neurology</li>
                                <li><i class="fas fa-check-circle"></i> Orthopedics</li>
                            </ul>
                            <a href="#departments" class="btn btn-primary w-100 mt-4">
                                <i class="fas fa-list-alt me-2"></i>Our Departments
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/img3.webp') }}" alt="Family Care" class="img-fluid">
                        </div>
                        <div class="feature-content">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Family Care</h3>
                            <p>Comprehensive healthcare solutions for your entire family's well-being</p>
                            <ul class="feature-list">
                                <li><i class="fas fa-check-circle"></i> Regular Check-ups</li>
                                <li><i class="fas fa-check-circle"></i> Preventive Care</li>
                                <li><i class="fas fa-check-circle"></i> Family Planning</li>
                            </ul>
                            <a href="#family-care" class="btn btn-primary w-100 mt-4">
                                <i class="fas fa-heart me-2"></i>Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-content h-100 d-flex flex-column justify-content-center text-center p-4">
                            <div class="feature-icon mb-4 position-relative start-50 translate-middle-x">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <h3 class="mb-4">Need Help?</h3>
                            <p class="mb-4">Contact our support team for any assistance or book an appointment with our specialists</p>
                            <div class="mt-auto">
                                @auth
                                    <a href="{{ route('appointments.create') }}" class="btn btn-primary w-100 mb-3">
                                        <i class="fas fa-calendar-plus me-2"></i>Book Appointment
                                    </a>
                                @else
                                    <a href="{{ route('register') }}" class="btn btn-primary w-100 mb-3">
                                        <i class="fas fa-user-plus me-2"></i>Register Now
                                    </a>
                                @endauth
                                <a href="#contact" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-headset me-2"></i>Contact Support
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="welcome-stats">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 mb-4">
                    <div class="stat-item">
                        <div class="number" data-count="10">0+</div>
                        <div class="label">Expert Doctors</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="stat-item">
                        <div class="number" data-count="1000">0+</div>
                        <div class="label">Happy Patients</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="stat-item">
                        <div class="number" data-count="15">0+</div>
                        <div class="label">Specializations</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <div class="stat-item">
                        <div class="number">24/7</div>
                        <div class="label">Available Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section id="doctors" class="welcome-doctors py-5">
        <div class="container">
            <div class="section-title">
                <h2>Our Expert Doctors</h2>
                <p>Meet our team of qualified healthcare professionals</p>
            </div>
            <div class="row">
                @php
                    $doctors = [
                        ['name' => 'Dr. John Smith', 'specialization' => 'Cardiologist'],
                        ['name' => 'Dr. Sarah Johnson', 'specialization' => 'Neurologist'],
                        ['name' => 'Dr. Michael Chen', 'specialization' => 'Pediatrician'],
                        ['name' => 'Dr. Emily Davis', 'specialization' => 'Dermatologist'],
                        ['name' => 'Dr. David Wilson', 'specialization' => 'Orthopedic Surgeon'],
                        ['name' => 'Dr. Lisa Anderson', 'specialization' => 'Ophthalmologist'],
                        ['name' => 'Dr. Robert Taylor', 'specialization' => 'Dentist'],
                        ['name' => 'Dr. Jennifer White', 'specialization' => 'Psychiatrist'],
                        ['name' => 'Dr. Carlos Rodriguez', 'specialization' => 'Gynecologist'],
                        ['name' => 'Dr. Priya Patel', 'specialization' => 'ENT Specialist'],
                        ['name' => 'Dr. Kevin O\'Brien', 'specialization' => 'Urologist'],
                        ['name' => 'Dr. Rachel Kim', 'specialization' => 'Oncologist'],
                        ['name' => 'Dr. Aisha Hassan', 'specialization' => 'Endocrinologist'],
                        ['name' => 'Dr. Sofia Nguyen', 'specialization' => 'Pulmonologist'],
                        ['name' => 'Dr. Marcus Thompson', 'specialization' => 'Rheumatologist'],
                        ['name' => 'Dr. Elena Petrova', 'specialization' => 'Gastroenterologist']
                    ];
                @endphp

                @foreach($doctors as $index => $doctor)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="doctor-card">
                        <div class="doctor-image">
                            <img src="{{ asset('images/d' . ($index + 1) . '.jpg') }}" alt="{{ $doctor['name'] }}" class="img-fluid">
                            <div class="doctor-overlay">
                                <span class="doctor-specialization">{{ $doctor['specialization'] }}</span>
                            </div>
                        </div>
                        <div class="doctor-info">
                            <h4>{{ $doctor['name'] }}</h4>
                            <div class="doctor-details">
                                <p><i class="fas fa-stethoscope"></i> {{ $doctor['specialization'] }}</p>
                                <p><i class="fas fa-hospital"></i> Medicare Plus Hospital</p>
                            </div>
                            @auth
                                <a href="{{ route('appointments.create', ['doctor_id' => ($index + 1)]) }}" class="btn btn-primary btn-book">
                                    Book Appointment <i class="fas fa-arrow-right"></i>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary btn-book">
                                    Login to Book <i class="fas fa-arrow-right"></i>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="welcome-cta">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Book an appointment with our expert doctors today and take the first step towards better health.</p>
            @auth
                <a href="{{ route('appointments.create') }}" class="btn-cta">
                    <i class="fas fa-calendar-plus me-2"></i>Book Your Appointment
                </a>
            @else
                <a href="{{ route('register') }}" class="btn-cta">
                    <i class="fas fa-user-plus me-2"></i>Register Now
                </a>
            @endauth
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in touch with us for any inquiries</p>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Location</h4>
                        <p>123 Healthcare Street<br>Medical District, City</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <h4>Phone</h4>
                        <p>Emergency: +1 234 567 890<br>Reception: +1 234 567 891</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <h4>Email</h4>
                        <p>info@medicareplus.com<br>support@medicareplus.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>About MediCare Plus</h5>
                    <p class="mb-0">Providing quality healthcare services with a focus on patient satisfaction and well-being.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#services" class="text-white">Services</a></li>
                        <li><a href="#doctors" class="text-white">Doctors</a></li>
                        <li><a href="#contact" class="text-white">Contact</a></li>
                        <li><a href="{{ route('login') }}" class="text-white">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} MediCare Plus. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small>Developed with <i class="fas fa-heart text-danger"></i> by MediCare Plus Team</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="btn btn-primary back-to-top" title="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Back to Top Button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#backToTop').fadeIn();
            } else {
                $('#backToTop').fadeOut();
            }
        });

        $('#backToTop').click(function() {
            $('html, body').animate({scrollTop : 0}, 800);
            return false;
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animate stats numbers
        function animateStats() {
            $('.number').each(function () {
                const $this = $(this);
                const countTo = parseInt($this.attr('data-count'));

                if (countTo) {
                    $({ countNum: 0 }).animate({
                        countNum: countTo
                    }, {
                        duration: 2000,
                        easing: 'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum) + '+');
                        },
                        complete: function() {
                            $this.text(this.countNum + '+');
                        }
                    });
                }
            });
        }

        // Trigger stats animation when section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(document.querySelector('.welcome-stats'));
    </script>
</body>
</html>
