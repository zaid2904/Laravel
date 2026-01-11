<div>
    <h1>Student List</h1>
    <table border=4>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>phone</th>
            <th>Created</th>
            <th>Opration</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->created_at }}</td>
            <td> <a href="{{ 'delete/' . $student->id }}"> Delete </a> </td>
        </tr>
        @endforeach
    </table>
</div>
