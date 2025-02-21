@extends('layouts.main')

@section('meta')
    {!! App\Helpers\Format::meta($data['meta']) !!}
@endsection

@section('content')
<div class="post-area">
    <div *ngFor="let story of stories" class="post-card">
       <div class="container" >
          <div class="row">
            <div class="col-md-12">
                <div class="card py-4">
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