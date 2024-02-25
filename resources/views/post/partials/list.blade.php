<div class="w-full bg-gray-100 border-2 shadow-xl flex-colp h-80 rounded-xl dark:border-neutral-600 dark:bg-gray-950/45 sm:w-96">
    <div class="flex items-center gap-5 px-5 py-3 bg-gray-200 dark:bg-gray-950/45 rounded-xl">
        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
            <svg class="absolute z-10 w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                </path>
            </svg>
        </div>
        <p class="flex flex-col">
            <span class="text-2xl">{{ $post->author ?? 'Anonymous' }}</span>
            {{ $post->date_created }}
        </p>
    </div>
    <p class="p-5 text-2xl font-medium break-words min-h-44 text-wrap">
        {{ $post->content }}
    </p>

    @if (Route::currentRouteName() == 'posts.index')
        <a class=
        "px-5 py-3 ml-5 text-lg text-white duration-150 ease-linear border rounded-lg bg-sky-600 hover:bg-sky-800"
            href="{{ route('posts.show', $post->id) }}">
            👀 View
        </a>
    @endif
</div>
