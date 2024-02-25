<div class="post before:flex flex-col shadow-xl h-72 *:p-5 border-2 rounded-xl bg-gray-100 dark:border-neutral-600 dark:bg-gray-950/45 w-96">
    <div class="flex items-center gap-5 bg-gray-200 dark:bg-gray-950/45 rounded-xl">
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
    <p class="pb-5 text-2xl font-medium break-words text-wrap">
        {{ $post->content }}
    </p>
</div>
