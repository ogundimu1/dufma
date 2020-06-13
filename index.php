<?php

?>
<!DOCTYPE html>
<html lang="en">
<head style="background-color:#0b3b63">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">

 
    <!-- calculate the number of unit and roi based on category-->
    <script language="javascript">
    
   function fun(cate)
        {

           var category_selected = document.getElementById("category").value;
           var unit_selected = document.getElementById("unit").value;

           if (category_selected =="Bronze"){
            document.getElementById("unitval").value = unit_selected * 12500;
            document.getElementById("roi").value = unit_selected * 18;
           }else if(category_selected == "Silver"){
            document.getElementById("unitval").value = unit_selected * 25000;
            document.getElementById("roi").value = unit_selected * 20;
           }else if(category_selected == "Gold"){
            document.getElementById("unitval").value = unit_selected * 50000;
            document.getElementById("roi").value = unit_selected * 22;
           }
        }
</script>
<!-- calculateion stops here-->

</head>
<body style="background-color:#0b3b63" >
    <h2 class="header-text" style="alignment:center" >FI - FARM INVESTMENT</h2>
    <div class="wrapper">
        <div class="plans">
            <div class="bronze">
                <div class="image">
                    <img src="images/bronze-cup.svg" alt="">
                    <span>Bronze</span>
                    
                </div>
                <div class="plan-list">
                    <ul>
                        <li>ROI starts from 18%</li>
                        <li>Minimum of 12,500 per Unit of Investment(UIC)</li>
                        <li>Access to 1 advance ticket per month</li>
                        <li>Access to unlimited consultation with experts</li>
                        <li>Access to 2 DUFMA ERP service tools</li>
                    </ul>
                </div>
            </div>
            <div class="silver">
                <div class="image">
                    <img src="images/silver-cup.svg" alt="">
                    <span>Silver</span>
                    
                </div>
                <div class="plan-list">
                    <ul>
                        <li>ROI starts from 20%</li>
                        <li>Minimum of 25,000 per Unit of Investment(UIC)</li>
                        <li>Access to 2 advance tickets per month</li>
                        <li>Access to unlimited consultation with experts</li>
                        <li>Access to 2 DUFMA ERP service tools</li>
                        <li>Investor feature</li>
                    </ul>
                </div>
            </div>
            <div class="gold">
                <div class="image">
                    <img src="images/trophy.svg" alt="">
                    <span>Gold</span>
                </div>
                <div class="plan-list">
                    <ul>
                        <li>ROI starts from 22%</li>
                        <li>Minimum of 50,000 per Unit of Investment(UIC)</li>
                        <li>Access to 3 advance tickets per month</li>
                        <li>Access to unlimited consultation with experts</li>
                        <li>Access to 3 DUFMA ERP service tools</li>
                        <li>1 live Training Service</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="invest">
            <h3>Select Investment</h3>
            <form class="invest-form" method="POST" action="register.php" >
                <p>
                    <label for="name">Name</label>
                    <input type="text" name="name_investor" id="name" required placeholder="Firstname Lastname">
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </p>
                <p>
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{11}">
                </p>
                <p>
                    <label for="category">Category of Investment</label>
                    <select name="category" id="category" style="width:180px; font-size:16px" onChange="fun(this.value)" required >
                        <option disabled selected="selected">--Select--</option>
                        <option value="Bronze">Bronze</option> 
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                    </select>
                    
                </p>
                <p>
                    <label for="phone">Duration of Investment</label>
                    <input type="number" id="dura_invest" value="1" min="1" name="dura_invest" value="1" required>
                </p>
                <p>
                    <label for="number_of_unit">Number of Unit</label>
                    <input type="number" id="unit" value="1" min="1" name="unit" value="1" onChange="fun(this.value)" required>
                </p>
        
                <p>
                    <label for="value_of_unit">Value of Unit</label>  
                    <input type="text" name="v_unit" id="unitval" readonly>        
                </p>
                
                <p>
                    <label for="ROI">Projected ROI</label>
                    <input type="text" name="roi" id="roi" readonly>
                </p>
               
                <input type="submit" value="Submit" name="register">
            </form>
        </div>
    </div>
</body>
</html>

<!-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->

