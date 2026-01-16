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
        padding: 40px 20px;
    }

    div {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        color: #1a1a1a;
        margin-bottom: 30px;
        text-align: center;
        font-size: 28px;
        font-weight: 600;
        letter-spacing: -0.5px;
    }

    form {
        margin-bottom: 25px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        align-items: center;
    }

    input[type="text"] {
        padding: 12px 14px;
        border: 1px solid #d0d0d0;
        border-radius: 4px;
        font-size: 14px;
        flex: 1;
        min-width: 200px;
        transition: all 0.2s ease;
    }

    input[type="text"]:focus {
        outline: none;
        border-color: #333;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05);
    }

    button {
        padding: 12px 24px;
        background: #1a1a1a;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    button:hover:not(:disabled) {
        background: #333;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    button:active:not(:disabled) {
        transform: translateY(0);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    button:disabled {
        background: #9ca3af;
        cursor: not-allowed;
        opacity: 0.6;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 30px 0;
    }

    th {
        background: #f0f0f0;
        color: #1a1a1a;
        padding: 14px;
        text-align: left;
        font-weight: 600;
        font-size: 13px;
        border-bottom: 2px solid #d0d0d0;
    }

    td {
        padding: 12px 14px;
        border-bottom: 1px solid #e8e8e8;
        font-size: 14px;
    }

    tr:hover {
        background-color: #fafafa;
    }

    a {
        color: #1a1a1a;
        text-decoration: none;
        font-weight: 500;
        margin-right: 12px;
        transition: all 0.2s ease;
        padding: 6px 12px;
        border-radius: 3px;
        display: inline-block;
    }

    a:hover {
        color: white;
        background: #1a1a1a;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }

    input[type="checkbox"] {
        cursor: pointer;
        width: 18px;
        height: 18px;
        accent-color: #1a1a1a;
    }

    .w-5.h-5 {
        width: 20px;
        height: 20px;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
        flex-wrap: wrap;
        align-items: center;
    }

    .select-all-container {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .select-all-container input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
    }

    .select-all-container label {
        cursor: pointer;
        font-weight: 500;
        color: #333;
    }
</style>

<div>
    <h1>Student List</h1>
    <form action="search" method="get">
        @csrf
        <input type="text" placeholder="Search with name" name="search" value="{{ @$search }}" />
        <button type="submit">Search</button>
    </form>
    <form action="delete-multi" method="post" id="deleteForm">
        @csrf
        <div class="action-buttons">
            <button type="submit">Delete Selected</button>
            <div class="select-all-container">
                <input type="checkbox" id="selectAllCheckbox">
                <label for="selectAllCheckbox">Select All</label>
            </div>
        </div>
        <table>
            <tr>
                <th>Selection</th>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Created</th>
                <th>Operation</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{ $student->id }}" class="student-checkbox"></td>
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
    </form>
</div>

<script>
    const selectAllCheckbox = document.getElementById('selectAllCheckbox');
    const studentCheckboxes = document.querySelectorAll('.student-checkbox');

    // Select All functionality
    selectAllCheckbox.addEventListener('change', function() {
        studentCheckboxes.forEach(checkbox => {
            checkbox.checked = this.checked;
        });
    });

    // Update Select All checkbox when individual checkboxes change
    studentCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const allChecked = Array.from(studentCheckboxes).every(cb => cb.checked);
            const someChecked = Array.from(studentCheckboxes).some(cb => cb.checked);
            selectAllCheckbox.checked = allChecked;
            selectAllCheckbox.indeterminate = someChecked && !allChecked;
        });
    });
</script>
