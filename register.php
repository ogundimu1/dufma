<?php
//database connection
include('connection.php');

//posting farm investor details
$name_investor = mysqli_real_escape_string($conn, $_POST['name_investor']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$dura_invest = mysqli_real_escape_string($conn, $_POST['dura_invest']);
$unit = mysqli_real_escape_string($conn, $_POST['unit']);
$v_unit = mysqli_real_escape_string($conn, $_POST['v_unit']);
$roi = mysqli_real_escape_string($conn, $_POST['roi']);

//roi value
$bronze = "Bronze";
$silver = "Silver";
$gold = "Gold";

if ($category == $bronze){
    $roi_starts = "18%";
}else if ($category == $silver){
    $roi_starts = "20%"; 
}else if ($category == $gold){
    $roi_starts = "22%";
}

//m_uic value
$bronze = "Bronze";
$silver = "Silver";
$gold = "Gold";

if ($category == $bronze){
    $m_uic = "12, 500";
}else if ($category == $silver){
    $m_uic = "25, 000"; 
}else if ($category == $gold){
    $m_uic = "50, 000";
}

//adv_ticket per
$bronze = "Bronze";
$silver = "Silver";
$gold = "Gold";

if ($category == $bronze){
    $adv_ticket = "1";
}else if ($category == $silver){
    $adv_ticket = "2"; 
}else if ($category == $gold){
    $adv_ticket = "3";
}

//erp  investor_feature
$bronze = "Bronze";
$silver = "Silver";
$gold = "Gold";

if ($category == $bronze){
    $erp = "2";
}else if ($category == $silver){
    $erp = "2"; 
}else if ($category == $gold){
    $erp = "3";
}

//investor_feature live_training
$bronze = "Bronze";
$silver = "Silver";
$gold = "Gold";

if ($category == $bronze){
    $investor_feature = "";
}else if ($category == $silver){
    $investor_feature = "Investor feature"; 
}else if ($category == $gold){
    $investor_feature = "Investor feature";
}

//live_training
$bronze = "Bronze";
$silver = "Silver";
$gold = "Gold";

if ($category == $bronze){
    $live_training = "";
}else if ($category == $silver){
    $live_training = ""; 
}else if ($category == $gold){
    $live_training = "1 Live Training Service";
}

//check if a user already have an account
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql_u = "SELECT * FROM dufma_investment WHERE email='$email'";
  	$sql_e = "SELECT * FROM dufma_investment WHERE phone='$phone'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);

      //redired existing user to login(home) page
  	if (mysqli_num_rows($res_u) > 0 || mysqli_num_rows($res_e) > 0) {
  	  header("location: home.php");	 	
  	}else{

    //submitting details to database
    $sql="INSERT INTO dufma_investment (name_investor, email, phone, category, dura_invest, unit, v_unit, roi, roi_starts, m_uic, adv_ticket, erp, investor_feature, live_training) 
    VALUES ('$name_investor', '$email', '$phone', '$category', '$dura_invest','$unit', '$v_unit', '$roi', '$roi_starts', '$m_uic', '$adv_ticket', '$erp', '$investor_feature', '$live_training')";

//check for valid connection
if (!mysqli_query($conn, $sql))
  {
  echo"not inserted";
  }
header("location: summary.php");

//closing the connection
mysqli_close($conn);
           exit();
  	}
  }

?>