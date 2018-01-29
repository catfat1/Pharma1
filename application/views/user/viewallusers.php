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
     
    <!-- Button to trigger modal -->
<button class="btn btn-success" data-toggle="modal" data-target="#modalFormAdd">
    Add New User
</button>

<!-- Modal Add -->
<div class="modal fade" id="modalFormAdd" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Create New User Form</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">User Mail</label>
                        <input type="mail" class="form-control" id="inputMail" placeholder="Enter User Mail"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">User Name</label>
                        <input type='text' class="form-control" id="inputName" placeholder="Enter User Name"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">User Password</label>
                        <input type='password' class="form-control" id="inputPassword" placeholder="Enter Password"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitUserForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="modalFormEdit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabelEdit">Edit User Form</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="editID" disabled/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">User Mail</label>
                        <input type="mail" class="form-control" id="editMail" placeholder="Enter the machine code"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">User Name</label>
                        <input type='text' class="form-control" id="editName" placeholder="Enter arabic description"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">User Password</label>
                        <input type='password' class="form-control" id="editPassword" placeholder="Enter english description"/>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="editUserForm()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
    <table id="example" class="display" cellspacing="0" width="100%">

        <thead>
                <tr>
                  <th><strong>User Name</strong></th>
                  <th><strong>User Mail</strong></th>
                  <th><strong>Edit</strong></th>
                  <th><strong>Delete</strong></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($user_items as $user_item): ?>
                        <tr id='row<?php echo $user_item['user_id'];?>'>
                            <td id="name<?php echo $user_item['user_id']; ?>"><?php echo $user_item['user_name']; ?></td>
                            <td id="mail<?php echo $user_item['user_id']; ?>"><?php echo $user_item['user_mail']; ?></td>
                            <td> <button class="btn btn-success showEditModel" id='edit<?php echo $user_item['user_id']; ?>' data-toggle="modal" data-target="#modalFormEdit" data-id="<?php echo $user_item['user_id']; ?>">
                                    Edit User
                                 </button>
                            </td>
                            <td><input id="delete<?php echo $user_item['user_id']; ?>" type='button' class='btn btn-success' onclick="deleterecord(<?php echo $user_item['user_id']; ?>);" value='Delete'></td>
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
    <!-- <script src="https:"></script> -->
    <script>
     
     
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
             
    } );
    </script>
<script>
function submitUserForm(){
    console.log("<?php echo base_url(); ?>" + "index.php/machine/insertMachine");
    //var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var mail = $('#inputMail').val();
    var name = $('#inputName').val();
    var password = $('#inputPassword').val();
    if(name.trim() == '' ){
        alert('Please enter the user name.');
        $('#inputName').focus();
        return false;
    }else if(mail.trim() == '' ){
        alert('Please enter the user mail.');
        $('#inputMail').focus();
        return false;
    }else if(password.trim() == '' ){
        alert('Please enter the user password.');
        $('#inputPassword').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url: "<?php echo base_url(); ?>" + "index.php/User/insertUser",
            data: { User_Name: name  , User_Mail: mail, User_Password: password},
            dataType: 'text',
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(data){
                console.log(data);
                var obj = $.parseJSON(data);
                //alert(obj.length );
                console.log(obj);
                //console.log(obj['code']);
                console.log(obj.CODE);
                if(obj.length != 0){
                    $('#inputName').val('');
                    $('#inputMail').val('');
                    $('#inputPassword').val('');
                    $('.statusMsg').html('<span style="color:green;">The New User has been added Successfully!.</p>');
                    $('#example').DataTable().row.add($('<tr id="row'+obj.user_id+'"><td id=name'+obj.user_id+'>'+obj.user_name+'</td><td id=mail'+obj.user_id+'>'+obj.user_mail+'</td><td><button class="btn btn-success showEditModel" id="edit'+obj.user_id+'" data-toggle="modal" data-target="#modalFormEdit" data-id="'+obj.user_id+'">Edit User</button></td><td><input id="delete'+obj.user_id+'" type="button" class="btn btn-success" onclick="deleterecord('+obj.user_id+');" value="Delete"></td></tr>')).draw();                                             
                    
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
function editUserForm(){
    var rowId = $(this).data('id');
    var id = $('#editID').val();
    var name = $('#editName').val();
    var mail = $('#editMail').val();
    var password = $('#editPassword').val();
    alert(password);
    if(name.trim() == '' ){
        alert('Please enter the user name.');
        $('#editName').focus();
        return false;
    }else if(mail.trim() == '' ){
        alert('Please enter the user mail.');
        $('#editMail').focus();
        return false;
    }else if(password.trim() == '' ){
        alert('Please enter the password.');
        $('#editPassword').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url: "<?php echo base_url(); ?>" + "index.php/User/editUser",
            data: { User_Id:id , User_Name: name  , User_Mail: mail, User_Password: password},
            dataType: 'text',
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(data){
                console.log(data);
                var obj = $.parseJSON(data);
                console.log(obj);
                //console.log(obj['code']);
                console.log(obj.CODE);
                if(obj.length != 0){
                    $('.statusMsg').html('<span style="color:green;">The User has been edited Successfully!.</p>');
                    document.getElementById("mail"+obj.user_id).innerText=obj.user_mail;  
                    document.getElementById("name"+obj.user_id).innerText=obj.user_name;
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
<script>
// to populate edit modal form
$(document).ready(function() {
    $('#example').on('click', '.showEditModel',function() {
        var data = $(this).data('id');
        $('#editID').val(data);
        $('#editName').val(document.getElementById("name"+data).innerText);
        $('#editMail').val(document.getElementById("mail"+data).innerText);
   });
});   
</script>
<script>
// to delete record from database and datatable
function deleterecord(id){
      var result = confirm("Are you sure you want to deactive the account of this user ?!.");
      if(result){
        $.ajax({
            type:'POST',
            url: "<?php echo base_url(); ?>" + "index.php/User/deleteUser",
            data: { id:id },
            dataType: 'text',
            success:function(data){ 
                //$('#edit'+id).parent().parent().remove();
                $('#example').DataTable().row('#row'+id).remove().draw( false );
                console.log(data);
            }
        });
      }
    }
</script>
   </body>
</html>