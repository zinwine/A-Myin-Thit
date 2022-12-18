<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BlogInsertFormRequest;
use Illuminate\Support\Str;
use App\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        $users = User::all();
        return view('backend.blog.index', compact('blogs', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogInsertFormRequest $request)
    {
        $user_id = Auth::user()->id;
        $slug = Str::slug($request->get('title'));
        $files = $request->file('file');
        $filearray = array();
        foreach ($files as $file) {
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            array_push($filearray, $filename);
            $file->move(public_path() . '/backend/photo/upload/', $filename);
        }
        Blog::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'img' => serialize($filearray),
            'slug' => $slug,
            'user_id' => $user_id
        ]);
        return redirect('admin/blog/create')->with('status', "Created successfully a post");

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        $user = User::find($blog->user_id);
        $comments = $blog->comments;
        return view('backend.blog.show', compact('blog', 'user', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogInsertFormRequest $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->get('title');
        $blog->content = $request->get('content');
        $blog->slug = Str::slug($request->get('title'));
        if ($request->file('file') != null) {
            $files = $request->file('file');
            $filearray = array();
            foreach ($files as $file) {
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                array_push($filearray, $filename);
                $file->move(public_path() . '/backend/photo/upload/', $filename);
            }
            $blog->img = serialize($filearray);
        }
        //slug user_id img
        $blog->save();
        return redirect(action('backend\BlogController@edit', $id))->with('status', 'Successfully updated this project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect(action('backend\BlogController@index'));
    }
}
