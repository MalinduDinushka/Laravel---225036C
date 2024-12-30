@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book an Appointment</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('appointments.store') }}">
                        @csrf

                        <div class="form-group row mb-3">
                            <label for="doctor_id" class="col-md-4 col-form-label text-md-right">Select Doctor</label>
                            <div class="col-md-6">
                                <select name="doctor_id" id="doctor_id" class="form-control @error('doctor_id') is-invalid @enderror" required>
                                    <option value="">Choose a doctor...</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}" 
                                            {{ (old('doctor_id') == $doctor->id || (isset($selectedDoctor) && $selectedDoctor->id == $doctor->id)) ? 'selected' : '' }}>
                                            {{ $doctor->name }} - {{ $doctor->specialization }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('doctor_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="appointment_date" class="col-md-4 col-form-label text-md-right">Appointment Date</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('appointment_date') is-invalid @enderror" 
                                    name="appointment_date" value="{{ old('appointment_date') }}" required>
                                @error('appointment_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="appointment_time" class="col-md-4 col-form-label text-md-right">Appointment Time</label>
                            <div class="col-md-6">
                                <input type="time" class="form-control @error('appointment_time') is-invalid @enderror" 
                                    name="appointment_time" value="{{ old('appointment_time') }}" required>
                                @error('appointment_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="notes" class="col-md-4 col-form-label text-md-right">Notes (Optional)</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('notes') is-invalid @enderror" 
                                    name="notes" rows="3">{{ old('notes') }}</textarea>
                                @error('notes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Book Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
