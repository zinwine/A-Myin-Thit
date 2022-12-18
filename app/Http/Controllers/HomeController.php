<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Career;
use App\JobRequirement;
use App\JobResponsibility;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function blog()
    {
        $blogs = Blog::all();
        $users = User::all();
        return view('frontend.threeblog', compact('blogs', 'users'));
    }

    public function showBlog($id)
    {
        $blog = Blog::find($id);
        $latestPost = DB:: table('blogs')->where('id', '<>', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $blog = Blog::whereId($id)->firstOrFail();
        // $comments = $blog->comments()->get();
        $comments = $blog->comments;
        return view('frontend.blog', compact('blog', 'latestPost', 'comments'));
        // table('blogs')->where('id', '<>', '$id')->take(2)->get();
    }


    /**********************Career******************/
    public function career()
    {
        $careers = Career::all();
        return view('frontend.career.career', compact('careers'));
    }

    public function showCareer($id)
    {
        $career = Career::find($id);
        $job_res = JobResponsibility::where('career_id', $id)->get();
        $job_req = JobRequirement::where('career_id', $id)->get();

        return view('frontend.career.career_detail', compact('career', 'job_res', 'job_req'));
    }


    /************************Project*******************/
    public function project()
    {
        $completedProject = Project::where('category', 'finish')->get();
        $currentProject = Project::where('category', 'current')->get();
        $futureProject = Project::where('category', 'future')->get();
        return view('frontend.project', compact('completedProject', 'currentProject', 'futureProject'));
    }

    public function showProject($id)
    {
        $project = Project::find($id);
        $latestPost = DB:: table('projects')->where('id', '<>', $id)->where('category', $project->category)->orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.single', compact('project', 'latestPost'));
    }
}
