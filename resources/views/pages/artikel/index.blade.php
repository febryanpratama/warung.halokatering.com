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
                           {{-- @foreach ($category as $item)
                              <div class="col story-bx" style="cursor: default">
                                 <img src="{{ $item->path_icon }}" alt="/" />
                              </div>
                           @endforeach --}}
                           {{-- <div class="col story-bx">
                           <img src="https://api.justtalk.io//sticker/Love Rollercoasters.png" alt="/" />
                           </div>
                           <div class="col story-bx">
                           <img src="https://api.justtalk.io//sticker/Glow-Up Goals.png" alt="/" />
                           </div>
                           <div class="col story-bx">
                           <img src="https://api.justtalk.io//sticker/Who Even Am I.png" alt="/" />
                           </div>
                           <div class="col story-bx">
                           <img src="https://api.justtalk.io//sticker/Planet Panic.png" alt="/" />
                           </div> --}}
                        </div>
                  </div>
                  <div class="container text-center container1">
                        <div class="row">
                           {{-- @foreach ($category as $item)
                           <div class="col">
                                    <a href="https://{{ $item->slug }}.ceritain.com">
                                    <span class="detail">{{ $item->name }}</span>
                                 </a>
                                 </div>
                           @endforeach --}}
                           {{-- <div class="col">
                              <span class="detail">Love Rollercoasters</span>
                           </div>
                           <div class="col">
                              <span class="detail">Glow-Up Goals</span>
                           </div>
                           <div class="col">
                              <span class="detail">Who Even Am I</span>
                           </div>
                           <div class="col">
                              <span class="detail">Planet Panic</span>
                           </div> --}}
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
          {{-- <div class="row">

            @foreach ($data as $item)
                <div class="col-md-4 h-100">
                    <div class="card">
                        <img 
                            src="{{ $item['path_image'] }}" 
                            class="d-block mx-auto rounded-top-2"
                            alt="/" 
                        />
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p class="text-ellipsis">{!! $item['content'] !!}</p>
                            <div class="d-flex justify-content-end">
                                <a href="" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div> --}}
          <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($data as $item)
                <div class="col">
                    <div class="card h-100">
                        <img 
                            src="{{ $item['path_image'] }}" 
                            class="card-img-top" 
                            alt="/" 
                        />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <!-- Konten scrollable -->
                            <div class="card-text overflow-hidden flex-grow-1" style="max-height: 200px;">
                                {{-- <div class="card-text text-truncate" style="max-height: 150px; overflow: hidden;"> --}}
                                {!! $item['content'] !!}
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('artikel/'.$item['slug']) }}" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        
       </div>
    </div>
</div>
@endsection