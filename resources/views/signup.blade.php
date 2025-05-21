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
    <title>Sign Up Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        .signup-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .signup-header h2 {
            color: #333;
            font-weight: 600;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-signup {
            background-color: #0d6efd;
            border: none;
            width: 100%;
            padding: 10px;
            font-weight: 600;
        }
        .btn-signup:hover {
            background-color: #0b5ed7;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="signup-container">
            <div class="signup-header">
                <h2>Create Your Account</h2>
                <p class="text-muted">Join our community today</p>
            </div>
            
            <form>
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                    <div class="form-text">Must be at least 8 characters long</div>
                </div>
                
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" required>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="termsCheck" required>
                    <label class="form-check-label" for="termsCheck">I agree to the <a href="#">Terms and Conditions</a></label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-signup">Sign Up</button>
                
                <div class="login-link">
                    <p class="text-muted">Already have an account? <a href="#">Log in</a></p>
                </div>
                
                <div class="text-center mt-4">
                    <p class="text-muted">Or sign up with:</p>
                    <button type="button" class="btn btn-outline-primary me-2">
                        <i class="bi bi-google"></i> Google
                    </button>
                    <button type="button" class="btn btn-outline-dark">
                        <i class="bi bi-facebook"></i> Facebook
                    </button>
                </div>
            </form>
        </div>
    </div>

   
</body>
</html>