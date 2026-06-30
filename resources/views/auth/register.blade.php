<!DOCTYPE html>
<html>
<head>
    <title>QuickWash AI - Login</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <div class="register-page">

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

        <!--- RIGHT SIDE --->

        <div class="right-panel">
            <h2>Create account</h2>
            <p>Register to start creating laundry orders.</p>

            <div class="auth-tabs">
                <a href="/" class="tab">Sign In</a>
                <a href="/register" class="tab active">Register</a>
            </div>


            <form method="POST" action="/register">
                @csrf

                <div class="form-group">
                    <label>Full name</label>
                    <input type="text" name="name" placeholder="Cristel Jade">
                </div>

                <div class="form-group">
                    <label>Phone number</label>
                    <input type="tel" name="phone" placeholder="09129871234">
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" placeholder="you@email.com">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="********">
                </div>

                <div class="form-group">
                    <label>Password confirmation</label>
                    <input type="password" name="password_confirmation" placeholder="********">
                </div>


                <button type="submit">Create Account</button>
                
            </form>
        </div>

    </div>

</body>
</html>