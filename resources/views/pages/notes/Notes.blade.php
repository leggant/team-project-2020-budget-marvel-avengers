@extends('layouts.app')

@section('title')
Studio Management Portal | Notes
@endsection

@section('content')
<section>
  <h1>Student Notes</h1>
  <form action="{{route('notes.store')}}" method="POST">
  @csrf
    <div class="form-col">
      <div class="input-group">
        <label for="student_name">Student Name:</label>
        <input id="student_name" name="student_name" type="text" spellcheck="false" maxlength="255" placeholder="Student Name"> 
      </div>
    </div>
    <div class="form-col">
      <div class="input-group">
        <label for="note">Notes:</label>
        <textarea id="note" name="note" spellcheck="true" placeholder="Enter notes here"></textarea>
      </div>
        <input id="saveForm" name="saveForm" type="submit" value="Submit" class="submit-btn">
      </div>
    </div>
  </form>
  <div class="form-col">
    <h3>Student Notes</h3>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" cellborder="0" class="titles">
            <thead>
                <tr>
                    <th class="title">Student Name</th>
                    <th class="title">Note</th>
                    <th class="title">Date</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" cellborder="0">
            <tbody>
            @foreach($notes as $note)
                <tr>
                    <td><p>{{ $note->student_name }}</p></td>
                    <td><p>{{ $note->note}}</p></td>
                    <td><p>{{ $note->updated_at->format('d-m-Y')}}</p></td>
                    <td class="update-links">
                        <button><a class="update" href="{{ route('notes.edit', $note->id)}}">Update</a></button>
                        <form action="{{route('notes.destroy', $note->id)}}" method="post">
                            @csrf 
                            @method('delete')
                            <button class="delete" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection