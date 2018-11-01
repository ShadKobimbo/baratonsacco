<?php include 'header.php';

//connecting to database
include 'dbconnect.php';

if(isset($_POST['firstname'], $_POST['secondname'],$_POST['email'] ,$_POST['messages'])){

    //declaring of variables
    $firstname= $_POST['firstname'];
    $secondname= $_POST['secondname'];
    $email= $_POST['email'];
    $messages= $_POST['messages'];
   // $result;
   
}

if(isset( $firstname, $secondname, $email, $messages)){

    //database query
    $sql="INSERT INTO messages(firstname, secondname, email, messages) VALUES ('$firstname', '$secondname', '$email', '$messages')";
    $result=mysqli_query($conn,$sql);
}
?>
	
    <!-- start page heading -->
    <section id="page" class="page-heading">
        <div class="container">
            <div class="row">
				<div class="col-md-8 text-left">
						<h2>Contact Us</h2>
				</div>
				<!--- END COL -->
				<div class="col-md-4">
					<div class="page-breadcrumb text-right">
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="active">Contact</li>
						</ol>
					</div>
					<!-- end breadcrumb-->
				</div>
				<!--- END COL -->
			</div>
            <!--- END ROW -->
	   </div>
    </section>
	<!-- end page heading -->
	

	
	<!-- START MAP 

    <div id="map"></div> -->
	
    <!-- END START MAP -->
    

    <!--- START CONTACT FORM -->
    <div id="contactFrom" style="padding-bottom:30px;float:center;"> 
        <div class="container">
            <div class="row">
                <div style="float:left; width:45%;display:block;">
                    <div class="contact" style=" padding-bottom:30px;"><h2 style="text-align:center;">Send us a message</h2>
                        <form action="contact.php" method="POST">
                            <input type="text" placeholder="First Name" name="firstname" required="required" class="form-control"></br>
                            <input type="text" placeholder="Second Name" name="secondname"required="required" class="form-control"></br>
                            <input type="text" placeholder="Email Address" name="email" required="required" class="form-control"></br>
                            <textarea type="text" placeholder="Enter Your Message here" name="messages" class="form-control"></textarea></br>
                            <input type="submit" value="SUBMIT" name="submit" class="btn btn-lg btn-contact-bg">
                        </form>
                    </div>                  
                </div>
            <!--- END COL -->
                <div style="float:right; width:50%;display:block;"></br></br></br></br>
                    <div id="map"></div>
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
         </div>
        <!--- END CONTAINER -->
    </div>
    <!--- END CONTACT FORM -->

    <!--- START CONTACT -->
    <div id="contact" class="section-padding bg-blue no-padding">
        <div class="container-fluid">
             <div class="row">
                <div class="col-md-6 col-sm-6 no-padding">
                    <div class="address-time text-center">
                        <h2>Opening Times</h2>
                        <p><span>Sunday</span> 9.00 AM - 9.00 PM </p>
                        <p><span>Mon - Fri</span> 8.00 AM - 9.00 PM </p>
                        <p><span>Sunday</span> 10.00 AM - 5.00 PM </p>
                    </div>
                </div>
                <!--- END COL -->
                <div class="col-md-6 col-sm-6 overlay contact-back-image contact-padding" data-background="assets/img/bg/contact-bg.jpg">
                    <div class="contact-title text-left">
                        <h5>Contact Us</h5>
                        <h2 class="contact-title-white">Baraton Savings & Credit Co-Operative Society Limited</h2>
                        <div class="line"></div>
                        <p class="contact-dec-white">Baraton Sacco is one of the country’s leading providers of savings and credit services operating in Nandi County. </p>
                    </div>
                    <div class="single-address">
                        <h4>Main Office :</h4>
                        <p>Address: P.O. BOX 2500, ELDORET KENYA</p>
                        <p>Phone: +254 700 750450</p>
                        <p>Email: <a href="mailto:baratonsacco@ueab.ac.ke">baratonsacco@ueab.ac.ke</a>
                        </p>
                    </div>
                    </div>
                <!--- END COL -->
             </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER FLUID -->
    </div>
    <!--- END CONTACT -->

    <?php include 'footer.php';?>
