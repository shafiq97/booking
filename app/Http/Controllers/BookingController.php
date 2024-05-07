<?php

namespace App\Http\Controllers;

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

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'address' => 'required',
        // ]);

        try {
            Booking::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());  // This will show all the request data
            return back()->with('error', 'Error: ' . $e->getMessage());
        }
        

        return back()->with('success', 'Booking submitted successfully!');
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
