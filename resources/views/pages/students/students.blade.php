@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
<section class="student-section">
<h1>Students</h1>
<div class="wrap">
     
    <div class="formwrapper">
     <form class="student-form" action="{{ route('students.store') }}" method="POST">
        @csrf
       
            <label for="first_name">First name:</label>
            <input  class="form-styling"  type="text" id="first_name" name="first_name">
     
            <label for="last_name">Last name:</label>
            <input  class="form-styling" type="text" id="last_name" name="last_name">
     
            <label for="studentID">Student id:</label>
            <input  class="form-styling" type="text" id="studentID" name="studentID">
     
            <label for="github_username">GitHub username:</label>
            <input  class="form-styling" type="text" id="github_username" name="github_username">
  
            <label for="student_email">Student email:</label>
            <input  class="form-styling" type="email"  id="student_email" name="student_email">
    
            <button class="submit-btn" type="submit">Submit</button>

     </form>
    </div>
</div>

<div class="student-table">
<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" cellborder="0">
      <thead>
        <tr>
        <th>Student ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Student email</th>
        <th>Github username</th>
        <th width="150px">Action</th>
         </tr>
     </thead>
    </table>
</div>

<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" cellborder="0">
      <tbody>
          
    @foreach ($student as $user)
   
       
    <tr>
    
    <td><a href="{{ route('student.show',$user->id) }}">{{ $user->studentID }}</a></td>
    <td><a href="{{ route('student.show',$user->id) }}">{{ $user->first_name }}</a></td>
    <td><a href="{{ route('student.show',$user->id) }}">{{ $user->last_name }}</a></td>
    <td><a href="{{ route('student.show',$user->id) }}">{{ $user->student_email }}</a></td>
    <td><a href="{{ route('student.show',$user->id) }}">{{ $user->github_username}}</a</td>

</div>
        <td>
            <a href="{{ route('students.edit',$user->id) }}"><button class="btn btn-edit">Edit</button> 
            <form  onsubmit="return confirm('Do you really want to delete this student?');" action="{{ route('students.destroy',$user->id) }}" method="POST">      
                @csrf
                @method('DELETE')      
                <button class="btn btn-delete" type="submit" class="">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
        </tbody>
</table>
</div>
</div>
</section>
@endsection 
