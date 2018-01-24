<html>


	<!--header section -->

<?php include('header.php') ?>
 <!-- end of header area -->

    

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
<h3> Suspect Drug</h3>

	<table id="suspect_drug" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
					<?php  if(isset($all_suspect_drugs[0])){

						$header=array_keys($all_suspect_drugs[0]) ;
					}

					 else {
				      	$header=['suspect_drug_id','suspect_drug_report_id','suspect_drug_code_id',
				      	'suspect_drug_atc_code','suspect_drug_dosage_form_id','suspect_drug_dose',
				      	'suspect_drug_duration','suspect_drug_class_id','suspect_drug_date_start',
				      	'suspect_drug_batch_no','suspect_drug_active_ingredient','suspect_drug_suspeted_drag_inn',
				      	'suspect_drug_concentration','suspect_drug_route_id','suspect_drug_indication',
				      	'suspect_drug_date_stop','suspect_drug_status_id','create_at','create_by','update_at',
				      	'update_by','delete_at','delete_by','suspect_drug_end_date','suspect_drug_company_id',
				      	'suspect_drug_branch_id'

				      	];


		      }


					foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
			</tr>
		</thead>


		<tfoot>
		    <tr>
		      <?php  if(isset($all_suspect_drugs[0]))
		      {

		      		$header=array_keys($all_suspect_drugs[0]) ;
		      }
		      else {
		      	$header=['suspect_drug_id','suspect_drug_report_id','suspect_drug_code_id',
		      	'suspect_drug_atc_code','suspect_drug_dosage_form_id','suspect_drug_dose',
		      	'suspect_drug_duration','suspect_drug_class_id','suspect_drug_date_start',
		      	'suspect_drug_batch_no','suspect_drug_active_ingredient','suspect_drug_suspeted_drag_inn',
		      	'suspect_drug_concentration','suspect_drug_route_id','suspect_drug_indication',
		      	'suspect_drug_date_stop','suspect_drug_status_id','create_at','create_by','update_at',
		      	'update_by','delete_at','delete_by','suspect_drug_end_date','suspect_drug_company_id',
		      	'suspect_drug_branch_id'

		      	];


		      }



		      		foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
		    </tr>
		</tfoot>

 		<?php foreach($all_suspect_drugs as $key) 
	    { ?>
	    <tr>
					
	        <?php  echo isset($key['suspect_drug_id'])? "<td>".$key['suspect_drug_id']."</td>" : '';?>


	        <td><?php echo( $key['suspect_drug_report_id']); ?></td>
	        <td><?php echo( $key['suspect_drug_code_id']); ?></td>

	        <td><?php echo( $key['suspect_drug_atc_code']); ?></td>
	        <td><?php echo( $key['suspect_drug_dosage_form_id']); ?></td>
	        <td><?php echo( $key['suspect_drug_dose']); ?></td>
	        <td><?php echo( $key['suspect_drug_duration']); ?></td>
	       	<td><?php echo( $key['suspect_drug_class_id']); ?></td>
	        <td><?php echo( $key['suspect_drug_date_start']); ?></td>
	       	<td><?php echo( $key['suspect_drug_batch_no']); ?></td>
	        <td><?php echo( $key['suspect_drug_active_ingredient']); ?></td>
	        <td><?php echo( $key['suspect_drug_suspeted_drag_inn']); ?></td>
	        <td><?php echo( $key['suspect_drug_concentration']); ?></td>



			<td><?php echo( $key['suspect_drug_route_id']); ?></td>
	     	<td><?php echo( $key['suspect_drug_indication']); ?></td>
	        <td><?php echo( $key['suspect_drug_date_stop']);  ?></td>
	        <td><?php echo( $key['suspect_drug_status_id']); ?></td>


	        <td><?php echo( $key['create_at']); ?></td>
	   		<td><?php echo( $key['create_by']); ?></td>
	     	<td><?php echo( $key['update_at']); ?></td>
	        <td><?php echo( $key['update_by']);  ?></td>
	        <td><?php echo( $key['delete_at']); ?></td>
	        <td><?php echo( $key['delete_by']); ?></td>


	        <td><?php echo( $key['suspect_drug_end_date']); ?></td>
	        <td><?php echo( $key['suspect_drug_company_id']); ?></td>
	        <td><?php echo( $key['suspect_drug_branch_id']); ?></td>
	        <?php                             
	        }?>
	    </tr>
	   






	
	</table>


	</div>
</div>
</div>
</div>

</section>



  </body>
</html>

<script>

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#suspect_drug tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" />' );
    } );
 


$('#suspect_drug').DataTable( {

	    "scrollX": true,

        dom: 'Bfrltip',
        buttons: [
             'copy',
            'excel',
            'csv',
            'pdf'
        ]
    } );



 

    // DataTable
    var table = $('#suspect_drug').DataTable();

 


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



  