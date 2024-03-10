@extends('layouts.app')

@section('title', 'MCMPLC Events')

@section('content')

    <style>
        .thumbnail-container {
            height: 120px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }
    </style>

    <div class="container box-container">
        <h2>Gallery</h2>

        {{-- <div class="row gx-3 gy-3" data-bss-baguettebox=""> --}}
        <div class="row" data-bss-baguettebox="">
            @foreach ($images_list as $img)
                <div class="col-md-3 mb-4">
                    <div class="thumbnail-container">
                        <div class="thumbnail">
                            <a href="{{ Storage::disk('s3')->url($img->filepath) }}">
                                <img src="{{ Storage::disk('s3')->url($img->filepath) }}" alt="{{ $img->title }}">
                            </a>
                        </div>
                        <div class="caption">
                            <p>{{ $img->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
