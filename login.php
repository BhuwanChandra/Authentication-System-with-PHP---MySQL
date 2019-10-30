<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Responsive side menu</title>
    <style>
    body{
	height: 100%;
	width: 100%;
    overflow-y: hidden;
	margin: 0;
	padding:0;
	background-color: #073585;
	background-image: url(medical1.jpg);
	background-size: cover;
	background-repeat:no-repeat;
}
.con{
	height: 100vh;
	padding-top: 8vh;
	width: inherit;
	margin: 0;
}
hr{
	width:30vw;
	background-color: #aaa5a5;
	border: .8px solid #aaa5a5;
}
.signup {
	border: 0.8px solid #000405;
	border-radius: 1cm;
    min-height: 55vh;
	margin: auto;
	margin-top: 15vh;
    width: 40vw;
	background: #1414146e;
	font-size: 20px;
	font-weight: 600;
	color: #ffffff;
	text-align: center;
	padding-bottom: 15px;
}
#sp{
	font-weight: 700;
	font-size: 2em;
}
label{
	margin: 10px;
}
#btn{
	border: 1px solid #11a8f3;
	border-radius: .5cm;
	color: #11a8f3;
	outline: none;
    background-color: #eee;
    height: 35px;
	width: 18vh;
	font-size: 1.2rem;
	font-weight: 700;
	transition: .3s;
}
#btn:hover{
	color: #eee;
	background: #11a8f3;
	border-color: #eee;
}
.bdr{
	border: 1.5px solid #0627fd;
	outline: none;
	border-radius: .5cm;
	padding: 10px;
	width: 20vw;
	margin: 10px;
	border-spacing: 30px;
}
.head{
    display: flex;
}
#main{
    margin-left: 5vw;
    margin-right: 5vw;
}
    </style>
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
                        <label>Userame : <br /><input type="text" class="bdr" name="username" placeholder="username"
                                required /></label><br />
                        <label>Password : <br /><input type="password" class="bdr" name="password" placeholder="password"
                                required /></label><br />
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
                        <label>Userame : <br /><input type="text" class="bdr" name="username" placeholder="username"
                                required /></label><br />
                        <label>Email : <br /><input type="email" class="bdr" name="email" placeholder="email"
                                required /></label><br />
                        <label>Password : <br /><input type="password" class="bdr" name="password" placeholder="password"
                                required /></label><br />
                        <button type="submit" id="btn">SignUp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openSlideMenu() {
            document.getElementById("side-menu").style.width = "250px";
            //document.getElementById("main").style.marginLeft = "250px";
        }
        function closeSlideMenu() {
            document.getElementById("side-menu").style.width = "0";
            //document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>