<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('login/css/style.css')}}">
    <title>Login | Apotekkuy</title>
</head>

<body>

<div class="container">
    <div class="row justify-content-center align-item-center">
        <div class="col-lg-10 col-md-10 col-sm-12 py-md-5">


            <div class="row shadow ">
                <div class="col-lg-6 col-md-6 col-sm-12 card-none-color p-4 p-md-5 order-1 order-md-0">
                    <div class="text-center text-md-start">
                        <img src="{{asset('login/images/logo.png')}}" class="img-fluid mb-3 ml-md-4 ml-sm-5"
                             width="60px" alt="Logo">

                        <p class="mb-0">Selamat Datang</p>
                        <h4 style="font-weight: bolder;">Di Aplikasi Apotekkuy </h4>
                        <p style="font-size: small; color: grey;">Apotekkuy adalah sebuah platform atau aplikasi yang digunakan untuk memudahkan pengguna dalam membeli,dan mengecek jadwal konsultasi. </p>
                    </div>

                    <!--ini yield-->
                    @yield('login')
                    <!--ini yield-->

                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">

                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">

                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">

                    </script>
</body>

</html>
