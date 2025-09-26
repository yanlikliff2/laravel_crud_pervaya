<!DOCTYPE html>
<html class="h-full">
<head>
    <title>Laravel Project Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-cloak x-data="{ darkMode: $persist(false) }" :class="{'dark': darkMode}" class="antialiased bg-gray-100 dark:bg-gray-900 min-h-screen transition-colors duration-300 h-full">

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-end mb-6">
            <x-theme-toggle />
        </div>

        @yield('content')
    </div>
</div>

</body>
</html>