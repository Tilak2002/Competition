<?php
require ('session.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Setting</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">

        <link rel="stylesheet" href="setting.css">
        
    </head>

    <body>
        
        <main class="d-flex flex-nowrap">
    
       <div>
    <?php
include 'sidebars.php';
    ?>
      </div>

        <div class="container">
            <h3 id="h1">Setting</h3>
            <div class="form">
          <form name="frm">

                    <table>
                        <tr>
                            <td>Old Password:</td>
                            <td><input type="password" name="oldpass" id="oldpass"></td>
                        </tr>

                        <tr>
                            <td>New Password:</td>
                            <td><input type="password" name="newpass" id="newpass"></td>
                        </tr>

                        <tr>
                            <td>Re-Enter Password:</td>
                            <td><input type="password" name="repass" id="repass"></td>
                        </tr>
                        
                        <!-- <tr>
                            <td id="sub">
                                <input type="button" value="Submit" class="submit-btn" id="sub1">
                            </td>

                        </tr> -->
                    </table>
                </form>
                <div>
                <input type="button" value="Submit" class="submit-btn" id="sub1">
                </div>
            </div>
          <!-- <h1 id="header">Correction</h1> -->
        </div>
    </main>

    <script>
        $('#sub1').click(function(){

            let opass = $('#oldpass').val();
            let npass = $('#newpass').val();
            let repass = $('#repass').val();

            var valid = check();

            if(!valid){
                return;
            }

            function check(){

     if((npass || repass) == ""){
        alert("Password Field cannot be null");
        return false;
     }

     else if(npass == repass){
        $.ajax({
                    method: "post",
                    url: "http://sql213.epizy.com/Competition/set_pass.php",
                    data:{
                        opassw:opass,
                        npassw:npass
                    }
                })
                .done(function(msg){
                    alert(msg);
                 });
    
                 $('#oldpass').val('');
                 $('#newpass').val('');
                 $('#repass').val('');
                }

                else{
                    alert("New and Re-entered Passwords does not match");
                }
            }
        });

    </script>

    </body>

</html>