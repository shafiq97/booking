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

            // After setting up validation rules, you might want to check if data passes
            if ($validator->fails()) {
                // Let's see what errors are thrown if the validation fails
                dd($validator->errors());
            }

            // If validation passes, you might want to check the data that is validated and to be used

            // Assuming validation passed, let's see the data to be stored
            $bookingData = $validator->validated();

            // Proceed with storing the booking if validation passes
            $booking = Booking::create($bookingData);

            return back()->with('success', 'Booking submitted successfully!');
        } catch (ValidationException $e) {
            // If there's a validation exception, let's dump it to understand the issue
            dd($e);
        } catch (\Exception $e) {
            // If a general exception occurs, dump it to see the details
            dd($e);
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
