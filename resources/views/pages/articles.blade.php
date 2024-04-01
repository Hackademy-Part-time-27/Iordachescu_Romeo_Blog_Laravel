<x-layout title="Articoli">

    <h1 class="title articles-blueviolet">HTML, JavaScript and PHP</h1>

    <div>

    @if($articles)
            @foreach($articles as $article)
                <x-card
                    :category="$article->category"
                    :title="$article->title"
                    :description="$article->description"
                    
                    :route="route('article', $article)"
                />
            @endforeach
        @else
            <p>Non ci sono articoli disponibili</p>
        @endif
    </div>

        <x-slot:extra>

            <script>
                ...
            </script>

        </x-slot>
    
</x-layout>