<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booking.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
                'date' => 'required|date' // Validate that it is a proper date
            ]);

            if ($validator->fails()) {
                // Handle validation failure
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Create booking if validation passes
            $bookingData = $validator->validated();
            $booking = Booking::create($bookingData);

            // Redirect to the payment page, passing along the booking ID
            // Redirect to the payment create page after a booking is created
            return redirect()->route('payments.create', ['booking_id' => $booking->id]);
        } catch (ValidationException $e) {
            // Handle the validation exception
            return back()->with('error', 'Validation Error: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Handle general exceptions
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('booking.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *

     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
