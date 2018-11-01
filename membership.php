<?php include 'header.php';

include 'assets/css/form.css';

//connecting to database
include 'dbconnect.php';

if(isset($_POST['firstname'], $_POST['secondname'], $_POST['payroll'], $_POST['designation'], $_POST['nationalid'], $_POST['address'], $_POST['pin'], $_POST['mobile'] ,$_POST['employer'],$_POST['department'], $_POST['terms'])){

    //declaring of variables
    $firstname= $_POST['firstname'];
    $secondname= $_POST['secondname'];
    $payroll= $_POST['payroll'];
    $designation= $_POST['designation'];
    $nationalid= $_POST['nationalid'];
    $address= $_POST['address'];
    $pin= $_POST['pin'];
    $mobile= $_POST['mobile'];
    $employer= $_POST['employer'];
    $department= $_POST['department'];
    $terms= $_POST['terms'];
  
} 

if(isset( $firstname, $secondname, $payroll, $designation, $mobile, $nationalid, $address, $pin, $employer, $department, $terms)){

    //database query
    $sql="INSERT INTO testing(firstname, secondname, payroll, designation, nationalid, address, pin, mobile, employer, department, terms) 
    VALUES ('$firstname', '$secondname', '$payroll', '$designation', '$nationalid', '$address', '$pin', '$mobile', '$employer', '$department', '$terms')";
    $result=mysqli_query($conn,$sql);
} 

?>

<form id="regForm" action="membership.php" style=" width:70%;" method="POST" enctype="multipart/form-data">
  <h1 style="float:center;">Membership Application Form</h1>
  <!-- One "tab" for each step in the form: -->
  <!-- START membership application form -->
  <div class="tab" class="form-group col-md-6" style="text-align:center; clor:#FF0000" >*All fields are mandatory </br></br>
    <p  class="form-group col-md-6">First Name<input  class="form-control" style="float:left;" oninput="this.className = ''" name="firstname"></p>
    <p  class="form-group col-md-6">Second Name<input  class="form-control" style="float:right;" oninput="this.className = ''" name="secondname"></p>
<!--    <p  class="form-group col-md-6">Date Of Birth<input  class="form-control" style="float:left;" oninput="this.className = ''" name="birth"></p>  --> 
    <p  class="form-group col-md-6">Payroll No<input  class="form-control" style="float:right;" oninput="this.className = ''" name="payroll"></p> 
    <p  class="form-group col-md-6">Official Designation<input  class="form-control" style="float:left;" oninput="this.className = ''" name="designation"></p>
    <p  class="form-group col-md-6">ID/Passport No<input   maxlength="8"class="form-control" style="float:right;" oninput="this.className = ''" name="nationalid"></p>
    <p  class="form-group col-md-6">Present Address<input  class="form-control" style="float:left;" oninput="this.className = ''" name="address"></p> 
    <p  class="form-group col-md-6">PIN No <input   maxlength="4" tye="number" class="form-control" style="float:right;" oninput="this.className = ''" name="pin"></p>
    <p  class="form-group col-md-6">Mobile Phone No<input   maxlength="13" tye="number" class="form-control" style="float:right; width:100%;" oninput="this.className = ''" name="mobile"></p> 
    <p  class="form-group col-md-6">Name Of Employer<input  class="form-control" style="float:left;" oninput="this.className = ''" name="employer"></p>  
    <p  class="form-group col-md-6">Department<input  class="form-control" style="float:right;" oninput="this.className = ''" name="department"></p> </br>
    <p  class="form-group col-md-6">Terms of Employment<textarea  type="text" class="form-control" style="float:right;" oninput="this.className = ''" name="terms"></textarea></p></br>
  </div>
 <!--  END of membership application form-->
  <div class="tab">Profile Picture:
    <input type="file" name="fileToUpload" id="fileToUpload">
  </div> 
  <div class="tab">NOMINATED NEXT OF KIN:

    <?php 

    if(isset($_POST['kinfirstname'], $_POST['kinsecondname'], $_POST['kinnationalid'], $_POST['relation'], $_POST['kinmobile'], $_POST['kinaddress'])){
      //declaring of variables
      $kinfirstname= $_POST['kinfirstname'];
      $kinsecondname= $_POST['kinsecondname'];
      $kinnationalid= $_POST['kinnationalid'];
      $relation= $_POST['relation'];
      $kinmobile= $_POST['kinmobile'];
      $kinaddress= $_POST['kinaddress'];
    }

    if(isset( $kinfirstname, $kinsecondname, $kinnationalid, $relation, $kinmobile, $kinaddress)){
      //database query
      $sql="INSERT INTO nextofkin(kinfirstname, kinsecondname, kinnationalid, relation, kinmobile, kinaddress) 
      VALUES ('$kinfirstname', '$kinsecondname','$kinnationalid', '$relation', '$kinmobile', '$kinaddress')";
      $result=mysqli_query($conn,$sql);
    }
?>

    <p  class="form-group col-md-6">First Name<input  class="form-control" style="float:left;" oninput="this.className = ''" name="kinfirstname"></p>
    <p  class="form-group col-md-6">Second Name<input  class="form-control" style="float:right;" oninput="this.className = ''" name="kinsecondname"></p>
    <p  class="form-group col-md-6">ID/Passport No<input   maxlength="8"class="form-control" style="float:right;" oninput="this.className = ''" name="kinnationalid"></p>
    <p  class="form-group col-md-6">Relations<input  class="form-control" style="float:left;" oninput="this.className = ''" name="relation"></p>
    <p  class="form-group col-md-6">Mobile Phone No<input   maxlength="13" tye="number" class="form-control" style="float:right; width:100%;" oninput="this.className = ''" name="kinmobile"></p> 
    <p  class="form-group col-md-6">Present Address<input  class="form-control" style="float:left;" oninput="this.className = ''" name="kinaddress"></p>  
  </div>
 <!--  <div class="tab">Login Info:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>  -->
  <div style="overflw:auto;">
    <div style="text-align:center; margin-top:40px;">
</br><button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<?php include 'footer.php';?>