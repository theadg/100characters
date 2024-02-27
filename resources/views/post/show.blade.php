@extends('layouts.app')

@php
    $routeIsSaveParam = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY) == 'save';
@endphp

@section('content')
    {{-- min-h-screen --}}
    <div class="flex px-5 flex-col items-center justify-center min-h-[87vh] gap-5">
        @if (!$routeIsSaveParam)
            <div class="px-32 text-center sm:w-1/2">
                <h1 class="text-5xl font-semibold sm:text-5xl text-wrap">
                    Share this note to someone! ✨
                </h1>

                <x-social-share-buttons />
            </div>
        @else
            <div class="px-32 text-center sm:w-1/2">
                <h1 class="text-5xl font-semibold sm:text-5xl text-wrap">
                    ✨
                </h1>
            </div>
        @endif

        @include('post.partials.list')
    </div>
@endsection
