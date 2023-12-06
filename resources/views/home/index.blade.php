
@extends('home.main')
@section('home')

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <img src="{{'user/img/apotek.png'}}" alt="home image" class="home__img" />

                <div class="home__data">
                    <h1 class="home__title">
                        Temukan Obat dan cek jadwal konsultasi anda
                    </h1>
                    <p class="home__description">Nikmati pengalaman kesehatan yang luar biasa dengan layanan kami. Kami siap
                        membantu Anda menemukan obat-obatan dan produk kesehatan yang Anda butuhkan dengan cepat dan mudah.</p>
                </div>
            </div>

        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <span class="section__subtitle">About Us</span>
                    <h2 class="section__title about__title">
                        Kami Peduli pada Kesehatan Anda
                    </h2>

                    <p class="about__description">Kami adalah Apotekkuy, platform yang didedikasikan untuk menjadikan perawatan
                        kesehatan Anda lebih mudah. Di Apotekkuy, kami menyediakan solusi lengkap untuk membeli obat dan produk
                        kesehatan, serta menjadwalkan konsultasi medis dengan cepat dan efisien. Keunggulan kami adalah memberikan
                        akses yang lebih baik dan informasi yang akurat untuk mendukung kesehatan Anda. Dengan komitmen untuk
                        layanan yang andal dan terpercaya, Apotekkuy hadir untuk melayani kebutuhan kesehatan Anda.</p>
                </div>
                <img src="{{'user/img/kasir.jpg'}}" alt="about image" class="about__img" />
            </div>

        </section>

        <!--==================== POPULAR ====================-->
        <section class="popular section" id="Obat">
            <span class="section__subtitle">Obat Obatan</span>
            <h2 class="section__title">Produk obat kami</h2>

            
            @foreach ($medicine as $item)
            <div class="popular__container container grid">
                <article class="popular__card">
                    <img src="{{asset($item['photo'])}}" alt="popular image" class="popular__img" />
                    <h3 class="popular__name">{{ $item['type'] }}</h3>

                    <span class="popular__description">{{ $item['name'] }}</span>
                    <span class="popular__price">{{ $item['price'] }}</span>

                    <button class="popular__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>
            </div>
            @endforeach
        </section>

        <!-- ==================== RECENTLY ====================
          <section class="recently section" id="recently">
            <div class="recently__container container grid">
              <div class="recently__data">
                <span class="section__subtitle">Recently Added</span>
                <h2 class="section__title">Pastel</h2>

                <p class="recently__description">Take a look at what's new. And do not deprive yourself of a good snacks, enjoy and be happy.</p>

                <a href="#" class="button"> Order Now<i class="ri-arrow-right-line"></i> </a>

                 <img src="assets/img/spinach-leaf.png" alt="recently image" class="recenlty__data-img" />
              </div>
              <img src="assets/img/pastel.png" alt="recently image" class="recently__img" />
            </div>
            <img src="assets/img/leaf-branch-2.png" alt="recently image" class="recently__leaf-1" />
            <img src="assets/img/leaf-branch-3.png" alt="recently image" class="recently__leaf-2" />
          </section> -->

@endsection
