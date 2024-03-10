@extends('layouts.app')

@section('title', $pageTitle)

@section('content')
    @include('pdf_modal')

    {{--  'fileLists' --}}

    <div class="container box-container">
        <h2>{{ $pageTitle }}</h2>
        <div class="mt-3 mb-3">
            {!! $pageBody !!}
        </div>

        @foreach ($fileDetails as $file)
            <div class="row mt-4">
                <div class="col d-flex flex-row justify-content-center align-items-center mt4">
                    <span class="fs-5 px-4" style="text-align: center;">{{ $file->title }}
                    </span>

                    <a href="#" class="pdf-link btn btn-outline-info mx-2"
                        data-pdf="{{ Storage::disk('s3')->url($file->file_path) }}">View
                        PDF</a>

                    <a href="{{ Storage::disk('s3')->url($file->file_path) }}" class="btn btn-outline-success mx-2"
                        download="{{ $file->file_path }}" target="blank">Download</a>

                </div>
            </div>
        @endforeach
    </div>

    </div>

@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            $('.pdf-link').click(function() {
                var pdfUrl = $(this).data('pdf');
                $('#pdfFrame').attr('src', pdfUrl);
                $('#pdfModal').modal('show');
            });
        });
    </script>
@endsection
