<x-layout title="{{ $title }}">
    <article class="py-8 max-w-3xl border-b border-gray-300">
    {{-- TITLE --}}
    <h1 class="text-3xl  text-gray-900 tracking-tighter font-bold">
      {{ $post->title }}
    </h1>

    {{-- INFORMATION --}}
    <div class="text-base text-gray-500">
      <a href="#">{{ $post->author }}</a> | {{ $post->created_at?->diffForHumans() }}
    </div>

    {{-- BODY --}}
    <p class="my-4 font-light">
      {{ $post->body }}
    </p>

    {{-- DETAIL --}}
    <a href="/posts" class="font-medium text-blue-500 hover:underline">
      &laquo; Back to posts
    </a>
  </article>
</x-layout>