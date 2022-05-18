<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC-COMICS</title>
</head>
<body>
    <!--header>HEADER</header-->
    @include('partials/header')

    <main>
        <div id="card-section">
            @yield('lista')
        </div>
        <div id="merchandising-section">SEZIONE</div>
        <div id="contact-section">SEZIONE</div>
    </main>

    @include('partials/footer')
    <!--footer>FOOTER</footer-->
</body>
</html>