<x-layout :title="$title">
    <h1 class="title-blue">{{ $title }}</h1>

    <div class="mt-5">
        <ul>
            @foreach($articles as $article)
            <li>{{ $article->id }} {{ $article->title }}</li>
            @endforeach
        </ul>
        {{--$articles->links()--}} {{-- vale per paginate --}}
    </div>
</x-layout>