@extends('login.main')

@section('login')

    <div class="mb-3">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{route('auth')}}" method="POST">
            @csrf
        <label for="username" class="form-label" style="font-size: small"> Username <span style="color: red;">*</span></label>
        <input id="username" name="username" class="form-control" tabindex="1" style="font-size: small;" placeholder="Masukkan Username anda" type="text" value="" autocomplete="false" />
    </div>

    <div class="form-group small">
        <label for="password" class="font-weight-bold" style="font-size: small">Kata Sandi <span style="color: red;">*</span></label>
        <div class="input-group mb-2 mr-sm-2">
            <input id="password" name="password" class="form-control rounded-end" tabindex="2" style="  font-size: small;" placeholder="Masukkan kata sandi Anda" type="password" value="" autocomplete="off" />
            <i class="password-icon mdi mdi-eye text-primary" type="toggle" onclick="myFunction()"></i>
        </div>
    </div>

    <div class="d-grid gap-2 mt-3">
        <button type="submit" class="btn btn-primary">MASUK</button>
    </div>

    <div style="position: relative; font-size: small;" class="mt-1">
        <span class="text-primary" style="position: absolute; right: 0px;"> <a href="https://app.simpkb.id/akun/registrasi">Lupa Kata Sandi?</a></span>
    </div>

    <div class="copyright">
        <p><footer>&copy; Copyright 2023 Apotekkuy</footer></p>
    </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 card-color p-4 p-md-5 order-0 order-md-1">
        <div id="carouselExampleIndicators" class="carousel slide mt-md-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-img">
                        <img src="https://cdn.siap.id/s3/simpkb/asset%20img/login/login-1.png" alt="...">
                    </div>
                    <div class="carousel-text d-none d-md-block text-center" style="margin-top: 50px;">
                        <h4 class="text-white">
                            <strong>Apotekkuy</strong>
                        </h4>
                        <p class="text-white">Memudahkan Pasien untuk membeli obat dan mengecek jadwal konsultasi</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="https://cdn.siap.id/s3/simpkb/asset%20img/login/login-2.png" alt="...">
                    </div>
                    <div class "carousel-text d-none d-md-block text-center" style="margin-top: 50px;">
                    <h4 class="text-white">
                        <strong>Silahkan Masuk<br></strong>
                    </h4>
                    <p class="text-white">Anda bisa masuk menggunakan menggunakan Username & Kata Sandi yang telah diberikan</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
