<x-guest-layout>
    <x-authentication-card>
    <style>
        /* Základné nastavenia */
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            /*background-color: #222222; /* Nastavenie čierneho pozadia */
        }

        /* Štýlování celého formulára */
        .login-form {
            max-width: 400px; /* Maximální šířka formuláře */
            width: 100%;
            background: #222; /* Tmavě šedé pozadí formuláře */
            padding: 20px;
            border-radius: 10px; /* Zakulacené rohy */
            box-shadow: 0 0 10px rgba(0,0,0,0.5); /* Stín okolo formuláře */
        }

        /* Štýlování vstupních polí */
        input[type=email], input[type=password] {
            width: calc(100% - 20px); /* Šířka s výpočtem pro padding */
            margin-bottom: 15px;
            padding: 10px;
            background: #fff; /* Bílé pozadí inputů */
            border: 2px solid #0af; /* Světle modré orámování */
            border-radius: 5px; /* Mírně zakulacené rohy */
            color: #333; /* Tmavě šedý text */
        }

        /* Štýlování labelů */
        label {
            display: block;
            margin-bottom: 5px;
            color: #ccc; /* Světle šedá barva textu */
        }

        /* Štýlování checkboxu a jeho labelu */
        .form-check {
            margin-bottom: 15px;
        }

        input[type=checkbox] {
            margin-right: 5px;
        }

        .form-check label {
            color: #ccc; /* Světle šedá barva textu */
        }

        /* Tlačítka pro přihlášení a odkaz na zapomenuté heslo */
        .btn-primary {
            width: 100%;
            padding: 10px;
            border: none;
            background: #0af; /* Světle modré pozadí */
            color: #000; /* Černý text */
            margin-bottom: 15px;
            border-radius: 5px; /* Zakulacené rohy */
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #08e; /* Tmavší modrá při najetí */
        }

        a {
            color: #0af; /* Světle modrá barva odkazů */
            text-decoration: none; /* Žádné podtržení odkazu */
            display: block;
            text-align: center; /* Vyrovnání textu na střed */
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline; /* Podtržení při najetí */
        }

        /* Přihlášení přes sociální sítě */
        .social-icons img {
            width: 24px; /* Velikost ikon */
            margin: 0 5px; /* Mezery kolem ikon */
        }

        /* Přidání medzer nad a pod formulář */
        .authentication-card {
            margin: 20px 0; /* Vnější mezery */
        }

        body .bg{
            background-color:black;
        }
    </style>


        <!-- Validation Errors -->
        <x-validation-errors />

        <!-- Session Status -->
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <style>
                
            </style>
            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div>

            <!-- Remember Me Checkbox -->
            <div class="form-group form-check">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me" class="inline-flex items-center">
                    <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            

            <!-- Social Login Links -->
            <div class="social-login">
                <p>{{ __('Log in with social account') }}</p>
                <div class="social-icons">
                    <!-- Insert your social icons here -->
                </div>
            </div>
            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
            </div>
            <!-- Forgot Password Link -->
            <div class="forgot-password">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                @endif
            </div>
        </form>
        
    </x-authentication-card>
</x-guest-layout>
