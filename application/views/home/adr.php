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
<h3> Laboulatory</h3>

	<table id="adr" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
					<?php if(isset($all_adrs[0])) 
					{$header=array_keys($all_adrs[0]) ;}
					else{

						$header=['adr_id','adr_report_id','adr_patient_id','adr_reaction_pt',
						'adr_reaction','adr_soc','adr_date_start','adr_dechallenge','adr_serious',
						'adr_expectedness','adr_reaction_outcome_id','adr_comment','adr_reaction_llt','adr_time_from_drag','adr_date_stop','adr_rechallenge','adr_seriousenecy_act_id','adr_consality_id','adr_status','adr_end_date',
						'adr_company_id','adr_branch_id','create_at',
							'create_by','update_at','update_by','delete_at','delete_by'


						];
					}
					foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
			</tr>
		</thead>


		<tfoot>
		    <tr>
		      <?php  if(isset($all_adrs[0])){$header=array_keys($all_adrs[0]) ;}
		      		else{
						$header=['adr_id','adr_report_id','adr_patient_id','adr_reaction_pt',
						'adr_reaction','adr_soc','adr_date_start','adr_dechallenge','adr_serious',

						'adr_expectedness','adr_reaction_outcome_id','adr_comment','adr_reaction_llt','adr_time_from_drag',
						'adr_date_stop','adr_rechallenge','adr_seriousenecy_act_id','adr_consality_id','adr_status','adr_end_date',
						'adr_company_id','adr_branch_id','create_at',
							'create_by','update_at','update_by','delete_at','delete_by'

						];}
		      	foreach($header as $h){;?>
				  <th><?php echo $h; ?></th><?php }?>
		    </tr>
		</tfoot>

 		
		   
		<?php foreach($all_adrs as $key) 
	    { ?>
	    <tr>
			 <?php  echo isset($key['adr_id'])? "<td>".$key['adr_id']."</td>" : '';?>


	        <td><?php echo( $key['adr_report_id']); ?></td>
	        <td><?php echo( $key['adr_patient_id']); ?></td>
	        <td><?php echo( $key['adr_reaction_pt']); ?></td>
	        <td><?php echo( $key['adr_reaction']); ?></td>
	        <td><?php echo( $key['adr_soc']); ?></td>

	        <td><?php echo( $key['adr_date_start']); ?></td>
	       	<td><?php echo( $key['adr_dechallenge']); ?></td>
	        <td><?php echo( $key['adr_serious']); ?></td>
	       	<td><?php echo( $key['adr_expectedness']); ?></td>
	        <td><?php echo( $key['adr_reaction_outcome_id']); ?></td>
	        <td><?php echo( $key['adr_comment']); ?></td>
	        <td><?php echo( $key['adr_reaction_llt']); ?></td>
	        <td><?php echo( $key['adr_time_from_drag']); ?></td>
	        <td><?php echo( $key['adr_date_stop']); ?></td>
	        <td><?php echo( $key['adr_rechallenge']); ?></td>
	        <td><?php echo( $key['adr_seriousenecy_act_id']); ?></td>
	        <td><?php echo( $key['adr_consality_id']); ?></td>
	        <td><?php echo( $key['adr_status']); ?></td>
	        <td><?php echo( $key['adr_end_date']); ?></td>
	        <td><?php echo( $key['adr_company_id']); ?></td>
	        <td><?php echo( $key['adr_branch_id']); ?></td>
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
</div>
</div>
</div>

</section>


  </body>
</html>

<script>

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#adr tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" />' );
    } );
 


$('#adr').DataTable( {

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
    var table = $('#adr').DataTable();

 


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



  