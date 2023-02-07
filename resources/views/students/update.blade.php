@extends('students.layout')

@section('content')

<h1>Update Student</h1>

<form action="/laravel/student/student/update" method="POST">
    @csrf()

    <input type="text" name="id" placeholder="Student ID" value="{{ $students['id'] }}" hidden>
    <input type="text" name="std_name" placeholder="Student Name" value="{{ $students['std_name'] }}">
    <input type="text" name="std_course" placeholder="Student Course" value="{{ $students['std_course'] }}">
    <input type="text" name="std_fee" placeholder="Student Fee" value="{{ $students['std_fee'] }}">
    
    <button class="btn btn-success" type="submit">Update Student</button>
</form>

@endsection