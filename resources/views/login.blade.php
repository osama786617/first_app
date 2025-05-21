<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login & Register</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
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

    .navbar {
      background-color: rgba(255, 255, 255, 0.9) !important;
      backdrop-filter: blur(5px);
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand {
      font-weight: 600;
      color: #0d6efd !important;
    }

    .container-form {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .form-container {
      width: 350px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.2);
      overflow: hidden;
      position: relative;
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .form-box {
      width: 200%;
      display: flex;
      transition: 0.5s ease-in-out;
    }

    .form {
      width: 50%;
      padding: 40px;
      transition: all 0.5s;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: none;
      border-bottom: 2px solid #ccc;
      outline: none;
      background: transparent;
      transition: 0.3s;
    }

    input:focus {
      border-bottom-color: #0d6efd;
    }

    .btn-primary {
      width: 100%;
      padding: 12px;
      border: none;
      background: #0d6efd;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background: #0b5ed7;
      transform: translateY(-2px);
    }

    .toggle-btns {
      display: flex;
      justify-content: center;
      background: #0d6efd;
    }

    .toggle-btn {
      flex: 1;
      padding: 15px;
      background: transparent;
      color: #fff;
      font-weight: bold;
      border: none;
      cursor: pointer;
      transition: 0.3s;
      margin: 0;
    }

    .toggle-btn.active {
      background: rgba(255, 255, 255, 0.9);
      color: #0d6efd;
    }
  </style>
</head>
<body>
  <!-- Bootstrap Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/">OSAMA HYDER ABBASI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cal">CALCULATER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">LOGIN</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login/Register Form -->
  <div class="container-form">
    <div class="form-container">
      <div class="toggle-btns">
        <button id="loginBtn" class="toggle-btn active">Login</button>
        <button id="registerBtn" class="toggle-btn">Register</button>
      </div>
      <div class="form-box" id="formBox">
        <!-- Login Form -->
        <div class="form" id="loginForm">
          <h2>Login</h2>
          <input type="email" placeholder="Email" required>
          <input type="password" placeholder="Password" required>
          <button class="btn btn-primary">Login</button>
        </div>
        <!-- Register Form -->
        <div class="form" id="registerForm">
          <h2>Register</h2>
          <input type="text" placeholder="Full Name" required>
          <input type="email" placeholder="Email" required>
          <input type="password" placeholder="Password" required>
          <button class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    const loginBtn = document.getElementById('loginBtn');
    const registerBtn = document.getElementById('registerBtn');
    const formBox = document.getElementById('formBox');

    loginBtn.addEventListener('click', () => {
      formBox.style.transform = "translateX(0%)";
      loginBtn.classList.add('active');
      registerBtn.classList.remove('active');
    });

    registerBtn.addEventListener('click', () => {
      formBox.style.transform = "translateX(-50%)";
      registerBtn.classList.add('active');
      loginBtn.classList.remove('active');
    });
  </script>
</body>
</html>