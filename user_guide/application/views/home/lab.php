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

	<table id="lab" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
					<?php if(isset($all_labs[0])) 
					{$header=array_keys($all_labs[0]) ;}
					else{

						$header=['lab_id','lab_report_id','lab_name','lab_result','lab_status_id',
						'lab_date','lab_result_action_id','lab_reference_range','lab_medra','lab_end_date','lab_company_id','lab_branch_id','create_at',
							'create_by','update_at','update_by','delete_at','delete_by'


						];
					}
					foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>
			</tr>
		</thead>


		<tfoot>
		    <tr>
		      <?php  if(isset($all_labs[0])){$header=array_keys($all_labs[0]) ;}
		      		else{
						$header=['lab_id','lab_report_id','lab_name','lab_result','lab_status_id',
						'lab_date','lab_result_action_id','lab_reference_range','lab_medra','lab_end_date','lab_company_id','lab_branch_id','create_at',
							'create_by','update_at','update_by','delete_at','delete_by'

						];}
		      	foreach($header as $h){;?>
				  <th><?php echo $h; ?></th><?php }?>
		    </tr>
		</tfoot>

 		
		   
		<?php foreach($all_labs as $key) 
	    { ?>
	    <tr>
					
	        <?php  echo isset($key['lab_id'])? "<td>".$key['lab_id']."</td>" : '';?>


	        <td><?php echo( $key['lab_report_id']); ?></td>
	        <td><?php echo( $key['lab_name']); ?></td>
	        <td><?php echo( $key['lab_result']); ?></td>
	        <td><?php echo( $key['lab_status_id']); ?></td>
	        <td><?php echo( $key['lab_date']); ?></td>

	        <td><?php echo( $key['lab_result_action_id']); ?></td>
	       	<td><?php echo( $key['lab_reference_range']); ?></td>
	        <td><?php echo( $key['lab_medra']); ?></td>
	       	<td><?php echo( $key['lab_end_date']); ?></td>
	        <td><?php echo( $key['lab_company_id']); ?></td>
	        <td><?php echo( $key['lab_branch_id']); ?></td>



	   	


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
    $('#lab tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" />' );
    } );
 


$('#lab').DataTable( {

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
    var table = $('#lab').DataTable();

 


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



  