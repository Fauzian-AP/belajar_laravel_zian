<x-layout title="{{ $title }}">
    @foreach ( $posts as $post )
            <article class="py-8 max-w-3xl border-b border-gray-300">
            {{-- TITLE --}}
            <a href="/posts/{{ $post["slug"] }}" class="mb-1 hover:underline">
                <h1 class="text-3xl  text-gray-900 tracking-tighter font-bold">
                    {{ $post["title"] }}
                </h1>
            </a>

            {{-- INFORMATION --}}
            <div class="text-base text-gray-500">
                <a href="#">{{ $post->author }}</a> | {{ $post->created_at?->diffForHumans() }}
            </div>

            {{-- BODY --}}
            <p class="my-4 font-light">
                {{ Str::limit($post->body, 150, '...') }}
            </p>

            {{-- DETAIL --}}
            <a href="/posts/{{ $post->slug }}" class="font-medium text-blue-500 hover:underline">
                Read more &raquo;
            </a>
        </article>
    @endforeach
</x-layout>