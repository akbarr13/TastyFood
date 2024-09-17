<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasty Food | </title>
    <style>
        #top-banner {
            position: relative;
            background-image: url('http://tastyfood.test/assets/images/background2.png');


            background-repeat: no-repeat;
        }

    </style>
    <style>
        /* Fullscreen loader container */
        #loader-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        /* Hide the loader and show the content when loaded */
        .loaded #loader-container {
            display: none;
        }

        .loaded #content {
            display: block;
        }

        
    </style>
    @yield('css')
</head>

<body>
    <div id="loader-container">
        <dotlottie-player src="{{ asset('loader.json') }}" background="transparent" speed="2"
            style="width: 300px; height: 300px;" loop autoplay>
        </dotlottie-player>
    </div>
    @yield('page')
    @include('partials.footer')
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript">
    window.addEventListener('load', function() {
        // Hide the loader and show the content
        document.body.classList.add('loaded');
    });
</script>
<script type="module" src="https://unpkg.com/@material-tailwind/html@latest/scripts/popover.js"></script>

</html>
