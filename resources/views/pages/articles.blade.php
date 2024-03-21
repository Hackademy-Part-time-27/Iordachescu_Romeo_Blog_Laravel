<x-layout title="Articoli">

    <h1 class="title">HTML, JavaScript and PHP</h1>

    <div>

    @if($articles)
            @foreach($articles as $index => $article)
                @if($article['visible'])
                <x-card
                    :category="$article['category']"
                    :title="$article['title']"
                    :description="$article['description']"
                    :index="$index"
                    :route="route('article', $index)"
                />
                @endif
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