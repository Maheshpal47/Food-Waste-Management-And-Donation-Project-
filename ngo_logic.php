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
    $sql = "SELECT * FROM ngodata";
    $query = mysqli_query($conn, $sql);
 
      // individual data

    $curngo = $_SESSION['ngou'];
    $sqlngo = "SELECT * FROM ngodata WHERE username='$curngo'";
    $queryngo = mysqli_query($conn, $sqlngo);

    // Create a new post

    if(isset($_REQUEST['save_post']))
    {
        $userndata= $_REQUEST['username'];
        $ngon = $_REQUEST['ngoname'];
        $datep= date('y-m-d',strtotime($_REQUEST['datei']));
        $pin= $_REQUEST['pincode'];
        $address=$_REQUEST['add'];
        $contact=$_REQUEST['contact'];

        $postd= $_REQUEST['post'];

        $sql = "INSERT INTO ngodata(username,ngoname,datep,pin,address,contact,post) VALUES('$userndata','$ngon','$datep','$pin','$address','$contact','$postd')";
        mysqli_query($conn, $sql);

        //echo $sql;

        header("Location:NGO_home.php?");

        exit();
    }

     {
        if(isset($_REQUEST['id']))
        {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM ngodata WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        }
    }

     if(isset($_REQUEST['delete']))
     {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM ngodata WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: NGO_home.php");
        exit();
    }





    if(isset($_REQUEST['enter']))
    {
           
       
        $pinc = $_REQUEST['pin1'];
        

         $fquery = "SELECT * FROM ngodata WHERE pin = $pinc";
         $filter = mysqli_query($conn, $fquery);



          



    }
   

?>