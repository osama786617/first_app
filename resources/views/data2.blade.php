<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border-radius: 15px;
            overflow: hidden;
            animation: fadeIn 1s ease;
        }
        .card-header {
            background: linear-gradient(45deg, #007bff, #6610f2);
            padding: 20px;
        }
        .card-header h4 {
            margin: 0;
            font-weight: bold;
            letter-spacing: 1px;
        }
        table th {
            background-color: #f8f9fa;
            text-align: center;
            vertical-align: middle;
            width: 30%;
        }
        table td {
            text-align: center;
            vertical-align: middle;
        }
        .table-hover tbody tr:hover {
            background-color: #e2e6ea;
            transition: background-color 0.3s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center text-white">
                <h4>Student Information</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $student['id'] }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $student['name'] }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $student['email'] }}</td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>{{ $student['contact'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
</html>
