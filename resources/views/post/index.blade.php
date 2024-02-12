@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen justify-center items-center">
        @forelse ($posts as $post)
            <div class="">
                {{ $post }}
            </div>
        @empty
            <p class="text-9xl">Wala pa nagpopost 😔</p>
        @endforelse
    </div>
@endsection
