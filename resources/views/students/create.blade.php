<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
<h1>Add Student</h1>
@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form method="POST" action="{{ route('students.store') }}">
@csrf
Name: <input type="text" name="name"><br><br>
Email: <input type="email" name="email"><br><br>
Age: <input type="number" name="age"><br><br>
<button type="submit">Add</button>
</form>
<a href="{{ route('students.index') }}">Back</a>
</body>
</html>
