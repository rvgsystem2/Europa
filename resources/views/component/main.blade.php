<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Euro</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
  <!-- AOS (Animate On Scroll) -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>

</head>
<body>
    @include('component.header')

    @yield('content')

    @include('component.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            AOS.init({
                duration: 1000, // Animation duration
                easing: "ease-in-out", // Smoother easing
                once: true // Only animate once
            });
        });
    </script>
</body>
</html>
