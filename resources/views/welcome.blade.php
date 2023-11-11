<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MailPay Welcome</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        /* Pridajte tieto štýly do vášho <style> tagu v hlavičke */
    /* Pridajte tieto štýly do vášho <style> tagu v hlavičke */
            html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #222222; /* Alebo akákoľvek iná farba pozadia, ktorú preferujete */
            display: flex;
            justify-content: center; /* Zarovná obsah horizontálne na stred */
            align-items: center; /* Zarovná obsah vertikálne na stred */
            text-align: center; /* Zarovná text na stred pre všetky deti */
            font-family: 'Figtree', sans-serif; /* Nastavte písmo, ktoré chcete použiť */
        }
        h1, p {
            color: #fff; /* White text */
        }

        a {
            display: inline-block; /* Umožní nastaviť padding */
            text-decoration: none; /* Odstráni podčiarknutie odkazu */
            font-weight: bold; /* Tučné písmo pre odkazy */
            margin: 0 10px; /* Rozostup medzi tlačidlami */
            transition: background-color 0.3s, color 0.3s; /* Prechod pre hover efekt */
        }

        a:hover {
            color: #000; /* Black text on hover */
            background-color: #fff; /* White background on hover */
        }

        /* Modré tlačidlo */
        .border-blue-500 {
            border-style: solid;
            border-color: #00BFFF; /* Modrá farba */
        }

        .text-blue-500 {
            color: #00BFFF; /* Modrá farba */
        }

        .rounded-full {
            border-radius: 9999px; /* Okrúhle tlačidlo */
        }

        .px-6 {
            padding-left: 1.5rem; /* Vnútorný odstup vľavo */
            padding-right: 1.5rem; /* Vnútorný odstup vpravo */
        }

        .py-2 {
            padding-top: 0.5rem; /* Vnútorný odstup hore */
            padding-bottom: 0.5rem; /* Vnútorný odstup dole */
        }
        a:hover{
            background-color: #00BFFF;
            color: white;
        }
        .custom-margin-top {
        margin-top: 4rem; /* Napríklad 64px */
    }

    .custom-margin-bottom {
        margin-bottom: 4rem; /* Napríklad 64px */
    }

    .custom-margin-y {
        margin-top: 8rem; /* Napríklad 128px */
        margin-bottom: 8rem; /* Napríklad 128px */
    }
    </style>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>
    <div class="flex flex-col justify-center items-center min-h-screen bg-black text-white px-6">
        <h1 class="text-5xl font-bold custom-margin-top">Welcome to MailPay!</h1>
        <p class="text-2xl custom-margin-bottom">Simplifying your email payments effortlessly.</p>
        <img src="{{ asset('images/logo.png') }}" alt="MailPay Logo" class="custom-margin-y max-w-xs w-full">
        <div class="flex justify-center gap-4 custom-margin-bottom">
            <a href="{{ route('login') }}" class="border-2 border-blue-500 text-blue-500 px-6 py-2 rounded-full hover:bg-orange-500 hover:text-black transition-all">Login</a>
            <a href="{{ route('register') }}" class="border-2 border-blue-500 text-blue-500 px-6 py-2 rounded-full hover:bg-blue-500 hover:text-black transition-all">Sign up</a>
        </div>
    </div>
</body>
<script src="{{ asset('/sw.js') }}"></script>
<script>
   if ("serviceWorker" in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
         console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
         console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
     console.error("Service workers are not supported.");
  }
</script>

</html>
