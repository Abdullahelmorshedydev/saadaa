<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAA'DA</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/SAADA.css') }}" />
    <link rel="icon" href="{{ asset('assets/images/link pic.jpg') }}">

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form id="myForm" action="{{ route('login.store') }}" method="POST" class="sign-in-form">
                    @csrf
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="user" name="email" value="{{ old('email') }}" type="text"
                            placeholder="Email" />
                        @error('email')
                            <div id="usernameError" class="error1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="Passwordd" name="password" type="password" placeholder="Password" />
                        @error('password')
                            <div id="passwordError" class="error1">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" value="Login" class="btn solid" />

                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form id="form" action="{{ route('login.register') }}" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class=" title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="username" type="text" name="username" placeholder="Username" />
                        @error('username')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="phone" type="text" name="phone" placeholder="phone" />
                        @error('phone')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" name="email_register" type="email" placeholder="Email" />
                        @error('email_register')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password" type="password" name="password_register" placeholder="Password" />
                        @error('password_register')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="confirmPassword" type="password" name="password_register_confirmation"
                            placeholder="confirm Password" />
                        @error('password_register_confirmation')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid" />

                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>happines Starts here.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>happines Starts here.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/SAADA.js') }}"></script>
</body>

</html>
