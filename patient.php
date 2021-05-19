<!DOCTYPE html>
<html>
<head>
	<title>paitent details</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="patient.js"></script>
</head>
<style>
	*{
		background-color: 	#e1e6e8;
	}

</style>
<body>
	<div class="container">
		<form id="form" action="" method="post">
		<h1 class="text-center">City Hospital</h1><hr/>
<h4>Paitent Dtails:</h4>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
			<label>Paitent-id:</label><span>*</span>
			<input type="text" class="form-control letters" name="pid" id="p_id" readonly="">
			<span id="p_error"></span>
			</div>
		</div>
			<div class="col-md-4">
				<div class="form-group">
				<label>First Name:</label>
				<input type="txt" name="pname"  class="form-control letters" id="p_fname" placeholder="Enter  Name">
				<span id="f_error"></span>
			</div>
		</div>
				<div class="col-md-4">
				<div class="form-group">
				<label>Middle Name:</label>
				<input type="txt" name="mname"  class="form-control letters" id="p_mname" placeholder="Enter MName">
				<span id="m_error"></span>
			</div>
		</div>
				<div class="col-md-4">
				<div class="form-group">
				<label>Last Name:</label>
				<input type="txt" name="lname"  class="form-control letters" id="p_lname" placeholder="Enter LName">
				<span id="l_error"></span>
			</div>
		</div>
		<div class="col-md-4">
				<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email"  class="form-control"  id="p_email" placeholder="Enter email">
				<span id="email_error"></span>
			</div>
		</div>

		<div class="col-md-4">
				<div class="form-group">
				<label>Mobile:</label>
				<input type="txt" name="Mobile"  class="form-control Number" id="p_mobile" placeholder="Enter Mobile">
				<span id="mobile_error"></span>
			</div>
		</div>
		<div class="col-md-4">
				<div class="form-group">
				<label>Phone:</label>
				<input type="txt" name="Phone"  class="form-control Number"  id="p_phone" placeholder="Enter Phone">
			</div>
		</div>
		
 <div class="col-md-4">
  <div class="form-group">
   <label>BloodGroup:</label>
  <select class="form-control" id="p_bg">
     <option>--select--</option>
     <option>A+</option>
     <option>A-</option>
     <option>AB</option>
      <option>B+</option>
       <option>B-</option>
        <option>O+</option>
         <option>O-</option>
  </select>
   </div>
</div>
<div class="col-md-4">
				<div class="form-check-inline">
            <div class="radio" id="p_radio">
          <label class="form-check-inline">Gender:</label><br>
          <input type="radio" name="gender" value="male" id="male">
          <label class="form-check-inline">Male</label>
          <input type="radio" name="gender" value="female" id="female">
         <label class="form-check-inline">Female</label>
         <input type="radio" name="gender" value="Others" id="Others">
         <label class="form-check-inline">Others</label>

        </div>
     </div>
 </div>

      <div class="col-md-4">
				<label>DOB:</label><span>*</span>
                <input type="date" class="form-control" value="" id="emp_dob">
                <span id="dob_error"></span>
              </div>
	            <div class="col-md-4">
	            <div class="form-group">
				<label>Age:</label><span>*</span>
				<input type="text" class="form-control" name="emp" id="emp_age">
				<span id="age_error"></span>
			</div>
		</div>
		  <div class="col-md-4">
	            <div class="form-group">
				<label>Ocupation:</label><span>*</span>
				<input type="text" class="form-control" name="city" id="p_city">
				<span id="ocp_error"></span>
			</div>
		</div>

          <div class="col-md-6">
           <div class="form-group">
        <label>Current Address:</label>
       <textarea id="emp_cadd" class="sm-textarea form-control"></textarea>
        <span id="ca_error"></span>
 </div>
</div>
         <div class="col-md-6">
         <div class="form-group">
         <label>Parmenet Address:</label>
        <textarea id="p_padd" class="sm-textarea form-control"></textarea>
        <span id="pa_error"></span>
 </div>
</div>

	
 	<div class="col-md-4">
	            <div class="form-group">
				<label>City:</label><span>*</span>
				<input type="text" class="form-control letters" name="city" id="p_city">
				<span id="city_error"></span>
			</div>
		</div>

              <div class="col-md-4">
	            <div class="form-group">
				<label>State:</label><span>*</span>
				<input type="text" class="form-control letters" name="city" id="p_city">
				<span id="state_error"></span>
			</div>
		</div>
		<div class="col-md-4">
				<div class="form-check-inline">
            <div class="radio" id="p_radio">
          <label class="form-check-inline">Marital Status:</label><br>
          <input type="checkbox" name="gender" value="male" id="male">
          <label class="form-check-inline">Married</label>
          <input type="checkbox" name="gender" value="female" id="female">
         <label class="form-check-inline">Single</label>
         <input type="checkbox" name="gender" value="Others" id="Others">
         <label class="form-check-inline">Divorced</label>
         <input type="checkbox" name="gender" value="Others" id="Others">
         <label class="form-check-inline">child</label>
        </div>
     </div>
 </div> <hr/>

 <div class="col-md-12"><h5>Medical history:</h5></div>
<div class="col-md-6 mt-2">
				<div class="form-check-inline">
            <div class="radio" id="p_radio">
          
          <input type="checkbox" name="gender" value="male" id="male">
          <label class="form-check-inline">Heart Disease</label>
          
          <input type="checkbox" name="gender" value="female" id="female">
          <label class="form-check-inline">Blood pressure</label>
         
         <input type="checkbox" name="gender" value="Others" id="Others">
         <label class="form-check-inline">Dibeties</label><br>
        
         <input type="checkbox" name="gender" value="Others" id="Others">
          <label class="form-check-inline">Thyroid Disorders</label>

          <input type="checkbox" name="gender" value="Others" id="Others">
          <label class="form-check-inline">Kidney Problems</label>

          <input type="checkbox" name="gender" value="Others" id="Others">
          <label class="form-check-inline">Others</label>
         
        </div>
     </div>
 </div>		
 <div class="col-md-6"><h5 class="text-left">Habites</h5>
				<div class="form-check-inline">
            <div class="radio" id="p_radio">
          
          <input type="checkbox" name="gender" value="male" id="male">
          <label class="form-check-inline">Smoking</label>
          
          <input type="checkbox" name="gender" value="female" id="female">
          <label class="form-check-inline">Alcohol</label>
         
        </div>
     </div>
 </div>	<br><br>
<div class="col-md-12 mt-4">
	<input type="checkbox" name="gender" value="Others" id="Others">
    <label class="form-check-inline">BY SIGNING THIS FORM YOU ARE AGREEING TO THE FOLLOWING:
</label>
</div><br>
<div class="col-md-12 text-center pt-5" >
<button type="submit" value="submit" id="submit" class="btn btn-danger">Submit</button>
<button type="submit" value="submit" id="submit" class="btn btn-primary">Cancel</button>
</div>
</div>
</form>
</div>
</body>
</html>