@extends('layouts.app')

@section('title', 'MCMPLC News')

@section('content')

    <div class="container py-4 py-xl-5">
        <h2>News</h2>
        {{-- News Cards --}}
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">


            @foreach ($news as $article)
                {{-- Single Card --}}
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top w-100 d-block fit-cover" style="height: 200px;"
                            src="{{ Storage::disk('s3')->url($article->main_image) }}">

                        <div class="card-body d-flex flex-column p-4">
                            <a href="{{ route('news.show', ['id' => $article->id, 'page' => $news->currentPage()]) }}"
                                class="card-link text-decoration-none text-reset mb-3">
                                <p class="text-primary card-text mb-0">News</p>
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text"
                                    style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;">
                                    {{ strip_tags($article->content) }}
                                </p>
                            </a>
                            <div class="d-flex align-items-center mt-auto">
                                @if (mb_strlen($article->newsSource->logo_url) > 5)
                                    <img class="shadow rounded-circle flex-shrink-0 me-3 fit-cover" width="40"
                                        height="40" src="{{ Storage::disk('s3')->url($article->newsSource->logo_url) }}">
                                @else
                                    <img class="shadow rounded-circle flex-shrink-0 me-3 fit-cover" width="40"
                                        height="40" src="{{ Storage::disk('s3')->url('news_source/default.png') }}">
                                @endif

                                <p class="d-flex mb-0 small"> {{ $article->newsSource->title }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Card END --}}
            @endforeach


        </div>
        {{-- News Cards END --}}


        <div class="mt-5 d-flex justify-content-center">
            {{ $news->links() }}
        </div>
    </div>
@endsection
