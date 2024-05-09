@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manage Payments for Booking #{{ $booking->id }}</h2>
    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Home</a> <!-- Home Button -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Payment Form -->
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="booking_id" class="form-label">Booking ID</label>
            <input type="number" class="form-control" id="booking_id" name="booking_id" value="{{ $booking->id }}" readonly>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="mb-3">
            <label for="payment_method" class="form-label">Payment Method</label>
            <select class="form-control" id="payment_method" name="payment_method">
                <option value="credit card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank transfer">Bank Transfer</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
                <option value="failed">Failed</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Payment</button>
    </form>
</div>
@endsection
