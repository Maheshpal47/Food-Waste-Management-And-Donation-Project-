<?php

include("header.php");
include("db.php");

?>

<div class="panel panel-default">
	
	<div class = "panel-heading">
		<h2>
			<a class = "btn btn-success" href = "adduser.php">Add NGO</a>
			<a class = "btn btn-info pull-right" href = "recomindex.php">Back</a>

		</h2>
	</div>
	
	<div class="panel-body">
		<table class="table table-stripped">
			<th> Restaurant Name</th>
			<th> Restaurant Rating</th>

			
			<?php $result=mysqli_query($con,"select * from user_products where user_id='$_GET[id]'");
			while($row=mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td><?php echo $row['product_name']; ?> </td>
				<td><?php echo $row['product_rating']; ?> </td>
				
				
			</tr>
			<?php } ?>
		</table>
	
	</div>
	
	
</div>
