<?php
// require ('session.php');
include 'class.php';
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Student Details
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">

        <link rel="stylesheet" href="registration.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <main class="d-flex flex-nowrap">

        <div class="tilak">
      <?php
  include 'sidebars.php';
?>
</div>

        <div class="container">
            <h3 id="h1">Student Details Form</h3>
            <div class="form">
          <form class="form1" name="frm">

                    <table class="table table-bordered" id="t1Div">
                        <tr>
                            <td>Student's Full Name :</td>
                            <td><input type="text" name="ocname" id="ocname" class="validateMe" data-title="Customer Name"></td>
                            <!-- <td>GSTIN:</td>
                            <td><input type="text" name="gstin" id="gstin"></td> -->
                        </tr>
                        
                        <tr>
                            <td>Physics :</td>
                            <td><input type="text" name="phy" id="phy"></td>
                            <td>Chemistry :</td>
                            <td><input type="text" name="che" id="che"></td>
                        </tr>
                        <tr>
                            <td>Maths :</td>
                            <td><input type="text" name="mat" id="mat"></td>
                            <td>Biology :</td>
                            <td><input type="text" name="bio" id="bio"></td>
                        </tr>
    
                       <tr>
                            <td>Activity :</td>
                            <td><input type="text" name="activity" id="activity_1"></input></td>
                            <td ><button id="addRow" type="button" class="btn btn-info">+</button></td>

                        </tr>
                    </table>
                     
                    <table>
                        <tr>
                            <td id="res"><input type="reset" value="Reset" class="reset"></td>
                            <td id="sub" colspan="3">
                                <input type="button" value="Submit" class="submit-btn">
                            </td>

                        </tr>
                    </table>
                </form>
            </div>
          <!-- <h1 id="header">Correction</h1> -->
        </div>
    </main>

    <script>
        // add row
        var loopInc = 2;
        $html="";
        $("#addRow").click(function() {
            console.log("dropdownhtml");
            var html = '';
           
            html+= '<tr class="t3">';
            html += '<td>Activity :</td>';
            html += '<td><input type="text" name="activity" id="activity_'+loopInc+'">'; 
            html += '</input></td>'; 
            html += '<td><button id="removeRow" type="button" class="btn btn-danger">-</button></td>';
            html+= '</tr>';
            //$('#t1').after(html);
            $('#t1Div').append(html);
            loopInc++;
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('.t3').remove();
            
        });

        
        $('.submit-btn').click(function(){

        let stuname=$('#ocname').val();
        let phy=$('#phy').val();
        let che=$('#che').val();
        let maths=$('#mat').val();
        let bio=$('#bio').val();


        console.log(loopInc);
        var activity = [];
        
        for(let i=1;i<loopInc;i++){
            activity[i-1]=$("#activity_"+i).val();
            console.log(activity[i-1]);
            //  qua[i-1]=$('#quantity_'+i).val();
            
            }

            $.ajax({
                method:"post",
                url:"http://localhost/Competition/inst_registration.php",
                data: {
                    stuname  :stuname,
                    phy  :phy,
                    che   :che,
                    mat    :mat,
                    bio  :bio,
                    activity: activity
                    
                }
            }).done(function(msg){
                alert("data inserted successfully");
            });
       
        $('.reset').click();
        

    });



   
</script>

</body>
</html>