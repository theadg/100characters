@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen flex-col items-center justify-center gap-5 py-28">
        <h1 class="text-9xl">Wall 📬</h1>
        <x-create-post-button />

        <div class="flex flex-wrap items-center justify-center gap-5 px-64 py-16">
            @forelse ($posts as $post)
                {{-- TODO: Make Post Component --}}
                <div class="h-64 w-96 rounded-lg border border-gray-600 p-5">
                    <p class="text-2xl font-medium">
                        {{ $post->content }}
                    </p>
                    <p>
                        {{ $post->date_created }}
                    </p>
                </div>
            @empty
                <div class="flex flex-col items-center gap-5">
                    <p class="text-9xl">Wala pa nagpopost 😔</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
