<?php
    //starting a session
session_start();

include 'header.php';

//result variable
$output=NULL;

//connecting to database
include 'dbconnect.php';

//quering the database
$applicants=$conn->query("SELECT * FROM testing ");

?>

<h1 style = "text-align:center;">Welcome</h1>
    <h2 style = "padding-left:5px;">New Applicants</h2>
	
  <div style = "text-align:center;padding-bottom:50px;padding-left:5px;"> 
  <table  border="1" style="float:center;">
     <tr>
     <th>Entry No</th>
    <th>Firstname</th>&nbsp
    <th>Lastname</th>&nbsp
    <th>Payroll</th>&nbsp
    <th>Designation</th>
    <th>National ID</th>
    <th>Address</th>
    <th>PIN</th>
    <th>Mobile NO</th>
    <th>Employer</th>
    <th>Department</th>
    
    </tr>
    <?php
    //echo "<table border='1' padding-bottom='50'>
    
     //fetching data from the database
    if($applicants->num_rows != 0){
    while($rows=$applicants->fetch_assoc())
        {

           
            
                $entryno= $rows['entryno'];
                $firstname= $rows['firstname'];
                $secondname= $rows['secondname'];
                $payroll= $rows['payroll'];
                $designation= $rows['designation'];
                $nationalid= $rows['nationalid'];
                $address= $rows['address'];
                $pin= $rows['pin'];
                $mobile= $rows['mobile'];
                $employer= $rows['employer'];
                $department= $rows['department'];
                //$email = $rows['email'];
               // $messages = $rows['messages'];
           
                //Displaying the data in the variables

                echo "<tr>";
                echo "<td>" . $rows['entryno'] . "</td>";
                echo "<td>" . $rows['firstname'] . "</td>";
                echo "<td>" . $rows['secondname'] . "</td>";
                echo "<td>" . $rows['payroll'] . "</td>";
                echo "<td>" . $rows['designation'] . "</td>";
                echo "<td>" . $rows['nationalid'] . "</td>";
                echo "<td>" . $rows['address'] . "</td>";
                echo "<td>" . $rows['pin'] . "</td>";
                echo "<td>" . $rows['mobile'] . "</td>";
                echo "<td>" . $rows['employer'] . "</td>";
                echo "<td>" . $rows['department'] . "</td>";
                //echo "<td>" . $rows['email'] . "</td>";
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