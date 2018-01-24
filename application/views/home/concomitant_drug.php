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
<h3> Concomitant Drugs</h3>

	<table id="concomitant_drugs" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
					<?php  
					if(isset($all_concomitant_drugs[0])){
						$header=array_keys($all_concomitant_drugs[0]) ;
					}
					else{
						$header=['con_id','con_report_id','con_name','con_suspected_drug_inn',
						'con_concentrate','con_route_id','con_indiation','con_date_start',
						'con_status','con_drug','con_atc_code','con_dosage_form_id','cone_dose',
						'con_duration','con_drug_class','con_date_stop','con_batch_no','create_at',
						'create_by','update_at','update_by','delete_at','delete_by','con_end_date',
						'con_company_id','con_branch_id'


						];

					}

					foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
			</tr>
		</thead>


		<tfoot>
		    <tr>
		      <?php  if(isset($all_concomitant_drugs[0]))
		      			{
		      				$header=array_keys($all_concomitant_drugs[0]) ;
		      			}
		      		else{
		      			$header=['con_id','con_report_id','con_name','con_suspected_drug_inn',
						'con_concentrate','con_route_id','con_indiation','con_date_start',
						'con_status','con_drug','con_atc_code','con_dosage_form_id','cone_dose',
						'con_duration','con_drug_class','con_date_stop','con_batch_no','create_at',
						'create_by','update_at','update_by','delete_at','delete_by','con_end_date',
						'con_company_id','con_branch_id'];
		      		}

		      		foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
		    </tr>
		</tfoot>

 		
		   
		<?php foreach($all_concomitant_drugs as $key) 
	    { ?>
	    <tr>
					
	        <?php  echo isset($key['con_id'])? "<td>".$key['con_id']."</td>" : '';?>


	        <td><?php echo( $key['con_report_id']); ?></td>
	        <td><?php echo( $key['con_name']); ?></td>
	        <td><?php echo( $key['con_suspected_drug_inn']); ?></td>
	        <td><?php echo( $key['con_concentrate']); ?></td>
	        <td><?php echo( $key['con_route_id']); ?></td>
	        <td><?php echo( $key['con_indiation']); ?></td>
	       	<td><?php echo( $key['con_date_start']); ?></td>
	        <td><?php echo( $key['con_status']); ?></td>
	       	<td><?php echo( $key['con_drug']); ?></td>
	        <td><?php echo( $key['con_atc_code']); ?></td>
	        <td><?php echo( $key['con_dosage_form_id']); ?></td>
	        <td><?php echo( $key['cone_dose']); ?></td>



	   		<td><?php echo( $key['con_duration']); ?></td>
	     	<td><?php echo( $key['con_drug_class']); ?></td>
	        <td><?php echo( $key['con_date_stop']);  ?></td>
	        <td><?php echo( $key['con_batch_no']); ?></td>


	        <td><?php echo( $key['create_at']); ?></td>
	   		<td><?php echo( $key['create_by']); ?></td>
	     	<td><?php echo( $key['update_at']); ?></td>
	        <td><?php echo( $key['update_by']);  ?></td>
	        <td><?php echo( $key['delete_at']); ?></td>
	        <td><?php echo( $key['delete_by']); ?></td>


	        <td><?php echo( $key['con_end_date']); ?></td>
	        <td><?php echo( $key['con_company_id']); ?></td>
	        <td><?php echo( $key['con_branch_id']); ?></td>
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
    $('#concomitant_drugs tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" />' );
    } );
 



   $('#concomitant_drugs').DataTable( {
        "scrollX": true,
  		 dom: 'Bfrltip',
       	 buttons: [
             'copy',
            'excel',
            'csv',
            'pdf'
        ]



    } );






 

   
 


    // Apply the search
    $('#concomitant_drugs').columns().every( function () {
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



  