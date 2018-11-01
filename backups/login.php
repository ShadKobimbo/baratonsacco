<?php 

session_start();


//connecting to database
include 'dbconnect.php';

//insert the header
include 'header.php'; 

//declaring variables
$email=$_POST['email'];
$password=$_POST['password'];

//querying database
$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=$conn->query($sql);

//actions to be conducted based on results
if (!$row=mysqli_fetch_assoc($result)){
    
    $_SESSION['id']=$row['id'];

	//redirecting to the index page
    echo $result;
    
}else
    {
    echo "Wrong Username or Password";
    }

?>

    <!--- START CONTACT FORM -->
    <div id="contactFrom" clss="section-padding" style=" padding-bottom:100px; padding-top:100px;"> 
        <h1 style="text-align:center;">LOGIN HERE</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" >
                    <div class="contact" >
                        <form style="float:center; wdth:80%;" id="contact-form" class="form"  method="POST" action="login.php">
                                <div class="form-group col-md-6">
                                    <input type="text" name="email" class="form-control" id="first-name" placeholder="User Name" required="required">
                                </div></br></br></br></br>
                                <div class="form-group col-md-6">
                                    <input type="password" name="passwrd" class="form-control" id="password" placeholder="Password" required="required">
                                </div>
                                <div class="form-group col-md-12 mb0" style="float:centr; width:40%;">
                                    <div class="actions">
                                        <input type="submit" value="LOGIN" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Click here to submit your credentials!" />
                                    <!---    <img src="assets/img/ajax-loader.gif" width="16" height="16" id="loader" style="display:none" alt="loading"> -->
                                    </div>
                                </div>
                        </form>
                    </div>                  
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->        
        <!--- END COL -->
        </div>
        <!--- END CONTAINER -->
    </div>
    <!--- END CONTACT FORM -->

<?php include 'footer.php';

?>