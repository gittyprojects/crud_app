<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
<h1>Students</h1>
<a href="{{ route('students.create') }}">Add Student</a>
@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif
<table border="1" cellpadding="5">
<tr>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Actions</th>
</tr>
@foreach($students as $student)
<tr>
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->age }}</td>
<td>
<a href="{{ route('students.edit',$student->id) }}">Edit</a>
<form action="{{ route('students.destroy',$student->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>
