@extends('layouts.app')

@section('content')
    <div class="flex flex-col min-h-screen justify-center items-center gap-5">
        <h1 class="text-5xl">Posts</h1>
        @forelse ($posts as $post)
            <div class="border rounded-lg p-5">
                {{ $post->content }}
                {{ $post->date_created }}
            </div>
        @empty
        <div class="flex flex-col items-center gap-5">
            <p class="text-9xl">Wala pa nagpopost 😔</p>
        </div>
        @endforelse

        <x-create-post-button />

    </div>


@endsection
