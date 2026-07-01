<!DOCTYPE html>
<html>
<head>
    <title>QuickWash AI - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="login-page">

        <div class="left-panel">
            <h1 class="logo">QuickWash AI</h1>

            <h2 class="hero-title">
                Laundry,<br>
                simplified.
            </h2>

            <p class="hero-description">
                Manage your laundry orders effortlessly with AI-powered recommendations,
                pickup scheduling, and real-time order tracking.
            </p>

            <div class="features">

                <div class="feature-card">
                    <span class="feature-icon">🧺</span>
                    <div>
                        <h3>Easy Booking</h3>
                        <p>Book your laundry service in just a few clicks.</p>
                    </div>
                </div>

                <div class="feature-card">
                    <span class="feature-icon">📍</span>
                    <div>
                        <h3>Order Tracking</h3>
                        <p>Track your orders in real-time with live updates.</p>
                    </div>
                </div>

                <div class="feature-card">
                    <span class="feature-icon">🚚</span>
                    <div>
                        <h3>Pick Up</h3>
                        <p>Schedule a convenient pick up at your door.</p>
                    </div>
                </div>

                <div class="feature-card">
                    <span class="feature-icon">🤖</span>
                    <div>
                        <h3>AI Recommendation</h3>
                        <p>Get personalized service recommendations powered by AI.</p>
                    </div>
                </div>

            </div>

            <p class="left-footer">© 2026 QuickWash AI. All rights reserved.</p>

        </div>

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

</body>
</html>