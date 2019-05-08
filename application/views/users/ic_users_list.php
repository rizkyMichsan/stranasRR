


<div class='container-fluid'>
    <div class='block-header'>
        <h2> </h2>
    </div>


<div class='row clearfix'>
   
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
        <div class='card'>
        <div class='header'>
        <h2>
        Konfigurasi Users
        </h2>
        <ul class='header-dropdown m-r--5'>
            <li class='dropdown'>
                <a href='javascript:void(0);' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                    <i class='material-icons'>more_vert</i>
                </a>
                <ul class='dropdown-menu pull-right'>
                    <li><a href="#" class="create">Create</a></li>
                </ul>
            </li>
        </ul>
    </div>
            <div class='body'>
            <div class='table-responsive'>
            <table class='table table-bordered table-striped table-hover dataTable js-exportable'>
                <thead>
                <tr>
                <th width="20px">No</th>
		    <th>Urut</th>
		    
		    <th>Username</th>
		    
		    <th>First Name</th>
		    <th>Last Name</th>
		    <th>Position</th>
            <th>Email</th>
		    <th>Phone</th>
            <th>Created On</th>
		    <th>Last Login</th>
		    <th>Active</th>
            <th>Ip Address</th>
		    <th>Image</th>
		    <th width="20px">Action</th>
            </tr>
                </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($users_data as $users)
            {
                
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $users->urut ?></td>
		    
		    <td><?php echo $users->username ?></td>
		    
		   
		    <td><?php echo $users->first_name ?></td>
		    <td><?php echo $users->last_name ?></td>
		    <td><?php echo $users->company ?></td>
            <td><?php echo $users->email ?></td>
		    <td><?php echo $users->phone ?></td>
            <td><?php echo date('d/m/Y H:i', $users->created_on); ?></td>
		    <td><?php echo date('d/m/Y H:i',$users->last_login); ?></td>
		    <td><?php echo $stats=($users->active > 0 ? "Pegawai" : "Non Pegawai"); ?></td>
            <td><?php echo $users->ip_address ?></td>
            <td><?php 
                if($users->image=='users.png'){
                    echo '<img src="'.base_url().'adminBSB/images/'.$users->image.'" width="48" height="48" alt="User" />';
                }
                else{
                    echo '<img src="'.base_url().'assets/berkas/pegawai/'.$users->username.'/'.$users->image.'" width="48" height="48" alt="User" />';
                }
             ?></td>
		    <td style="text-align:center" width="20px"><div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
        <?php
        $gid=$this->ion_auth->get_users_groups($users->id)->row();
        
            if($gid->id==3){
                echo "<li><a href=\"#\" class=\"ttd\" class=\"waves-effect waves-block\" id=\"ttd\" data-id=\"$users->id\">Upload Tanda Tangan</a></li><li role=\"separator\" class=\"divider\"></li>";
            }
        ?>
            <li><a href="#" class="update" class="waves-effect waves-block" id="update" data-id="<?php echo $users->id ?>">Update</a></li>
            <?php 
                        if($users->active > 0){
                      ?>
            <li><a href="#" class="update" class="waves-effect waves-block" id="delete" data-id="<?php echo $users->id ?>">Delete</a></li>
            <?php
                }else {
                    ?>
                        <li><a href="<?php echo base_url().'users/restuser/'.$users->id; ?>" class="update" class="waves-effect waves-block">Restore User</a></li>
                    <?php
                }
            ?>
        </ul>
    </div>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
	  
            </table>
        </div>
            </div>
        </div>
    </div>
    
</div>
</div>            

	 
   
    

    <script>
        $(document).ready(function(){
            $('.create').on('click',function(){
               $("#Ic_users_form").modal('show');
               $('#users_form').removeClass('hidden');
                $('#Ic_users_form').find('.form-line').removeClass('focused');$('#urut').val('');$('#ip_address').val('');$('#username').val('');$('#password').val('');$('#email').val('');$('#group_id').val('');$('#first_name').val('');$('#last_name').val('');$('#company').val('');$('#phone').val('');$('#image').val('');$('#id').val('');$('#Ic_users_form').find('#users_form').attr('action','<?=base_url()?>auth/create_user');
                $('#form-password').find('#password').attr('required','required');
                $('#ttd_form').addClass('hidden');
            });

        });
        $(function () {
            var msg='<?=$message?>';
            if(msg!=''){
                if(msg=='create'){var text='Create Record Success';}
                else if(msg=='update'){var text='Update Record Success';}
                else if(msg=='delete'){var text='Delete Record Success';}
                else if(msg=='failed'){var text='Record Failed';}
                else {var text='Record Not Found';}
               
               var animateEnter = 'animated fadeInDown';
                var animateExit = 'animated fadeOutUp';
                var colorName = 'bg-black';
            showNotification(colorName, text, 'top', 'center', animateEnter, animateExit);
            }
            
        
    });
    
    function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
        if (colorName === null || colorName === '') { colorName = 'bg-black'; }
if (text === null || text === '') { text = 'Record Not Found'; }
if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
var allowDismiss = true;

    $.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
}
        $('.table-responsive').on('click','#update',function(){
                var id=$(this).attr('data-id');
                $('#Ic_users_form').modal('show');
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url('users/get')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                            $('#Ic_users_form').find('#users_form').attr('action','<?=base_url()?>auth/edit_user');
                            $('#email').val(data['email']);$('#urut').val(data['urut']);$('#username').val(data['username']);$('#first_name').val(data['first_name']);$('#last_name').val(data['last_name']);$('#company').val(data['company']);$('#phone').val(data['phone']);
                            $('#group_id').val(data['id']);
                            $('#group_id').selectpicker('refresh');
                            $('#id').val(id);
                            $('#form-password').find('.error').removeClass('hidden');
                            $('#form-password').find('#password').removeAttr('required');
                            $('#users_form').find('.form-line').addClass('focused');
                            $('#ttd_form').addClass('hidden');
                    }
                });
                return false;
            });
            $('.table-responsive').on('click','#delete',function(){
                var id=$(this).attr('data-id');
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    swal("Deleted!", "Your file has been deleted.", "success");
                    window.location = "<?=base_url()?>users/delete/"+id;
                });
                
            });
            $('.table-responsive').on('click','#ttd',function(){
                var id=$(this).attr('data-id');
                $('#Ic_users_form').modal('show');
                $('#Ic_users_form').find('#ttd_form').attr('action','<?=base_url()?>users/upload');
                            $('#idd').val(id);
                            $('#users_form').addClass('hidden');
                   
            });
            function jabatan(){
          var i="";
          if($('#group_id').val()==1){i="Admin System";}
          else if($('#group_id').val()==2){i="Staf";}
          else if($('#group_id').val()==3){i="Direktur";}
          else if($('#group_id').val()==4){i="Kasubdit";}
          else if($('#group_id').val()==5){i="Sekretaris";}
          else{i=""}
          $('#company').val(i);
          if(i==""){$('#Ic_users_form').find('#line_company').removeClass('focused');}
          else{$('#Ic_users_form').find('#line_company').addClass('focused');}
          
        }
            $(function () {
    $('#users_form').validate({
        
        highlight: function (input) {
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.form-group').append(error);
        }
    });

    });
    </script>
    