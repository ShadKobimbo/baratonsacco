<?php 

session_start();

include 'header.php';

?>

<h1 style = "text-align:center;">Welcome</h1>
	<div style = "padding-top:50px; padding-bottom:50px; text-align:center;">
	<form>   
        <a href="messages.php">View Messages</a>&nbsp&nbsp&nbsp
        <a href="applications.php">View New Applications</a></br></br>
        <a href="currentmembers.php">View Members</a></br></br>
        <a href="kin.php">View Members Next Kin</a>&nbsp&nbsp&nbsp
        <a href="logininfo.php">View Members Login INformation</a>			    
	</form>
</div>
<?php include 'footer.php';?>