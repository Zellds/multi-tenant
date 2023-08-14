<x-app-layout>
    <div class="mx-3">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Clique Para Nova Postagem</a>
    </div>

    <ul class="mx-3 mt-5">
        <p class="mb-2 text-2xl">~Lista de Postagens~</p>
        @foreach($posts as $post)
            <li>
                <p class="font-bold">Postado por: {{ $post->user->name }}</p>
                {{ "* Conteudo: {$post->content}" }}
                <br>
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Editar Post</a>
                <br><br>
            </li>
        @endforeach
    </ul>
</x-app-layout>
