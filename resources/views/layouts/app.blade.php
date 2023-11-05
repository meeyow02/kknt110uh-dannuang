<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="shortcut icon" href="{{ asset('assets/img/Logo Bulukumba.png') }}" type="image/x-icon">
    <title>@yield('title') | KKNT-UH Gel.110 </title>
</head>
<body>
    <div class="w-full bg-white">

        <main>
            {{ $slot }}
            <x-footer />
        </main>
        
    </div>

    @yield('scripts')
    
</body>
</html>