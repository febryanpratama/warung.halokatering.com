@extends('layouts.main')

@section('meta')
    {!! App\Helpers\Format::meta($data['meta']) !!}
@endsection

@section('styles')
    <style>
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
<div class="post-area">
    <div *ngFor="let story of stories" class="post-card">
       <div class="container" >
          <div class="row">
            <div class="col-md-12">
                <div class="card px-2 py-4">
                    <h1 class="card-title text-center">{{ $data['title'] }}</h1>
                    {{-- <h6 class="card-subtitle text-center">Admin - {{ $data['subdomain']['name_subdomain'] }}</h6> --}}
                    <img 
                        src="{{ $data['path_image'] }}" 
                        class="d-block mx-auto my-2 rounded-top-2"
                        width="50%"
                        alt="/" 
                    />
                    <div class="card-body text-justify">
                        {!! $data['content'] !!}
                    </div>
                </div>
            </div>
          </div>
          
          <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Artikel Lainnya</h3>
            </div>

            @foreach ($data['related_artikel'] as $item)
                {{-- {{ dd($data->relatedArtikel) }} --}}
            <div class="col-md-4 mt-4">
                <div class="position-relative">
                    <!-- Gambar -->
                    <img 
                        src="{{ $item['artikel']['path_image'] ?? 'default-image.jpg' }}" 
                        class="d-block mx-auto rounded-top-2 w-100" 
                        alt="Image of {{ $item['artikel']['title'] }}" 
                    />
                    <!-- Judul di atas gambar -->
                    <a href="{{ $item['artikel']['slug'] }}" class="stretched-link">
                        <p class="position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-75 py-2 m-0">
                            {{ $item['artikel']['title'] }}
                        </p>
                    </a>
                </div>
            </div>
            
            @endforeach
          </div>
       </div>
    </div>
</div>
@endsection