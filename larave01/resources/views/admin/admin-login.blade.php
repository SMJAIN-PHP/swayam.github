<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Pluto - Admin Login</title>
    <meta name="keywords" content="admin, login, dashboard">
    <meta name="description" content="Admin Panel Login Page">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('admin/fevicon.png') }}" type="image/png" />
    <link rel="stylesheet" href="{{ url('admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ url('admin/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/css/colors.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ url('admin/js/semantic.min.css') }}" />

    <style>
        /* Subtle shadow effect on the login box */
        .login_section {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .login_section:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        /* Focus effect on input fields */
        .field input:focus {
            border-color: #15283c !important; /* Assuming a dark primary color */
            box-shadow: 0 0 5px rgba(21, 40, 60, 0.5);
        }

        /* Styling for the password toggle functionality */
        .password_field {
            position: relative;
        }

        .password_field input {
            padding-right: 40px; /* Make space for the icon */
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ccc;
        }

        .toggle-password:hover {
            color: #15283c;
        }
        
        /* Message styling */
        .message_box {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            text-align: center;
        }

        .message_box.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>

    </head>
<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="{{ url('admin/images/logo/logo.png') }}" alt="Logo" />
                        </div>
                    </div>

                    @if(Session::has('error'))
                        <div class="message_box error">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="login_form">
                        <form action="{{ url('/admin_auth_login') }}" method="post">
                            @csrf
                            <fieldset>
                                <div class="field">
                                    <label  class="label_field">Email Address</label>
                                    <input type="email" value="{{old('email')}}" name="email" placeholder="E-mail" required />
                                </div>
                                <div class="field password_field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" id="password_input" placeholder="Password" required />
                                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                                        <i id="eye_icon" class="fas fa-eye"></i>
                                    </span>
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                    <label class="form-check-label"><input type="checkbox" name="remember" class="form-check-input"> Remember Me</label>
                                    <a class="forgot" href="">Forgotten Password?</a>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button type="submit" name="submit" class="main_bt">Login</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('admin/js/jquery.min.js') }}"></script>
    <script src="{{ url('admin/js/popper.min.js') }}"></script>
    <script src="{{ url('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/js/animate.js') }}"></script>
    <script src="{{ url('admin/js/bootstrap-select.js') }}"></script>
    <script src="{{ url('admin/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');

        // Functionality for Password Toggle
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password_input');
            const eyeIcon = document.getElementById('eye_icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
    <script src="{{ url('admin/js/custom.js') }}"></script>
</body>
</html>