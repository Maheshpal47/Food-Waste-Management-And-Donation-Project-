<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost:3308", "root", "", "foodpost");

    // Destroy if not possible to create a connection
    if(!$conn)
    {
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }
    


    // Get data to display on index page
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);
    

    // individual posts 
    $currest=$_SESSION['restu'];
    $sqlrest = "SELECT * FROM data WHERE username='$currest'";
    $querynew = mysqli_query($conn, $sqlrest);




    // Create a new post

    if(isset($_REQUEST['save']))
    {
        $userndata= $_REQUEST['username'];
        $restname = $_REQUEST['restname'];
        $postd= date('y-m-d',strtotime($_REQUEST['datei']));
        $content= $_REQUEST['post'];
        $pincode = $_REQUEST['pincode'];
        $address = $_REQUEST['address'];
        

        $contact = $_REQUEST['contact'];


        $sql = "INSERT INTO data(username,restname,Dateofpost,pincode,address,contact,post) VALUES('$userndata','$restname','$postd','$pincode','$address','$contact','$content')";
        mysqli_query($conn, $sql);

        //echo $sql;

        header("Location:restaurant_home.php?");
        exit();
    }

     {
        if(isset($_REQUEST['id']))
        {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        }
    }

     if(isset($_REQUEST['delete']))
     {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: restaurant_home.php");
        exit();
    }


     if(isset($_REQUEST['enter']))
    {
           
       
        $pinc = $_REQUEST['pin1'];
        

         $fquery = "SELECT * FROM data WHERE pincode = $pinc";
         $filter = mysqli_query($conn, $fquery);


    }

   

?>