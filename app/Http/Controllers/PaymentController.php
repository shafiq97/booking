<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index()
    {
        $payments = Payment::all(); // Assuming you want to list all payments
        return view('payments.index', compact('payments'));
    }
    

public function store(Request $request)
{
    $request->validate([
        'booking_id' => 'required|exists:bookings,id',
        'amount' => 'required|numeric',
        'payment_method' => 'required|string',
        'status' => 'required|string'
    ]);

    Payment::create($request->all());

    return back()->with('success', 'Payment recorded successfully.');
}

public function create($booking_id)
{
    $booking = Booking::findOrFail($booking_id); // Ensure the booking exists
    return view('payments.create', compact('booking'));
}


}
