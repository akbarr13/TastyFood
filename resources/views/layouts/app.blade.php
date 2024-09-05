<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #top-banner {
            position: relative;
            background-image: url('http://tastyfood.test/assets/images/background2.png');
            height: 75vh;
            background-size: 100%;
            background-repeat: no-repeat;



        }
        body {
            visibility: hidden;
        }
    </style>
    @yield('css')
</head>

<body>
    @yield('page')
    @include('partials.footer')
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript">

    window.addEventListener("load", function(){
       document.body.style.visibility = "visible";
    });
</script>

</html>
