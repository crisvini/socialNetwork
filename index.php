<?php include("./include/includes.php"); ?>
<!DOCTYPE html>
<?= Components::lang(); ?>

<head>
    <?= Components::head("Login"); ?>
</head>

<body class="background-dark">
    <main class="w-full h-screen">
        <div class="h-full lg:h-auto grid grid-cols-12 gap-0 color-light">
            <div class="w-full order-2 lg:order-1 col-span-12 lg:col-span-6 background-dark place-self-center">
                <div class="text-center">
                    <img class="w-2/5 lg:w-1/5 mx-auto mb-2" src="./assets/logo.png">
                    <span class="text-2xl">coffee cup</span>
                </div>
                <div class="mt-6 text-center">
                    <input oninput="fillingAlert('#email');" type="email" class="border-medium w-5/6 lg:w-3/6 background-medium p-2 rounded-lg color-dark" placeholder="E-mail" id="email">
                    <input oninput="fillingAlert('#password');" type="password" class="border-medium mt-4 w-5/6 lg:w-3/6 background-medium p-2 rounded-lg color-dark" placeholder="Password" id="password">
                    <button class="mt-6 w-5/6 lg:w-3/6 p-2 rounded-lg logo-button-color">Sign in</button>
                </div>
                <div class="mt-2 text-center">
                    <span class="w-full logo-link-color hover:underline" onclick="window.location.href = './registration.php'">Don't have an account? Sign up</span>
                </div>
            </div>
            <div class="w-full order-1 lg:order-2 col-span-6 hidden lg:block background-default">
                <img class="w-full h-screen p-24" src="./assets/primary-banner.svg">
            </div>
        </div>
    </main>
</body>

</html>