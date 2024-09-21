
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-image: url('assets/imgs/banner-1/banner-1.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .login-container {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                width: 310px;
                border-radius: 8px;
                display:flex;
                flex-direction:column;
                align-items:center;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                margin-bottom: 20px;
                color: #333;
                text-align : center;
            }
            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 15px;
                margin: 8px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            button {
                width: 200px;
                background-color: #906e50;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 4px;
                text-align : center;
                transition : all 0.5s ease;
                cursor: pointer;
            }
            button:hover {
                background-color: #000000;
            }
            .link {
                text-align: center;
                margin-top: 10px;
            }
            .link a {
                color: #007bff;
                text-decoration: none;
            }
            .link a:hover {
                text-decoration: underline;
                color: #906e50;
            }
        </style>
    </head>

 

    <div class="login-container">
        <h2 class="text-center">Login</h2>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" id="loginForm">
            @csrf
            
            <!-- Email Address -->
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter email" required value="{{ old('email') }}" autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            
            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Remember Me -->
            

            <button type="submit">Log in</button>
        </form>

        <div class="link">
           
        </div>
    </div>

    <script>
        
    </script>

