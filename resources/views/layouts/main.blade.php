<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {{-- <title>Laravel</title> --}}

      @yield('meta')
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- Styles -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <title>{{ '  Warung.HaloKatering.com Temukan Warung & Katering Terbaik untuk Kuliner Lezat | Warung.HaloKatering.com' }}</title>
<meta name="title" content="Temukan Warung & Katering Terbaik untuk Kuliner Lezat | Warung.HaloKatering.com">
<meta name="description" content="Warung.HaloKatering.com mempertemukan Anda dengan berbagai warung makan dan vendor katering profesional untuk pengalaman kuliner yang lezat dan memuaskan sesuai kebutuhan Anda.">
<meta name="keywords" content="warung makan, pesan katering, katering murah, katering sehat, katering harian, katering pernikahan, katering acara, kuliner enak, warung nasi, HaloKatering">
<meta name="author" content="Warung.HaloKatering.com">
<meta property="og:title" content="Temukan Warung & Katering Terbaik untuk Kuliner Lezat | Warung.HaloKatering.com">
<meta property="og:description" content="Cari warung makan dan katering terpercaya? Warung.HaloKatering.com menyediakan pilihan terbaik untuk kuliner lezat dan berkualitas.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://warung.halokatering.com">
<meta property="og:image" content="https://res.cloudinary.com/dvdkj3x6t/image/upload/v1747205602/halokatering_ph72wx.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Temukan Warung & Katering Terbaik untuk Kuliner Lezat | Warung.HaloKatering.com">
<meta name="twitter:description" content="Dapatkan pengalaman kuliner terbaik dari berbagai warung makan dan vendor katering terpercaya hanya di Warung.HaloKatering.com.">
<meta name="twitter:image" content="https://res.cloudinary.com/dvdkj3x6t/image/upload/v1747205602/halokatering_ph72wx.png">

      <style>
         .card {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

         .text-ellipsis {
             display: -webkit-box;
             -webkit-line-clamp: 3; /* Tentukan jumlah baris yang ingin ditampilkan */
             -webkit-box-orient: vertical;
             overflow: hidden;
             text-overflow: ellipsis;
             max-height: 4.5em; /* Sesuaikan dengan tinggi satu baris teks */
         }
     </style>
     @yield('styles')
   </head>
   <body class="antialiased">
      <!-- Header -->
      <div class="header" style="background-color: #fff3f5">
         <div class="container" style="background-color: #fff3f5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #fff3f5 !important">
               <div class="container-fluid" style="background-color: #fff3f5">
                  <a class="navbar-brand" href="https://www.halokatering.com">
                     <img src="https://www.halokatering.com/_astro/logo.Do7ZvxMk.webp" style="width: 100px; height: 70px" alt="Logo" class="logo-img" (click)="reloadPage()" />
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                     <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="https://restoran.halokatering.com">Restoran</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://warung.halokatering.com">Warung</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://rumahmakan.halokatering.com">Rumah Makan</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle font-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>Katering</b>
                           </a>
                           <ul class="dropdown-menu" style="min-width: 220px;">
                              <li><a class="dropdown-item" href="https://katering.halokatering.com" >Katering</a></li>
                              <li><a class="dropdown-item" href="https://kateringjakarta.halokatering.com" >Katering Jakarta</a></li>
                              <li><a class="dropdown-item" href="https://kateringsehat.halokatering.com" >Katering Sehat</a></li>
                              <li><a class="dropdown-item" href="https://kateringmurah.halokatering.com" >Katering Murah</a></li>
                              <li><a class="dropdown-item" href="https://kateringkantor.halokatering.com" >Katering Kantor</a></li>
                              <li><a class="dropdown-item" href="https://kateringsurabaya.halokatering.com" >Katering Surabaya</a></li>
                              <li><a class="dropdown-item" href="https://kateringharian.halokatering.com" >Katering Harian</a></li>
                              <li><a class="dropdown-item" href="https://kateringrumahan.halokatering.com" >Katering Rumahan</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <div class="dark-overlay"></div>
      <!-- Header End -->
      <!-- Page Content -->
      <div class="page-content">
      <div class="content-inner pt-0">
      <div class="container p-b50" style="background-color: #e6e8e6">
         @yield('content')
      </div>
      <!-- Page Content End-->
      <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-0X74DBTNBE"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-0X74DBTNBE'); </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   </body>
</html>