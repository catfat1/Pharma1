<?php  header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   <head>
      <title>Datatables Alternative Editor</title>
      
      <link rel="stylesheet" href="<?php echo base_url(); ?>include/admin_design/bootstrap.min.css"/> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>include/admin_design/jquery.dataTables.min.css"/> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>include/admin_design/buttons.dataTables.min.css"/> 
      <link rel="stylesheet" href="<?php echo base_url(); ?>include/admin_design/select.dataTables.min.css"/>
      <link rel="stylesheet" href="<?php echo base_url(); ?>include/admin_design/responsive.dataTables.min.css"/> 
      <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/> -->
      <!-- Latest minified bootstrap css -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/> 
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.0/css/buttons.dataTables.min.css"/> 
        <!-- jQuery library -->
      <script src="<?php echo base_url(); ?>include/admin_design/jquery.min.js"></script>

        <!-- Latest minified bootstrap js -->
       <script src="<?php echo base_url(); ?>include/admin_design/bootstrap.min.js"></script>
      <style>
        table.dataTable tbody>tr.selected,
        table.dataTable tbody>tr>.selected {
          background-color: #A2D3F6;
        }
      </style>
   </head>
   <body>

    <div class="container">



<!-- Modal Comment -->
<div class="modal fade" id="modalFormComment" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabelEdit">Comments</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Report ID</label>
                        <input type="text" class="form-control" id="report_id" disabled/>
                    </div>
                    <div id='commentList' class="form-group">
                        <label for="inputName">Other Comment</label>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Add New Comment</label>
                        <textarea class="form-control" id="inputComment" placeholder="Enter Comment ..."></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitComment()">Add New Comment</button>
            </div>
        </div>
    </div>
</div>
    <table id="example" class="display" cellspacing="0" width="100%">

        <thead>
                <tr>
                  <th><strong>ID</strong></th>
                  <th><strong>Description</strong></th>
                  <th><strong>Creation Date</strong></th>
                  <th><strong>Comments</strong></th>
                </tr>
        </thead>
                <tbody>
                <?php foreach ($reports as $report): ?>
                        <tr id='row<?php echo $report['report_id'];?>'>
                            <td id="id<?php echo $report['report_id']; ?>"><?php echo $report['report_id']; ?></td>
                            <td id="desc<?php echo $report['report_id']; ?>"><?php echo $report['report_desc']; ?></td>
                            <td id="date<?php echo $report['report_id']; ?>"><?php echo $report['create_at']; ?></td>
                            <td> <button class="btn btn-success showModel" id='comment<?php echo $report['report_id']; ?>' data-toggle="modal" data-target="#modalFormComment" data-id="<?php echo $report['report_id']; ?>">
                                   Comments
                                 </button>
                            </td>
                        </tr>
                <?php endforeach; ?>
        </tbody>
      </table>
      <br>
    </div>

    <script src="<?php echo base_url(); ?>include/admin_design/jquery-2.2.3.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <script src="<?php echo base_url(); ?>include/admin_design/jquery.dataTables.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>include/admin_design/js/altEditor/dataTables.altEditor.free.js"></script> -->
    <script src="<?php echo base_url(); ?>include/admin_design/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/dataTables.select.min.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/dataTables.responsive.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
    <script src="<?php echo base_url(); ?>include/admin_design/jquery-1.12.4.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
    <script src="<?php echo base_url(); ?>include/admin_design/jquery-1-10-16.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script> -->
    <!-- <script src="<?php echo base_url(); ?>include/admin_design/x.js"></script> -->
    <script src="<?php echo base_url(); ?>include/admin_design/dataTables150.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>include/admin_design/buttons.print.min.js"></script>
    <script> 
        // show data table
        $(document).ready(function() {
            $('#example').DataTable();     
        } );
    </script>
    <script>
    // to populate comments
    $(document).ready(function() {
        $('#example').on('click', '.showModel',function() {
            var report_id = $(this).data('id');
            $('#report_id').val(report_id);
            $.ajax({ 
                type: "post",
                url: "<?php echo base_url(); ?>" + "index.php/Admin/listComments",
                // Your creation of the data object is incorrect
                data: { report_id: report_id},
                success:  function(data) {
					var obj = JSON.parse(data);
                    for (var i=0; i < obj.length; i++){
                        $('#commentList').append('<input type="text" value="'+obj[i].comment_desc+'" class="form-control" disabled/>');
                    }
                }
            }); 
        });
    });   
    </script>
    <script>
        function submitComment(){
            var comment = $('#inputComment').val();
            //alert(comment);
            var report_id = $('#report_id').val();
            if(comment.trim() == '' ){
                alert('Please enter the New Comment or close.');
                $('#inputComment').focus();
                return false;
            }else{
                $.ajax({
                    type:'POST',
                    url: "<?php echo base_url(); ?>" + "index.php/Admin/insertComment",
                    data: { report_id: report_id  , comment: comment},
                    dataType: 'text',
                    beforeSend: function () {
                        $('.submitBtn').attr("disabled","disabled");
                        $('.modal-body').css('opacity', '.5');
                    },
                    success:function(data){
                       // console.log(data);
                        var obj = JSON.parse(data);
                        console.log('parse'+obj);
                        if(obj.length != 0){
                            $('#inputComment').val('');
                            $('.statusMsg').html('<span style="color:green;">The New Comment has been added Successfully!.</p>');
                            $('#commentList').append('<input type="text" value="'+obj.comment_desc+'" class="form-control" disabled/>');
                        }else{
                            $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                        }
                        $('.submitBtn').removeAttr("disabled");
                        $('.modal-body').css('opacity', '');
                    }
                });
            }
        }
    </script>
   </body>
</html>