<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            padding: 30px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h2 {
            margin: 20px 0;
            font-weight: bold;
            color: #333;
        }
        .table thead tr {
            background-color: #007bff;
            color: #fff;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #e3f2fd;
        }
        .table tbody tr:nth-child(even) {
            background-color: #bbdefb;
        }
        .table tbody tr:hover {
            background-color: #64b5f6;
            color: white;
            transition: 0.3s;
        }
        th, td {
            text-align: center;
            vertical-align: middle !important;
        }
    </style>
</head>
<body>

    <div class="container my-4">
        <h2 class="text-center">Users Information</h2>
        <div class="card p-4">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ALI HYDER</td>
                            <td>ali@gmail.com</td>
                            <td>123456</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>OSAMA HYDER</td>
                            <td>osama@gmail.com</td>
                            <td>987-654-3210</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>MARYAM ABBASI</td>
                            <td>maryam@gmail.com</td>
                            <td>987-654-3210</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
