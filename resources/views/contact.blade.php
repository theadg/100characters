@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center min-h-[87vh] gap-20 pt-28">
        <div class="mb-5 text-wrap">
            <h2 class="text-5xl font-bold sm:text-6xl">Get In Touch</h2>
            <span class="text-3xl sm:text-4xl ">we'd love to hear from you!</span>
        </div>

        <div class="flex flex-col items-center gap-5 px-5 text-center lg:w-1/2">
            <h3 class="text-3xl font-semibold">
                🙌 Let us know if you have any suggestions and ideas to make
                <a href="{{ route('posts.index') }}"><span class="dark:text-sky-300 text-sky-800">
                        100characters
                    </span></a> better.
            </h3>

            <a href="mailto:deguzmanbernardandrew@gmail.com" class="p-5 mt-5 text-4xl text-white duration-150 ease-linear border rounded-lg basis-auto bg-sky-600 hover:bg-sky-800">
                Tell Us 💡
            </a>
        </div>
    </div>
@endsection
