<?php
require 'session.php';

include 'class.php';
$ob=new DB();

?>

<html>

<head>
  <title>
    Dashboard
  </title>

  <!-- JQuery Include -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

  <style>
    main{
      display:flex;
    }
    #h1{
      border: 1px solid black;
      border-radius: 7px;
      box-shadow: 5px 5px #888888;
      margin-top: 25px;
      text-align: center;
    }
    .container{
      background: silver;
      height:100vh;
      width:100%;
      /* overflow-y:scroll; */
    }

    #col1{
      border-radius: 25px;
    }
   
    #tilak{
      box-shadow:10px;
    }

    .dash{
      font-size:50px;
    }
  </style>

</head>

<body>

  
  <!-- Start Slidebar  -->
  <main class="d-flex flex-nowrap">

    <div>
 <?php
 include 'sidebars.php';
?>
    </div>
  
  <div class="container">
    
    <!-- Start Header -->
    
    <header id="h1">
      <span class="fs-4">Dashboard</span>
    </header>
    
    <!-- End Header -->
    
    <!-- Strt Box -->
    <div class="row row-cols-1 row-cols-sm-2  g-3 my-3">
      

  <?php

    $date = date("Y-m-d");
    
    // $arr = array('order_date'=>$date);
    $res1 = $ob->sel_bet_query("record_details",$date);

    // $today=mysqli_num_rows($res1);

  ?>

      <div class="col">
        <div class="card shadow-sm bg-info">
          <svg class="bd-placeholder-img card-img-top " width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
          role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Today</title>
          <rect width="100%" height="100%" fill="#d1774d" /><text class = "dash" x="50%" y="50%" fill="#000000"
          dy=".3em"><?php echo $res1?></text>
          </svg>
        
          <div class="card-body">
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#000000"
            dy=".3em"><strong>TODAY</strong> </text>
          </div>
        </div>
      </div>



 <?php

  $date = date('Y-m-d', strtotime('-7 days'));

  $tilak = $ob->sel_bet_query("record_details",$date);

?>

      <div class="col">
          <div class="card shadow-sm bg-info ">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Week</title>
            <rect width="100%" height="100%" fill="#d1774d" /><text class = "dash" x="50%" y="50%" fill="#000000"
            dy=".3em"><?php echo $tilak?> </text>
          </svg>
          
          <div class="card-body">
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#000000"
            dy=".3em"><strong>WEEK</strong></text>
          </div>
        </div>
      </div>
      


<?php

  $date1 = date('Y-m-d', strtotime('-1 month'));

  $tilak1 = $ob->sel_bet_query("record_details",$date1);

?>
        <div class="col">
          <div class="card shadow-sm bg-info">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Month</title>
            <rect width="100%" height="100%" fill="#d1774d" /><text class = "dash" x="50%" y="50%" fill="#000000"
            dy=".3em"><?php echo $tilak1?> </text>
            </svg>
          
            <div class="card-body">
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#000000"
              dy=".3em"><strong>MONTH</strong></text>
            </div>
        </div>
    </div>



  <?php

    $res=$ob->selectquery("record_details");
    $total=mysqli_num_rows($res);

  ?>

    <div class="col">
      <div class="card shadow-sm bg-info">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Total</title>
        <rect width="100%" height="100%" fill="#d1774d" /><text class = "dash" x="50%" y="50%" fill="#000000"
        dy=".3em"><?php echo $total?></text>
      </svg>
      
      <div class="card-body">
        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#000000"
          dy=".3em"><strong>TOTAL</strong></text>
      </div>
    </div>
  </div>
  
      </div>
    <!-- End Box -->

  </div>
  
</main>
  
  
  
  
<!-- #e4b7b7 -->
  
  
  
  
  
</body>

</html>