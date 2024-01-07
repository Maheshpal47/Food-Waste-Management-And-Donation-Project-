<?php include "server1.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="reststyle1.css">

	<title>Register Here</title>
</head>
<body>
<style>
        .input-group i {
            position: absolute;

        }

        .input-group {
            width: 100%;
            margin-bottom: 10px;
        }

        .icon {
            padding: 18px;
            min-width: 40px;

        }
        </style>

	<div class="container">
    <div class="copy-box">
  <div class="inner">
    <div class="line right">
      <div class="scanner"></div>
      </div>
	<div class="header">

</div>
		<form action="rest_regi.php" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register Here</p>
			<div class="input-group">
            <i class="fa fa-globe icon" style="font-size: 1.05em;"></i>
            <input type="text" id="Name" placeholder="Enter Restaurant Name" name="Name" required>
            </div>

			<div class="input-group">
            <i class="fa fa-user icon" style="font-size: 1.05em;"></i>
            <input type="text" id="Head" placeholder="Enter Head Name" name="Head" required>
			</div>
			<div class="input-group">
            <i class="fa fa-phone icon" style="font-size: 1.05em;"></i>
            <input type="number" id="Contact" placeholder="Enter Your Contact Number" name="Contact" required>
            </div>
            <div class="input-group">
            <i class="fa fa-envelope icon" style="font-size: 1.05em;"></i>
            <input type="email" id="Email" placeholder="Enter Your Email ID" name="Email">
			</div>
            <div class="input-group">
            <i class="fa fa-address-card-o icon" style="font-size: 1.05em;"></i>
            <input type="text" id="Address"  placeholder="Enter Your Address" name="Address" required>
			</div>
            <div class="input-group">
            <i class="fa fa-thumb-tack icon" style="font-size: 1.05em;"></i>
            <input type="number" id="Pincode" placeholder="Enter Your Pincode" name="Pincode" required>
			</div>
            <div class="input-group">
            <i class="fa fa-user icon" style="font-size: 1.05em;"></i>
            <input type="text" id="Username" placeholder="Enter Your Username" name="Username" required>
			</div>
            <div class="input-group" >
            <i class="fa fa-lock icon" style="font-size: 1.05em;"></i>
            <input type="password" id="password_1" placeholder="Enter Your Password" name="password_1" required>
			</div>
            <div class="input-group">
            <i class="fa fa-lock icon" style="font-size: 1.05em;"></i>
            <input type="password" id="password_2"  placeholder="Re-Enter Your Password" name="password_2" required>
			</div>
			<div class="input-group">
			
			<label> Goverment Approval(PDF format)</label>
</div>
<div class="fileformat">
			<input type="file" name="file" id="pdf_file" accept="application/pdf" />
			</div>
			<div class="input-group">
			
				<button name="submit" class="btn">Register</button>
			</div>
    </div>
    </div>

			<p class="login-register-text">Have an account? <a href="restlogin.php">LOG IN</a></p>
		</form>
	</div>
</body>
</html>