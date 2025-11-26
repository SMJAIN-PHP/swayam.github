<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arias - Create Account</title>
    <style>
        /* --- Shared Styles for Login and Sign Up Pages --- */

        /* Color Variables based on the brand screenshot */
        :root {
            --color-navy: #0F3A62;      /* Deep Navy (Text, Titles, Brand) */
            --color-cyan: #00C2E9;      /* Vibrant Cyan (Buttons, Links, Actions) */
            --color-white: #FFFFFF;     /* Pure White (Card Background, Text) */
            --color-dark-bg: #0C2E4A;   /* Slightly darker navy for animated background */
            --color-border: #CCCCCC;    /* Muted Grey (Input Borders) */
            --color-shadow: rgba(0, 0, 0, 0.25); /* Stronger shadow for modern depth */
            --color-link-hover: #00A6CC; /* Slightly darker cyan for link hover */
        }

        /* --- Vertical Background Shimmer Animation Keyframes --- */
        @keyframes background-shimmer-vertical {
            0% { background-position: 50% 0%; }
            50% { background-position: 50% 100%; }
            100% { background-position: 50% 0%; }
        }
        
        /* Card Entry Animation (Same as login) */
        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }


        /* Basic Reset and Body Styles (FIXED for no scrollbar) */
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: var(--color-navy);
            text-align: center;
            
            /* Ensures content is perfectly centered and fits on one screen */
            padding: 0 20px; 
            
            position: relative;
            overflow-x: hidden;
            overflow-y: hidden; /* CRITICAL: Scrollbar removed */

            /* Animated Background Gradient (Vertical Shimmering Effect) */
            background-image: 
                linear-gradient(45deg, var(--color-dark-bg) 0%, rgba(0, 194, 233, 0.5) 20%, var(--color-dark-bg) 40%, rgba(0, 194, 233, 0.5) 60%, var(--color-dark-bg) 100%);
            background-size: 400% 400%; 
            animation: background-shimmer-vertical 25s ease-in-out infinite; 
        }

        /* Main Card Structure */
        .auth-card {
            background-color: rgba(255, 255, 255, 0.95); 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 10px 30px var(--color-shadow);
            width: 100%;
            max-width: 600px; 
            transform: scale(0.98);
            animation: fadeInScale 0.7s ease-out forwards;
            position: relative;
            z-index: 10;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; 
        }

        /* Card Hover Effect */
        .auth-card:hover {
            transform: translateY(-5px) scale(1.01); 
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        /* Title Styling (Modern Serif) */
        .auth-card h2 {
            font-family: 'Playfair Display', serif;
            color: var(--color-navy);
            margin-bottom: 35px;
            font-size: 2.5em;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        /* Form Styling */
        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        /* Input Field Styling with Effect */
        .auth-form input {
            width: 100%;
            padding: 16px 20px;
            border: 1px solid var(--color-border);
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1.05em;
            color: var(--color-navy);
            background-color: var(--color-white);
            transition: border-color 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .auth-form input::placeholder {
            color: #889;
        }

        .auth-form input:focus {
            border-color: var(--color-cyan);
            box-shadow: 0 0 0 4px rgba(0, 194, 233, 0.25);
            background-color: #F9FCFF;
            outline: none;
        }

        /* Primary Button Styling with Effect (Cyan/Navy theme) */
        .btn-primary {
            background-color: var(--color-cyan);
            color: var(--color-white);
            border: none;
            padding: 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.15em;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: background-color 0.3s ease, transform 0.1s ease, box-shadow 0.3s ease;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: var(--color-navy);
            box-shadow: 0 8px 20px rgba(15, 58, 98, 0.5);
            transform: translateY(-2px);
        }

        .btn-primary:active {
            transform: scale(0.97);
            box-shadow: 0 3px 10px rgba(15, 58, 98, 0.3);
        }

        /* Links and Secondary Text */
        .auth-link {
            display: block;
            margin-top: 15px;
            color: var(--color-cyan);
            text-decoration: none;
            font-size: 0.98em;
            text-align: right;
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .auth-link:hover {
            text-decoration: underline;
            color: var(--color-link-hover);
        }

        .switch-link-group {
            margin-top: 35px;
            font-size: 1em;
            color: #777;
        }

        .switch-link-group a {
            color: var(--color-cyan);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .switch-link-group a:hover {
            color: var(--color-link-hover);
            text-decoration: underline;
        }
    </style>
    

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="auth-card" id="signup-page">
        <h2>Create Account</h2>

        <form class="auth-form" action="{{url('/web_signup')}}"  method="post">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="tel" name="mobile" placeholder="Mobile Number" required>
          
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" name="submit" class="btn-primary">Sign Up</button>

<!--         
               <p style="font-size: 0.85em; color: #777; margin-top: 5px;">
                By signing up, you agree to our <a href="#" class="auth-link" style="text-align: left; display: inline;">Terms & Conditions</a>.
            </p>
    -->
        </form>

        <p class="switch-link-group">
            Already have an account? <a href="web_login">Log In</a>
        </p>
    </div>

</body>
</html>