<?php

namespace App\Http\Controllers\backend;

use App\Career;
use App\CareerApplyMessage;
use App\CareerMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CareerMessageInsertFormRequest;

class CareerMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careermessage = CareerApplyMessage::all();
        return view('backend.careermessage.index', compact('careermessage'));
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
    public function store(CareerMessageInsertFormRequest $request)
    {
        $file = $request->file('cv');
        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path() . '/backend/photo/cvform/', $filename);
        CareerApplyMessage::create([
            'Name' => $request->get('name'),
            'Email' => $request->get('email'),
            'Address' => $request->get('address'),
            'Ph_No' => $request->get('phone'),
            'Gender' => $request->get('gender'),
            'Job_Position' => $request->get('job_position'),
            'Description' => $request->get('description'),
            'Image' => $filename
        ]);
        return redirect('/career/apply')->with('success_status', 'Your message is submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $careermessage = CareerApplyMessage::find($id);
        return view('backend.careermessage.show', compact('careermessage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }
}
