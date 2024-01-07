<?php
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<style>
body{
margin:0px;
text-align:center;
background-color:#f3eeee;
}
div.header{
font-family:poppins;
display:flex;
justify-content:space-between;
align-items:center;
padding: 0px 60px;
background-color:#3e6990;


}
div.header button{
background-color:#6fa8dc;
font-size:16px;
font-weight:550;
padding:8px 12px;
border:2px solid black;
border-radius:5px;
cursor:pointer;
}
div.rest h2{
color:#2f1d68;
padding-top:40px;
}
div.ngo h2{
color:#2f1d68;
padding-top:40px;
}
div.rest button{
background-color:#af96f6;
font-size:16px;
font-weight:550;
padding:8px 12px;
border:2px solid black;
border-radius:5px;
text-align: center;
height:70px;
cursor:pointer;
}
div.ngo button{
background-color:#af96f6;
font-size:16px;
font-weight:550;
padding:8px 12px;
border:2px solid black;
border-radius:5px;
height:70px;
cursor:pointer;\


}


</style>
</head>
<body>
<div class="header">
    <h1>WELCOME TO ADMIN PANEL</h1>
<form method="POST">
	<button name="logout"> LOG OUT</button>
</form>
</div>
<div class="rest">
<h2 style="text-align:center;">Hello Admin To Verify New Register Restuarant <br>please click on below button</h2>
<a  name="click" href="rest_admin.php" style="background-color:skyblue; ">

<i class="fas fa-lock-open"></i>Resturant Authentication</a>
</div>

<div class="ngo">
<h2 style="text-align:center;">Hello Admin To Verify New Register NGO <br>please click on below button</h2>
<a name="click1" href="ngo_admin.php" style="background-color:skyblue">
 <i class="fas fa-lock-open"></i>NGO Authentication</a>
</div>

<?php 
if(isset($_POST['logout']))
{
session_destroy();
header("location: home_page.php");
}
 ?>
</body>
</html>