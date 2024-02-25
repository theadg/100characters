@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen gap-5 py-28">
        <h1 class="text-9xl">Wall 📬</h1>
        <x-create-post-button />

        <div class="flex flex-wrap items-center justify-center gap-5 px-64 py-16">
            @forelse ($posts as $post)
                {{-- TODO: Make Post Component --}}
                @include('post.partials.list')
            @empty
                <div class="flex flex-col items-center gap-5">
                    <p class="text-9xl">Wala pa nagpopost 😔</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
