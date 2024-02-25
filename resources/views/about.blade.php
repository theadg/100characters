@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center min-h-screen gap-16 pt-28">
        <div class="mb-10 text-wrap">
            <h2 class="text-5xl font-bold sm:text-6xl">100characters</h2>
            <span class="text-3xl sm:text-4xl ">nobody cares, post it!</span>

        </div>

        <div class="px-5 sm:w-1/3">
            <h3 class="text-3xl font-semibold">
                🌈 Anonymity, No Strings Attached:
            </h3>
            <p class="text-2xl justify-normal">
                No profiles, no followers – just your note . Feel free to be your authentic
                self without the weight of online personas. Anonymity is the name of the game, allowing you to express
                without inhibition.
            </p>
        </div>

        <div class="px-5 sm:w-1/3">
            <h3 class="text-3xl font-semibold">
                🌟 Rules? Just 100 Characters!
            </h3>
            <ul class="pl-10 text-2xl list-disc">
                <li>
                    Keep it sweet, short, and respectful.

                </li>
                <li>
                    No essays, just notes!
                </li>
                <li>
                    Embrace the challenge of capturing your essence in a tiny space.
                </li>
            </ul>
        </div>

        {{-- <div class="px-5 sm:w-1/3">
            <h3 class="text-3xl font-semibold">
                ❤️ Made with Love
            </h3>
            <ul class="pl-10 text-2xl list-disc">
                <li>
                    Keep it sweet, short, and respectful.

                </li>
                <li>
                    No essays, just notes!
                </li>
                <li>
                    Embrace the challenge of capturing your essence in a tiny space.
                </li>
            </ul>
        </div> --}}
    </div>
@endsection
