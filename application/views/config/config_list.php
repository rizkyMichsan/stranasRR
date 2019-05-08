

<link href="<?php echo base_url() ?>adminBSB/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
<div class='container-fluid'>
    <div class='block-header'>
        <h2> </h2>
    </div>


<div class='row clearfix'>
   
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
        <div class='card'>
        <div class='header'>
        <h2>
        Config
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
		    <th>Name</th>
		    <th>Code</th>
		    <th width="20px">Action</th>
            </tr>
                </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($config_data as $config)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $config->name ?></td>
		    <td><?php echo $config->code ?></td>
		    <td style="text-align:center" width="20px"><div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#" class="update" class="waves-effect waves-block" id="update" data-id="<?php echo $config->id ?>">Update</a></li>
            <li><a href="#" class="update" class="waves-effect waves-block" id="delete" data-id="<?php echo $config->id ?>">Delete</a></li>
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

	 
   
    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.create').on('click',function(){
               $("#Config_form").modal('show');
                $('#Config_form').find('.form-line').removeClass('focused');$('#name').val('');$('#code').val('');$('#Config_form').find('#config_form').attr('action','<?=base_url()?>config/create');
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
                $('#Config_form').modal('show');
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url('config/get')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                            //alert(data.nama);
                            
                            $('#Config_form').find('#config_form').attr('action','<?=base_url()?>config/update');
                            $('#name').val(data['name']);$('#code').val(data['code']);
                            $('#id').val(id);
                            $('#Config_form').find('.form-line').addClass('focused');
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
                    window.location = "<?=base_url()?>config/delete/"+id;
                });
    
            });
    </script>
    