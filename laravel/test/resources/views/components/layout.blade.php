<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <!-- Title of the page -->
    <title>{{$title_page}}</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- External stylesheet for Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom component for animation -->
    <x-animate></x-animate>
</head>

<body class="h-full">
<div class="min-h-full">

    <!-- Navigation bar -->
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <!-- Logo image -->
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                             alt="">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Navigation Bar links -->
                            <x-nav></x-nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile View -->
            <x-mobile></x-mobile>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Heading title -->
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading_title}}</h1>
        </div>
    </header>

    <!-- Main content section -->
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{$slot}}
        </div>
    </main>
</div>

<!-- Custom component for animation -->
<x-animate></x-animate>
