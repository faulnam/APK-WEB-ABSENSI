<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login Karyawan</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet" />
<style>
  * {
    box-sizing: border-box;
  }
  body, html {
    margin: 0; padding: 0; height: 100%;
    font-family: 'Roboto', sans-serif;
    background: linear-gradient(135deg, #1e3c72, #2a5298);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .login-wrapper {
    background: #fff;
    padding: 50px 60px;
    border-radius: 12px;
    width: 420px;
    max-width: 95vw;
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    box-sizing: border-box;
  }
  .login-wrapper h1 {
    margin: 0 0 30px 0;
    color: #2a5298;
    font-weight: 700;
    text-align: center;
    letter-spacing: 1.2px;
    font-size: 28px;
  }
  form {
    display: flex;
    flex-direction: column;
  }
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 18px 50px 18px 20px;
    margin-bottom: 25px;
    border: 2px solid #ccc;
    border-radius: 8px;
    font-size: 18px;
    transition: border-color 0.3s ease;
  }
  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: #2a5298;
    outline: none;
    box-shadow: 0 0 8px rgba(42, 82, 152, 0.3);
  }
  input[type="submit"] {
    background-color: #2a5298;
    color: white;
    border: none;
    padding: 16px;
    border-radius: 8px;
    font-size: 20px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  input[type="submit"]:hover {
    background-color: #1e3c72;
  }
  .password-wrapper {
    position: relative;
    width: 100%;
  }
  .toggle-password {
    position: absolute;
    top: 50%;
    right: 16px;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 22px;
    color: #2a5298;
    user-select: none;
  }
  .footer-text {
    margin-top: 30px;
    text-align: center;
    font-size: 14px;
    color: #f0f0f0;
    max-width: 420px;
    width: 95vw;
    user-select: none;
  }
  .footer-text a {
    color: #a9c4f2;
    text-decoration: none;
  }
  .footer-text a:hover {
    text-decoration: underline;
  }
  ul.colorlib-bubbles {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0; left: 0;
    z-index: -1;
    overflow: hidden;
  }
  ul.colorlib-bubbles li {
    position: absolute;
    list-style: none;
    display: block;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.15);
    bottom: -160px;
    border-radius: 50%;
    animation: bubble 20s linear infinite;
  }
  ul.colorlib-bubbles li:nth-child(1) {
    left: 10%;
  }
  ul.colorlib-bubbles li:nth-child(2) {
    left: 20%;
    width: 60px;
    height: 60px;
    animation-delay: 2s;
    animation-duration: 25s;
  }
  ul.colorlib-bubbles li:nth-child(3) {
    left: 25%;
    animation-delay: 4s;
  }
  ul.colorlib-bubbles li:nth-child(4) {
    left: 40%;
    width: 50px;
    height: 50px;
    animation-duration: 22s;
    background: rgba(255, 255, 255, 0.25);
  }
  ul.colorlib-bubbles li:nth-child(5) {
    left: 70%;
  }
  ul.colorlib-bubbles li:nth-child(6) {
    left: 80%;
    width: 60px;
    height: 60px;
    animation-delay: 3s;
    background: rgba(255, 255, 255, 0.2);
  }
  ul.colorlib-bubbles li:nth-child(7) {
    left: 32%;
    width: 40px;
    height: 40px;
    animation-delay: 7s;
  }
  ul.colorlib-bubbles li:nth-child(8) {
    left: 55%;
    width: 60px;
    height: 60px;
    animation-delay: 15s;
    background: rgba(255, 255, 255, 0.3);
  }
  ul.colorlib-bubbles li:nth-child(9) {
    left: 25%;
    width: 50px;
    height: 50px;
    animation-delay: 2s;
    background: rgba(255, 255, 255, 0.18);
  }
  ul.colorlib-bubbles li:nth-child(10) {
    left: 90%;
    width: 40px;
    height: 40px;
    animation-delay: 11s;
  }
  @keyframes bubble {
    0% {
      transform: translateY(0) rotate(0deg);
      opacity: 1;
      border-radius: 0;
    }
    100% {
      transform: translateY(-1000px) rotate(720deg);
      opacity: 0;
      border-radius: 50%;
    }
  }
</style>
</head>
<body>

<div class="login-wrapper">
  <h1>Login Karyawan</h1>
  <form action="pro_login_karyawan.php" method="post" autocomplete="off">
    <input type="text" name="username" placeholder="Username" required autocomplete="username" />
    <div class="password-wrapper">
      <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password" />
      <span class="toggle-password" id="togglePassword" title="Tampilkan / Sembunyikan Password">&#128065;</span>
    </div>
    <input type="submit" value="Login" />
  </form>
</div>

<div class="footer-text">
  <p>© 2020 M Syifaul Anam All rights reserved | Design by <a href="https://colorlib.com/" target="_blank" rel="noopener noreferrer">Colorlib</a></p>
</div>

<ul class="colorlib-bubbles">
  <li></li><li></li><li></li><li></li><li></li>
  <li></li><li></li><li></li><li></li><li></li>
</ul>

<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');

  togglePassword.addEventListener('click', () => {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    togglePassword.textContent = type === 'password' ? '\u{1F441}' : '\u{1F576}';
  });
</script>

</body>
</html>
