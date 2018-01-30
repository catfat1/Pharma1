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
<h3>Patient</h3>

	<table id="patient" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
					<?php  if(isset($all_patients[0]))
					{
					$header=array_keys($all_patients[0]) ;
					}
					else{
							$header=['patient_id','patient_report_id','patient_age','patient_weight',
							'patient_sex','patient_country','patient_address','patient_telephone',
							'patient_mobile','patient_mail','patient_name','patient_age_group_id',
							'patient_pregamcy','patient_city','patient_status_id','create_at',
							'create_by','update_at','update_by','delete_at','delete_by'
							];
		      			}


					foreach($header as $h){;?>



				    <th><?php echo $h; ?></th><?php }?>
			</tr>
		</thead>


		<tfoot>
		    <tr>
		      <?php  if(isset($all_patients[0]))
		      			{
		      				$header=array_keys($all_patients[0]) ;
		      			}
		      			else{
							$header=['patient_id','patient_report_id','patient_age','patient_weight',
							'patient_sex','patient_country','patient_address','patient_telephone',
							'patient_mobile','patient_mail','patient_name','patient_age_group_id',
							'patient_pregamcy','patient_city','patient_status_id','create_at',
							'create_by','update_at','update_by','delete_at','delete_by'
							];

		      			}

		      				foreach($header as $h){;?>
				    <th><?php echo $h; ?></th><?php }?>


		    </tr>
		</tfoot>

 		<?php foreach($all_patients as $key) 
	    { ?>
	    <tr>
					
	        <?php  echo isset($key['patient_id'])? "<td>".$key['patient_id']."</td>" : '';?>


	        <td><?php echo( $key['patient_report_id']); ?></td>
	        <td><?php echo( $key['patient_age']); ?></td>
	        <td><?php echo( $key['patient_weight']); ?></td>
	        <td><?php echo( $key['patient_sex']); ?></td>
	        <td><?php echo( $key['patient_country']); ?></td>
	        <td><?php echo( $key['patient_address']); ?></td>
	        <td><?php echo( $key['patient_telephone']); ?></td>
	        
	        <td><?php echo( $key['patient_mobile']); ?></td>
	       	<td><?php echo( $key['patient_mail']); ?></td>
	        <td><?php echo( $key['patient_name']); ?></td>
	       	<td><?php echo( $key['patient_age_group_id']); ?></td>
	        <td><?php echo( $key['patient_pregamcy']); ?></td>
	        <td><?php echo( $key['patient_city']); ?></td>
	        <td><?php echo( $key['patient_status_id']); ?></td>


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
    $('#patient tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" />' );
    } );
 


var table=$('#patient').DataTable( {
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
    //var table = $('#patient').DataTable();

 


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



  