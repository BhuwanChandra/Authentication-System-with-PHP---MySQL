<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive side menu</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="head">
        <div id="main">
            <div class="con">
                <div class="signup">
                    <h2 id="sp">Login</h2>
                    <hr />
                    <br />
                    <form action="validation.php" method="post">
                        <label>Userame : <br /><input type="text" class="bdr" name="username" placeholder="username" required /></label><br />
                        <label>Password : <br /><input type="password" class="bdr" name="password" placeholder="password" required /></label><br />
                        <button type="submit" id="btn">Login</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="main">
            <div class="con">
                <div class="signup">
                    <h2 id="sp">SignUp</h2>
                    <hr />
                    <br />
                    <form action="registration.php" method="post">
                        <label>Userame : <br /><input type="text" class="bdr" name="username" placeholder="username" required /></label><br />
                        <label>Email : <br /><input type="email" class="bdr" name="email" placeholder="email" required /></label><br />
                        <label>Password : <br /><input type="password" class="bdr" name="password" placeholder="password" required /></label><br />
                        <button type="submit" id="btn">SignUp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>