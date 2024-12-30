@extends('layouts.app')

@section('title', 'MediCare Plus - Dashboard')

@section('content')
<div class="dashboard-wrapper">
    <!-- Hero Section with img3 -->
    <div class="dashboard-hero" style="background: linear-gradient(rgba(44, 73, 100, 0.9), rgba(44, 73, 100, 0.9)), url('{{ asset('images/img3.webp') }}') center/cover no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="welcome-text">
                        <h1>Welcome Back, {{ Auth::user()->name }}!</h1>
                        <p class="lead">Manage your healthcare journey with our comprehensive medical services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions Section -->
    <section class="quick-actions py-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-calendar-plus"></i>
                        </div>
                        <h3>Book Appointment</h3>
                        <p>Schedule a consultation with our expert doctors</p>
                        <a href="{{ route('appointments.create') }}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-history"></i>
                        </div>
                        <h3>My Appointments</h3>
                        <p>View and manage your appointments</p>
                        <a href="{{ route('appointments.index') }}" class="btn btn-primary">View All</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Our Doctors</h3>
                        <p>Meet our team of healthcare professionals</p>
                        <a href="#doctors" class="btn btn-primary">View Doctors</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="action-card">
                        <div class="action-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <h3>My Profile</h3>
                        <p>Update your personal information</p>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section id="doctors" class="doctors-section py-5 bg-light">
        <div class="container">
            <div class="section-header mb-5">
                <h2>Our Expert Doctors</h2>
                <p class="text-muted">Schedule appointments with our experienced healthcare professionals</p>
            </div>
            <div class="row g-4">
                @forelse($doctors as $index => $doctor)
                    <div class="col-md-6 col-lg-3">
                        <div class="doctor-card">
                            <div class="doctor-image">
                                @php
                                    // Map doctor specializations to specific images for consistency
                                    $specializationImageMap = [
                                        'Cardiologist' => 1,
                                        'Neurologist' => 2,
                                        'Pediatrician' => 3,
                                        'Orthopedic Surgeon' => 4,
                                        'Dermatologist' => 5,
                                        'Psychiatrist' => 6,
                                        'Endocrinologist' => 7,
                                        'Oncologist' => 8,
                                        'Gynecologist' => 9,
                                        'Ophthalmologist' => 10,
                                        'ENT Specialist' => 11,
                                        'Dentist' => 12,
                                        'Urologist' => 13,
                                        'Pulmonologist' => 14,
                                        'Gastroenterologist' => 15,
                                        'General Physician' => 16,
                                    ];
                                    
                                    $imageNumber = $specializationImageMap[$doctor->specialization] ?? (($index % 16) + 1);
                                    $imagePath = "images/d{$imageNumber}.jpg";
                                @endphp
                                <img src="{{ asset($imagePath) }}" 
                                     alt="Dr. {{ $doctor->name }}" 
                                     class="img-fluid"
                                     onerror="this.src='{{ asset('images/d1.jpg') }}'">
                                <div class="doctor-overlay">
                                    <div class="doctor-specialization">
                                        {{ $doctor->specialization }}
                                    </div>
                                </div>
                            </div>
                            <div class="doctor-info">
                                <h4>{{ $doctor->name }}</h4>
                                <div class="doctor-details">
                                    <p><i class="fas fa-graduation-cap"></i> {{ $doctor->qualification }}</p>
                                    <p class="doctor-description"><i class="fas fa-stethoscope"></i> {{ $doctor->description }}</p>
                                </div>
                                <div class="doctor-actions">
                                    <a href="{{ route('appointments.create', ['doctor_id' => $doctor->id]) }}" 
                                       class="btn btn-primary btn-book">
                                        <i class="fas fa-calendar-plus me-2"></i>Book Appointment
                                    </a>
                                    <button type="button" class="btn btn-outline-primary btn-view-profile mt-2" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#doctorModal{{ $doctor->id }}">
                                        <i class="fas fa-user-md me-2"></i>View Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Doctor Modal -->
                    <div class="modal fade" id="doctorModal{{ $doctor->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header border-0 pb-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center pt-0">
                                    <div class="doctor-modal-image">
                                        <img src="{{ asset($imagePath) }}" 
                                             alt="Dr. {{ $doctor->name }}" 
                                             class="img-fluid rounded-circle">
                                    </div>
                                    <h3 class="mt-3">{{ $doctor->name }}</h3>
                                    <p class="text-primary mb-2">{{ $doctor->specialization }}</p>
                                    <p class="text-muted mb-3">{{ $doctor->qualification }}</p>
                                    <div class="doctor-modal-description">
                                        <p>{{ $doctor->description }}</p>
                                    </div>
                                    <div class="doctor-modal-stats">
                                        <div class="row g-0">
                                            <div class="col">
                                                <div class="stat-item">
                                                    <i class="fas fa-star text-warning"></i>
                                                    <h4>4.9</h4>
                                                    <p>Rating</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="stat-item">
                                                    <i class="fas fa-user-friends text-primary"></i>
                                                    <h4>2.1k+</h4>
                                                    <p>Patients</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="stat-item">
                                                    <i class="fas fa-calendar-check text-success"></i>
                                                    <h4>10+</h4>
                                                    <p>Years</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-0 justify-content-center">
                                    <a href="{{ route('appointments.create', ['doctor_id' => $doctor->id]) }}" 
                                       class="btn btn-primary px-4">
                                        <i class="fas fa-calendar-plus me-2"></i>Book Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            <i class="fas fa-info-circle me-2"></i>No doctors available at the moment.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Recent Appointments -->
    <section class="recent-appointments py-5">
        <div class="container">
            <div class="section-header mb-5">
                <h2>Recent Appointments</h2>
                <p class="text-muted">Your upcoming and recent medical appointments</p>
            </div>
            <div class="table-responsive">
                <table class="table table-hover appointment-table">
                    <thead>
                        <tr>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <div class="no-appointments">
                                    <i class="fas fa-calendar-times mb-3"></i>
                                    <p>No appointments scheduled yet.</p>
                                    <a href="{{ route('appointments.create') }}" class="btn btn-primary">Book Your First Appointment</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
    // Add smooth scrolling to all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection
