<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osama Hyder Calculator - Results</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .calculator-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .calculator-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #0d6efd;
        }
        .calculator-header h1 {
            color: #0d6efd;
            font-weight: 700;
        }
        .input-values {
            background-color: #f1f8ff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .result-card {
            border-left: 4px solid #0d6efd;
            margin-bottom: 15px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }
        .operation-icon {
            color: #0d6efd;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="calculator-container">
            <div class="calculator-header">
                <h1><i class="bi bi-calculator-fill"></i> Osama Hyder Calculator</h1>
                <p class="text-muted">Your calculation results</p>
            </div>
            
            <div class="input-values">
                <div class="row">
                    <div class="col-md-6">
                        <h4><i class="bi bi-1-circle-fill text-primary"></i> First Value</h4>
                        <p class="fs-3 fw-bold">{{ $v1 }}</p>
                    </div>
                    <div class="col-md-6">
                        <h4><i class="bi bi-2-circle-fill text-primary"></i> Second Value</h4>
                        <p class="fs-3 fw-bold">{{ $v2 }}</p>
                    </div>
                </div>
            </div>
            
            <div class="results-section">
                <div class="result-card">
                    <h5><i class="bi bi-plus-circle-fill operation-icon"></i> Addition</h5>
                    <p class="fs-4">{{ $v1 + $v2 }}</p>
                </div>
                
                <div class="result-card">
                    <h5><i class="bi bi-dash-circle-fill operation-icon"></i> Subtraction</h5>
                    <p class="fs-4">{{ $v1 - $v2 }}</p>
                </div>
                
                <div class="result-card">
                    <h5><i class="bi bi-x-circle-fill operation-icon"></i> Multiplication</h5>
                    <p class="fs-4">{{ $v1 * $v2 }}</p>
                </div>
                
                <div class="result-card">
                    <h5><i class="bi bi-slash-circle-fill operation-icon"></i> Division</h5>
                    <p class="fs-4">{{ $v2 != 0 ? $v1 / $v2 : '∞' }}</p>
                </div>
                
                <div class="result-card">
                    <h5><i class="bi bi-percent operation-icon"></i> Remainder</h5>
                    <p class="fs-4">{{ $v2 != 0 ? $v1 % $v2 : 'N/A' }}</p>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="/cal" class="btn btn-primary">
                    <i class="bi bi-arrow-left"></i> Back to Calculator
                </a>
            </div>
        </div>
    </div>

   
</body>
</html>