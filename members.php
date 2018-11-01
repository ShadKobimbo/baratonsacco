<?php 
//starting a session
session_start();

//insert page header
include 'header.php';

//connecting to database
include 'dbconnect.php';

//quering the database
$user=$conn->query("SELECT * FROM members WHERE id='{$_SESSION["id"]}' ");

?>

  <!--- START CONTACT FORM -->
  <div  style=" padding-bottom:100px; padding-top:100px;"> 

  	<?php

     //fetching data from the database
    if($user->num_rows != 0){
    while($rows=$user->fetch_assoc())
        {
                //creating variables for the table rows
                $firstname= $rows['firstname'];
                $secondname= $rows['secondname'];
                $status = $rows['status'];
                $id = $rows['id'];
 
                //Displaying the data in the variables
                echo "Names: $firstname $secondname $id<br/> Status: $status<br/><br/>";
        }
}else{
    $output =  "No Result";
}
    ?>
        
    </div>
    <!--- END CONTACT FORM -->

<?php include 'footer.php';?>