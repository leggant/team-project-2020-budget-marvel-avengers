<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\Student;
use Illuminate\Http\Request;

class EvidenceUploadController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads = Student::with('uploads')->get();
        return view('pages.evidence.new_upload')->with(compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('pages.evidence.new_upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Upload::create($request->all());
        return redirect('uploads');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //return view('pages.evidence.view_upload_by_id');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        return view('pages.evidence.edit_upload', compact('upload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $uploads = Upload::query();
        if ($uploads->where('id', $id)->exists()) {
            $upload = $uploads->find($id);
            $upload->studentName = is_null($request->studentName) ? $upload->studentName : $request->studentName;
            $upload->uploadURL = is_null($request->uploadURL) ? $upload->uploadURL : $request->uploadURL;
            $upload->description = is_null($request->description) ? $upload->description : $request->description;
            $upload->save();
            return redirect('uploads');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $uploads = Upload::query();
        if($uploads->where('id', $id)->exists()) {
            $upload = $uploads->find($id);
            $upload->delete($id);
            return redirect('uploads');
        }
    }
}
