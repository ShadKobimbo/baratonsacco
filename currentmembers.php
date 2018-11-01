<?php
    //starting a session
session_start();

include 'header.php';

//result variable
$output=NULL;

//connecting to database
include 'dbconnect.php';

//quering the database
$kin=$conn->query("SELECT * FROM members ");

?>

	<h1 style = "text-align:center;">Welcome</h1>
    <h2 style = "padding-left:50px;">Current Members </h2>
	
  <div style = "float:center;text-align:center;padding-bottom:50px;padding-left:50px;"> 
  <table border="1" style="float:center;">
     <tr>
    <th>Firstname</th>&nbsp
    <th>Lastname</th>&nbsp
    <th>Status</th>&nbsp
    </tr>
    <?php
    //echo "<table border='1' padding-bottom='50'>
    
     //fetching data from the database
    if($kin->num_rows != 0){
    while($rows=$kin->fetch_assoc())
        {

                $firstname= $rows['firstname'];
                $secondname= $rows['secondname'];
                $status = $rows['status'];
                           
                //Displaying the data in the variables

                echo "<tr>";
                echo "<td>" . $rows['firstname'] . "</td>";
                echo "<td>" . $rows['secondname'] . "</td>";
                echo "<td>" . $rows['status'] . "</td>";
                                echo "</tr>";
                
//echo "First Name: $firstname <br/> Second Name: $secondname <br/> Email: $email<br/>Message: <br/>";
           
        }
        //echo "</table>";
}else
{
    $output =  "No Result";
}

    ?>
    </table>
</div>
    <?php include 'footer.php';?>
