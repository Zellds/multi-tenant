    <h1>Nova Postagem</h1>

    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
            <label for="content">Conteúdo</label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
