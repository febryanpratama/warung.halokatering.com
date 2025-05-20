@extends('layouts.main')

@section('styles')
    <style>
      .card {
         border-radius: 15px;
         transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
         }

         .card:hover {
         transform: scale(1.05);
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
         }

         .card-body img {
         width: 80px;
         height: 80px;
         object-fit: cover;
         }

         p {
         font-size: 14px;
         line-height: 1.4;
         }

         .container-fluid {
         background-color: #f5f5f5; /* Sesuaikan dengan background Anda */
         }

         .card-title {
            font-size: 1.5rem;       /* Default size (24px jika root font-size 16px) */
            font-weight: 700;        /* Tebal */
            line-height: 1.2;
            margin-bottom: 0.75rem;  /* Jarak bawah */
            }

            /* Responsif untuk tablet */
            @media (max-width: 768px) {
            .card-title {
               font-size: 1.25rem;    /* Ukuran sedikit lebih kecil */
            }
            }

            /* Responsif untuk ponsel */
            @media (max-width: 480px) {
            .card-title {
               font-size: 1.1rem;     /* Ukuran kecil untuk layar sempit */
            }
            }

    </style>
@endsection

@section('content')
<!-- STORY -->
<div class="author-notification mb-4">
    <div class="swiper-btn-center-lr my-0">
       <div class="swiper-container categorie-swiper">
          {{-- <div class="swiper-wrapper">
             <div class="swiper-slide">
                <a href="" class="categore-box">
                   <div class="container text-center">
                      <div class="row d-flex justify-content-evenly">
                        @foreach ($category as $item)
                        <div class="col-md-2 col-6 mb-3">
                           <a href="https://{{ $item->slug }}.ceritain.com" class="text-decoration-none">
                             <div class="card border-0 shadow-sm h-100">
                               <div class="card-body d-flex flex-column align-items-center">
                                 <img src="{{ $item->path_icon }}" alt="Mental Health Struggle" class="img-fluid rounded-circle border border-danger p-2" />
                                 <p class="text-dark fw-semibold">{{ $item->name }}</p>
                               </div>
                             </div>
                           </a>
                         </div>
                        @endforeach
                      </div>
                   </div>
                </a>
             </div>
          </div> --}}
          <div class="swiper-wrapper">
                        
            <div class="swiper-slide">
               <a href="#" class="categore-box">
                  <div class="container text-center">
                        <div class="row">
                        </div>
                  </div>
                  <div class="container text-center container1">
                        <div class="row">
                        </div>
                  </div>
               </a>
            </div>
          </div>
       </div>
    </div>
</div>
 <!-- STORY -->
<div class="post-area">
    <div *ngFor="let story of stories" class="post-card">
       <div class="container" >
          <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($data as $item)
                <div class="col">
                  <a href="{{ url('artikel/'.$item['slug']) }}" class="text-black">
                    <div class="card h-100">
                        <img 
                            src="{{ $item['path_image'] }}" 
                            class="card-img-top" 
                            alt="/" 
                        />
                        <div class="card-body d-flex flex-column">
                            <h1 class="card-title">{{ $item['title'] }}</h1>
                            <!-- Konten scrollable -->
                            <div class="card-text overflow-hidden flex-grow-1" style="max-height: 200px;">
                                {{-- <div class="card-text text-truncate" style="max-height: 150px; overflow: hidden;"> --}}
                                {!! $item['content'] !!}
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('artikel/'.$item['slug']) }}" class="btn btn-sm btn-outline-primary">Baca Detail</a>
                            </div>
                        </div>
                    </div>
                  </a>
                </div>
            @endforeach
        </div>
        
        
       </div>
    </div>
</div>
@endsection