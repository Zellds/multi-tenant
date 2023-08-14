<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $tenantsId = session('tenant_id');

        $posts = Post::with('user')
                    ->where('tenant_id', $tenantsId)
                    ->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post([
            'content' => $request->input('content'),
            'user_id' => $request->user()->id,
            'tenant_id' => session('tenant_id')
        ]);
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function updateTenant(Request $request)
    {
        session(['tenant_id' => $request->input('tenant_id')]);

        return redirect(route('posts.index'));
    }
}
