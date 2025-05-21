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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .table-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            color: #0d6efd;
            margin-bottom: 30px;
            font-weight: 600;
        }
        .btn-generate {
            padding: 10px 25px;
            font-weight: 500;
        }
        .input-group {
            max-width: 300px;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-container text-center">
            <h1 class="form-title">Multiplication Table Generator</h1>
            
            <form action="{{url('')}}/tables" method="GET">
                <div class="input-group mb-4">
                    <span class="input-group-text bg-primary text-white">
                        <i class="bi bi-input-cursor-text"></i>
                    </span>
                    <input type="number" 
                           name="num" 
                           class="form-control" 
                           placeholder="Enter any number" 
                           required>
                </div>
                
                <button type="submit" 
                        name="table" 
                        class="btn btn-primary btn-generate">
                    <i class="bi bi-table"></i> Generate Table
                </button>
            </form>
        </div>
    </div>

   
</body>
</html>