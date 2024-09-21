
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}" id="registerForm">
            @csrf

            <!-- Name -->
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required autofocus>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <!-- Email Address -->
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
          
            <x-text-input id="role" class="block mt-1" type="radio" name="role"  required value="user"  />User
            <x-text-input id="role" class="block mt-1" type="radio" name="role"  required value="designer" />Designer
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>
        

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Confirm Password -->
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <button type="submit">Register</button>
        </form>

        <div class="link">
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('assets/imgs/banner-1/banner-1.jpg'); /* Background image */
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

        .register-container {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #906e50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            transition : all 0.5s ease;
            cursor: pointer;
        }

        button:hover {
            background-color: #000000;
        }

        .link {
            text-align: center;
            margin-top: 15px;
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

