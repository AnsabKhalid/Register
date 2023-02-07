@extends('students.layout')

@section('content')

<h1>Upload Image</h1>

<form action="/laravel/student/student/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" class="btn btn-primary" name="file"> <br>
    <button class="btn btn-success" type="submit">Upload File</button>
</form>

@endsection
