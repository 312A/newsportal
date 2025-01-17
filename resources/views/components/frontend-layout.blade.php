<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6721c32bf9d5250012f5d97e&product=inline-share-buttons&source=platform" async="async"></script>
</head>
<body>
    <header>
        <x-frontend-topbar/>

    </header>
    <main>
        <x-frontend-navbar/>
        {{$slot}}
    </main>
    <footer>

    </footer>
</body>
</html>
