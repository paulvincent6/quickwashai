@extends('layouts.app')

@section('title', 'QuickWash AI - Login')

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('content')


    

    <div class="login-page">
        
        @include('partials.left-panel')
        

        <!--- RIGHT PANEL --->

        <div class="right-panel">
            <h2>Welcome back</h2>
            <p>Sign in to manage your laundry orders.</p>

            <div class="auth-tabs">
                <a href="/" class="tab active">Sign In</a>
                <a href="/register" class="tab">Register</a>
            </div>


            @if ($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="/login">
                @csrf

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@email.com">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit">Sign In</button>
                
            </form>
        </div>

    </div>

@endsection