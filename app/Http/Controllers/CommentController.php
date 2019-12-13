<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $user_id = auth()->user()->id;

        $validatedData = $request->validate([
            'content' => 'required|max:255',
        ]);

        $comment = new Comment;

        $comment->content = $validatedData['content'];

        $comment->user_id = $user_id;

        $comment->post_id = $post_id;

        $comment->save();

        session()->flash('message', 'Comment created!');
        return redirect()->route('posts.show', $post_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $comment = Comment::findOrFail($id);
      return view('comments.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
          'content' => 'required|max:255',
      ]);

      $comment = Comment::findOrFail($id);

      $comment->content = $validatedData['content'];

      $comment->save();

      session()->flash('message', 'Comment edited!');
      return redirect()->route('posts.show', $comment->post->id);
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    /*
    public function apiIndex($post_id)
    {
        $comments = Comment::all();
        $comments = Comment::get()->where('post_id', $post_id);
        return $comments;
    }

    public function apiStore(Request $request)
    {
        //$user_id = auth()->user()->id;

        $c = new Comment;

        $c->content = $request['content'];

        $c->user_id = 1;

        $c->post_id = $request['post_id'];

        $c->save();

        return $c;
    }
    */
}
