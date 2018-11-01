<?php include 'header.php';?>
	
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
    <div id="contactFrom" clss="section-padding" style=" padding-bottom:30px; ">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" style="float:left; width:50%;">
                    <div class="contact" >
                        <form id="contact-form" class="form" name="enq" method="POST" action="form-process.htm">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="8" name="message" class="form-control" id="description" placeholder="Your Message Here ..." required="required"></textarea>
                                </div>
                                <div class="form-group col-md-12 mb0">
                                    <div class="actions">
                                        <input type="submit" value="SUBMIT NOW" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Click here to submit your message!" />
                                        <img src="assets/img/ajax-loader.gif" width="16" height="16" id="loader" style="display:none" alt="loading">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                  
                </div>
                <!--- END COL -->
            </div>
            <!--- END ROW -->
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" style="float:left; widh:50%; ">
                    <div id="map"></div>
                </div>
                <!--- END COL -->
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
