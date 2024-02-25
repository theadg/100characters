@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen gap-5 px-5 py-28">
        <div class="text-center sm:w-1/2">
            <h1 class="text-5xl font-semibold sm:text-6xl text-wrap">
                Sometimes, all you need is 100 characters (or less) to
            </h1>

        </div>
        <p class="text-6xl">👇</p>
        <x-create-post-button />
        <p class="text-3xl">{{ $postsCount }} thoughts written</p>

        <div class="flex flex-wrap items-center justify-center w-8/12 gap-5 py-16 posts-container ">
            @forelse ($posts as $post)
                <a class="duration-100 ease-in hover:scale-125" href="{{ route('posts.show', $post->id) }}">
                    @include('post.partials.list')
                </a>
            @empty
                <div class="flex flex-col items-center gap-5">
                    <p class="text-9xl">Wala pa nagpopost 😔</p>
                </div>
            @endforelse
        </div>
        {{ $posts->links() }}
    </div>
@endsection
<style>

</style>
@push('scripts')
    {{-- <script>
        const elem = document.querySelector('.posts-container');
        const loadingBar = document.getElementById('loading-bar');

        const infScroll = new InfiniteScroll(elem, {
            path: 'a[rel=next]',
            append: '.post',
            history: true,
        });

        infScroll.on('request', function(path, page) {
            // Show the loading bar or animation
            loadingBar.style.display = 'block';
        });
    </script> --}}
@endpush
