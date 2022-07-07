<?php

    include 'class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="css/login.css">

       <script>
          function newpage()
        {
            location.href="index.php";
        }
       </script>
       
</head>
<body>
    <section id="banner">
        <div id="form-box">
            <div class="button-box">
                <div id="btn1"></div>
                <button type="button" class="buttons" id="login" onclick="newpage()">Login</button>
                <button type="button" class="buttons">Sign Up</button>
            </div><br><br>
            <!-- <div class="social">
                <div class="go"><i class="fab fa-google"></i>  Google</div>
                <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
            </div> -->
            <form class="form" id="form" name="frm">
                <div class="form-control">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Name">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="contactno">Contact Number</label>
                    <input type="tel" name="contactno" id="contactno" placeholder="Contact Number">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="form-control">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                    <i class="fa fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <button type="button" class="submit-btn" id="login-btn"> Sign Up</button>
                <!-- <input class="submit-btn" id="login-btn" type="submit" value="Sign Up"> -->
            </form>
        </div>
    </section>

    <script>

        $('#login-btn').click(function(){

            console.log("Tilak");
            let uname = $('#username').val();
            let email = $('#email').val();
            let mobile = $('#contactno').val();
            let pass = $('#password').val();
            let cpass = $('#cpassword').val();
        
        var valid = check();
        if(!valid){
            return;
        }

        function check()
        {
            if(uname==""){
                frm.username.focus();
                alert("Please fill the 'Username' field");
                return false;
            }

            else if(checkUname(uname))
                {
                    alert("Only characters are allowed in the 'Username' field");
                    frm.username.focus();
                    return false;
                }

                if(email==""){
                frm.email.focus();
                alert("Please fill the 'Email' field");
                return false;
            }

            else if(checkEmail(email))
                {
                    alert("'Email' field must start with characters or special characters only");
                    frm.email.focus();
                    return false;
                }

            if(mobile==""){
                frm.contactno.focus();
                alert("Please fill the 'Contact Number' field");
                return false;
            }


            else if(!checkMobile(mobile))
                {
                    alert("Exactly 10 digits (Starting with 6-9 range) are allowed in the 'Contact Number' field");
                    frm.contactno.focus();
                    return false;
                }          

            if(pass==""){
                frm.password.focus();
                alert("Please fill the 'Password' field");
                return false;
            }

            if(cpass==""){
                frm.cpassword.focus();
                alert("Please fill the 'Confirm Password' field");
                return false;
            }

            else if(pass!=cpass){
                alert("Passwords does not match");
                return false;
            }

            else{
                return true;
            }
        }


         function checkUname(uname)
            {
                return /[\W\d]+$/.test(uname);
            }
         function checkEmail(email)
            {
                return /^[\d]{1}$/.test(email);
            }
         function checkMobile(mobile)
            {
                return /^[6-9]{1}[\d]{9}$/.test(mobile);
            }
            

            $.ajax(
        {
            method: "POST",
            url:"http://localhost/Competition/insert_signup.php",
            
            data:
            {
                uname: uname,
                email: email,
                mobile: mobile,
                pass: pass,
                cpass: cpass
                
            }
        })
        .done(function(msg){         
               alert('Data Inserted Succesfully');    
        });



        });

    </script>
</body>
</html>
    