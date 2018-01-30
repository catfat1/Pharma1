<?php
	$logo=base_url().'img/eepilogo.png';
?>
<div class='row' id='repbody'>
	<div class='col-xs-12 col-md-3 pull-left'>
		<img class='img-responsive' src='<?php echo $logo?>'/>
	</div>
	<div class='col-xs-12 col-md-6 text-center'>
		<h1>Report ID: <?php echo $report['report_id']?></h1>
		<h3>Report Desc: <?php echo $report['report_desc']?></h3>
		<!-- <h5>(<?php 
			switch($header['IMPORTANCE'])
			{
				case 1:
					echo 'High';
				break;
				case 2:
					echo 'Medium';
				break;
				case 3:
					echo 'Low';
				break;
				default:
					echo 'Unknown';
				break;
			}
		?>)</h5> -->
	</div>
	<div class='col-xs-12 col-md-3 text-right'>
		<!-- <h3><?php echo $department['DESCRIPTION']?></h3>
		<h3><?php echo $costcenter['CENTER_NAME']?></h3> -->
	</div>
</div>
<a href ='/IIS_WEB/IProcurement/uploadsReqFiles/<?php echo $header['REQID'].'/'.$header['UPLOADEDFILE']?>'>Download The Uploaded File</a>

<h3>Reporter:</h3>
<table id='reporters' class='cell-border'>
	<thead>
		<tr>
        <?php
        foreach ($reporters[0] as $key => $value) {
            echo '<th>'.$key.'</th>';
           }
        
        ?>
		</tr>
	</thead>
	<tbody>
	<?php 
	foreach($reporters as $reporter){
        echo '<tr>';
        foreach ($reporter as $key => $value) {
	?>
			<td><?php echo $value?></td>
	<?php
        }
        echo '</tr>';
	}
	?>
	</tbody>
</table>
<script>
	$('#reporters').DataTable({
		"paging":   false,
		"ordering": false,
		"info":     false,
		"searching":   false
	});
</script>
<h3>Patient:</h3>
<table id='patient' class='cell-border'>
	<thead>
		<tr>
        <?php
        foreach ($patients[0] as $key => $value) {
            echo '<th>'.$key.'</th>';
           }
        
        ?>
		</tr>
	</thead>
	<tbody>
	<?php 
	foreach($patients as $patient){
        echo '<tr>';
        foreach ($patient as $key => $value) {
	?>
			<td><?php echo $value?></td>
	<?php
        }
        echo '</tr>';
	}
	?>
	</tbody>
</table>
<script>
	$('#patient').DataTable({
		"paging":   false,
		"ordering": false,
		"info":     false,
		"searching":   false
	});
</script>
<h3>Suspected Drugs:</h3>
<table id='s_drug' class='cell-border'>
	<thead>
		<tr>
        <?php
        foreach ($s_drugs[0] as $key => $value) {
            echo '<th>'.$key.'</th>';
           }
        
        ?>
		</tr>
	</thead>
	<tbody>
	<?php 
	foreach($s_drugs as $s_drug){
        echo '<tr>';
        foreach ($s_drug as $key => $value) {
	?>
			<td><?php echo $value?></td>
	<?php
        }
        echo '</tr>';
	}
	?>
	</tbody>
</table>
<script>
	$('#s_drug').DataTable({
		"paging":   false,
		"ordering": false,
		"info":     false,
		"searching":   false
	});
</script>
<h3>Concomitant Drugs:</h3>
<table id='concomitant_drugs' class='cell-border'>
	<thead>
		<tr>
        <?php
        foreach ($concomitant_drugs[0] as $key => $value) {
            echo '<th>'.$key.'</th>';
           }
        
        ?>
		</tr>
	</thead>
	<tbody>
	<?php 
	foreach($concomitant_drugs as $concomitant_drug){
        echo '<tr>';
        foreach ($concomitant_drug as $key => $value) {
	?>
			<td><?php echo $value?></td>
	<?php
        }
        echo '</tr>';
	}
	?>
	</tbody>
</table>
<script>
	$('#concomitant_drugs').DataTable({
		"paging":   false,
		"ordering": false,
		"info":     false,
		"searching":   false
	});
</script>
<h3>Adverse Drug Reaction -A D R-:</h3>
<table id='adr' class='cell-border'>
	<thead>
		<tr>
        <?php
        foreach ($adrs[0] as $key => $value) {
            echo '<th>'.$key.'</th>';
           }
        
        ?>
		</tr>
	</thead>
	<tbody>
	<?php 
	foreach($adrs as $adr){
        echo '<tr>';
        foreach ($adr as $key => $value) {
	?>
			<td><?php echo $value?></td>
	<?php
        }
        echo '</tr>';
	}
	?>
	</tbody>
</table>
<script>
	$('#adr').DataTable({
		"paging":   false,
		"ordering": false,
		"info":     false,
		"searching":   false
	});
</script>
<h3>Laboratory Test:</h3>
<table id='lab' class='cell-border'>
	<thead>
		<tr>
        <?php
        foreach ($labs[0] as $key => $value) {
            echo '<th>'.$key.'</th>';
           }
        
        ?>
		</tr>
	</thead>
	<tbody>
	<?php 
	foreach($labs as $lab){
        echo '<tr>';
        foreach ($lab as $key => $value) {
	?>
			<td><?php echo $value?></td>
	<?php
        }
        echo '</tr>';
	}
	?>
	</tbody>
</table>
<script>
	$('#lab').DataTable({
		"paging":   false,
		"ordering": false,
		"info":     false,
		"searching":   false
	});
</script>
<div class='row'>
	<div class='col-xs-12 col-md-6'>
		<h3>Owner:</h3>
                <table id='ownedby'  class='cell-border'>
                <thead>
                        <tr><th></th><th></th></tr>
                </thead>
                <tbody>
                        <tr>
                                <th>Type:</th>
                                <td><?php if(!empty($report['create_by'])) echo 'Medical Rep.'; else echo 'Passenger';?></td>
                        </tr>
                        <tr>
                                <th>Name:</th>
                                <td><?php  if(!empty($report['create_by'])) echo $report['user_name']; else echo 'Unknown';?></td>
                        </tr>
                        <tr>
                                <th>Timestamp:</th>
                                <td><?php echo $report['create_at'];?></td>
                        </tr>

                </tbody>
                </table>
                <script>
	                $('#ownedby').DataTable({
		                "paging":   false,
		                "ordering": false,
		                "info":     false,
		                "searching":   false
	                });
                </script>
	</div>
	<div class='col-xs-12 col-md-6'>
		<h3>Comments:</h3>
                <table id='Comments'  class='cell-border'>
                <thead>
                        <tr><th></th><th></th></tr>
                </thead>
                <tbody>
                <?php
                foreach($comments as $comment)
                {
                ?>
                        <tr>
                        <th>
                            <?php echo $comment['user_name'];?>:
                            <br/> <small><?php echo "[".$comment['create_at']."]"?></small>
                        </th>
                                <td><?php echo $comment['comment_desc'];?>
                                </td>
                        </tr>
                <?php
                }
                ?>
                </tbody>
                </table>
                <script>
	                $('#Comments').DataTable({
		                "paging":   false,
		                "ordering": false,
		                "info":     false,
		                "searching":   false
	                });
                </script>
	</div>
</div>
<button type='button' id='printpage' class='btn btn-default'><span class='fa fa-print'></span> print</button>
<script>
$(function(){
function openPrintDialogue(){
    var printable=$('#repbody').parent().clone();
    printable.find('#printpage').remove();
    printable.find('#repbody').find('img.img-responsive').width('100%');
    var x=printable.find('.col-xs-12');
    var x1=$(x[0]).html(); var x2=$(x[1]).html(); var x3=$(x[2]).html();
    var mid=[$(x2)[0],$(x2)[2],$(x2)[4]];
    var right=[$(x3)[0],$(x3)[2]];
    printable.find('#repbody').replaceWith('<table>'+
        '<tr>'+
            '<td width="17%" rowspan=3>'+x1+'</td>'+
            '<td width="66%" style="text-align:center;">'+$(mid[0]).html()+'</td>'+
            '<td width="17%" style="text-align:right;">'+$(right[0]).html()+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td width="66%" style="text-align:center;">'+$(mid[1]).html()+'</td>'+
            '<td width="17%" style="text-align:right;">'+$(right[1]).html()+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td width="66%" style="text-align:center;">'+$(mid[2]).html()+'</td>'+
            '<td width="17%"></td>'+
        '</tr> </table>');
    printable.find('script').remove();
  $('<iframe>', {
    name: 'myiframe',
    class: 'printFrame'
  })
  .appendTo('body')
  .contents().find('body')
  .append(printable.html());

  window.frames['myiframe'].focus();
  window.frames['myiframe'].print();

  setTimeout(() => { $(".printFrame").remove(); }, 1000);
};

$('#printpage').on('click', openPrintDialogue);
});
</script>
