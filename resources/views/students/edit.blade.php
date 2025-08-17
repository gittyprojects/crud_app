<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
<h1>Edit Student</h1>
@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('students.update', $student->id) }}">
@csrf
@method('PUT')
Name: <input type="text" name="name" value="{{ $student->name }}"><br><br>
Email: <input type="email" name="email" value="{{ $student->email }}"><br><br>
Age: <input type="number" name="age" value="{{ $student->age }}"><br><br>
<button type="submit">Update</button>
</form>
<a href="{{ route('students.index') }}">Back</a>
</body>
</html>
