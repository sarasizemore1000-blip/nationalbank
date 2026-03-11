@extends('layouts.app')

@section('content')

<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    .welcome {
        font-size: 20px;
        color: #8B0000; /* dark soft red */
        font-weight: bold;
        text-align: center;
    }

    .card {
        background-color: #C62828; /* soft red */
        color: white;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        margin-top: 25px;
    }

    /* Smaller account labels */
    .card h3 {
        margin: 5px 0;
        font-weight: normal;
        font-size: 20px;
    }

    .card h2 {
        font-size: 26px;
        margin: 5px 0;
    }

    .balance {
        font-size: 32px;
        font-weight: bold;
        margin-top: 10px;
    }

    .actions {
        margin-top: 30px;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .actions a {
        text-decoration: none;
        background-color: #C62828; /* soft red */
        color: white;
        padding: 12px 20px;
        border-radius: 6px;
        font-weight: bold;
        transition: 0.3s;
    }

    .actions a:hover {
        background-color: #8E2424; /* darker soft red */
    }

    .chat-btn {
        background: #28a745 !important;
        color: white !important;
        padding: 12px 20px;
        border-radius: 6px;
        font-weight: bold;
        text-decoration: none;
        transition: 0.3s;
    }

    .chat-btn:hover {
        background: #1e7e34 !important;
    }
</style>

<div class="welcome">
    Welcome back, {{ Auth::user()->name }} 
</div>

<div class="card">
    <h3>Account Number</h3>
    <h2>{{ Auth::user()->account_number }}</h2>

    <h3>Current Balance</h3>
    <div class="balance">${{ number_format(Auth::user()->balance, 2) }}</div>
</div>

<div class="actions">
    <a href="/transfer">Make Transfer</a>
    <a href="/history">View History</a>
    <a href="{{ route('user.chat') }}" class="chat-btn">Direct Chat</a>
</div>

<section style="
    background: linear-gradient(135deg, #C62828, #EF5350); 
    color: #fff;
    text-align: center;
    padding: 40px 20px;
    margin-top: 60px;
    border-top: 5px solid #8E2424;
    border-radius: 10px;
">
    <h2 style="font-size: 26px; margin-bottom: 10px;">Contact National Bank</h2>

    <p style="font-size: 16px; margin: 5px 0;">
        <strong>705 St Peter Ave, Bathurst, NB E2A 2Y9, Canada</strong>
    </p>

    <p style="font-size: 16px; margin: 5px 0;">
        <strong>Tel:</strong>
        <a href="tel:+15065288838" style="color: #ffeb3b; text-decoration: none;">
            +1 506-5288-838
        </a>
    </p>

    <p style="font-size: 14px; color: #f8d7da; margin-top: 20px;">
        © {{ date('Y') }} National Bank. All Rights Reserved.
    </p>
</section>

@endsection
