<div>
    <h1>Update Student data</h1>
    <form action="/edit-student/{{ $data->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name">
        <br><br>

        <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter Email">
        <br><br>

        <input type="text" name="phone" value="{{ $data->phone }}" placeholder="Enter Phone">
        <br><br>

        <button>Update Student</button>
        <a href="{{ url('list') }}">Back</a>
    </form>
</div>
