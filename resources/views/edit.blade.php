<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        background: #f5f5f5;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    div {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        width: 100%;
        max-width: 400px;
    }

    h1 {
        color: #1a1a1a;
        margin-bottom: 30px;
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        letter-spacing: -0.5px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    input {
        padding: 12px 14px;
        border: 1px solid #d0d0d0;
        border-radius: 4px;
        font-size: 14px;
        transition: all 0.2s ease;
        background: white;
        color: #333;
    }

    input::placeholder {
        color: #999;
    }

    input:focus {
        outline: none;
        border-color: #333;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05);
    }

    button, a {
        padding: 12px 14px;
        background: #1a1a1a;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease;
        text-align: center;
        text-decoration: none;
    }

    button:hover, a:hover {
        background: #333;
    }

    button:active, a:active {
        background: #1a1a1a;
    }
</style>

<div>
    <h1>Update Student data</h1>
    <form action="/edit-student/{{ $data->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name" required>
        <input type="email" name="email" value="{{ $data->email }}" placeholder="Enter Email" required>
        <input type="tel" name="phone" value="{{ $data->phone }}" placeholder="Enter Phone" required>
        <button type="submit">Update Student</button>
        <a href="{{ url('list') }}">Back</a>
    </form>
</div>
