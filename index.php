<?php include("./include/includes.php"); ?>
<!DOCTYPE html>
<?= Components::lang(); ?>

<head>
    <?= Components::head("Login"); ?>
</head>

<body class="background-dark">
    <main class="w-full h-screen">
        <div class="grid grid-cols-12 gap-0 color-light">
            <div class="w-full order-2 lg:order-1 col-span-12 lg:col-span-6 background-dark place-self-center">
                <div class="text-center">
                    <img class="w-1/5 mx-auto mb-2" src="./assets/logo.png">
                    <span class="text-2xl">coffee cup</span>
                </div>
                <div class="mt-6 text-center">
                    <input type="email" class="w-3/6 background-medium p-2 rounded-lg color-dark" placeholder="E-mail" id="email">
                    <input type="password" class="mt-4 w-3/6 background-medium p-2 rounded-lg color-dark" placeholder="Password" id="password">
                    <button class="mt-6 w-3/6 p-2 rounded-lg logo-background-color">Sign in</button>
                </div>
            </div>
            <div class="w-full order-1 lg:order-2 col-span-6 hidden lg:block background-default">
                <img class="w-full h-screen p-24" src="./assets/primary-banner.svg">
            </div>
        </div>
    </main>
</body>

</html>