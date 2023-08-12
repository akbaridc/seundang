<?php

namespace App\Http\Controllers\Backend\Post;

use App\Enums\PostType;
use App\Http\Controllers\Controller;
use App\Models\Post\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function faq()
    {
        $post = Post::where('type', PostType::FAQ)->first();
        return view('backend.post.faq', ['post' => $post, 'title' => 'FAQ']);
    }

    public function termCondition()
    {
        $post = Post::where('type', PostType::TERM_CONDITION)->first();
        return view('backend.post.term-condition', ['post' => $post, 'title' => 'Term & Condition']);
    }

    public function privacyPolicy()
    {
        $post = Post::where('type', PostType::PRIVACY_POLICY)->first();
        return view('backend.post.privacy-policy', ['post' => $post, 'title' => 'Kebijakan Privasi']);
    }

    public function edit($type = PostType::FAQ)
    {
        return view('backend.post.edit', [
            'title'     => 'Edit ' . PostType::getDescription($type ?? 'FAQ'),
            'resource'  => Post::type($type ?? PostType::FAQ)->first()
        ]);
    }


    public function update(Request $request, Post $post)
    {
        $post->fill($request->all());
        $post->save();

        if ($post->type == PostType::FAQ) {
            return redirect()->route('backoffice.post.faq')->with('success', 'FAQ berhasil disimpan');
        } elseif ($post->type == PostType::TERM_CONDITION) {
            return redirect()->route('backoffice.post.term-condition')->with('success', 'Term & Condition berhasil disimpan');
        } else {
            return redirect()->route('backoffice.post.privacy-policy')->with('success', 'Kebijakan privasi berhasil disimpan');
        }
    }
}
