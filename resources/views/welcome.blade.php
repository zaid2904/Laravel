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

    .container {
        background: white;
        padding: 60px 40px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        max-width: 600px;
        text-align: center;
    }

    h1 {
        color: #1a1a1a;
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 15px;
        letter-spacing: -0.5px;
    }

    p {
        color: #666;
        font-size: 16px;
        margin-bottom: 40px;
        line-height: 1.6;
    }

    .nav-links {
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    a {
        padding: 12px 28px;
        background: #1a1a1a;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    a:hover {
        background: #333;
    }
</style>

<div class="container">
    <h1>Student Management System</h1>
    <p>Manage student data efficiently with a simple and intuitive interface.</p>
    <div class="nav-links">
        <a href="{{ url('list') }}">View Students</a>
        <a href="{{ url('add') }}">Add New Student</a>
    </div>
</div>