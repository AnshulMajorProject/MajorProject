<DOCTYPE html>
<head>
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="hero">
        
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
            <img src="images/fb.png" alt="facebook">
            <img src="images/gm.png" alt="gmail">
            <img src="images/tw.png" alt="twitter">
        </div>
        <form id="login" class="input-group" action="validation.php" method="post">
            <input type="text" name="user" class="input-field" placeholder="User Id" required>
            <input type="password" name="password"class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span> 
            <button type="submit" class="submit-btn">Log in</button>
        </form>

        <form id="register" class="input-group" action="registration.php" method="post">
            <input type="text" name="user" class="input-field" placeholder="User Id" required>
            <input type="email" name="email" class="input-field" placeholder="Email Id" required>
            <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span> 
            <button type="submit" class="submit-btn">Register</button>
        </form>
        </div>
        
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>

</body>
</html>