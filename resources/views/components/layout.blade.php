<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @php
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    @endphp
    <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
    <script src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}" defer></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>{{ $titlepage ?? 'NT CORP HRIS' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('companyLogo.ico') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/embla-carousel/embla-carousel.umd.js"></script>

</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar></x-navbar>

        
        <main>
            <div class="mx-auto max-w-7xl px-4 pb-2 sm:px-6 lg:px-8">
                <x-header>{{ $title }}</x-header>
                {{ $slot }}
                <x-footer></x-footer>
            </div>
        </main>
    </div>


</body>

</html>
