<?php
include('connection.php');

//fetching farm investor details
$result = mysqli_query($conn,"select * from dufma_investment")or die(mysqli_error($con));
						while( $sresult_row = mysqli_fetch_array( $result)){
                            $name = $sresult_row['name_investor'] ;
                            $email = $sresult_row['email'];
                            $phone = $sresult_row['phone'];
                            $category = $sresult_row['category'];
                            $dura_invest = $sresult_row['dura_invest'];
                            $unit = $sresult_row['unit'];
                            $v_unit = $sresult_row['v_unit'];
                            $roi = $sresult_row['roi']; 
                            $roi_starts = $sresult_row['roi_starts'];
                            $m_uic = $sresult_row['m_uic']; 
                            $adv_ticket = $sresult_row['adv_ticket'];
                            $erp = $sresult_row['erp'];
                            $investor_feature = $sresult_row['investor_feature']; 
                            $live_training = $sresult_row['live_training'];
                        }
						
?>
<!DOCTYPE html>
<html lang="en">
<head style="background-color:#0b3b63">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summary</title>
    <link rel="stylesheet" href="css/summary.css">

    <style> 
            a.disabled { 
                pointer-events: none; 
            } 
        </style>


    <script language="javascript">
        document.ready(function(){
            var link = document.getElementById('management_dashboard_redirect'); 
                link.setAttribute("class", "disabled"); 
              link.setAttribute("style", "color: black;"); 
              down.innerHTML = "Link disabled";
           // $('.management_dashboard_redirect').prop('disabled', true);
        })
        
        
   })
    </script>
</head>
<body style="background-color:#0b3b63">
    <div class="side-menu">
        <span class="side_menu_exit"></span>
        <div class="profile">
            <div class="picture">
                <img src="images/dummy_profile.png" alt="">
            </div>
        </div>
        <div class="main-side-menu">
            <ul>
                <li> <a class="main-side-menu" href="#">Home</a></li>
                <li> <a class="main-side-menu" href="#">Profile</a></li>
                <li> <a class="main-side-menu" href="#">Transactions</a></li>
                <li> <a class="main-side-menu" href="#">Farm Clinic</a></li>
                <li> <a class="main-side-menu" href="#">Training center</a></li>
                <li> <a class="main-side-menu" href="#">Management System</a></li>
                <li> <a class="main-side-menu" href="#">Investment</a></li>
                <li> <a class="main-side-menu" href="#">Affiliates</a></li>
                <li> <a class="main-side-menu" href="#">Calendar</a></li>
                
            </ul>
        </div>
    </div>
    <div class="toggle-menu">
        <span></span>
    </div>
    
    <div class="wrapper">
        
        
        <div class="investment_summary">
            <h3>Summary of Investment Details</h3>
            <small>*kindly confirm details before making payment</small>
            
            <ul>
                <li>Name<span><?php echo $name ?></span></li>
                <li>Email<span><?php echo $email ?></span></li>
                <li>Phone Number<span><?php echo $phone ?></span></li>
                <li>Category of Investment<span><?php echo $category ?></span></li>
                <li>Duration of Investment<span><?php echo $dura_invest ?> Month</span></li>
                <li>Number of Units<span><?php echo $unit ?>UIC </span></li>
                <li>Value of Units<span><?php echo $v_unit ?></span></li>
                <li>Projected ROI<span><?php echo $roi ?>%</span></li> 
                
            </ul>
            
            <div class="payment_buttons_container">
                <a class="pay_now" id="payment_now"href="payment.php">Make Payment Now</a>
                or
                <a class="transfer" id="transfer" href="payment.php">Transfer/Deposit</a>
            </div>
        </div>
        <div class="selected-category-info">
            <center>
                <h3>Selected Investment Category</h3>
            </center>
            <div class="gold selected-plan">
                <div class="image">
                    <img src="images/trophy.svg" alt="">
                    <span><?php echo $category ?></span>
                </div>
                <div class="plan-list">
                    <ul>
                        <li>ROI starts from <?php echo $roi_starts ?></li>
                        <li>Minimum of <?php echo $m_uic ?> per Unit of Investment(UIC)</li>
                        <li>Access to <?php echo $adv_ticket ?> advance tickets per month</li>
                        <li>Access to unlimited consultation with experts</li>
                        <li>Access to <?php echo $erp ?> DUFMA ERP service tools</li>
                        <li><?php echo $investor_feature ?></li>
                        <li><?php echo $live_training ?></li>
                    </ul>
                    
                </div>
            </div>
            <br>
          <!--<form action="summary.php"><input type="submit" value="Click to Access your management dashboard"></form> -->
            <a href="javascript: void(0)" class="management_dashboard_redirect" id="management_dashboard_redirect" disable>Click to Access your management dashboard</a>
            
        </div>
    </div>
    
</body>

</html>
