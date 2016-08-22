
<!-- This is HTML page for front-end //-->

<!DOCTYPE html>

<html>

    <head lang="en-us">
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Jhirwal
        </title>
        <style type="text/css">
        @import url("CSS/css1.css");
        </style>

    </head>

    <body>
            <!-- Adding logo //-->
            <div class="logo" id="loginsys">

            <img src="images/logo.jpg" width="50" height="50">

            </div>

            <!-- Login System //-->
            <div class="loginsystem">

            <form action="start.php" method="POST" >

            <input type="text" size="30" name="phonenumber" placeholder="Phone Number" required="required" class="email" id="phoneno">&nbsp&nbsp
            <input type="password" name="password" placeholder="Password" required="required" class="pass" id="passwordlogin">&nbsp&nbsp
            <input type="submit" name="login" value="LogIn" class="get" id="submitlogin" >

            </form>

            </div>

            <br><br><br><br><hr><br>

            <!-- Crating Account //-->

            <div class="registration">

            <div class="di">

            <p class="reg">Don't have account.</p>

            <form acton="start.php" method="POST">
                <input type="text" placeholder="First Name" name="firstname1" required="required" class="username"><br><br>
                <input type="text" placeholder="Last Name" name="username1" required="required" class="username"><br><br>
                <input type="text" placeholder="Phone Number" name="regphoneno" required="required" class="phone"><br><br>
                <input type="password" placeholder="Password" name="regpassword1" required="required" class="phoneconf"><br><br>
            <input type="password" placeholder="Confirm Password" name="regpassword2" required="required" class="phoneconf1"><br>
            <input type="submit" value="SignUp" class="sign">

            </form>

            </div>

            </div>


                <!-- Bottom Area of Page //-->

                <div class="info">

                <hr>

                <a href="contactus.html"  id="contactus">Credit</a>

                </div>

                <script type="text/javascript" src="script/script.js"></script>

      </body>
</html>
