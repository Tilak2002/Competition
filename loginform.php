<?php
    include 'class.php';
?>

<!DOCTYPE html>
<html lang="en">
    <!--  -->
<head>
    <title>login form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <script>

        function newpage()
        {
            location.href="signupform.php";
        }
    </script>

</head>
<body>
    <section id="banner">
        <div id="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="buttons">Login</button>
                <button type="button" class="buttons" onclick="newpage()">Sign Up</button>
            </div><br><br><br><br>
            <!-- <div class="social">
                <div class="go"><i class="fab fa-google"></i>  Google</div>
                <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
            </div> -->
            <form class="form" id="form" name="frm">
                <div class="form-control">
                    <label for="username">Email</label>
                    <input type="text" name="email" id="email" placeholder="email">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error massege</small>
                </div>
                <button type="button" class="submit-btn" id="login-btn">Login</button>
            </form>
        </div>
    </section>

    
    <script>

        $('#login-btn').click(function(){

            let email = $('#email').val();
            let pass = $('#password').val();

            console.log(email);
            console.log(pass);

    var valid = check();

        if(!valid){
            return;
        }

        function check()
        {
            if(email==""){
                frm.email.focus();
                alert("Please fill the 'Email' field");
                return false;
            }
            
            if(pass==""){
                frm.password.focus();
                alert("Please fill the 'Password' field");
                return false;
            }

            else{
                return true;
            }
        }

            $.ajax(
        {
            method: "POST",
            url:"http://localhost/Competition/select_signup.php",
            
            data:
            {
                email: email,
                pass: pass
            }

        }).done(function(msg){
                console.log(msg);
                            
                if(msg=="true")
                {
                    window.location.assign("http://localhost/Competition/registration.php");   
                }
                else{
                    alert("Entered data is not true");
                }
            });
        });

    </script>
</body>
</html>
    