
<?php //echo ($tab == 'reporter') ? 'active' : ''; ?>
<!DOCTYPE html>
<html lang="en"> 
<!-- end of header area -->
    
    	<!--header section -->

<?php include('header.php') ?>
 <!-- end of header area -->
    
    <!--model design start -->
  
   <div class="container">
	<div class="row">
        <div class="span12">
   
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<br>
   <br>
    <br>
   <br> <br>
   <br> <br>
   <br>
  <div class="modal-dialog modal-sm">


    <!-- Modal content-->
    <div class="modal-content">
      
     <div class="modal-body">
                <div class="well">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                    <li><a href="#create" data-toggle="tab">Create Account</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                      <form class="form-horizontal" action='<?php echo base_url(); ?>index.php/Login/validate' method="POST">
											<div> 
    										<span id="loginError" style="color:red;"><?php if(!empty($msg)){ echo $msg; }?></span> 
   									  </div>
												<fieldset>
                          <div id="legend">
                           <br/>
                          </div>    


                          <div class="control-group">
                            <!-- Username -->
                            <label class="control-label"  for="username">Username</label>
                            <div class="controls">
                              <input type="text" id="username" name="name" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
                          <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                              <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                            </div>
                          </div>
     
     
                          <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
				<br>
                              <button class="btn btn-primary">Login</button>
                            </div>
                          </div>



                        </fieldset>
                      </form>                
                    </div>

                    <div class="tab-pane fade" id="create">
  			 <br> 
                      <form id="tab">

           		<label>Username</label>
                        <input type="text" value="" class="input-xlarge"><br><br>
                        <label>First Name</label>
                        <input type="text" value="" class="input-xlarge"><br><br>
                        <label>Last Name</label>
                        <input type="text" value="" class="input-xlarge"><br><br>
                        <label>Email</label>
                        <input type="text" value="" class="input-xlarge"><br><br>
                        <label>Address</label>
                        <textarea value="Smith" rows="3" class="input-xlarge">
                        </textarea>
     
                        <div>
                          <button class="btn btn-primary">Create Account</button>
                        </div>
                      </form>
                    </div>


                </div>
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
    
   
 </div>
 
 </div>
 </div>  
 </div>  
    <!--model design end -->


<!--1-report modal-->
<!-- Modal -->
<div id="report" class="modal fade" role="dialog">
<br><br><br><br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reports</h4>
      </div>
      <div class="modal-body">
        <form>
					  <div class="row">

					    <div class="form-group col-md-6">
					      <label for="report_id">Report ID	</label>
					      <input class="form-control" id="report_id" placeholder="Report ID">
					    </div>

					   <div class="form-group col-md-6">
					      <label for="inputPassword4">Report Type</label>
						<div class="form-check form-check-inline">
						    <input   type="radio" name="report_type" id="" value="initial"> Initial
						</div>
						<div class="form-check form-check-inline">
						    <input   type="radio" name="report_type" id="" value="follow-up"> Follow-up
						</div>
					    </div>

					  </div>

					  <div class="form-group">
					    <label for="inputAddress">Report Description</label>
					    <input type="text" class="form-control" id="inputAddress" placeholder="Report Description">
					  </div>

					  <div class="form-group">
					    <label for="inputAddress2">Report Source</label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Report Source">
					  </div>

					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="additional_info">Additional Information</label>
					      <input type="text" class="form-control" id="additional_info" 
						      placeholder="Additional Information" >
					    </div>


					    <div class="form-group col-md-4">
					      <label for="inputZip">Date</label>
					      <input type="date" class="form-control" id="inputZip">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="Status">Status</label>
					      <select id="Status" class="form-control">
						<option selected>Choose...</option>
						<option>Open</option>
						<option>Close</option>			
						<option>Cancel</option>
					      </select>
					    </div>
					    
					  </div>

					<div class="row">
					  <div class="form-group col-md-4">
					    <div class="form-check">
					      <label class="form-check-label">
						<input class="form-check-input" type="checkbox"> Seriousness
					      </label>
					    </div>
					  </div>


					  <div class="form-group col-md-4">
					    <div class="form-check">
						<input class="form-check-input" type="checkbox"> Results in death<br>

						<input class="form-check-input" type="checkbox"> Life threatening <br>

						<input class="form-check-input" type="checkbox"> Caused/prolonged hospitalization<br> 

						<input class="form-check-input" type="checkbox"> Disabling/Incapacitating <br>

						<input class="form-check-input" type="checkbox"> Congenital anomaly/birth defect <br>

						<input class="form-check-input" type="checkbox"> Other medically important condition 
	 

					    </div>
					 </div>
					</div>

					 <div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>
					</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--end of reprort modal-->

<!---======================2-reporters Modal===================================-->
<!-- Modal -->
<div id="reporters" class="modal fade" role="dialog">
<br><br><br><br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reporters</h4>
      </div>
      <div class="modal-body">
       		
<form >
	<div class="row">
	    <div class="form-group col-md-4">
	      <label for="report_reporters_id">Report ID</label>
	      <input class="form-control" id="report_reporters_id" placeholder="Report ID">
	    </div>

	   <div class="form-group col-md-4">
	      <label for="report_reporters_des">Report Description	</label>
	      <input class="form-control" id="report_reporters_des" 
		     placeholder="Report Description">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="report_reporters_date">Date</label>
	      <input type='date' class="form-control" id="report_reporters_date" 
		     placeholder=" Date">
	    </div>
	  </div>


	<div class="row">
	    <div class="form-group col-md-6">
	      <label for="reporters_id">Reporters ID</label>
	      <input type='text' class="form-control" id="reporters_id" placeholder="Reporters ID">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="reporters_name">Reporters Name</label>
	      <input class="form-control" id="reporters_name" 
		     placeholder="Reporters Name">
	    </div>

	  </div>




	<div class="row">
	    <div class="form-group col-md-6">
	      <label for="reporters_id">Qualification</label>
	      <select id="qualification" class="form-control">
		<option selected>Choose...</option>
		<option>1=Physician</option>
		<option>2-Pharmacist</option>			
		<option>3-Other Health Professional</option>
		<option>4-Lawyer</option>
		<option>5-Customer  or other non health Professional </option>
	      </select>

	    </div>

	   <div class="form-group col-md-6">
	      <label for="reporters_name">Work Institution</label>
	     <select id="Status" class="form-control">
		<option selected>Choose...</option>
		<option>Hospital</option>
		<option>Clinic</option>			
		<option>Medical Centre</option>
		<option>Pharmacy</option>
		<option>Other</option>
	      </select>
	    </div>

	  </div>


	<div class="row">
	    <div class="form-group col-md-6">
	      <label for="reporters_speciality">Speciality</label>
	      <input type='text' class="form-control" id="reporters_speciality"
		 placeholder="Speciality">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="reporters_adress">Adress</label>
	      <input class="form-control" id="reporters_adress" 
		     placeholder=" Adress">
	    </div>
	  </div>


	<div class="row">
	    <div class="form-group col-md-6">
	      <label for="reporters_tel_no">Tel. Number</label>
	      <input type='text' class="form-control" id="reporters_tel_no"
		 placeholder="Tel. Number	">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="reporters_mob_no">Mobile No.</label>
	      <input class="form-control" id="reporters_mob_no" 
		     placeholder=" Mobile No.">
	    </div>
	</div>


	<div class="row">
	    <div class="form-group col-md-6">
	      <label for="reporters_speciality">Email</label>
	      <input type='text' class="form-control" id="reporters_speciality"
		 placeholder="Email">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="reporters_adress">Contact Detail</label>
	      <input class="form-control" id="reporters_adress" 
		     placeholder=" Contact Detail">
	    </div>
	 </div>

	<div class="row">
	<div class="form-group col-md-6">
	<label for="additional_info">Status</label>
	     <select id="Status" class="form-control">
		<option selected>Choose...</option>
		<option>Normal</option>
		<option>Canceled</option>			
	      </select>
	</div>

	<div class="form-group col-md-6">
	<label for="inputZip">Medicaly Confirmed	</label>
	<div class="form-check form-check-inline">
	    <input   type="radio" name="reporters_medicaly_confirmed" id="" value="yes"> Yes
	</div>
	<div class="form-check form-check-inline">
	    <input   type="radio" name="reporters_medicaly_confirmed" id="" value="no"> NO
	</div>
	</div>

	</div>


	<div class="row">
	<div class="form-group col-md-12">
	<button type="submit" class="btn btn-primary">Save</button>
	</div>
	</div>

	</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- ===================================2-end Reporters Modal===================================-->



<!---======================3- Patients Modal===================================-->
<!-- Modal -->
<div id="Patients_id" class="modal fade" role="dialog">
<br><br><br><br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Patients</h4>
      </div>
      <div class="modal-body">
       		
 <form>

	<div class="row">
	    <div class="form-group col-md-4">
	      <label for="report_patients_id">Report ID</label>
	      <input class="form-control" id="report_patients_id" placeholder="Report ID">
	    </div>

	   <div class="form-group col-md-4">
	      <label for="report_patients_des">Report Description	</label>
	      <input class="form-control" id="report_patients_des" 
		     placeholder="Report Description">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="report_patients_date">Date</label>
	      <input type='date' class="form-control" id="report_patients_date" 
		     placeholder=" Date">
	    </div>
	  </div>


	  <div class="row">
	    <div class="form-group col-md-6">
	      <label for="patients_id">Patient ID</label>
	      <input class="form-control" id="patients_id" placeholder="Patient ID">
	    </div>

	    <div class="form-group col-md-6">
	      <label for="patients_name">Name</label>
	      <input class="form-control" id="patients_name" placeholder="Name">
	    </div>
	  </div>




	  <div class="row">
	    <div class="form-group col-md-4">
	      <label for="patients_id">Age</label>
	      <input class="form-control" id="patients_id" placeholder=" Year">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_name">Weight</label>
	      <input class="form-control" id="patients_name" placeholder=" KG">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_sex">Sex</label>
		<div class="form-check form-check-inline">
		    <input   type="radio" name="patients_sex" id="" value="male"> Male
		</div>
		<div class="form-check form-check-inline">
		    <input   type="radio" name="patients_sex" id="" value="female"> Female
		</div>
	    </div>
	  </div>


	 <div class="row">
	    <div class="form-group col-md-4">
	      <label for="patients_country">Country</label>
	      <input class="form-control" id="patients_country" placeholder=" Country">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_city">City</label>
	      <input class="form-control" id="patients_city" placeholder=" City">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_address">Adress</label>
		  <input class="form-control" id="patients_address" placeholder=" Adress">
	    </div>
	  </div>

	 <div class="row">
	    <div class="form-group col-md-4">
	      <label for="patients_tel">Tel. Number</label>
	      <input class="form-control" id="patients_country" placeholder=" Tel. Number">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_mobile">Mobile No.</label>
	      <input class="form-control" id="patients_city" placeholder=" Mobile No.">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_email">Email</label>
		  <input class="form-control" id="patients_address" placeholder=" Email">
	    </div>
	  </div>




	 <div class="row">
	    <div class="form-group col-md-4">
	      <label for="patients_age_group">Age Group</label>
		 <select id="Status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Neonate</option>
	           <option>Infant(1-24 Months)</option>	
		   <option>Child(2-12 Years)</option>
		   <option>Adolescent(12-18 Years)</option>
		   <option>Adult(>18-70 Years) </option>
		   <option>Elderly(>70 Years)</option>		
		 </select>

	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_pregnancy">Pregnancy</label>
		<select id="Status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Not applicable</option>
	           <option>Pregnant</option>		
	           <option>Non-Pregnant</option>				
		 </select>
	    </div>

	    <div class="form-group col-md-4">
	      <label for="patients_status">Status</label>
		<select id="Status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Canceled</option>			
		 </select>

	    </div>
	  </div>

	  
	 <div class="row">
	   <div class="form-group col-md-12">
	    <button type="submit" class="btn btn-primary">Save</button>
	   </div>
	 </div>
	</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- ===================================3-end Patients Modal===================================-->

<!---======================4-Suspected Drugs Modal===================================-->
<!-- Modal -->
<div id="Suspected_Drugs_id" class="modal fade" role="dialog">
<br><br><br><br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Suspected Drugs</h4>
      </div>
      <div class="modal-body">
       		
<form >
	   <div class="row">
	    <div class="form-group col-md-4">
	      <label for="report_patients_id">Report ID</label>
	      <input class="form-control" id="report_patients_id" placeholder="Report ID">
	    </div>

	   <div class="form-group col-md-4">
	      <label for="report_patients_des">Report Description	</label>
	      <input class="form-control" id="report_patients_des" 
		     placeholder="Report Description">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="report_patients_date">Date</label>
	      <input type='date' class="form-control" id="report_patients_date" 
		     placeholder=" Date">
	    </div>
	  </div>


	  <div class="row">
	    <div class="form-group col-md-4">
	      <label for="suspected_drug_id">Drug ID</label>
	      <input class="form-control" id="drug_id" placeholder="Drug ID">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="suspected_drug_name">Drug Name</label>
	      <input class="form-control" id="drug_name" placeholder="Drug Name">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="suspected_drug_atc_code">ATC Code</label>
	      <input class="form-control" id="suspected_drug_name" placeholder="ATC Code">
	    </div>
	  </div>

	 <div class="row">
	    <div class="form-group col-md-3">
	      <label for="suspected_drug_active_ingredient">Active Ingredient</label>
	      <input class="form-control" id="drug_id" placeholder="Active Ingredient">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="suspected_drug_inn">Suspected Drug INN</label>
	      <input class="form-control" id="drug_name" placeholder="Suspected Drug INN">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="suspected_drug_concentration">Concentration</label>
	      <input class="form-control" id="suspected_drug_name" placeholder="Concentration">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="suspected_drug_route">Route</label>
		<select id="suspected_drug_route" class="form-control">
		   <option selected>Choose...</option>
		   <option>Oral</option>
		   <option>Buccal</option>		
		   <option>Otic</option>	
		   <option>Nasal</option>				
		   <option>Intramuscular</option>				
		   <option>Intravenous</option>				
		   <option>Subcutaneous</option>				
		   <option>Intradermal</option>		
		   <option>Others</option>			
		 </select>
	    </div>
	  </div>


	 <div class="row">
	 <div class="form-group col-md-3">
	      <label for="suspected_drug_dosage_form">Dosage Form</label>
		<select id="suspected_drug_dosage_form" class="form-control">
		   <option selected>Choose...</option>
		   <option>Capsule</option>
		   <option>Tablet</option>		
		   <option>Oral Liquid</option>	
		   <option>Suppositories</option>				
		   <option>Ampoules</option>				
		   <option>vials</option>				
		   <option>Local Cream</option>				
		   <option>Local ointment</option>		
		   <option>Local Liquid</option>
		   <option>Others</option>						
		 </select>
	    </div>
	    <div class="form-group col-md-3">
	      <label for="suspected_drug_dose">Dose</label>
	      <input class="form-control" id="suspected_drug_dose" placeholder="Dose">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="suspected_drug_duration">Duration</label>
	      <input class="form-control" id="suspected_drug_duration" placeholder="Days">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="suspected_drug_drug_class">Drug Class</label>
	      <input class="form-control" id="suspected_drug_drug_class" placeholder="Drug Class">
	    </div>

	  </div>



	<div class="row">
	    <div class="form-group col-md-4">
	      <label for="suspected_drug_indication">Indication</label>
	      <input class="form-control" id="suspected_drug_indication" placeholder="Indication">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="suspected_drug_date_start">Date Start</label>
	      <input type='date' class="form-control" id="suspected_drug_date_start" >
	    </div>

	    <div class="form-group col-md-4">
	      <label for="suspected_drug_date_end">Date Stop</label>
	      <input type='date' class="form-control" id="suspected_drug_date_end" >
	    </div>
	  </div>


	<div class="row">
	    <div class="form-group col-md-6">
	      <label for="suspected_drug_batch_no">Batch No</label>
	      <input class="form-control" id="suspected_drug_batch_no" placeholder="Batch No">
	    </div>

	    <div class="form-group col-md-6">
	      <label for="suspected_drug_status">Status</label>
		<select id="suspected_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
		   <option>Cancel</option>					
		 </select>
	    </div>
	  </div>

	<div class="row">
	   <div class="form-group col-md-12">
	    <button type="submit" class="btn btn-primary">Save</button>
	   </div>
	 </div>

	</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- ===================================4-end Suspected Drugs Modal===================================-->

<!---======================5-Concomitant Drug Modal===================================-->
<!-- Modal -->
<div id="Concomitant_Drug_id" class="modal fade" role="dialog">
<br><br><br><br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Concomitant Drug</h4>
      </div>
      <div class="modal-body">
       		
<form >
	   <div class="row">
	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_report_id">Report ID</label>
	      <input class="form-control" id="concomitant_drug_report_id" placeholder="Report ID">
	    </div>

	   <div class="form-group col-md-4">
	      <label for="concomitant_drug_report_des">Report Description</label>
	      <input class="form-control" id="concomitant_drug_report_des" 
		     placeholder="Report Description">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_report_date">Date</label>
	      <input type='date' class="form-control" id="report_patients_date" 
		     placeholder=" Date">
	    </div>
	  </div>


	  <div class="row">
	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_id">Drug ID</label>
	      <input class="form-control" id="concomitant_drug_id" placeholder="Drug ID">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_name">Drug Name</label>
	      <input class="form-control" id="concomitant_drug_name" placeholder="Drug Name">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_atc_code">ATC Code</label>
	      <input class="form-control" id="concomitant_drug_atc_code" placeholder="ATC Code">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="concomitant_Suspected_drug_inn">Suspected Drug INN</label>
	      <input class="form-control" id="concomitant_Suspected_drug_inn" 
		     placeholder="Suspected Drug INN">
	    </div>
	  </div>

	 <div class="row">
	  <div class="form-group col-md-4">
	      <label for="concomitant_drug_dosage_form">Dosage Form</label>
		<select id="concomitant_drug_dosage_form" class="form-control">
		   <option selected>Choose...</option>
		   <option>Capsule</option>
		   <option>Tablet</option>		
		   <option>Oral Liquid</option>	
		   <option>Suppositories</option>				
		   <option>Ampoules</option>				
		   <option>vials</option>				
		   <option>Local Cream</option>				
		   <option>Local ointment</option>		
		   <option>Local Liquid</option>
		   <option>Others</option>						
		 </select>
	    </div>
	 
	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_concentration">Concentration</label>
	      <input class="form-control" id="concomitant_drug_concentration" placeholder="Concentration">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_route">Route</label>
		<select id="concomitant_drug_route" class="form-control">
		   <option selected>Choose...</option>
		   <option>Oral</option>
		   <option>Buccal</option>		
		   <option>Otic</option>	
		   <option>Nasal</option>				
		   <option>Intramuscular</option>				
		   <option>Intravenous</option>				
		   <option>Subcutaneous</option>				
		   <option>Intradermal</option>		
		   <option>Others</option>			
		 </select>
	    </div>
	  
	  </div>


	 <div class="row">

	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_dose">Dose</label>
	      <input class="form-control" id="concomitant_drug_dose" placeholder="Dose">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_duration">Duration</label>
	      <input class="form-control" id="concomitant_drug_duration" placeholder="Days">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_drug_class">Drug Class</label>
	      <input class="form-control" id="concomitant_drug_drug_class" placeholder="Drug Class">
	    </div>

	  </div>



	<div class="row">
	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_indication">Indication</label>
	      <input class="form-control" id="concomitant_drug_indication" placeholder="Indication">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_date_start">Date Start</label>
	      <input type='date' class="form-control" id="concomitant_drug_date_start" >
	    </div>

	    <div class="form-group col-md-4">
	      <label for="concomitant_drug_date_end">Date Stop</label>
	      <input type='date' class="form-control" id="concomitant_drug_date_end" >
	    </div>
	  </div>


	<div class="row">
	    <div class="form-group col-md-6">
	      <label for="concomitant_drug_batch_no">Batch No</label>
	      <input class="form-control" id="concomitant_drug_batch_no" placeholder="Batch No">
	    </div>

	    <div class="form-group col-md-6">
	      <label for="concomitant_drug_status">Status</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
		   <option>Cancel</option>					
		 </select>
	    </div>
	  </div>

	<div class="row">
	   <div class="form-group col-md-12">
	    <button type="submit" class="btn btn-primary">Save</button>
	   </div>
	 </div>

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- ===================================5-end Concomitant Drug Modal===================================-->


<!---======================6-ADR Modal===================================-->
<!-- Modal -->
<div id="ADR_id" class="modal fade" role="dialog">
<br><br><br><br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADR(Adverse Drug Reaction)</h4>
      </div>
      <div class="modal-body">
       		
<form  >
		
	  <div class="row">
	    <div class="form-group col-md-4">
	      <label for="adr_report_id">Report ID</label>
	      <input class="form-control" id="adr_report_id" placeholder="Report ID">
	    </div>

	   <div class="form-group col-md-4">
	      <label for="adr_report_des">Report Description</label>
	      <input class="form-control" id="adr_report_des" 
		     placeholder="Report Description">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="adr_report_date">Date</label>
	      <input type='date' class="form-control" id="adr_report_date" 
		     placeholder=" Date">
	    </div>
	  </div>



	  <div class="row">
	    <div class="form-group col-md-4">
	      <label for="adr_id">ADR ID</label>
	      <input class="form-control" id="adr_id" placeholder="ADR ID">
	    </div>

	   <div class="form-group col-md-4">
	      <label for="adr_Reaction">Reaction</label>
	      <input class="form-control" id="adr_Reaction" placeholder="Reaction">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="adr_patient_name">Patient Name</label>
	      <input  class="form-control" id="adr_patient_name" placeholder=" Patient Name">
	    </div>
	  </div>

	 <div class="row">
	    <div class="form-group col-md-6">
	      <label for="adr_date_start">Date Start</label>
	      <input type='date' class="form-control" id="adr_date_start" >
	    </div>

	    <div class="form-group col-md-6">
	      <label for="adr_date_end">Date Stop</label>
	      <input type='date' class="form-control" id="adr_date_end" >
	    </div>
	  </div>

	 <div class="row">
	    <div class="form-group col-md-3">
	      <label for="adr_Reaction_PT">Reaction PT</label>
	      <input class="form-control" id="adr_Reaction_PT" placeholder="Reaction PT">
	    </div>

	   <div class="form-group col-md-3">
	      <label for="adr_Reaction_LLT">Reaction LLT</label>
	      <input class="form-control" id="adr_Reaction_LLT" placeholder="Reaction LLT">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="adr_SOC">SOC</label>
	      <input  class="form-control" id="adr_SOC" placeholder="SOC">
	    </div>

	    <div class="form-group col-md-3">
	      <label for="adr_Time_From_Drug">Time From Drug</label>
	      <input class="form-control" id="adr_Time_From_Drug" placeholder="Time From Drug">
	    </div>
	  </div>


	 <div class="row">
	   <div class="form-group col-md-3">
	      <label for="concomitant_drug_status">Dechallenge</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>



	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_status">Seriouseness	</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>

	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_status">Expectedness</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>

	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_status">Reaction Outcome</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>
        </div>
	

	<div class="row">
	   <div class="form-group col-md-3">
	      <label for="concomitant_drug_status">Rechallenge</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>



	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_status">Seriouseness Act</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>

	    <div class="form-group col-md-3">
	      <label for="concomitant_drug_status">Causality</label>
		<select id="concomitant_drug_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>

	    <div class="form-group col-md-3">
	      <label for="adr_status">Status</label>
		<select id="adr_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancel</option>					
		 </select>
	    </div>
	  </div>

	 <div class="row">
	   <div class="form-group col-md-12">
		<label for="adr_comment">Comment</label>
	    <textarea id="adr_comment" class="form-control">Add Comment Here</textarea>
	   </div>
	 </div>

	<div class="row">
	   <div class="form-group col-md-12">
	    <button type="submit" class="btn btn-primary">Save</button>
	   </div>
	 </div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- ===================================6-end ADR  Modal===================================-->

<!---======================7-Laboratory Test Modal===================================-->
<!-- Modal -->
<div id="Laboratory_Test_id" class="modal fade" role="dialog">
<br><br><br><br><br><br><br><br>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Laboratory Test</h4>
      </div>
      <div class="modal-body">
       		
<form  >
	  <div class="row">
	    <div class="form-group col-md-4">
	      <label for="adr_report_id">Report ID</label>
	      <input class="form-control" id="adr_report_id" placeholder="Report ID">
	    </div>

	   <div class="form-group col-md-4">
	      <label for="adr_report_des">Report Description</label>
	      <input class="form-control" id="adr_report_des" 
		     placeholder="Report Description">
	    </div>

	    <div class="form-group col-md-4">
	      <label for="adr_report_date">Date</label>
	      <input type='date' class="form-control" id="adr_report_date" 
		     placeholder=" Date">
	    </div>
	  </div>



	  <div class="row">
	    <div class="form-group col-md-6">
	      <label for="adr_report_id">Test ID</label>
	      <input class="form-control" id="adr_report_id" placeholder="Test ID">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="adr_report_des">Test Name</label>
	      <input class="form-control" id="adr_report_des" placeholder="Test Name">
	    </div>
	  </div>

	 <div class="row">
	    <div class="form-group col-md-6">
	      <label for="adr_report_id">MedDRA Term for lab Test</label>
	      <input class="form-control" id="adr_report_id" placeholder="MedDRA Term for lab Test">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="adr_report_des">Refrence Range</label>
	      <input class="form-control" id="adr_report_des" placeholder="Refrence Range">
	    </div>
	 </div>


	 <div class="row">
	    <div class="form-group col-md-6">
	      <label for="adr_report_id">Test Result</label>
	      <input class="form-control" id="adr_report_id" placeholder="Test Result">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="adr_report_des">Test Result Action</label>
		<select id="adr_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Ubnormal</option>					
		 </select>
	    </div>
	  </div>



	 <div class="row">
	    <div class="form-group col-md-6">
	      <label for="">Test Date	</label>
	      <input  type='date' class="form-control" id="">
	    </div>

	   <div class="form-group col-md-6">
	      <label for="adr_report_des">Status</label>
		<select id="adr_status" class="form-control">
		   <option selected>Choose...</option>
		   <option>Normal</option>
	           <option>Cancelled</option>					
		 </select>
	    </div>
	  </div>






	 <div class="row">
	   <div class="form-group col-md-12">
	    <button type="submit" class="btn btn-primary">Save</button>
	   </div>
	 </div>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- ===================================7-end Laboratory Test Modal===================================-->





	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="<?php echo base_url(); ?>include/img/slide-one.jpg"  style='width:100%' alt="">
			                <div class="carousel-caption">
		               			<h1>PHV</h1>
		               			<p>Pharma Covegilance System </p>
<!-- 		               			<button>learn more</button>
 -->			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url(); ?>include/img/slide-two.jpg"  style='width:100%' alt="">
			                <div class="carousel-caption">
		               			<h2>PHV</h2>
		               			<p>Pharma Covigilance System</p>
<!-- 		               			<button>learn more</button>
 -->			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url(); ?>include/img/slide-three.jpg"  style='width:100%' alt="">
			                <div class="carousel-caption">
		               			<h1>PHV</h1>
		               			<p>Pharma Covigilance System</p>
<!-- 		               			<button>learn more</button>
 -->			                </div>
			            </div>
			            <div class="item">
			            	<img src="<?php echo base_url(); ?>include/img/slide-four.jpg" style='width:100%'  alt="">
			                <div class="carousel-caption">
		               			<h1>PHV</h1>
		               			<p>Pharma Covigilance System</p>
<!-- 		               			<button>learn more</button>
 -->			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<br><br><br>

				<h2>about us</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="<?php echo base_url(); ?>include/img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>
							<h3>Children�s specialist</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?php echo base_url(); ?>include/img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>W</h1>
							</div>

							<h3>Children�s specialist</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="<?php echo base_url(); ?>include/img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Children�s specialist</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<br><br>

				<h2>our services</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="<?php echo base_url(); ?>include/img/service1.png" alt="">
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="<?php echo base_url(); ?>include/img/service2.png" alt="">
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="<?php echo base_url(); ?>include/img/service3.png" alt="">
							</div>
						</div>
						<h3>knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="<?php echo base_url(); ?>include/img/service4.png" alt="">
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- team section -->
	<section class="team" id="team" 
	<?php if( $this->session->userdata('flag')== 1)
	echo" style='display:block'";
	else
	echo " style='display:none'";
	?> 
	 >
		<div class="container">
			<div class="row">
				<!---headers section of our system-->
				<div class="team-heading text-center">
					<h2>Pharmacovigilance System</h2>
					<h4>pharmacovigilance heavily focuses on adverse drug reactions, or ADRs, which are defined as any response to a drug which is noxious and unintended, including lack of efficacy </h4>
				</div>
				<!--report section-->
				<div class="col-md-2 single-member col-sm-4">
                		       <a  data-toggle="modal" data-target="#report" >
					<div class="person-detail" data-toggle="popover" data-trigger="hover"  
					     data-content="Some content inside the popover">
						<div class="arrow-top" ></div>
						<h3>Report</h3>
						<p> </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?php echo base_url(); ?>include/img/report.jpg" alt="member-2">
					</div>
               			       </a>    
				</div>
				
				<!--Reporters section-->
				<div class="col-md-1 single-member col-sm-2">
                		       <a  data-toggle="modal" data-target="#reporters" >
					<div class="person-detail" data-toggle="popover" data-trigger="hover"  data-content="Some content inside the popover">
						<div class="" ></div>
						<h3>Reporters</h3>
						<p> </p>
					</div>		</a>
				</div>

				<!--Patients section-->
				<div class="col-md-1 single-member col-sm-2">
                		       <a  data-toggle="modal" data-target="#Patients_id" >
					<div class="person-detail" data-toggle="popover" data-trigger="hover"  data-content="Some content inside the popover">
						<div class=""></div>
						<h3>Patients</h3>
						<p> </p>
					</div>		</a>
				</div>

				<!--Suspected Drugs section-->
				<div class="col-md-2 single-member col-sm-4">
                		       <a  data-toggle="modal" data-target="#Suspected_Drugs_id" >
					<div class="person-detail" data-toggle="popover" data-trigger="hover"  data-content="Some content inside the popover">
						<div class=""></div>
						<h3>Suspected Drugs</h3>
						<p> </p>
					</div>		</a>
				</div>

				<!--Concomitant Drug section-->
				<div class="col-md-2 single-member col-sm-4">
                		       <a  data-toggle="modal" data-target="#Concomitant_Drug_id" >
					<div class="person-detail" data-toggle="popover" data-trigger="hover"  data-content="Some content inside the popover">
						<div class=""></div>
						<h3>Concomitant Drug</h3>
						<p> </p>
					</div>		</a>
				</div>

				<!--A D R section-->
				<div class="col-md-1 single-member col-sm-4">
                		       <a  data-toggle="modal" data-target="#ADR_id" >
					<div class="person-detail" data-toggle="popover" data-trigger="hover"  data-content="Adverse Drug Reaction">
						<div class=""></div>
						<h3>A D R</h3>
						<p></p>
					</div>		</a>
				</div>

				<!--Laboratory Test section-->
				<div class="col-md-2 single-member col-sm-4">
                		       <a  data-toggle="modal" data-target="#Laboratory_Test_id" >
					<div class="person-detail" data-toggle="popover" data-trigger="hover" 
					 data-content="Some content inside the popover">
						<div class=""></div>
						<h3>Laboratory Test</h3>
						<p> </p>
					</div>
					</a>
				</div>


			</div>
		</div>
	</section><!-- end of team section -->

	<!-- map section -->
	<div class="api-map" id="complain">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->
<!--========================================================complain========================================================-->
	<!-- complain section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">

					
					<div class="contact-heading text-center">
						<h2>Complain</h2>
					</div>
					<!--=================left side in complain================-->
					<div class="col-md-5 contact-info text-left">
						<h3> Information About Complain</h3>
						<div class="info-detail">
							<div class="btn-group tab nav nav-pills">

							<a class="<?php echo ($tab == 'report') ? 'active' : ''; ?>" data-toggle="tab" href="#reports">
							  <button class="tablinks ">
 									<h4>Reports</h4>
							 </button>
							</a>

							<a  class="<?php echo ($tab == 'reporter') ? 'active' : ''; ?>" data-toggle="tab" href="#xx_reporters">
							  <button class="tablinks">
									<h4>Reporters</h4>
							   </button>
							</a>

							<a  class="<?php echo ($tab == 'patients') ? 'active' : ''; ?>" data-toggle="tab" href="#patients">
 							   <button class="tablinks">
									<h4>Patients</h4>
							   </button>
							</a>

							<a class="<?php echo ($tab == 'suspected_drugs') ? 'active' : ''; ?>" data-toggle="tab" href="#suspected_drugs">

 							    <button class="tablinks">
									<h4>Suspected Drugs</h4>
							   </button>
							</a>

							<a class="<?php echo ($tab == 'concomitant_drug') ? 'active' : ''; ?>" data-toggle="tab" href="#concomitant_drug">

 							    <button class="tablinks">
									<h4>Concomitant Drug</h4>
							   </button>
							</a>


							<a class="<?php echo ($tab == 'adverse_drug_reaction') ? 'active' : ''; ?>" data-toggle="tab" href="#adverse_drug_reaction">

  							    <button class="tablinks">
									<h4>Adverse Drug Reaction</h4>
							   </button>
							</a>

							<a class="<?php echo ($tab == 'laboratory_test') ? 'active' : ''; ?>" data-toggle="tab" href="#laboratory_test">
 							    <button class="tablinks">
									<h4>Laboratory Test</h4>
							   </button>
							</a>

						       </div>
						 <div ><br><br></div >
						</div>
					</div>
					<!--============end left side in complain==============-->

				
					<!--============right side in complain==============-->			
					<div class="col-md-6 col-md-offset-1 ">
					<!--<h3>leave us a message</h3>-->
					<div class="tab-content">


					<!--========== start  1-report form=======================-->
					<div id="reports" class="tab-pane fade<?php echo ($tab == 'report') ? 'in active' : ''; ?>">
					<h3>Reports</h3>
					 <form method='post' action="<?php echo base_url(); ?>index.php/Report/create">
					  <div class="row">

					    <div class="form-group col-md-6">
					      <label for="report_id">Report ID	</label>
					      <input class="form-control" id="report_id" placeholder="Report ID ( Auto Serial)" disabled>
					    </div>

					   <div class="form-group col-md-6">
					      <label for="inputPassword4">Report Type</label>
									<div class="form-check form-check-inline">
									    <input   type="radio" name="report_type" id="" value="1" checked> Initial
									</div>
									<div class="form-check form-check-inline">
									    <input  type="radio" name="report_type" id="" value="2"> Follow-up
									</div>
					    </div>

					  </div>

					  <div class="form-group">
					    <label for="inputAddress">Report Description</label>
					    <input type="text" class="form-control" name='report_desc' id=""
							 placeholder="Report Description" require>
					  </div>

					  <div class="form-group">
					    <label for="inputAddress2">Report Source</label>
					    <input type="text" class="form-control" name="report_source" id="" placeholder="Report Source">
					  </div>

					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="additional_info">Additional Information</label>
					      <input type="text" class="form-control"   name="additional_info" id="additional_info"  
						     placeholder="Additional Information" >
					    </div>


					    <div class="form-group col-md-4">
					      <label for="date">Date</label>
					      <input type="date" class="form-control"  name="report_date" id="date">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="Status">Status</label>
					      <select name="report_status" id="Status"  class="form-control">
								<option value="1" selected>Open</option>
								<option value="2" >Close</option>			
								<option value="3" > Cancel</option>
					      </select>
					    </div>
					    
					  </div>

					<div class="row">
					  <div class="form-group col-md-4">
					    <div class="form-check">
					      <label class="form-check-label">
							<input class="form-check-input"  name="seriousness"  value ="Seriousness" type="checkbox"> Seriousness
					      </label>
					    </div>
					  </div>


					  <div class="form-group col-md-4">
					    <div class="form-check">
						<input class="form-check-input" name= "check_list[]" value="" type="checkbox"> Results in death<br>

						<input class="form-check-input" name= "check_list[]" value="" type="checkbox"> Life threatening <br>

						<input class="form-check-input" name= "check_list[]" value="" type="checkbox"> Caused/prolonged hospitalization<br> 

						<input class="form-check-input" name= "check_list[]" value="" type="checkbox"> Disabling/Incapacitating <br>

						<input class="form-check-input" name= "check_list[]" value="" type="checkbox"> Congenital anomaly/birth defect <br>

						<input class="form-check-input" name= "check_list[]" value="" type="checkbox"> Other medically important condition 
	 

					    </div>
					 </div>
					</div>

					 <div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>
					</form>
					</div>
					<!--========== end  1-report form=======================-->



					<!--========== start  2-reporters form==================-->
					<div id="xx_reporters" class="tab-pane fade<?php echo ($tab == 'reporter') ? 'in active' : ''; ?>">
					<h3>Reporters</h3>
					<form method='post' action="<?php echo base_url(); ?>index.php/Reporter/create" >
		  				<div class="row">
						    <div class="form-group col-md-4">
						      <label for="report_reporters_id">Report ID</label>
						      <input class="form-control"  id="report_reporters_id" value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>' disabled>
									<input type='hidden' class="form-control" name='xx' id="report_reporters_id" value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>'>
								</div>

						   <div class="form-group col-md-4">
						      <label for="report_reporters_des">Report Description	</label>
						      <input class="form-control" id="report_reporters_des" value='<?php echo (isset($report['report_desc'])) ?  $report['report_desc'] : 'Report Description';?>' disabled>
						    </div>

 						    <div class="form-group col-md-4">
						      <label for="report_reporters_date">Date</label>
						      <input type='date' class="form-control" id="report_reporters_date" value='<?php echo (isset($report['report_date'])) ?  $report['report_date'] : 'Report Date';?>' disabled>
						    </div>
						  </div>


						<div class="row">
						    <div class="form-group col-md-6">
						      <label for="reporters_id">Reporters ID</label>
						      <input type='text' class="form-control" id="reporters_id" placeholder="Reporters ID" disabled>
						    </div>

						   <div class="form-group col-md-6">
						      <label for="reporters_name">Reporters Name</label>
						      <input class="form-control" id="reporters_name" name='reporter_name'
							     placeholder="Reporters Name">
						    </div>

						  </div>




						<div class="row">
						    <div class="form-group col-md-6">
						      <label for="reporters_id">Qualification</label>
	 					      <select  name="qualification"  id="qualification" class="form-control">
								<option  value="0" >Choose...</option>
								<option  value="1" >1=Physician</option>
								<option  value="2">2-Pharmacist</option>			
								<option  value="3">3-Other Health Professional</option>
								<option  value="4">4-Lawyer</option>
								<option  value="5">5-Customer  or other non health Professional </option>
						      </select>

						    </div>

						   <div class="form-group col-md-6">
						      <label for="Institution">Work Institution</label>
 						     <select  	name="work_institution" id="Institution" class="form-control">
								<option value="0">Choose...</option>
								<option value="1">Hospital</option>
								<option value="2">Clinic</option>			
								<option value="3">Medical Centre</option>
								<option value="4">Pharmacy</option>
								<option value="5">Other</option>
						      </select>
						    </div>

						</div>







						<div class="row">
						    <div class="form-group col-md-6">
						      <label for="reporters_speciality">Speciality</label>
						      <input type='text' class="form-control"  name="reporters_speciality" id="reporters_speciality"
							 placeholder="Speciality">
						    </div>

						   <div class="form-group col-md-6">
						      <label for="reporters_adress">Adress</label>
						      <input class="form-control"  name="reporters_adress"  id="reporters_adress" 
							     placeholder=" Adress">
						    </div>
						  </div>


						<div class="row">
						    <div class="form-group col-md-6">
						      <label for="reporters_tel_no">Tel. Number</label>
						      <input type='text' class="form-control"    name="reporters_tel_no" id="reporters_tel_no"
							 placeholder="Tel. Number	">
						    </div>

						   <div class="form-group col-md-6">
						      <label for="reporters_mob_no">Mobile No.</label>
						      <input class="form-control" name="reporters_mob_no"  id="reporters_mob_no" 
							     placeholder=" Mobile No.">
						    </div>
						</div>


						<div class="row">
						    <div class="form-group col-md-6">
						      <label for="reporter_Email">Email</label>
						      <input type='text' class="form-control"   name="reporter_Email"  id="reporter_Email"
							 placeholder="Email">
						    </div>

						   <div class="form-group col-md-6">
						      <label for="reporters_Contact">Contact Detail</label>
						      <input class="form-control" name="reporters_Contact"  id="reporters_Contact" 
							     placeholder=" Contact Detail">
						    </div>
						 </div>

	  				 <div class="row">
					    <div class="form-group col-md-6">
					      <label for="additional_info">Status</label>
 						     <select name="Status" id="Status" class="form-control">
								<option value="0">Choose...</option>
								<option value="1">Normal</option>
								<option value="2">Canceled</option>			
						      </select>
					    </div>

					    <div class="form-group col-md-6">
					      <label for="inputZip">Medicaly Confirmed	</label>
						<div class="form-check form-check-inline">
						    <input   type="radio" name="reporters_medicaly_confirmed" id="" value="yes"> Yes
						</div>
						<div class="form-check form-check-inline">
						    <input   type="radio" name="reporters_medicaly_confirmed" id="" value="no"> NO
						</div>
					    </div>

					  </div>


					 <div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>

					</form>
					</div>

					<!--========== end  2-reporters form==================-->


					<!--========== start  3-Patients form==================-->
					<div id="patients" class="tab-pane fade<?php echo ($tab == 'patients') ? 'in active' : ''; ?>">
					<h3>Patients</h3>
					 <form   method='post' action="<?php echo base_url(); ?>index.php/Patients/create">

					<div class="row">
					    <div class="form-group col-md-4">
					      <label for="report_patients_id">Report ID</label>
					      <input  class="form-control"  value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>' disabled>

						  <input type='hidden' class="form-control" name='patients_report_id1' id="report_reporters_id" value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>'>
					    </div>

					   <div class="form-group col-md-4">
					      <label for="report_patients_des">Report Description	</label>
					      <input class="form-control" id="report_patients_des" 
								value='<?php echo (isset($report['report_desc'])) ?  $report['report_desc'] : 'Report description' ;?>' disabled>
					    </div>

					    <div class="form-group col-md-4">
					      <label for="report_patients_date">Date</label>
					      <input type='date' class="form-control" id="report_patients_date" 
								value='<?php echo (isset($report['report_date'])) ?  $report['report_date'] : 'Report date' ;?>' disabled>
					    </div>
					  </div>


					  <div class="row">
					    <div class="form-group col-md-6">
					      <label for="patients_id">Patient ID</label>
					      <input class="form-control"  name='patients_id11' id="patients_id" placeholder="Patient ID" disabled>
					    </div>

					    <div class="form-group col-md-6">
					      <label for="patients_name">Name</label>
					      <input class="form-control" id="patients_name" name='patient_name11' placeholder="Name">
					    </div>
					  </div>




					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="patients_age">Age</label>
					      <input class="form-control"  name="patients_age" id="patients_age" placeholder=" Year">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_weight">Weight</label>
					      <input class="form-control"  name="patients_weight" id="patients_weight" placeholder=" KG">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_sex">Sex</label>
						<div class="form-check form-check-inline">
						    <input   type="radio" name="patients_sex" id="patients_sex" value="male"> Male
						</div>
						<div class="form-check form-check-inline">
						    <input   type="radio" name="patients_sex" id="patients_sex" value="female"> Female
						</div>
					    </div>
					  </div>


	 				 <div class="row">
					    <div class="form-group col-md-4">
					      <label for="patients_country">Country</label>
					      <input class="form-control"  name="patients_country"  id="patients_country" placeholder=" Country">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_city">City</label>
					      <input class="form-control"  name= "patients_city"  id="patients_city" placeholder=" City">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_address">Address</label>
						  <input class="form-control"  name="patients_address"  id="patients_address" placeholder=" Adress">
					    </div>
					  </div>

					 <div class="row">
					    <div class="form-group col-md-4">
					      <label for="patients_tel">Tel. Number</label>
					      <input class="form-control"  name="patients_tel" id="patients_tel" placeholder=" Tel. Number">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_mobile">Mobile No.</label>
					      <input class="form-control"  name="patients_mobile" id="patients_mobile" placeholder=" Mobile No.">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_email">Email</label>
						  <input class="form-control"  name="patients_email" id="patients_email" placeholder=" Email">
					    </div>
					  </div>




					 <div class="row">
					    <div class="form-group col-md-4">
					      <label for="patients_age_group">Age Group</label>
						 <select  name="patients_age_group" id="Status" class="form-control">
						   <option value="0">Choose...</option>
						   <option value="1">Neonate</option>
					       <option value="2">Infant(1-24 Months)</option>	
						   <option value="3">Child(2-12 Years)</option>
						   <option value="4">Adolescent(12-18 Years)</option>
						   <option value="5">Adult(>18-70 Years) </option>
						   <option value="6">Elderly(>70 Years)</option>		
						 </select>

					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_pregnancy">Pregnancy</label>
									<select  name="patients_pregnancy" id="Status" class="form-control">
						   			<option value="Not_Choose">Choose...</option>
						   			<option value="Not applicable">Not applicable</option>
				            <option value="Pregnant">Pregnant</option>		
				            <option value="Non-Pregnant">Non-Pregnant</option>				
									</select>
					    </div>

					    <div class="form-group col-md-4">
					      <label for="patients_status">Status</label>
						<select  name="patient_status" id="Status" class="form-control">
						   <option value="0" >Choose...</option>
						   <option value="1">Normal</option>
					     <option value="2">Canceled</option>			
						 </select>

					    </div>
					  </div>

					  
					 <div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>
					</form>
					</div>
					<!--========== end  3-Patients form==================-->





					<!--========== start  4-Suspected Drugs form==================-->
					<div id="suspected_drugs" class="tab-pane fade<?php echo ($tab == 'suspected_drugs') ? 'in active' : ''; ?>">
					<h3>Suspected Drugs</h3>
					<form  method="post" action="<?php echo base_url(); ?>index.php/Suspect_drug/create">
					   <div class="row">
					    <div class="form-group col-md-4">
					      <label for="">Report ID</label>
					      <input class="form-control"  value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>' disabled>

						  <input type='hidden' class="form-control" name='suspect_drug_report_id1' id="" value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>'>
					    </div>

					   <div class="form-group col-md-4">
					      <label for="report_patients_des">Report Description	</label>
					      <input class="form-control" id="report_patients_des" 
					      		 value='<?php echo (isset($report['report_desc'])) ?  $report['report_desc'] : 'Report description' ;?>' 
					      		 disabled >

					    </div>

					    <div class="form-group col-md-4">
					      <label for="report_patients_date">Date</label>
					      <input type='date' class="form-control" id="report_patients_date" 
						     value='<?php echo (isset($report['report_date'])) ?  $report['report_date'] : 'Report date' ;?>' disabled>
					    </div>
					  </div>


					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="suspected_drug_id">Drug ID</label>
					      <input class="form-control" id="drug_id"  disabled>
					    </div>

					    <div class="form-group col-md-4">
					      <label for="suspected_drug_name">Drug Name</label>
					      <input class="form-control"  name="suspected_drug_name" id="drug_name" placeholder="Drug Name">
					    </div>

    					    <div class="form-group col-md-4">
					      <label for="suspected_drug_atc_code">ATC Code</label>
					      <input class="form-control"  name="suspected_drug_atc_code" id="suspected_drug_atc_code" placeholder="ATC Code">
					    </div>
					  </div>

 					 <div class="row">
					    <div class="form-group col-md-3">
					      <label for="suspected_drug_active_ingredient">Active Ingredient</label>
					      <input class="form-control"  name="suspected_drug_active_ingredient" id="drug_id" placeholder="Active Ingredient">
					    </div>

					    <div class="form-group col-md-3">
					      <label for="suspected_drug_inn">Suspected Drug INN</label>
					      <input class="form-control"  name="suspected_drug_inn" id="drug_name" placeholder="Suspected Drug INN">
					    </div>

    					    <div class="form-group col-md-3">
					      <label for="suspected_drug_concentration">Concentration</label>
					      <input class="form-control"  name="suspected_drug_concentration" id="suspected_drug_name" placeholder="Concentration">
					    </div>

					    <div class="form-group col-md-3">
					      <label for="suspected_drug_route">Route</label>
						<select name="suspected_drug_route" id="suspected_drug_route" class="form-control">
							   <option value="0">Choose...</option>
							   <option value="1">Oral</option>
					           <option value="2">Buccal</option>		
					           <option value="3">Otic</option>	
					           <option value="4">Nasal</option>				
					           <option value="5">Intramuscular</option>				
					           <option value="6">Intravenous</option>				
					           <option value="7">Subcutaneous</option>				
					           <option value="8">Intradermal</option>		
					           <option value="9">Others</option>			
						 </select>
					    </div>
					  </div>


					 <div class="row">
    					 <div class="form-group col-md-3">
					      <label for="suspected_drug_dosage_form">Dosage Form</label>
						<select  name="suspected_drug_dosage_form" 
								 id="suspected_drug_dosage_form" class="form-control">
							   <option value="0">Choose...</option>
							   <option value="1">Capsule</option>
					           <option value="2">Tablet</option>		
					           <option value="3">Oral Liquid</option>	
					           <option value="4">Suppositories</option>				
					           <option value="5">Ampoules</option>				
					           <option value="6">vials</option>				
					           <option value="7">Local Cream</option>				
					           <option value="8">Local ointment</option>		
					           <option value="9">Local Liquid</option>
					           <option value="10">Others</option>						
						 </select>
					    </div>
					    <div class="form-group col-md-3">
					      <label for="suspected_drug_dose">Dose</label>
					      <input class="form-control" name="suspected_drug_dose" id="suspected_drug_dose" placeholder="Dose">
					    </div>

					    <div class="form-group col-md-3">
					      <label for="suspected_drug_duration">Duration</label>
					      <input class="form-control"  name="suspected_drug_duration" 
					      		id="suspected_drug_duration" placeholder="Days">
					    </div>

    					    <div class="form-group col-md-3">
					      <label for="suspected_drug_drug_class">Drug Class</label>
					      <input class="form-control" name="suspected_drug_drug_class" id="suspected_drug_drug_class" placeholder="Drug Class">
					    </div>

					  </div>



 					<div class="row">
					    <div class="form-group col-md-4">
					      <label for="suspected_drug_indication">Indication</label>
					      <input class="form-control" name="suspected_drug_indication" id="suspected_drug_indication" placeholder="Indication">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="suspected_drug_date_start">Date Start</label>
					      <input type='date' class="form-control"  name="suspected_drug_date_start" id="suspected_drug_date_start" >
					    </div>

    					    <div class="form-group col-md-4">
					      <label for="suspected_drug_date_end">Date Stop</label>
					      <input type='date' class="form-control"  name="suspected_drug_date_end"  id="suspected_drug_date_end" >
					    </div>
					  </div>


 					<div class="row">
					    <div class="form-group col-md-6">
					      <label for="suspected_drug_batch_no">Batch No</label>
					      <input class="form-control"  name="suspected_drug_batch_no" id="suspected_drug_batch_no" placeholder="Batch No">
					    </div>

					    <div class="form-group col-md-6">
					      <label for="suspected_drug_status">Status</label>
						<select name="suspected_drug_status" id="suspected_drug_status" class="form-control">
						   <option value="0">Choose...</option>
						   <option value="1">Normal</option>
					       <option value="2">Cancel</option>					
						 </select>
					    </div>
					  </div>

 					<div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>

					</form>
					</div>
					<!--========== end  4-Suspected Drugs form==================-->



					<!--========== start  5-Concomitant Drugs form==================-->
					<div id="concomitant_drug" class="tab-pane fade<?php echo ($tab == 'concomitant_drug') ? 'in active' : ''; ?>">
					<h3>Concomitant Drug</h3>
					<form method="post" action="<?php echo base_url(); ?>index.php/Concomitant_drug/create">
					   <div class="row">
					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_report_id">Report ID</label>
					      	<input class="form-control" id="concomitant_drug_report_id" value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>' disabled>

 							<input type='hidden' class="form-control" name='concomitant_drug_report_id'  value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>'>
					    </div>

					   <div class="form-group col-md-4">
					      <label for="concomitant_drug_report_des">Report Description</label>
					      <input class="form-control" id="concomitant_drug_report_des" 
					      value='<?php echo (isset($report['report_desc'])) ?  $report['report_desc'] : 'Report description' ;?>' 
					      		 disabled
						    >

					    </div>

					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_report_date">Date</label>
					      <input type='date' class="form-control" id="report_patients_date" 
					      value='<?php echo (isset($report['report_date'])) ?  $report['report_date'] : 'Report date' ;?>' disabled>

					    </div>
					  </div>


					  <div class="row">
					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_id">Drug ID</label>
					      <input class="form-control" id="concomitant_drug_id" disabled>
					    </div>

					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_name">Drug Name</label>
					      <input class="form-control"  name="concomitant_drug_name" id="concomitant_drug_name" placeholder="Drug Name">
					    </div>




    					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_atc_code">ATC Code</label>
					      <input class="form-control" name="concomitant_drug_atc_code" 
					      id="concomitant_drug_atc_code" placeholder="ATC Code" >
					    </div>

 					    <div class="form-group col-md-3">
					      <label for="concomitant_Suspected_drug_inn">Suspected Drug INN</label>
					      <input class="form-control" name="concomitant_Suspected_drug_inn" 
					      id="concomitant_Suspected_drug_inn" placeholder="Suspected Drug INN" >
					    </div>
					  </div>

 					 <div class="row">
					  <div class="form-group col-md-4">
					      <label for="concomitant_drug_dosage_form">Dosage Form</label>
							<select  name="concomitant_drug_dosage_form"
								 id="concomitant_drug_dosage_form" 
								 class="form-control">
						       <option value="0">Choose...</option>
						  	   <option value="1">Capsule</option>
					           <option value="2">Tablet</option>		
					           <option value="3">Oral Liquid</option>	
					           <option value="4">Suppositories</option>				
					           <option value="5">Ampoules</option>				
					           <option value="6">vials</option>				
					           <option value="7">Local Cream</option>				
					           <option value="8">Local ointment</option>		
					           <option value="9">Local Liquid</option>
					           <option value="10">Others</option>						
						 </select>
					    </div>
					 
    					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_concentration">Concentration</label>
					      <input class="form-control" name="concomitant_drug_concentration" id="concomitant_drug_concentration" placeholder="Concentration">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_route">Route</label>
						<select name="concomitant_drug_route" 
								id="concomitant_drug_route" 
								class="form-control">
						   <option value="0">Choose...</option>
						   <option value="1">Oral</option>
				           <option value="2">Buccal</option>		
				           <option value="3">Otic</option>	
				           <option value="4">Nasal</option>				
				           <option value="5">Intramuscular</option>				
				           <option value="6">Intravenous</option>				
				           <option value="7">Subcutaneous</option>				
				           <option value="8">Intradermal</option>		
				           <option value="9">Others</option>			
						 </select>
					    </div>
					  
					  </div>


					 <div class="row">
    					
					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_dose">Dose</label>
					      <input class="form-control"  name="concomitant_drug_dose" 
					      		 id="concomitant_drug_dose" placeholder="Dose">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_duration">Duration</label>
					      <input class="form-control" name="concomitant_drug_duration"
					             id="concomitant_drug_duration" placeholder="Days">
					    </div>

    					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_drug_class">Drug Class</label>
					      <input class="form-control" name="concomitant_drug_drug_class"
					      id="concomitant_drug_drug_class" placeholder="Drug Class">
					    </div>

					  </div>



 					<div class="row">
					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_indication">Indication</label>
					      <input class="form-control" name="concomitant_drug_indication"
					      id="concomitant_drug_indication" placeholder="Indication">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_date_start">Date Start</label>
					      <input type='date' class="form-control" name="concomitant_drug_date_start"
					      id="concomitant_drug_date_start" >
					    </div>

    					    <div class="form-group col-md-4">
					      <label for="concomitant_drug_date_end">Date Stop</label>
					      <input type='date' class="form-control" name="concomitant_drug_date_end"
					      id="concomitant_drug_date_end" >
					    </div>
					  </div>


 					<div class="row">
					    <div class="form-group col-md-6">
					      <label for="concomitant_drug_batch_no">Batch No</label>
					      <input class="form-control" name="concomitant_drug_batch_no"
					      id="concomitant_drug_batch_no" placeholder="Batch No">
					    </div>

					    <div class="form-group col-md-6">
					      <label for="concomitant_drug_status">Status</label>
						<select  name="concomitant_drug_status" 
						id="concomitant_drug_status" class="form-control">
						   	<option value="0">Choose...</option>
						    <option value="1">Normal</option>
					        <option value="2">Cancel</option>					
						 </select>
					    </div>
					  </div>

 					<div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>

					</form>
					</div>
					<!--========== end  5-Concomitant Drugs form==================-->


					<!--========== start  6- ADR Adverse Drug Reaction form==================-->
					<div id="adverse_drug_reaction" class="tab-pane fade<?php echo ($tab == 'adverse_drug_reaction') ? 'in active' : ''; ?>">
					<h3>Adverse Drug Reaction -A D R-</h3>
					<form  method="post" action="<?php echo base_url(); ?>index.php/Adverse_drug_reaction/create">
						
  					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="adr_report_id">Report ID</label>
					      <input class="form-control" id="adr_report_id" 
					      		 value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>' 
					      		 disabled>

					      <input type='hidden' class="form-control" name='adr_report_id'  
					      		value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>'>
					    </div>

					    <div class="form-group col-md-4">
					      <label for="adr_report_des">Report Description</label>
					      <input class="form-control" id="adr_report_des" 
						        value='<?php echo (isset($report['report_desc'])) ?  $report['report_desc'] : 'Report description' ;?>' 
					      		disabled>
					    </div>

					    <div class="form-group col-md-4">
					      <label for="adr_report_date">Date</label>
					      <input type='date' class="form-control" id="adr_report_date" 
						        value='<?php echo (isset($report['report_date'])) ?  $report['report_date'] : 'Report date' ;?>' 
						        disabled>
					    </div>
					  </div>



 					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="adr_id">ADR ID</label>
					      <input class="form-control" name="adr_id" id="adr_id" disabled >
					    </div>

					   <div class="form-group col-md-4">
					      <label for="adr_Reaction">Reaction</label>
					      <input class="form-control"  name="adr_Reaction" id="adr_Reaction" placeholder="Reaction">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="adr_patient_name">Patient Name</label>
					      <input  class="form-control"  name="adr_patient_name" id="adr_patient_name" placeholder=" Patient Name">
					    </div>
					  </div>
	
					 <div class="row">
					    <div class="form-group col-md-6">
					      <label for="adr_date_start">Date Start</label>
					      <input type='date' class="form-control" name="adr_date_start" id="adr_date_start" >
					    </div>

    					    <div class="form-group col-md-6">
					      <label for="adr_date_end">Date Stop</label>
					      <input type='date' class="form-control"  name="adr_date_end" id="adr_date_end" >
					    </div>
					  </div>

	 				 <div class="row">
					    <div class="form-group col-md-3">
					      <label for="adr_Reaction_PT">Reaction PT</label>
					      <input class="form-control" name="adr_Reaction_PT" id="adr_Reaction_PT" placeholder="Reaction PT">
					    </div>

					   <div class="form-group col-md-3">
					      <label for="adr_Reaction_LLT">Reaction LLT</label>
					      <input class="form-control" name="adr_Reaction_LLT" id="adr_Reaction_LLT" placeholder="Reaction LLT">
					    </div>

					    <div class="form-group col-md-3">
					      <label for="adr_SOC">SOC</label>
					      <input  class="form-control"  name="adr_SOC" id="adr_SOC" placeholder="SOC">
					    </div>

 					    <div class="form-group col-md-3">
					      <label for="adr_Time_From_Drug">Time From Drug</label>
					      <input class="form-control"  name= "adr_Time_From_Drug" id="adr_Time_From_Drug" placeholder="Time From Drug">
					    </div>
					  </div>


					 <div class="row">
  					   <div class="form-group col-md-3">
					      <label for="concomitant_drug_status">Dechallenge</label>
						<select id="concomitant_drug_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>



  					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_status">Seriouseness	</label>
						<select id="concomitant_drug_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>

  					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_status">Expectedness</label>
						<select id="concomitant_drug_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>

					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_status">Reaction Outcome</label>
						<select id="concomitant_drug_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>
				        </div>
					

					<div class="row">
  					   <div class="form-group col-md-3">
					      <label for="concomitant_drug_status">Rechallenge</label>
						<select id="concomitant_drug_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>



  					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_status">Seriouseness Act</label>
						<select id="concomitant_drug_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>

  					    <div class="form-group col-md-3">
					      <label for="concomitant_drug_status">Causality</label>
						<select id="concomitant_drug_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>

					    <div class="form-group col-md-3">
					      <label for="adr_status">Status</label>
						<select id="adr_status" class="form-control">
						   <option selected>Choose...</option>
						   <option>Normal</option>
					           <option>Cancel</option>					
						 </select>
					    </div>
					  </div>

					 <div class="row">
					   <div class="form-group col-md-12">
						<label for="adr_comment">Comment</label>
					    <textarea name="adr_comment" id="adr_comment" class="form-control">Add Comment Here</textarea>
					   </div>
					 </div>

					<div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>
					</form>
					</div>
					<!--========== end  6-Adverse Drug Reaction form==================-->


					<!--========== start  7-Laboratory Testform==================-->
					<div id="laboratory_test" class="tab-pane fade<?php echo ($tab == 'laboratory_test') ? 'in active' : ''; ?>">
					<h3>Laboratory Test</h3>
					<form  method="post" action="<?php echo base_url(); ?>index.php/Lab/create" >
 					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="adr_report_id">Report ID</label>
					      <input class="form-control" id="adr_report_id" 	 
					     		 value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>' 
					      		 disabled>

					      <input type='hidden' class="form-control" name='lab_report_id'  
					      		value='<?php echo (isset($report['report_id'])) ?  $report['report_id'] : 'Report ID' ;?>'>

					    </div>

					   <div class="form-group col-md-4">
					      <label for="adr_report_des">Report Description</label>
					      <input class="form-control" id="adr_report_des" 
						    value='<?php echo (isset($report['report_desc'])) ?  $report['report_desc'] : 'Report description' ;?>' 
					      		disabled>
					    </div>

					    <div class="form-group col-md-4">
					      <label for="adr_report_date">Date</label>
					      <input type='date' class="form-control" id="adr_report_date" 
						     value='<?php echo (isset($report['report_date'])) ?  $report['report_date'] : 'Report date' ;?>' 
						        disabled>
					    </div>
					  </div>



					  <div class="row">
					    <div class="form-group col-md-6">
					      <label for="adr_report_id">Test ID</label>
					      <input class="form-control" id="adr_report_id" placeholder="Test ID"  disabled>
					    </div>

					   <div class="form-group col-md-6">
					      <label for="lab_test_name">Test Name</label>
					      <input class="form-control"   name="lab_test_name" id="lab_test_name" placeholder="Test Name">
					    </div>
					  </div>

 					 <div class="row">
					    <div class="form-group col-md-6">
					      <label for="medra">MedDRA Term for lab Test</label>
					      <input class="form-control" name="medra" id="medra" placeholder="MedDRA Term for lab Test">
					    </div>

					   <div class="form-group col-md-6">
					      <label for="refrence_range">Refrence Range</label>
					      <input class="form-control" name="refrence_range" id="refrence_range" placeholder="Refrence Range">
					    </div>
					 </div>


					 <div class="row">
					    <div class="form-group col-md-6">
					      <label for="test_result">Test Result</label>
					      <input class="form-control"  name="test_result" id="test_result" placeholder="Test Result">
					    </div>

					   <div class="form-group col-md-6">
					      <label for="lab_test_result_action">Test Result Action</label>
						<select  name="lab_test_result_action" id="lab_test_result_action" class="form-control">
						      <option  value="0">Choose...</option>
						  	   <option value="1">Normal</option>
					           <option value="2">Ubnormal</option>					
						 </select>
					    </div>
					  </div>



 					 <div class="row">
					    <div class="form-group col-md-6">
					      <label for="lab_test_date">Test Date	</label>
					      <input  type='date' class="form-control"  name="lab_test_date" id="">
					    </div>

					   <div class="form-group col-md-6">
					      <label for="lab_status">Status</label>
						<select  name="lab_status" id="lab_status" class="form-control">
						       <option value="0">Choose...</option>
						       <option value="1">Normal</option>
					           <option value="2">Cancelled</option>					
						 </select>
					    </div>
					  </div>






					 <div class="row">
					   <div class="form-group col-md-12">
					    <button type="submit" class="btn btn-primary">Save</button>
					   </div>
					 </div>
					</form>
					</div>
					<!--========== end  7-Laboratory Testform==================-->


					</div><!--end<div class="tab-content">-->
				    </div><!--<div class="col-md-6 col-md-offset-1 ">-->

				</div>
			</div>
		</div>
	</section><!-- end of contact section -->
<!--=============================================<!-- end of complain section ===========================---->

<!--report details-->
<section class="about text-center" id="report_details" 
	<?php if( $this->session->userdata('flag')== 1)
	echo" style='display:block'";
	else
	echo " style='display:none'";
	?> >
<div class="container">
<div class="row">
<div class="contact-caption clearfix">
<div class="contact-heading text-center">
<h2>Reports</h2>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
       
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>

</div>
</div>
</div>
</div>

</section>


<!--end of report details-->





	<!-- footer starts here -->
<br><br>
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<!--<p>&copy;Mostafizur All right reserved</p>-->
				</div>
				<div class="col-xs-6 text-right">
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->

</body>
</html>


<!--popover script-->
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

<!--Error Login Message-->
<script>
$(document).ready(function() {
    //var loginErrorElement = document.getElementById('loginError');
    var loginErrorMsg = $('#loginError').text();
    console.log(loginErrorMsg.length);
    if(loginErrorMsg.length != 0){
      $('#myModal').modal('show');
    }
});
</script>



<script>

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 


$('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'copy',
            'excel',
            'csv',
            'pdf'
        ]
    } );


    // DataTable
    var table = $('#example').DataTable();

 



    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>

<script>
$(function(){
document.getElementById('<?php echo $position;?>').scrollIntoView()
});
</script>

