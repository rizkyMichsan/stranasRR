

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
        Article
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
		    <th>Username</th>
		    <th>Title</th>
		    <th>Title Eng</th>
		    <th>Url Article</th>
		    <th>Isi Article</th>
		    <th>Isi Article Eng</th>
		    <th>Hari</th>
		    <th>Tanggal</th>
		    <th>Jam</th>
		    <th>Gambar</th>
		    <th>Video</th>
		    <th>Poster Video</th>
		    <th>Embbed Video</th>
		    <th>Gen Code Article</th>
		    <th>Status</th>
		    <th>Dibaca</th>
		    <th>Id Menu</th>
		    <th>Id Main Menu</th>
		    <th>Document</th>
		    <th>Komentar Status</th>
		    <th>Tag</th>
		    <th width="20px">Action</th>
            </tr>
                </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($article_data as $article)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $article->username ?></td>
		    <td><?php echo $article->title ?></td>
		    <td><?php echo $article->title_eng ?></td>
		    <td><?php echo $article->url_article ?></td>
		    <td><?php echo $article->isi_article ?></td>
		    <td><?php echo $article->isi_article_eng ?></td>
		    <td><?php echo $article->hari ?></td>
		    <td><?php echo $article->tanggal ?></td>
		    <td><?php echo $article->jam ?></td>
		    <td><?php echo $article->gambar ?></td>
		    <td><?php echo $article->video ?></td>
		    <td><?php echo $article->poster_video ?></td>
		    <td><?php echo $article->embbed_video ?></td>
		    <td><?php echo $article->gen_code_article ?></td>
		    <td><?php echo $article->status ?></td>
		    <td><?php echo $article->dibaca ?></td>
		    <td><?php echo $article->id_menu ?></td>
		    <td><?php echo $article->id_main_menu ?></td>
		    <td><?php echo $article->document ?></td>
		    <td><?php echo $article->komentar_status ?></td>
		    <td><?php echo $article->tag ?></td>
		    <td style="text-align:center" width="20px"><div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#" class="update" class="waves-effect waves-block" id="update" data-id_article="<?php echo $article->id_article ?>">Update</a></li>
            <li><a href="#" class="update" class="waves-effect waves-block" id="delete" data-id_article="<?php echo $article->id_article ?>">Delete</a></li>
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
               $("#Article_form").modal('show');
                $('#Article_form').find('.form-line').removeClass('focused');$('#username').val('');$('#title').val('');$('#title_eng').val('');$('#url_article').val('');$('#isi_article').val('');$('#isi_article_eng').val('');$('#hari').val('');$('#tanggal').val('');$('#jam').val('');$('#gambar').val('');$('#video').val('');$('#poster_video').val('');$('#embbed_video').val('');$('#gen_code_article').val('');$('#status').val('');$('#dibaca').val('');$('#id_menu').val('');$('#id_main_menu').val('');$('#document').val('');$('#komentar_status').val('');$('#tag').val('');$('#Article_form').find('#article_form').attr('action','<?=base_url()?>article/create');
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
                var id=$(this).attr('data-id_article');
                $('#Article_form').modal('show');
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url('article/get')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                            //alert(data.nama);
                            
                            $('#Article_form').find('#article_form').attr('action','<?=base_url()?>article/update');
                            $('#username').val(data['username']);$('#title').val(data['title']);$('#title_eng').val(data['title_eng']);$('#url_article').val(data['url_article']);$('#isi_article').val(data['isi_article']);$('#isi_article_eng').val(data['isi_article_eng']);$('#hari').val(data['hari']);$('#tanggal').val(data['tanggal']);$('#jam').val(data['jam']);$('#gambar').val(data['gambar']);$('#video').val(data['video']);$('#poster_video').val(data['poster_video']);$('#embbed_video').val(data['embbed_video']);$('#gen_code_article').val(data['gen_code_article']);$('#status').val(data['status']);$('#dibaca').val(data['dibaca']);$('#id_menu').val(data['id_menu']);$('#id_main_menu').val(data['id_main_menu']);$('#document').val(data['document']);$('#komentar_status').val(data['komentar_status']);$('#tag').val(data['tag']);
                            $('#id_article').val(id);
                            $('#Article_form').find('.form-line').addClass('focused');
                    }
                });
                return false;
            });
            $('.table-responsive').on('click','#delete',function(){
                var id=$(this).attr('data-id_article');
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
                    window.location = "<?=base_url()?>article/delete/"+id;
                });
    
            });
    </script>
    