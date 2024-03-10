@extends('layouts.app')

@section('title', 'Meghna Cement Mills PLC.')

@section('content')


    <div class="container news-container">
        <figure>
            <blockquote class="blockquote">
                <p class="fs-4 mb-0">{{ $news->title }}</p>
            </blockquote>
            <figcaption class="blockquote-footer">{{ $news->formatted_published_date }}</figcaption>
        </figure>

        <img class="center-block details-img fit-cover" src="{{ Storage::disk('s3')->url($news->main_image) }}">

        <p class="px-2">{!! $news->content !!}</p>

        <div class="mb-3">
            @foreach ($news->tags as $tag)
                @if ($tag != '')
                    <button type="button" class="btn btn-secondary btn-sm">{{ $tag }}</button>
                @endif
            @endforeach
        </div>


        <a class="d-flex mt-auto  align-items-center  text-decoration-none" href="{{ $news->source_link }}" target="_blank">
            @if (mb_strlen($news->newsSource->logo_url) > 5)
                <img class="shadow rounded-circle flex-shrink-0 me-3 fit-cover" width="40" height="40"
                    src="{{ Storage::disk('s3')->url($news->newsSource->logo_url) }}">
            @else
                <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="40" height="40"
                    src="{{ Storage::disk('s3')->url('news_source/default.png') }}">
            @endif
            <p class="d-flex mb-0 small"> {{ $news->newsSource->title }}</p>
        </a>

        <div class="mt-5 d-flex justify-content-between">

            <a class="btn btn-outline-primary btn-sm" href="{{ route('news.index', ['page' => $currentPage]) }}">Back to
                News List</a>

            <div>
                @if ($nextNews)
                    <a href="{{ route('news.show', ['id' => $nextNews->id, 'page' => $currentPage]) }}"
                        class="btn btn-outline-primary btn-sm">Latest
                        News</a>
                @endif
                @if ($previousNews)
                    <a href="{{ route('news.show', ['id' => $previousNews->id, 'page' => $currentPage]) }}"
                        class="btn btn-outline-primary btn-sm">Previous
                        News</a>
                @endif
            </div>
        </div>
    </div>

@endsection
