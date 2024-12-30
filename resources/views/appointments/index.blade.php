@extends('layouts.app')

@section('content')
<div class="appointments-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-calendar-check me-2"></i>My Appointments</span>
                        <a href="{{ route('appointments.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus me-1"></i> Book New Appointment
                        </a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            </div>
                        @endif

                        @if($appointments->count() > 0)
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-user-md me-2"></i>Doctor</th>
                                            <th><i class="fas fa-calendar-alt me-2"></i>Date</th>
                                            <th><i class="fas fa-clock me-2"></i>Time</th>
                                            <th><i class="fas fa-info-circle me-2"></i>Status</th>
                                            <th><i class="fas fa-cog me-2"></i>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $appointment)
                                            <tr>
                                                <td>
                                                    <strong>{{ $appointment->doctor->name }}</strong><br>
                                                    <small class="text-muted">{{ $appointment->doctor->specialization }}</small>
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('M d, Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($appointment->appointment_time)->format('h:i A') }}</td>
                                                <td>
                                                    <span class="badge bg-{{ $appointment->status === 'pending' ? 'warning' : ($appointment->status === 'confirmed' ? 'success' : 'danger') }}">
                                                        <i class="fas fa-{{ $appointment->status === 'pending' ? 'clock' : ($appointment->status === 'confirmed' ? 'check' : 'times') }} me-1"></i>
                                                        {{ ucfirst($appointment->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment?')">
                                                            <i class="fas fa-times me-1"></i> Cancel
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="no-appointments">
                                <i class="fas fa-calendar-times mb-3"></i>
                                <p>You have no appointments scheduled.</p>
                                <a href="{{ route('appointments.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-1"></i> Book Your First Appointment
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
