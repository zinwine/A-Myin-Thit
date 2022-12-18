<?php

namespace App\Http\Controllers\backend;

use App\Career;
use App\JobRequirement;
use App\JobResponsibility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CareerInsertFormRequest;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::all();
        return view('backend.career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CareerInsertFormRequest $request)
    {
        Career::create([
            'title' => $request->get('title'),
            'desp' => $request->get('description'),
            'location' => $request->get('location'),
            'salary' => $request->get('salary'),
            'remark' => $request->get('remark')
        ]);
        $result = $request->get('res')[0];
        $resultarray = explode(',', $result);
        for ($i = 0; $i < count($resultarray); $i++) {
            echo $resultarray[$i] . "<br>";
            JobResponsibility::create([
                'responsibility' => $resultarray[$i],
                'career_id' => Career::where('title', $request->get('title'))->get()[0]->id
            ]);
        }

        $result = $request->get('req')[0];
        $resultarray = explode(',', $result);
        for ($i = 0; $i < count($resultarray); $i++) {
            echo $resultarray[$i] . "<br>";
            JobRequirement::create([
                'requirement' => $resultarray[$i],
                'career_id' => Career::where('title', $request->get('title'))->get()[0]->id
            ]);
        }

        return redirect('/admin/career/create')->with('status', "Successfully created new career post");

    }

    public function show($id)
    {
        $career = Career::find($id);
        $job_res = JobResponsibility::where('career_id', $id)->get();
        $job_req = JobRequirement::where('career_id', $id)->get();
        return view('backend.career.show', compact('career', 'job_res', 'job_req'));
    }


    public
    function edit($id)
    {
        $career = Career::find($id);
        $job_res = JobResponsibility::where('career_id', $id)->get();
        $job_req = JobRequirement::where('career_id', $id)->get();
        return view('backend.career.edit', compact('career', 'job_res', 'job_req'));
    }

    public
    function update(CareerInsertFormRequest $request, $id)
    {
        $career = Career::find($id);
        $career->title = $request->get('title');
        $career->desp = $request->get('description');
        $career->location = $request->get('location');
        $career->salary = $request->get('salary');
        $career->remark = $request->get('remark');
        $career->save();

        $result = $request->get('res')[0];
        if ($result <> "") {
            JobResponsibility::where('career_id', $id)->delete();
            $resultarray = explode(',', $result);
            for ($i = 0; $i < count($resultarray); $i++) {
                echo $resultarray[$i] . "<br>";
                JobResponsibility::create([
                    'responsibility' => $resultarray[$i],
                    'career_id' => Career::where('title', $request->get('title'))->get()[0]->id
                ]);
            }
        }

        $result = $request->get('req')[0];
        if ($result <> "") {
            JobRequirement::where('career_id', $id)->delete();
            $resultarray = explode(',', $result);
            for ($i = 0; $i < count($resultarray); $i++) {
                echo $resultarray[$i] . "<br>";
                JobRequirement::create([
                    'requirement' => $resultarray[$i],
                    'career_id' => Career::where('title', $request->get('title'))->get()[0]->id
                ]);
            }
        }
        return redirect(action('backend\CareerController@edit', $id))->with('status', 'Successfully updated this post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect('/admin/career');
    }
}
