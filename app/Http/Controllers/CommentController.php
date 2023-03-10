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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Comment::create([
            'content' => $request->get('comment'),
            'user_id' => $request->get('user_id'),
            'commendable_id' => $request->get('commendable_id'),
            'commendable_type' => $request->get('commendable_type')
        ]);
        return redirect(action('HomeController@showBlog', $request->commendable_id))->with('status', "Successfully inserted a comment");

    }

    public function adminstore(Request $request)
    {
        Comment::create([
            'content' => $request->get('comment'),
            'user_id' => $request->get('user_id'),
            'commendable_id' => $request->get('commendable_id'),
            'commendable_type' => $request->get('commendable_type')
        ]);
        return redirect(action('backend\BlogController@show', $request->commendable_id))->with('status', "Successfully inserted a comment");

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/blog/' . $comment->commendable_id . '/show')->with('status', "Successfully deleted a comment");
    }
}
