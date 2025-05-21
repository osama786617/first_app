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
    <title>Osama Hyder Abbasi Logo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            max-width: 500px;
            margin: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .logo-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
        }
        
        .logo-initials {
            font-size: 5rem;
            font-weight: 700;
            background: linear-gradient(to right, #3a7bd5, #00d2ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 1rem;
            font-family: 'Arial', sans-serif;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .logo-name {
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-top: 0.5rem;
        }
        
        .logo-title {
            font-size: 1.1rem;
            color: #555;
            margin-top: 0.5rem;
            font-weight: 400;
            letter-spacing: 1px;
        }
        
        .logo-divider {
            width: 100px;
            height: 5px;
            background: linear-gradient(to right, #3a7bd5, #00d2ff);
            margin: 1.5rem 0;
            border-radius: 3px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .login-btn {
            margin-top: 2rem;
            padding: 0.6rem 2rem;
            background: linear-gradient(to right, #3a7bd5, #00d2ff);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(58, 123, 213, 0.3);
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(58, 123, 213, 0.4);
            color: white;
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <div class="logo-initials">OHA</div>
        <div class="logo-divider"></div>
        <div class="logo-name">Osama Hyder Abbasi</div>
        <div class="logo-title">Professional Portfolio</div>
        <a href="/login" class="login-btn">Login</a>
    </div>

</body>
</html>