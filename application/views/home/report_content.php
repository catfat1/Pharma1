<html>


	<!--header section -->

<?php include('header.php') ?>
 <!-- end of header area -->


<script>
/*to show data in the same page in report using ajax*/

function myfunction(id) {
  		
//var param=document.getElementById(id).text;
//alert(param);

var param=id;
//alert(param);

$.ajax({
        type: "post",
        url:"/Pharma1/index.php/Report/show_report_content_using_ajax",
        data: { 
            report_id: param, 
            //u:"/Pharma1/index.php/Report/show_report_content_using_ajax"
        },
        success: function(data) {
         //alert(data);
            //console.log(data);
              // console.log(data);
              alert(data);

             $(".modal-body").html(data);

        },
        error: function(result) {
            //alert('error');
        }
    });


			//$('#modal_body').innerHTML=param;


	     //$(".modal-body #").val( param );


      //$("#exampleModal").dialog({modal: true});



// $.post("ajax.html", function(data){

//     $("#myModalDiv").html(data).fadeIn();


    
}


</script>


<script>
$(document).ready(function(){

function myfunction(id) {
  		
//var param=document.getElementById(id).text;
//alert(param);

var param=id;
//alert(param);

$.ajax({
        type: "post",
        url:"/Pharma1/index.php/Report/show_report_content_using_ajax",
        data: { 
            report_id: param, 
            //u:"/Pharma1/index.php/Report/show_report_content_using_ajax"
        },
        success: function(data) {
         //alert(data);
            //console.log(data);
              // console.log(data);
              alert(data);

             $(".modal-body").html(data);

        },
        error: function(result) {
            //alert('error');
        }
    });




$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');

     console.log("ss");
     //$(".modal-body #bookId").val( myBookId );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});



});
</script>




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






	<table id="example" class="display nowrap" cellspacing="0" width="100%">
		<thead>
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

	    <?php foreach($all_reports as $key) 
	    { ?>
	    <tr>


	        <td  >    

	        	
				<a 	 class="pointer" id="<?php  echo( $key['report_id']);?>"  
	        	onclick="myfunction(<?php echo( $key['report_id']); ?>)" > 
	        	
	        	<?php echo( $key['report_id']); ?>
	        		
	        	</a>	




	        	<br>

	        	<br>
				<a 	 class="pointer" id="<?php  echo( $key['report_id']);?>"  

				href="#myModal"
				data-toggle="modal"
				data-target="#myModal"
				class="open-AddBookDialog"
				data-id=<?php echo( $key['report_id']); ?>
	        	>
	        	
	        	<?php echo( $key['report_id']); ?>
	        		
	        	</a>	










<!-- Modal -->
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






			

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
</div>
</div>
</div>

</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script>

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






    </body>
</html>
