<?php
    //starting a session
session_start();

include 'header.php';

//result variable
$output=NULL;

//connecting to database
include 'dbconnect.php';

//quering the database
$kin=$conn->query("SELECT * FROM nextofkin ");

?>

	<h1 style = "text-align:center;">Welcome</h1>
    <h2 style = "padding-left:50px;">Members Next of Kin</h2>
	
  <div style = "float:center;text-align:center;padding-bottom:50px;padding-left:50px;"> 
  <table border="1" style="float:center;">
     <tr>
    <th>Firstname</th>&nbsp
    <th>Lastname</th>&nbsp
    <th>National ID</th>&nbsp
    <th>Relation</th>
    <th>Mobile Number</th>
    <th>Address</th>
    </tr>
    <?php
    //echo "<table border='1' padding-bottom='50'>
    
     //fetching data from the database
    if($kin->num_rows != 0){
    while($rows=$kin->fetch_assoc())
        {

                $kinfirstname= $rows['kinfirstname'];
                $kinsecondname= $rows['kinsecondname'];
                $kinnationalid = $rows['kinnationalid'];
                $relation = $rows['relation'];
                $kinmobile = $rows['kinmobile'];
                $kinaddress = $rows['kinaddress'];
               // $messages = $rows['messages'];
           
                //Displaying the data in the variables

                echo "<tr>";
                echo "<td>" . $rows['kinfirstname'] . "</td>";
                echo "<td>" . $rows['kinsecondname'] . "</td>";
                echo "<td>" . $rows['kinnationalid'] . "</td>";
                echo "<td>" . $rows['relation'] . "</td>";
                echo "<td>" . $rows['kinmobile'] . "</td>";
                echo "<td>" . $rows['kinaddress'] . "</td>";
                //echo "<td>" . $rows['messages'] . "</td>";
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
