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

    button {
        padding: 12px 14px;
        background: #1a1a1a;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease;
        margin-top: 8px;
    }

    button:hover {
        background: #333;
    }

    button:active {
        background: #1a1a1a;
    }
</style>

<div>
    <h1>Add new Student Data</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="tel" name="phone" placeholder="Enter Phone" required>
        <button type="submit">Add Student</button>
    </form>
</div>