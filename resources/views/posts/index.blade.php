<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-gird :posts="$posts"/>
            {{$posts->links()}}
        @else
            <p>No posts available.</p>
        @endif
    </main>
</x-layout>
