<!DOCTYPE html>
<html>
<head>
    <title>voting log In</title>
    <link rel="stylesheet" type="text/css" href="voting.css">
</head>
<body>
    <div class="container">
        <div class="frmholder">
            <div class="frmheader">
                <p>voting system</p>
            </div>
            <form action="validate.php" method="post">
                <div>
                    <h5>Username</h5>
                    <input type="text" name="username">
                </div>
                <div>
                    <h5>Password</h5>
                    <input type="password" name="password">
                </div>
                <div>
                    <button type="submit" name="login">Log In</button>
                </div>
                <br/>
                <div>
                    <a href="">Forgot Password?</a>
                </div>
                <div>
                    <h3>OR</h3>
                </div></form>
            
            <form action="register.php" method="post">
                <div>
                    <button id="btn2" type="submit" name="signup">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>