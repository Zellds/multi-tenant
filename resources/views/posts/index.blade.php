<x-app-layout>
    <div class="mx-3">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Clique Para Nova Postagem</a>
    </div>

    <ul class="mx-3 mt-5">
        <h1 class="mb-2">~Lista de Postagens~</h1>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.edit', $post->id) }}">{{ $post->content }}</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
