@extends('students.layout')

@section('content')

<h1>Add Students</h1>

<form action="add" method="POST">
    @csrf()
    <input type="text" name="std_name" placeholder="Student Name">
    <input type="text" name="std_course" placeholder="Student Course">
    <input type="text" name="std_fee" placeholder="Student Fee">
    
    <button class="btn btn-success" type="submit">Add Student</button>
</form>

@endsection