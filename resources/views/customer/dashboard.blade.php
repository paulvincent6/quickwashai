@extends('layouts.app')

@section('title', 'QuickWash AI - Dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

<div class="dashboard-page">

    <h1>Welcome back, {{ Auth::user()->name }} 👋</h1>
    <p>Manage your laundry orders from your dashboard.</p>

    <div class="dashboard-cards">
        <div class="card">New Laundry Order</div>
        <div class="card">Track My Orders</div>
        <div class="card">AI Recommendation</div>
        <div class="card">My Profile</div>
    </div>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>

</div>

@endsection