<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .navbar-custom {
            background-color: #2c3e50;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white;
        }
        .navbar-custom .nav-link:hover {
            color: #18bc9c;
        }
        .active-link {
            color: #18bc9c !important;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <!-- Brand -->
            
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active active-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cal">CALCULATER</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/table" >
                            MATH TABLES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Web Design</a></li>
                            <li><a class="dropdown-item" href="#">Development</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Consulting</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
                <!-- Right-aligned elements -->
                <div class="d-flex">
                  <a href="/login"><button class="btn btn-outline-light me-2">Login</button></a>  
                    <a href="/signup"><button class="btn btn-success">Sign Up</button></a>
                </div>
            </div>
        </div>
    </nav>


</body>
</html>



<br>
<br>
<br>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .calculator-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .calculator-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .calculator-header h2 {
            color: #0d6efd;
            font-weight: 600;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
        }
        .btn-calculate {
            background-color: #0d6efd;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            width: 100%;
            margin-top: 15px;
        }
        .btn-calculate:hover {
            background-color: #0b5ed7;
        }
        .input-group-text {
            background-color: #e9ecef;
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="calculator-container">
            <div class="calculator-header">
                <h2><i class="bi bi-calculator"></i> Calculator</h2>
                <p class="text-muted">Enter two values to perform calculations</p>
            </div>
            
            <form action="{{url('')}}/calculater">
                <div class="mb-4">
                    <label for="v1" class="form-label">First Value</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-input-cursor-text"></i></span>
                        <input type="number" class="form-control" id="v1" name="v1" placeholder="Enter first value" required>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="v2" class="form-label">Second Value</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-input-cursor-text"></i></span>
                        <input type="number" class="form-control" id="v2" name="v2" placeholder="Enter second value" required>
                    </div>
                </div>
                
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-calculate" name="btn">
                        <i class="bi bi-calculator-fill"></i> Calculate
                    </button>
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>