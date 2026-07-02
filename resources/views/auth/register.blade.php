<!DOCTYPE html>
<html>
<head>
    <title>QuickWash AI - Login</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <div class="register-page">

        @include('partials.left-panel')

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