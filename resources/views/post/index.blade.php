@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen gap-5 py-28">
        <div class="text-center sm:w-1/2">
            <h1 class="font-semibold text-7xl text-wrap">
                Sometimes, all you need is 100 characters (or less) to
            </h1>

        </div>
        <p class="text-6xl">👇</p>
        <x-create-post-button />
        <p class="text-3xl">{{ $postsCount }} thoughts written</p>

        <div class="flex flex-wrap items-center justify-center w-8/12 gap-5 py-16 ">
            @forelse ($posts as $post)
                @include('post.partials.list')
            @empty
                <div class="flex flex-col items-center gap-5">
                    <p class="text-9xl">Wala pa nagpopost 😔</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
