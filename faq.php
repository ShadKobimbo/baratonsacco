<?php include 'header.php';?>
	
    <!-- start page heading -->
    <section id="page" class="page-heading">
        <div class="container">
            <div class="row">
				<div class="col-md-8 text-left">
						<h2>FAQ</h2>
				</div>
				<!--- END COL -->
				<div class="col-md-4">
					<div class="page-breadcrumb text-right">
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="active">faq</li>
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
	

		
    <!-- START FAQ SECTION  -->
    <section id="faq" class="section-padding">
        <div class="container">
		   <div class="row">
				<div class="col-md-6 col-sm-12">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nemo adipisci amet officiis fugiat, voluptatibus harum sit explicabo vel   temporibus error eius placeat asperiores qui voluptatem quos necessitatibus deleniti. Laudantium.</p>


                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="faq.html#panel1">What are the delivery charges for orders from the Online Shop?<i class="fa fa-minus"></i></a>
                            </h4>
                            </div>
                            <div id="panel1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nemo adipisci amet officiis fugiat, voluptatibus harum sit explicabo vel temporibus error eius placeat asperiores qui voluptatem quos necessitatibus deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="faq.html#panel2">Which payment methods are accepted in the Online Shop? <i class="fa fa-plus"></i></a>
                            </h4>
                            </div>
                            <div id="panel2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nemo adipisci amet officiis fugiat, voluptatibus harum sit explicabo vel temporibus error eius placeat asperiores qui voluptatem quos necessitatibus deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="faq.html#panel3">How long will delivery take? <i class="fa fa-plus"></i></a>
                            </h4>
                            </div>
                            <div id="panel3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nemo adipisci amet officiis fugiat, voluptatibus harum sit explicabo vel temporibus error eius placeat asperiores qui voluptatem quos necessitatibus deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="faq.html#panel4">How secure is shopping in the Online Shop? Is my data protected?<i class="fa fa-plus"></i></a>
                            </h4>
                            </div>
                            <div id="panel4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nemo adipisci amet officiis fugiat, voluptatibus harum sit explicabo vel temporibus error eius placeat asperiores qui voluptatem quos necessitatibus deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="faq.html#panel5">What exactly happens after ordering?  <i class="fa fa-plus"></i></a>
                            </h4>
                            </div>
                            <div id="panel5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nemo adipisci amet officiis fugiat, voluptatibus harum sit explicabo vel temporibus error eius placeat asperiores qui voluptatem quos necessitatibus deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="faq.html#panel6">Do I receive an invoice for my order?   <i class="fa fa-plus"></i></a>
                            </h4>
                            </div>
                            <div id="panel6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nemo adipisci amet officiis fugiat, voluptatibus harum sit explicabo vel temporibus error eius placeat asperiores qui voluptatem quos necessitatibus deleniti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
                <!--- END COL -->
				<div class="col-md-6 col-sm-12">
                    <div class="contact">
				        <div class="well">
							 <p>Do Not Find Your Questions ? Submit Your Question Bellow .</p>
						</div>
                        <form id="contact-form" class="form" name="enq" method="POST" action="form-process.htm">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="8" name="message" class="form-control" id="description" placeholder="Your Question Here ..." required="required"></textarea>
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
		</div>
        <!--- END CONTAINER -->
    </section>
    <!-- END FAQ SECTION -->

<?php include 'footer.php';?>