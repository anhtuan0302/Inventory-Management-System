<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="register-container">
    <div class="logo">
      <img src="images/logo.png" alt="Logo" width="150">
    </div>
    <h2>Create an Account</h2>
    <form action="/register" method="post">
      @csrf
      <div class="mb-3">
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
      </div>
      <div class="mb-3">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="mb-3">
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <div class="mt-2">
      <span class="text-white">Already have an account? </span><a href="login" class="text-white">Login</a>
    </div>
    <div class="footer">
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

  .register-container {
    background-color: #10163A;
    width: 400px;
    height: 600px;
    padding: 30px 50px 0px 50px;
    border-radius: 10px;
    color: #fff;
    text-align: center;
  }

  .register-container h2 {
    margin-bottom: 30px;
    margin-top: 60px;
    font-size: 20px;
  }

  .logo {
    margin-bottom: 5px;
  }

  .footer {
    padding-top: 40px;
    font-size: 11px;
    color: #bcbcbc;
  }

  .register-container button {
    background-color: #7266EE;
    border: none;
    padding: 8px 40px;
    margin-bottom: 30px;
  }

  .text-white {
    color: #959595;
    font-size: 15px;
  }
</style>
