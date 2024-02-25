@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen gap-5" x-data="{
        content: '',
        get characterCount() {
            return this.content.length
        }
    }">
        <form class="flex flex-col w-1/2 gap-5" action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div>
                <label class="block mb-2 text-5xl font-medium text-gray-900 dark:text-white" for="message">
                    Your Name
                </label>
                <input id="message" name="author" @class([
                    'block',
                    'w-full',
                    'resize-none',
                    'rounded-lg',
                    'border',
                    'border-gray-300',
                    'bg-gray-50',
                    'p-2.5',
                    'px-5',
                    'text-4xl',
                    'text-gray-900',
                    'focus:border-blue-500',
                    'focus:ring-blue-500',
                    'dark:border-gray-600' => !$errors->has('name'),
                    'dark:bg-gray-700',
                    'dark:text-white',
                    'dark:placeholder-gray-400',
                    'dark:focus:border-blue-500',
                    'dark:focus:ring-blue-500',
                    'border-2' => $errors->has('name'),
                    'border-rose-500' => $errors->has('name'),
                    'ring-rose-500' => $errors->has('name'),
                ]) rows="4"
                    maxlength="15" placeholder="Pen Name"></input>
                @error('name')
                    <div class="text-xl text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <label class="block mb-2 text-5xl font-medium text-gray-900 dark:text-white" for="message">
                    Your message
                </label>
                <textarea id="message" name="content" @class([
                    'block',
                    'w-full',
                    'resize-none',
                    'rounded-lg',
                    'border',
                    'border-gray-300',
                    'bg-gray-50',
                    'p-2.5',
                    'px-5',
                    'text-4xl',
                    'text-gray-900',
                    'focus:border-blue-500',
                    'focus:ring-blue-500',
                    'dark:border-gray-600' => !$errors->has('content'),
                    'dark:bg-gray-700',
                    'dark:text-white',
                    'dark:placeholder-gray-400',
                    'dark:focus:border-blue-500',
                    'dark:focus:ring-blue-500',
                    'border-2' => $errors->has('content'),
                    'border-rose-500' => $errors->has('content'),
                    'ring-rose-500' => $errors->has('content'),
                ]) x-ref="content" x-model="content" rows="4"
                    maxlength="100" placeholder="Write your thoughts here..."></textarea>
                @error('content')
                    <div class="text-xl text-red-500">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <p class="text-2xl" x-ref="characterCount">
                <span x-text="characterCount"></span>/100 Characters
            </p>
            <button
                class="mb-2 me-2 rounded-lg bg-sky-600 p-5 py-2.5 text-4xl font-medium text-white duration-150 ease-linear hover:bg-sky-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-blue-800"
                type="submit">Post 💌</button>
        </form>
    </div>
@endsection
