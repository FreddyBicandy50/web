<?php require("cars_num/partials/template.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="icon" type="images/x-icon" class="h-auto w-auto" href="<?php echo $logo_web ?>" />

</head>

<body>
    <form method="POST" action="/result">
        <div class='flex flex-col antialiased bg-gray-100 text-gray-600 min-h-screen p-4'>
            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Plate Number</label>
            <div class="relative mt-2 rounded-md shadow-sm">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <span class="text-gray-500 sm:text-sm"></span>
                </div>

                <input type="text" name="price" id="price" class="block w-50 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="00-00-00">
                
                <button style="margin-top: 20px;" class='rounded-md bg-indigo-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600' id="search" name="search">search</button>

            </div>
        </div>

    </form>

</body>

</html>