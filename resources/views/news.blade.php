@extends('layouts.master')
@section('title', 'news')
@section('content')

<!--==================== MAIN ====================-->
<section class="home section" id="home">
    <h2 class="section__title blogs__title">NEWS</h2>
    <span class="section__subtitle blogs__title">TULISAN TULISAN</span>
    <div class="home__container container grid">
        <div class="home__card container grid">
            <img src="{{ asset('img/news/viral/motogp-mandalika-pake-pawang-hujan-jadi-daya-tarik-buat-orang-luar-negeri/fd2f07ad89e61aa2c92bc127c8c3c920e2458a1f.jpg') }}" alt="" class="home__image">
            <div class="home__card-text">
                <span class="home__kategori">VIRAL</span>
                <h3 class="home__title">MOTOGP MANDALIKA PAKE PAWANG HUJAN, JADI DAYA TARIK BUAT ORANG LUAR
                    NEGERI</h3>
                <span class="home__writer">Garry | March 21, 2022<br></span>
            </div>
        </div>
        <div class="home__card container grid">
            <img src="{{ asset('img/news/sports/kerja-keras-hingga-menjadi-legenda-seperti-tom-brady/c571a7a7d6046e7db940fdf595632f9e3132e5f9.jpg') }}" alt="" class="home__image">
            <div class="home__card-text">
                <span class="home__kategori">SPORTS</span>
                <h3 class="home__title">KERJA KERAS HINGGA MENJADI LEGENDA SEPERTI TOM BRADY</h3>
                <span class="home__writer">Prongs | March 01, 2022<br></span>
            </div>
        </div>
        <div class="home__card container grid">
            <img src="{{ asset('img/news/tekno/cara-kreatif-brand-pasarkan-produknya-lewat-nft-di-era-digital/52db3b4565db430913d54d8970ada020c995c596.jpg') }}" alt="" class="home__image">
            <div class="home__card-text">
                <span class="home__kategori">TEKNO</span>
                <h3 class="home__title">CARA KREATIF BRAND PASARKAN PRODUKNYA LEWAT NFT DI ERA DIGITAL</h3>
                <span class="home__writer">Garry | March 29, 2022<br></span>
            </div>
        </div>
    </div>
</section>
<!--==================== NAVIGATION FLOAT ====================-->
<section class="navigation section section__float" id="navigation">
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Search">
        <button type="submit" class="searchButton">
            <i class="uil uil-search"></i>
        </button>
    </div>
    <h2 class="section__title blogs__title">PALING POPULER</h2>
    <span class="section__subtitle blogs__title">TULISAN HITS</span>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/pop/coda-2021-kisah-hangat-dari-sebuah-keluarga-tuli-yang-pantas-dianugerahi-academy-awards/7b2a46b3832a4ab2669052f6695960654b5d18f4.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">MENILIK ASYIKNYA DUNIA SCREENWRITING BERSAMA ILMA FIRDA
            </div>
            <span class="popular__kategori">POP</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/tekno/8-startup-fintech-asal-indonesia-lolos-ke-y-combinator-winter-demo-day-2022/4a2ed83830d5e9ef4d281f161ed72b0544c94dc8.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">8 STARTUP FINTECH ASAL INDONESIA LOLOS KE Y COMBINATOR WINTER DEMO
                DAY 2022
            </div>
            <span class="popular__kategori">TEKNO</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/kreatif/trik-ed-sheeran-biar-nggak-kena-tuduhan-plagiarisme-lagi/a0f3fc381e4b912ac19e528ce939e1d0ae3e9acb.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">TRIK ED SHEERAN BIAR NGGAK KENA TUDUHAN PLAGIARISME LAGI
            </div>
            <span class="popular__kategori">KREATIF</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/esensi/dari-rokok-pindah-ke-vape-sama-saja-atau-sebuah-solusi/39d902e42575631a4dd074daf0228b88780eb5d0.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">DARI ROKOK PINDAH KE VAPE, SAMA SAJA ATAU SEBUAH SOLUSI?
            </div>
            <span class="popular__kategori">ESENSI</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/esensi/bagaimana-games-mencerminkan-budaya-masyarakat/8b026cb0490abaf1f3c3fde8e85d3d0a54ea176b.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">BAGAIMANA GAMES MENCERMINKAN BUDAYA MASYARAKAT
            </div>
            <span class="popular__kategori">ESENSI</span>
        </div>
    </div>
    <div class="help__container container">
        <h4 class="help__text">Jika ada yang ingin kalian tanyakan silahkan hubungi sosial media kami ya!!</h4>
        <img class="help__img" src="assets/img/nindy-mobile_1.png" alt="">
    </div>
</section>

<!--==================== HOME BLOG ====================-->

<section class="blogs section" id="blogs">
    <div class="search__nonfloat">
        <input type="text" class="searchTerm" placeholder="Search">
        <button type="submit" class="searchButton">
            <i class="uil uil-search"></i>
        </button>
    </div>
    <div class="line__separator"></div>
    <h2 class="section__title blogs__title">REKOMENDASI</h2>
    <span class="section__subtitle blogs__title">TULISAN LAINNYA</span>
    <div class="blogs__container">
        <div class="blog__card container grid">
            <img src="{{ asset('img/news/figur/menilik-asyiknya-dunia-screenwriting-bersama-ilma-firda/4a2ed83830d5e9ef4d281f161ed72b0544c94dc8.jpg') }}" alt="" class="blog__image">
            <div class="blog__card-text">
                <span class="blog__kategori">FIGUR</span>
                <h3 class="blog__title">MENILIK ASYIKNYA DUNIA SCREENWRITING BERSAMA ILMA FIRDA</h3>
                <p class="blog__overview">Di balik konten audio visual yang lu bisa tonton di bioskop, YouTube,
                    TV
                    atau Netflix itu, sebenernya ada peran signifikan dari seorang penulis naskah. Nah, seperti
                    apa
                    sih profesi kreatif satu ini? Yuk kita kupas bareng Ilma Firda, scriptwriter berpengalaman
                    yang
                    ada di balik serial “Tukang Ojek Pengkolan”.</p>
                <span class="blog__writer">Akhlis | March 02, 2022<br></span>
                <a href="#" class="btn__read">read<i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
        <div class="blog__card container grid">
            <img src="{{ asset('img/news/sports/kerja-keras-hingga-menjadi-legenda-seperti-tom-brady/c571a7a7d6046e7db940fdf595632f9e3132e5f9.jpg') }}" alt="" class="blog__image">
            <div class="blog__card-text">
                <span class="blog__kategori">SPORTS</span>
                <h3 class="blog__title">KERJA KERAS HINGGA MENJADI LEGENDA SEPERTI TOM BRADY</h3>
                <p class="blog__overview">Orang bijak pernah berkata bahwasanya orang yang memiliki berbakat
                    bisa melangkah lebih jauh dari orang biasa. Tapi di dunia ini kerja keras mampu mengalahkan
                    bakat. Salah satu contoh nyatanya adalah Tom Brady.</p>
                <span class="blog__writer">Prongs | March 01, 2022<br></span>
                <a href="#" class="btn__read">read<i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
        <div class="blog__card container grid">
            <img src="{{ asset('img/news/tekno/cara-kreatif-brand-pasarkan-produknya-lewat-nft-di-era-digital/52db3b4565db430913d54d8970ada020c995c596.jpg') }}" alt="" class="blog__image">
            <div class="blog__card-text">
                <span class="blog__kategori">TEKNO</span>
                <h3 class="blog__title">CARA KREATIF BRAND PASARKAN PRODUKNYA LEWAT NFT DI ERA DIGITAL</h3>
                <p class="blog__overview">Semakin banyak perusahaan atau brand terkenal dunia yang memasarkan
                    produk lewat jalur NFT. Beberapa menganggap ini jadi cara yang kreatif, dan ada juga
                    menganggap hal ini dapat merusak ekosistem NFT. Lalu, tepatkah sebuah brand mempromosikan
                    produknya lewat NFT?</p>
                <span class="blog__writer">Garry | March 29, 2022<br></span>
                <a href="#" class="btn__read">read<i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
        <div class="blog__card container grid">
            <img src="{{ asset('img/news/viral/motogp-mandalika-pake-pawang-hujan-jadi-daya-tarik-buat-orang-luar-negeri/fd2f07ad89e61aa2c92bc127c8c3c920e2458a1f.jpg') }}" alt="" class="blog__image">
            <div class="blog__card-text">
                <span class="blog__kategori">VIRAL</span>
                <h3 class="blog__title">MOTOGP MANDALIKA PAKE PAWANG HUJAN, JADI DAYA TARIK BUAT ORANG LUAR
                    NEGERI</h3>
                <p class="blog__overview">Ada pemandangan unik di tengah-tengah perhelatan MotoGP Mandalika
                    tahun ini, yaitu sosok Rara Isti Wulandari, pawang hujan andalan di event-event besar yang
                    berhasil menyita perhatian penonton layar kaca di seluruh dunia</p>
                <span class="blog__writer">Garry | March 21, 2022<br></span>
                <a href="#" class="btn__read">read<i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
        <div class="blog__card container grid">
            <img src="{{ asset('img/news/viral/ananda-sukarlan-gelar-kompetisi-piano-nft-pertama-di-dunia/4478e5dd3b96e720b888722a1e5a1dc162f2b220.jpg') }}" alt="" class="blog__image">
            <div class="blog__card-text">
                <span class="blog__kategori">VIRAL</span>
                <h3 class="blog__title">ANANDA SUKARLAN GELAR KOMPETISI PIANO NFT PERTAMA DI DUNIA</h3>
                <p class="blog__overview">NFT bukan hanya menjadi inovasi yang mutakhir untuk pegiat desain
                    visual, tapi juga pegiat musik. Tak terkecuali musik klasik.Kali ini, Ananda kembali
                    menghadirkan ide yang 'mengawinkan' musik klasik dengan NFT bertajuk Kompetisi Piano NFT
                    pertama di dunia.</p>
                <span class="blog__writer">Grace Angel | April 10, 2022<br></span>
                <a href="#" class="btn__read">read<i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!--==================== NAVIGATION NON FLOAT ====================-->

<section class="navigation__nonfloat section section__float" id="navigation-nonfloat">
    <h2 class="section__title blogs__title">PALING POPULER</h2>
    <span class="section__subtitle blogs__title">TULISAN HITS</span>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/pop/coda-2021-kisah-hangat-dari-sebuah-keluarga-tuli-yang-pantas-dianugerahi-academy-awards/7b2a46b3832a4ab2669052f6695960654b5d18f4.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">MENILIK ASYIKNYA DUNIA SCREENWRITING BERSAMA ILMA FIRDA
            </div>
            <span class="popular__kategori">POP</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/tekno/8-startup-fintech-asal-indonesia-lolos-ke-y-combinator-winter-demo-day-2022/4a2ed83830d5e9ef4d281f161ed72b0544c94dc8.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">8 STARTUP FINTECH ASAL INDONESIA LOLOS KE Y COMBINATOR WINTER DEMO
                DAY 2022
            </div>
            <span class="popular__kategori">TEKNO</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/kreatif/trik-ed-sheeran-biar-nggak-kena-tuduhan-plagiarisme-lagi/a0f3fc381e4b912ac19e528ce939e1d0ae3e9acb.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">TRIK ED SHEERAN BIAR NGGAK KENA TUDUHAN PLAGIARISME LAGI
            </div>
            <span class="popular__kategori">KREATIF</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/esensi/dari-rokok-pindah-ke-vape-sama-saja-atau-sebuah-solusi/39d902e42575631a4dd074daf0228b88780eb5d0.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">DARI ROKOK PINDAH KE VAPE, SAMA SAJA ATAU SEBUAH SOLUSI?
            </div>
            <span class="popular__kategori">ESENSI</span>
        </div>
    </div>
    <div class="popular__card container grid">
        <img src="{{ asset('img/news/esensi/bagaimana-games-mencerminkan-budaya-masyarakat/8b026cb0490abaf1f3c3fde8e85d3d0a54ea176b.jpg') }}" alt="" class="popular__image">
        <div class="pupular__card-text">
            <div class="popular__title">BAGAIMANA GAMES MENCERMINKAN BUDAYA MASYARAKAT
            </div>
            <span class="popular__kategori">ESENSI</span>
        </div>
    </div>
    <div class="help__container container">
        <h4 class="help__text">Jika ada yang ingin kalian tanyakan silahkan hubungi sosial media kami ya!!</h4>
        <img class="help__img" src="assets/img/nindy-mobile_1.png" alt="">
    </div>
</section>

@endsection