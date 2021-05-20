<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Student;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $student=Student::all();
        // return $student;
        return view('pages.notes.Notes', ['student'=>$student]); 
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
    public function store(Request $request)
    {
        Note::create($request->all());
        return redirect('notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('pages.notes.Notes_edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $notes = Note::query();
        if ($notes->where('id', $id)->exists()) {
            $note = $notes->find($id);
            $note->student_name = is_null($request->student_name) ? $note->student_name : $request->student_name;
            $note->note = is_null($request->note) ? $note->note : $request->note;
            $note->save();
            return redirect('notes');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notes = Note::query();
        if($notes->where('id', $id)->exists()) {
            $note = $notes->find($id);
            $note->delete($id);
            return redirect('notes');
        }
    }
}