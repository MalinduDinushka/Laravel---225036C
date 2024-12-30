<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = auth()->user()->appointments()->with('doctor')->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create(Request $request)
    {
        $doctors = Doctor::all();
        $selectedDoctor = null;
        
        if ($request->has('doctor')) {
            $selectedDoctor = Doctor::find($request->doctor);
        }
        
        return view('appointments.create', compact('doctors', 'selectedDoctor'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date|after:today',
            'appointment_time' => 'required',
        ]);

        $appointment = auth()->user()->appointments()->create([
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'notes' => $request->notes,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }

    public function destroy(Appointment $appointment)
    {
        if ($appointment->user_id !== auth()->id()) {
            abort(403);
        }

        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment cancelled successfully!');
    }
}
