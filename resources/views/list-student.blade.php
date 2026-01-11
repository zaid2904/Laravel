<div>
    <h1>Student List</h1>
    <form action="search" method="get">
        @csrf
        <input type="text" placeholder="Search with name" name="search" value="{{ @$search }}" />
        <button>Search</button>
    </form>
    <table border=1>
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
            <td> 
                <a href="{{ 'delete/' . $student->id }}">Delete</a> 
                <a href="{{ 'edit/' . $student->id }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $students->links() }}
</div>

<style>
    .w-5.h-5 {
        width: 20px;
        height: 20px;
    }
</style>
