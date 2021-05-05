@extends('layouts.app')
@section('title')
    Studio Management Portal | Student Details
@endsection
@section('content')
<section>

<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
        <th>Id</th>
        <th>Student ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Student Email</th>
        <th>Github username</th>
        <th>student username</th>
        <th width="200px">Action</th>
    </tr>
</thead>
</table>
</div>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
    @foreach ($student as $user)
    <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->studentID }}</td>
    <td>{{ $user->first_name }}</td>
    <td>{{ $user->last_name }}</td>
    <td>{{ $user->student_email }}</td>
    <td>{{ $user->github_username}}</td>
    <td>{{ $user->student_username}}</td>
        <td>
            <form action="{{ route('students.destroy',$user->id) }}" method="POST">      
                <a class="btn btn-primary" href="{{ route('students.edit',$user->id) }}">Edit</a>   
                @csrf
                @method('DELETE')      
                <button type="submit" class="">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection 
</section>