<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>portal Login Page - Hizcore</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(120deg, #8EC5FC 0%, #E0C3FC 100%);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      width: 400px;
      padding: 40px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      backdrop-filter: blur(10px);
    }

    .login-container:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    h2 {
      font-size: 26px;
      color: #333;
      font-weight: 600;
      margin-bottom: 30px;
      letter-spacing: 1px;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 8px;
      font-weight: 600;
      font-size: 15px;
      color: #444;
    }

    input {
      width: 100%;
      padding: 12px;
      margin-bottom: 25px;
      border-radius: 12px;
      border: 1px solid #ccc;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    input:focus {
      border-color: #8EC5FC;
      outline: none;
    }

    button {
      width: 100%;
      padding: 15px;
      background-color: #8EC5FC;
      color: white;
      border: none;
      border-radius: 12px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    button:hover {
      background-color: #6FA7FF;
      transform: translateY(-3px);
    }

    #errorMsg {
      color: red;
      margin-top: 10px;
      font-size: 14px;
    }

    .help-link, .reset-password-link {
      margin-top: 20px;
      display: inline-block;
      color: #8EC5FC;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
      transition: color 0.3s ease;
    }

    .help-link:hover, .reset-password-link:hover {
      color: #6FA7FF;
      text-decoration: underline;
    }

    .reset-password-container {
      margin-top: 10px;
      font-size: 14px;
      color: #28a745;
    }

    .user-list {
      margin-top: 25px;
      color: #666;
    }

    .user-list h4 {
      font-size: 16px;
      margin-bottom: 5px;
    }

    .user-list p {
      margin: 5px 0;
    }

    /* Add subtle animation */
    .fade-in {
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="login-container fade-in">
    <h2>Login to Your Account</h2>
    <form id="loginForm">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <button type="submit">Login</button>
    </form>

    <p id="errorMsg"></p>

    <div class="user-list">
    </div>

    <a class="help-link" href="mailto:help@portal.hizcore.com">Need help? Contact help@portal.hizcore.com</a><br>

    <!-- Reset Password -->
    <a class="reset-password-link" href="#" id="resetPasswordLink">Forgot Password? Reset it</a>

    <div id="resetPasswordMsg" class="reset-password-container" style="display: none;">
      Send reset my  password to <strong>reset@hizcore.com</strong> and we will send you a reset password.
    </div>
  </div>
