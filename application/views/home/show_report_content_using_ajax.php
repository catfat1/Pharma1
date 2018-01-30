<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>
</head>

<body>







<div class="tab">
  <button  id="defaultOpen" class="tablinks" onclick="opentab(event, 'Report')">Report</button>
  <button  class="tablinks" onclick="opentab(event, 'report_form')">Report Form</button>

  <button class="tablinks" onclick="opentab(event, 'Reporter')">Reporter</button>
</div>
	<!--header section -->

<?php //include('header.php') ?>
 <!-- end of header area -->




<?php ?>
<!-- <section class="about text-center" id="report_details" 
	<?php //if( $this->session->userdata('flag')== 1)
	//echo" style='display:block'";
	//else
	//echo " style='display:none'";
	?> > -->
<!-- <div class="container">
<div class="row"> -->
<!-- <div class="contact-caption clearfix">
 -->
<!--  <div class="contact-heading text-center">
 -->
<!-- <h2>Reports</h2>
 -->
 <div id="Report" style="overflow-x:auto;"  class="tabcontent">

	<table id="customers" class="" width="100%">
	<caption  ><center>Report</center></caption>
			<tr>
					<?php  

						//$header=array_keys($all_reports[0]) ;

						$header=['report_id','report_desc','report_type_id','report_date','report_status_id',
						'report_addition_info'];

						foreach($header as $h){;?>


				    <th><?php echo $h; ?></th><?php }?>
			</tr>
		</thead>


		<tfoot>
		    <tr>
		      <?php  //$header=array_keys($all_reports[0]) ;

		      $header=['report_id','report_desc','report_type_id','report_date','report_status_id',
						'report_addition_info'];
		      		foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
		    </tr>
		</tfoot>

	    <?php foreach($all_reports_with_id as $key) 
	    { ?>
	    <tr>


	        <td  >
	        	
	        	
	        	<?php echo( $key['report_id']); ?>
	        		
	        </td>

	        <td><?php echo( $key['report_desc']); ?>					</td>

	        <td><?php echo( $key['report_type_id']); ?>					</td>

<!-- 	        <td><?php //echo( $key['report_source']); ?>				</td>
 -->
	        <td><?php echo( $key['report_date']); ?>					</td>

<!-- 	        <td><?php //echo( $key['report_serious']); ?>					</td>
 -->
<!-- 	        <td><?php //echo( $key['report_serious_id']); ?>				</td>
 -->
	       	<td><?php echo( $key['report_status_id']); ?>				</td>

	        <td><?php echo( $key['report_addition_info']); ?>			</td>

	<!--         <td><form  method="get" action='show_reporter'>
	        			<button onclick="location.href = 'show_reporter';" >
	        					<?php //echo( $key['report_reporter_id']); ?>	Reporter
	        			</button>

	        			<input type='hidden' name='report_reporter_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	       	</td>
 -->
	<!--         <td><form method="get" action='show_patient'>
	        			<button onclick="location.href = 'show_patient';" >
	        					<?php //echo( $key['report_patient_id']); ?>	Patient
	        			</button>

	        			<input type='hidden' name='report_patient_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->



 		<!-- 	<td><form method="get" action='show_suspect_drug'>
	        			<button onclick="location.href = 'show_suspect_drug';" >
	        					<?php //echo( $key['report_suspect_drug_id']); ?>	Suspect Drug
	        			</button>

	        			<input type='hidden' name='suspect_drug_report_id' value="<?php echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->






<!-- 

			<td><form method="get" action='show_concomitant_drug'>
	        			<button onclick="location.href = 'show_concomitant_drug';" >
	        					<?php //echo( $key['report_concomitant_drug_id']); ?>	Concomitant Drug
	        			</button>

	        			<input type='hidden' name='concomitant_drug_report_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->






<!-- 
	        <td>
				<form method="get" action='show_adr'>
	        			<button onclick="location.href = 'show_adr';" >
	        					<?php //echo( $key['report_lab_id']); ?>	A .D .R
	        			</button>

	        			<input type='hidden' name='adr_report_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	       			 <?php //echo( $key['report_adr_id']); ?>					
	        </td>
 -->
<!-- 




			<td><form method="get" action='show_lab'>
	        			<button onclick="location.href = 'show_lab';" >
	        					<?php //echo( $key['report_lab_id']); ?>	Laboulatory Test
	        			</button>

	        			<input type='hidden' name='lab_report_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->









<!-- 
	        <td><?php //echo( $key['create_at']); ?>						</td>

	        <td><?php// echo( $key['create_by']); ?>						</td>

	     	<td><?php //echo( $key['update_at']); ?>					</td>

	        <td><?php //echo( $key['update_by']);  ?>						</td>

	        <td><?php //echo( $key['delete_at']); ?>						</td>

	        <td><?php //echo( $key['delete_by']); ?>						</td> -->

	        <?php                             
	        }?>

	       
	        
	    </tr>
	</table>
</div>



<!--report_form -->

<div id="report_form" style="overflow-x:auto;"  class="tabcontent">

	
			


		
	    <?php foreach($all_reports_with_id as $key) 
	    { ?>



	    
 		<!--form-->

	     
					<!--========== start  1-report form=======================-->
					<h3>Reports</h3>
					 <form method='post' action="<?php echo base_url(); ?>index.php/Report/create">
					  <div class="row">

					    <div class="form-group col-md-6">
					      <label for="report_id">Report ID	</label>
					      <input class="form-control" id="report_id" placeholder="Report ID ( Auto Serial)" value="<?php echo( $key['report_id']); ?>" disabled>
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
							 placeholder="Report Description" 
							 value="<?php echo( $key['report_desc']); ?>">
					  </div>

					  <div class="form-group">
					    <label for="inputAddress2">Report Source</label>
					    <input type="text" class="form-control" name="report_source" id="" placeholder="Report Source"
					    value="<?php echo( $key['report_source']); ?>">
					  </div>

					  <div class="row">
					    <div class="form-group col-md-4">
					      <label for="additional_info">Additional Information</label>
					      <input type="text" class="form-control"   name="additional_info" id="additional_info"  
						     placeholder="Additional Information"
						     value="<?php echo( $key['report_addition_info']); ?>" >
					    </div>


					    <div class="form-group col-md-4">
					      <label for="date">Date</label>
					      <input type="date" class="form-control"  name="report_date" 
					      id="date"
					      value="<?php echo( $key['report_date']); ?>">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="Status">Status</label>
					      <select name="report_status" id="Status"   class="form-control"
									value="<?php echo( $key['report_status_id']); ?>"
					      >
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
							<input class="form-check-input"  name="seriousness"  value ="seriousness" type="checkbox"> Seriousness
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

	        	
	        	

	    <!--end form-->
	        	<?php //echo( $key['report_id']); ?>
 	        		

	        <!--  <?php //echo( $key['report_desc']); ?>					

	        <?php //echo( $key['report_type_id']); ?>				

<!-- 	        <td><?php //echo( $key['report_source']); ?>				</td>
 -->
	        <?php// echo( $key['report_date']); ?>					

<!-- 	        <td><?php //echo( $key['report_serious']); ?>					</td>
 -->
<!-- 	        <td><?php //echo( $key['report_serious_id']); ?>				</td>
 -->
	       	<?php //echo( $key['report_status_id']); ?>				

	        <?php //echo( $key['report_addition_info']); ?>			 

	<!--         <td><form  method="get" action='show_reporter'>
	        			<button onclick="location.href = 'show_reporter';" >
	        					<?php //echo( $key['report_reporter_id']); ?>	Reporter
	        			</button>

	        			<input type='hidden' name='report_reporter_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	       	</td>
 -->
	<!--         <td><form method="get" action='show_patient'>
	        			<button onclick="location.href = 'show_patient';" >
	        					<?php //echo( $key['report_patient_id']); ?>	Patient
	        			</button>

	        			<input type='hidden' name='report_patient_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->



 		<!-- 	<td><form method="get" action='show_suspect_drug'>
	        			<button onclick="location.href = 'show_suspect_drug';" >
	        					<?php //echo( $key['report_suspect_drug_id']); ?>	Suspect Drug
	        			</button>

	        			<input type='hidden' name='suspect_drug_report_id' value="<?php echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->






<!-- 

			<td><form method="get" action='show_concomitant_drug'>
	        			<button onclick="location.href = 'show_concomitant_drug';" >
	        					<?php //echo( $key['report_concomitant_drug_id']); ?>	Concomitant Drug
	        			</button>

	        			<input type='hidden' name='concomitant_drug_report_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->






<!-- 
	        <td>
				<form method="get" action='show_adr'>
	        			<button onclick="location.href = 'show_adr';" >
	        					<?php //echo( $key['report_lab_id']); ?>	A .D .R
	        			</button>

	        			<input type='hidden' name='adr_report_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	       			 <?php //echo( $key['report_adr_id']); ?>					
	        </td>
 -->
<!-- 




			<td><form method="get" action='show_lab'>
	        			<button onclick="location.href = 'show_lab';" >
	        					<?php //echo( $key['report_lab_id']); ?>	Laboulatory Test
	        			</button>

	        			<input type='hidden' name='lab_report_id' value="<?php //echo( $key['report_id']); ?>">

	        	</form>
	        </td> -->



<!-- 
	        <td><?php //echo( $key['create_at']); ?>						</td>

	        <td><?php// echo( $key['create_by']); ?>						</td>

	     	<td><?php //echo( $key['update_at']); ?>					</td>

	        <td><?php //echo( $key['update_by']);  ?>						</td>

	        <td><?php //echo( $key['delete_at']); ?>						</td>

	        <td><?php //echo( $key['delete_by']); ?>						</td> -->

	        <?php                             
	        }?>

	       
	        
</div>




<!--end report_form -->


<!-- reporter table -->

 <div id="Reporter" style="overflow-x:auto;"  class="tabcontent">

	<table id="customers" class="" width="100%">
		<thead>
			<tr>
					<?php  
						if(isset($all_reporters_with_id[0]))
						{
							$header=array_keys($all_reporters_with_id[0]) ;
						}
						else{
							$header=['reporter_id','reporter_report_id','reporter_qualification_id',
							'reporter_name','reporter_work_institution_id','reporter_address',
							'reporter_mobile_no','reporter_contact_detail','reporter_status_id',
							'reporter_speciality','reporter_telephone','reporter_mail',
							'reporter_medicaly_confirm','reporter_end_date','create_at','create_by',
							'update_at','update_by','delete_at','delete_by'
							];
		      			}

					foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
			</tr>
		</thead>


		<tfoot>
		    <tr>
		      <?php  
					if(isset($all_reporters[0]))
					{

		      		$header=array_keys($all_reporters_with_id[0]) ;
					}
					else{
							$header=['reporter_id','reporter_report_id','reporter_qualification_id',
							'reporter_name','reporter_work_institution_id','reporter_address',
							'reporter_mobile_no','reporter_contact_detail','reporter_status_id',
							'reporter_speciality','reporter_telephone','reporter_mail',
							'reporter_medicaly_confirm','reporter_end_date','create_at','create_by',
							'update_at','update_by','delete_at','delete_by'
							];
		      			}

		      		foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
		    </tr>
		</tfoot>

	    <?php foreach($all_reporters_with_id as $key) 
	    { ?>
	    <tr>
					
	        <?php  echo isset($key['reporter_id'])? "<td>".$key['reporter_id']."</td>" : '';?>


	        <td><?php echo( $key['reporter_report_id']); ?></td>
	        <td><?php echo( $key['reporter_qualification_id']); ?></td>
	        <td><?php echo( $key['reporter_name']); ?></td>
	        <td><?php echo( $key['reporter_work_institution_id']); ?></td>
	        <td><?php echo( $key['reporter_address']); ?></td>
	        <td><?php echo( $key['reporter_mobile_no']); ?></td>
	       	<td><?php echo( $key['reporter_contact_detail']); ?></td>

	        <td><?php echo( $key['reporter_status_id']); ?></td>
	       	<td><?php echo( $key['reporter_speciality']); ?></td>
	        <td><?php echo( $key['reporter_telephone']); ?></td>

	        <td><?php echo( $key['reporter_mail']); ?></td>
	        <td><?php echo( $key['reporter_medicaly_confirm']);?></td>
	        <td><?php echo( $key['reporter_end_date']); ?></td>
	        <td><?php echo( $key['create_at']); ?></td>
	   		<td><?php echo( $key['create_by']); ?></td>
	     	<td><?php echo( $key['update_at']); ?></td>
	        <td><?php echo( $key['update_by']);  ?></td>
	        <td><?php echo( $key['delete_at']); ?></td>
	        <td><?php echo( $key['delete_by']); ?></td>
	        <?php                             
	        }?>
	    </tr>
	</table>

</div>



<script>
function opentab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";


}

// Get the element with id="defaultOpen" and click on it

    document.getElementById("defaultOpen").click();

</script>

</body>
</html>






























<!-- </div>
</div> -->
<!-- </div>
</div>
 -->
<!-- </section>
 -->



<!-- <script>

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" />' );
    } );
 
  // DataTable

	$('#example').DataTable( {
		"scrollX": true,
        dom: 'Bfrltip',
        buttons: [
             'copy',
            'excel',
            'csv',
            'pdf'
        ]
    } );

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
 -->





    </body>
</html>
