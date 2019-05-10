

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
        Web_menu
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
		    <th>Menu Name</th>
		    <th>Menu Name English</th>
		    <th>Icon</th>
		    <th>Link</th>
		    <th>Id Parent</th>
		    <th>Menu Stats</th>
		    <th>List Number</th>
		    <th>Menu Status</th>
		    <th>Active</th>
		    <th width="20px">Action</th>
            </tr>
                </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($web_menu_data as $web_menu)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $web_menu->menu_name ?></td>
		    <td><?php echo $web_menu->menu_name_english ?></td>
		    <td><?php echo $web_menu->icon ?></td>
		    <td><?php echo $web_menu->link ?></td>
		    <td><?php echo $web_menu->id_parent ?></td>
		    <td><?php echo $web_menu->menu_stats ?></td>
		    <td><?php echo $web_menu->list_number ?></td>
		    <td><?php echo $web_menu->menu_status ?></td>
		    <td><?php echo $web_menu->active ?></td>
		    <td style="text-align:center" width="20px"><div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#" class="update" class="waves-effect waves-block" id="update" data-id_menu="<?php echo $web_menu->id_menu ?>">Update</a></li>
            <li><a href="#" class="update" class="waves-effect waves-block" id="delete" data-id_menu="<?php echo $web_menu->id_menu ?>">Delete</a></li>
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
               $("#Web_menu_form").modal('show');
                $('#Web_menu_form').find('.form-line').removeClass('focused');$('#menu_name').val('');$('#menu_name_english').val('');$('#icon').val('');$('#link').val('');$('#id_parent').val('');$('#menu_stats').val('');$('#list_number').val('');$('#menu_status').val('');$('#active').val('');$('#Web_menu_form').find('#web_menu_form').attr('action','<?=base_url()?>web_menu/create');
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
                var id=$(this).attr('data-id_menu');
                $('#Web_menu_form').modal('show');
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url('web_menu/get')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                            //alert(data.nama);
                            
                            $('#Web_menu_form').find('#web_menu_form').attr('action','<?=base_url()?>web_menu/update');
                            $('#menu_name').val(data['menu_name']);$('#menu_name_english').val(data['menu_name_english']);$('#icon').val(data['icon']);$('#link').val(data['link']);$('#id_parent').val(data['id_parent']);$('#menu_stats').val(data['menu_stats']);$('#list_number').val(data['list_number']);$('#menu_status').val(data['menu_status']);$('#active').val(data['active']);
                            $('#id_menu').val(id);
                            $('#Web_menu_form').find('.form-line').addClass('focused');
                    }
                });
                return false;
            });
            $('.table-responsive').on('click','#delete',function(){
                var id=$(this).attr('data-id_menu');
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
                    window.location = "<?=base_url()?>web_menu/delete/"+id;
                });
    
            });
    </script>
    