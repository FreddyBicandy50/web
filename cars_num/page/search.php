<?php require("cars_num/partials/template.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f0f4f8;
            /* You can adjust the background color if needed */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            margin-bottom: 8px;
        }

        .form-container input {
            /* Add any additional input styling here */
        }

        .form-container button {
            margin-top: 20px;
            /* Add any additional button styling here */
        }
    </style>
</head>

<body>

    <form method="POST" action="/result" class="form-container">
        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Plate Number</label>
        <div class="relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <span class="text-gray-500 sm:text-sm"></span>
            </div>

            <input type="text" name="price" id="price" class="block w-50 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="00-00-00">

            <button class='rounded-md bg-indigo-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600' id="search" name="search">search</button>
        </div>
    </form>

</body>

</html>