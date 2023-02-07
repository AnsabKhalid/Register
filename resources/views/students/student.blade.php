@extends('students.layout')

@section('content')

<h1>View</h1>

<table id="datatable" class="table table-bordered table-striped table-dark">
    <thead class="thead-dark">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Course</th>
            <th>Student Fee</th>
            <th>Admission Date</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['std_name'] }}</td>
                <td>{{ $item['std_course'] }}</td>
                <td>{{ $item['std_fee'] }}</td>
                <td>{{ date('D-m-y', strtotime($item->created_at)) }}</td>
                <td><a href={{ "delete/".$item['id'] }}>Delete</a></td>
                <td><a href={{ "update/".$item['id'] }}>Update</a></td>
            </tr>
        @endforeach    
    </tbody>
</table>

<span>
  {{$students->links()}}
</span>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/laravel/student/student/update" class="form-group" method="POST" id="editForm">
    @csrf()

    <input type="text" name="std_name" id="std_name" class="form-control" placeholder="Student Name">
    <input type="text" name="std_course" id="std_course" class="form-control" placeholder="Student Course">
    <input type="text" name="std_fee" id="std_fee" class="form-control" placeholder="Student Fee">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </div>
    </div>
  </div>
</div>

@endsection