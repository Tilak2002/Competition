<?php
require ('session.php');
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

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

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
   
    <script type="text/javascript">
        // add row
        var loopInc = 2;
        $html="";
        $("#addRow").click(function() {
            console.log("dropdownhtml");
            var html = '';
            // let dropdownhtml="<?php //echo $html ?>";
            html+= '<tr class="t3">';
            html += '<td>Activity :</td>';
            html += '<td><input type="text" name="activity" id="activity_'+loopInc+'">'; 
            // html += '<td><select name="it" id="it1">'; 
            // html += dropdownhtml;
            html += '</input></td>'; 
            // html += '<td>Weight (in kg) : </td>';            
            // html += '<td><input type="number" name="quantity" id="quantity_'+loopInc+'"></td>';

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

        $(document).ready(function(){

            $('#check').click(function(){

                if($('#check').is(":checked")){
                    $('#sadd').val($('#badd').val());
                    $('#sstate').val($('#bstate').val()).change();
                    // $('#sstate').html($('#bstate').html());
                    $('#scode').val($('#bcode').val());
                }

                else{

                    $('#sadd').val("");
                    $('#sstate').val("");
                    $('#scode').val("");

                }

            });
            
        });

        // function validateForm() {
        //     $('.validateMe').each(function() {
        //         if( $(this).val() == "" ) {
        //             alert("Please Insert "+$(this).data('title'));
        //             $(this).focus();
        //             return false;
        //         }
        //     })
        //     return true;
        // }

        $('.submit-btn').click(function(){
        let ocname=$('#ocname').val();

        let gstin=$('#gstin').val();
        let length = gstin.length;
        console.log(length);

        let mobno=$('#mobno').val();
        let badd=$('#badd').val();
        let bstate=$('#bstate').val();
        let bcode=$('#bcode').val();
        let sadd=$('#sadd').val();
        let sstate=$('#sstate').val();
        let scode=$('#scode').val();


        var valid = check();
        if(!valid){
            return;
        }

        function check()
        {
            if(ocname==""){
                frm.ocname.focus();
                alert("Please fill the 'Order Customer Name' field");
                return false;
            }

            else if(checkOCname(ocname))
                {
                    alert("Only characters are allowed in the 'Order Customer Name' field");
                    frm.ocname.focus();
                    return false;
                }


            if(gstin==""){
                frm.gstin.focus();
                alert("Please fill the 'GSTIN' field");
                return false;
            }

            else if(length!=15){
                    alert("Exactly 15 characters are allowed in the 'GSTIN' field");
                    frm.gstin.focus();
                    return false;
                }


             if(mobno==""){
                 frm.mobno.focus();
                 alert("Please fill the 'Mobile number' field");
                 return false;
            }

            else if(!checkMobNo(mobno))
                {
                    alert("Only 10 digits (Starting from 6-9) are allowed in the 'Mobile number' field ");
                    frm.mobno.focus();
                    return false;
                }

             if(badd==""){
                 frm.baddress.focus();
                 alert("Please fill the 'Billing Address' field");
                 return false;
            }

            else if(checkBAdd(badd))
                {
                    alert("Only characters and digits are allowed in the 'Billing Address' field");
                    frm.baddress.focus();
                    return false;
                }

             if(bcode==""){
                 frm.bcode.focus();
                 alert("Please fill the 'Pincode' field");
                 return false;
            }

            else if(!checkBCode(bcode))
                {
                    alert("Only 6 digits are allowed in the 'Pincode' field");
                    frm.bcode.focus();
                    return false;
                }

             if(sadd==""){
                 frm.saddress.focus();
                 alert("Please fill the 'Shipping Address' field");
                 return false;
            }

            else if(checkSAdd(sadd))
                {
                    alert("Only characters and digits are allowed in the 'Shipping Address' field");
                    frm.saddress.focus();
                    return false;
                }

                if(scode==""){
                 frm.scode.focus();
                 alert("Please fill the 'Pincode' field");
                 return false;
            }

            else if(!checkSCode(scode))
                {
                    alert("Only 6 digits are allowed in the 'Pincode' field");
                    frm.scode.focus();
                    return false;
                }

            else{
                return true;
            }
        }

       
        function checkOCname(ocname)
            {
                return /[\W\d]+/.test(ocname);
            }

        // function checkGSTIN(gstin)
        //     {
        //         return /[\W\D]{15}$/.test(gstin);
        //     }

        function checkMobNo(mobno)
            {
                return /^[6-9]{1}[\d]{9}$/.test(mobno);
            }

        function checkBAdd(badd)
            {
                return /^[\W\D]$/.test(badd);
            }

        function checkBCode(bcode)
            {
                return /^[\d]{6}$/.test(bcode);
            }

            function checkSAdd(sadd)
            {
                return /^[\W\D]$/.test(sadd);
            }

            function checkSCode(scode)
            {
                return /^[\d]{6}$/.test(scode);
            }


            $.ajax({
                method:"post",
                url:"http://localhost/Invoice/insert_cust_details.php",
                data: {
                    ocname  :ocname,
                    gstin  :gstin,
                    mobno   :mobno,
                    badd    :badd,
                    bstate  :bstate,
                    bcode   :bcode,
                    sadd    :sadd,
                    sstate  :sstate,
                    scode   :scode
                }
            }).done(function(msg){
                alert(msg);
            });
        //     $('#ocname').val('');
        //     $('#dcname').val('');
        //     $('#mobno').val('');
        //     $('#badd').val('');
        //     $('#bstate').val('');
        //     $('#bcode').val('');
        //     $('#sadd').val('');
        //     $('#sstate').val('');
        //     $('#scode').val('');

        $('.reset').click();
        

    });



    $(document).ready(function(){
        $('.select1').select2();
        $('.select').select2();
    });
    </script>

    </body>
    </html>