<?php
if ($_SERVER[$URI] == $route_dateme_main){
    echo "true";
    $load_message = "Use your LAPTOP!❤️";
}
else
    $load_message = "Oops page Not Found!"; ?>

<head>
    <title>404!</title>
    <!-- Tailwind css -->
    <script src=<?= $css_tailwind ?>></script>
    <script>
        <?= include("main/js/theme.js"); ?>
    </script>

<body onload="change_theme()">
    <!-- Styling -->
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            </div>

            <!-- Code -->
            <div class="text-center">
                <!-- Welcome message -->
                <h1 class="text-4xl font-bold tracking-tight text-gray-300 sm:text-6xl">
                    <?php
                    require("main/functions/fetch_agent.php");
                    echo "404!<br>" . $load_message;
                    ?>
                </h1>
                <!-- quote -->
                <a href="/">
                    <p class="mt-6 text-lg leading-8 " style="color: #7a7df1;">
                        <i><b>Home Page</b></i>
                    </p>
                </a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>