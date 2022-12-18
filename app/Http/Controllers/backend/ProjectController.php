<?php

namespace App\Http\Controllers\backend;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectInsertFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('backend.project.index', compact('projects'));
    }

    public function completeIndex()
    {
        $projects = Project::where('category', 'finish')->get();
        return view('backend.project.complete', compact('projects'));
    }

    public function currentIndex()
    {
        $projects = Project::where('category', 'current')->get();
        return view('backend.project.current', compact('projects'));
    }

    public function futureIndex()
    {
        $projects = Project::where('category', 'future')->get();
        return view('backend.project.future', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectInsertFormRequest $request)
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
        Project::create([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'area' => $request->get('area'),
            'floor' => $request->get('floor'),
            'elevator' => $request->get('elevator'),
            'long_time' => $request->get('time'),
            'corner' => $request->get('corner'),
            'desp' => $request->get('description'),
            'img' => serialize($filearray),
            'slug' => $slug,
            'user_id' => $user_id
        ]);
        return redirect('admin/project/create')->with('status', "Created successfully a post");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('backend.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('backend.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectInsertFormRequest $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->get('title');
        $project->category = $request->get('category');
        $project->area = $request->get('area');
        $project->floor = $request->get('floor');
        $project->elevator = $request->get('elevator');
        $project->long_time = $request->get('time');
        $project->corner = $request->get('corner');
        //user_id
        $project->desp = $request->get('description');
        $project->slug = Str::slug($request->get('title'));
        if ($request->file('file') != null) {
            $files = $request->file('file');
            $filearray = array();
            foreach ($files as $file) {
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                array_push($filearray, $filename);
                $file->move(public_path() . '/backend/photo/upload/', $filename);
            }
            $project->img = serialize($filearray);
        }
        $project->save();
        return redirect(action('backend\ProjectController@edit', $id))->with('status', 'Successfully updated this project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/admin/project');
    }
}
