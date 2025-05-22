<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .container {
      text-align: center;
    }

    h1 {
      font-size: 48px;
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 30px;
      margin: 10px;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
      color: white;
    }

    .btn-login {
      background-color: #4CAF50;
    }

    .btn-register {
      background-color: #2196F3;
    }

    .btn:hover {
      opacity: 0.9;
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome!</h1>
    <p>Please choose an option below to continue</p>
    <a href="logins"><button class="btn btn-register">Login</button></a>
    <a href="register"><button class="btn btn-register">Register</button></a>
  </div>
</body>
</html>
