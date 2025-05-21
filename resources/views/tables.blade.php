<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table - Osama Hyder</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px;
        }
        .table-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .header {
            color: #0d6efd;
            margin-bottom: 30px;
            text-align: center;
        }
        .table-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .table-of {
            font-size: 1.5rem;
            color: #6c757d;
            margin-bottom: 30px;
        }
        .multiplication-table {
            width: 100%;
            margin: 0 auto;
        }
        .table-row {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }
        .table-row:last-child {
            border-bottom: none;
        }
        .table-row:hover {
            background-color: #f1f8ff;
        }
        .btn-back {
            margin-top: 30px;
            padding: 10px 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container">
            <div class="header">
                <h1 class="table-title">OSAMA HYDER MULTIPLICATION TABLE</h1>
                <h2 class="table-of">Table of: <span class="text-primary">{{ $num }}</span></h2>
            </div>

            <div class="multiplication-table">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="table-row d-flex justify-content-between px-3">
                        <span>{{ $num }} × {{ $i }} =</span>
                        <strong class="text-primary">{{ $num * $i }}</strong>
                    </div>
                @endfor
            </div>

            <div class="text-center">
                <a href="/table" class="btn btn-primary btn-back">
                    <i class="bi bi-arrow-left"></i> Back to Calculator
                </a>
            </div>
        </div>
    </div>

   
</body>
</html>