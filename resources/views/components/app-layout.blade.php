<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        {{-- {{ $title ? $title / 'Laravel 11' : 'Laravel 11' }} --}}
        @isset($title)
            {{ $title }} / Laravel 11
        @else
            Laravel 11
        @endisset
    </title>

</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        @isset($heading)
            <header class="bg-white shadow">
                <div class="mx-auto px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                </div>
            </header>
        @endisset
        <main>
            <div class="w-ful">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
