<?php
    
   
    include "server.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/medtab.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>



	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="">
                        <!-- <img class="img-fluid logo1" src="images/logo.jpeg" height="61px" width="155px" alt=""> -->
                    </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  	<ul class="navbar-nav">
  	<li class="nav-item dropdown">
                                <a class="ng nav-link " data-toggle="dropdown" role="button" href="#">NGO list</a>
                               
                            </li> 
                        </ul>

                       
                       
                                
                               
                                          <ul class="breadcrumb-item" style="margin-left: 25px;">
                        	
                        </ul>
                 
                         
                           <a href="home_page.php"  class="btn btn-default" name="b1"  style="margin-left: 1150px">back
                                         </a> 
   
  </div>  
</nav>

	
	<div class="limiter">

		<div class="container-table100">
			
			<div class="wrap-table100">
				
				<div class="table100 ver2 m-b-110">
					<div class="table1">
						
						
					
					<table data-vertable="ver2">
						<thead>	
						
							<tr class="row100 head">
								<th class="column100 column8" data-column="column8">Sr NO.</th>
								<th class="column100 column1" data-column="column1">Name</th>
								<th class="column100 column4" data-column="column4">Head </th>
								<th class="column100 column3" data-column="column3">Contact</th>
								<th class="column100 column4" data-column="column4">Email </th>
								
								
								<th class="column100 column6" data-column="column6">Address</th>
								
							</tr>

						</thead>

			 <?php foreach($q1re as $q){ ?>
                
						<tbody>
							<tr class="row100">
								<td class="column100 column8" data-column="column8"><?php echo $q['id'];?></td>
								<td class="column100 column1" data-column="column1"><?php echo $q['Name'];?></td>
								<td class="column100 column2" data-column="column2"><?php echo $q['Head'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $q['Contact'];?></td>
								
								<td class="column100 column6" data-column="column6"><?php echo $q['Email'];?> </td>
								<td class="column100 column7" data-column="column7">
								<?php echo $q['Address'];?>
								<?php echo $q['Pincode'];?>	
											
							
								</td>
								
								
							</tr>

							
							
						</tbody>
						 <?php }?>	

		
					</table>
					
					 					</div>

			</div>
		</div>




	</div>



	
	</div>










		






	<!-- update manager model -->


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>