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
<h3>Reporter</h3>
    

	<table id="reporter" class="display nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
					<?php  
						if(isset($all_reporters[0]))
						{
							$header=array_keys($all_reporters[0]) ;
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

		      		$header=array_keys($all_reporters[0]) ;
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

	    <?php foreach($all_reporters as $key) 
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
</div>
</div>
</div>

</section>

  </body>
</html>

<script>

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#reporter tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder=" '+title+'" />' );
    } );
 


$('#reporter').DataTable( {
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
    var table = $('#reporter').DataTable();

 


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

;
} );
</script>



  