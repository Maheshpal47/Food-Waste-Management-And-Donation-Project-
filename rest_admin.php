<?php
include 'server1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type ="text/css" href = "main.css">
    <title>Admin Approval</title>
</head>
<body>          
    <div class="header col-12" style="background-color:darkslategray; height: 50px;">
        <a class="navbar-brand" href="panel.php" style=" background-color:skyblue; " style="height: 40px; text-align: center;" >GO BACK</a>
        
    </div>
    <br>
    

<div class="center">
    <h1>Restaurant Authentication</h1>

    <table id = "users">
        <tr>
            <th>Name</th>
            <th>Head</th>
            <th>Email </th>
            <th>document</th>
            <th>Action</th>
        </tr>

        <?php
            $qu1 = "SELECT * FROM rest_user WHERE status = 'pending' ORDER BY id ASC";
            $result = mysqli_query($db, $qu1);

                while($row = mysqli_fetch_array($result))
            {
        ?>
        <tr>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Head'];?></td>
            <td><?php echo $row['Email'];?></td>
            
            <td><a href="<?php echo $row['photo'];?>">click here</a></td>
            <td>
                <form action ="" method ="POST">
                    <input type = "hidden" name  ="id" value = "<?php echo $row['id'];?>"/>
                    <input type = "submit" name  ="approve" value = "Approve"/>
                    <input type = "submit" name  ="deny" value = "Deny"/>
                </form>
            </td>
        </tr>
        <?php
            }
            ?>
    </table>

    
</div>



</body>
</html>