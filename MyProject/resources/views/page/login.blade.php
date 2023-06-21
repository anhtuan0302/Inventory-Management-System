<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - IMS</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="login-container">
    <div class="logo">
      <img src="images/logo.png" alt="Logo" width="150">
    </div>
    <h2>Login to IMS</h2>

    <form action="/login" method="post">
      @csrf
      <div class="mb-3">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
      </div>
      @error('message')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    
    <div class="mt-2">
      <span class="text-white">Don't have an account? </span><a href="register" class="text-white">Register</a>
    </div>
    <div class="footer mt-4">
      COPYRIGHT © 2023 Inventory Management System
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
  body {
    background-color: #7266EE;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
  }

  .login-container {
    background-color: #10163A;
    width: 400px;
    height: 600px;
    padding: 30px 50px 0px 50px;
    border-radius: 10px;
    color: #fff;
    text-align: center;
  }

  .login-container h2 {
    margin-bottom: 30px;
    margin-top: 60px;
    font-size: 20px;
  }

  .logo {
    margin-bottom: 20px;
  }

  .footer {
    padding-top: 120px;
    font-size: 11px;
    color:#bcbcbc;
  }

 .login-container button {
    background-color: #7266EE;
    border: none;
    padding: 8px 40px;
    margin-bottom: 30px;
  }

  .text-white {
    color: #787878;
    font-size: 15px;
  }
</style>
