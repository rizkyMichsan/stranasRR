

<div class='container-fluid'>
    <div class='block-header'>
        <h2> </h2>
    </div>


    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                        <div class="thumbnail">
                        <?php 
                if($users_data->image=='users.png'){
                    echo '<img src="'.base_url().'adminBSB/images/'.$users_data->image.'" width="200" height="200" alt="User" />';
                }
                else{
                    echo '<img src="'.base_url().'assets/berkas/pegawai/'.$users_data->username.'/'.$users_data->image.'" width="100" height="100" alt="User" />';
                }
             ?>
                                    </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class=" col-lg-3 col-md-3 col-sm-3 col-xs-3 align-center">
                                    <a href="#home_only_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i>
                                    </a>
                                </li>
                                <li role="presentation" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 align-center">
                                    <a href="#profile_only_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i>
                                    </a>
                                </li>
                                <li role="presentation" class="col-lg-3 col-md-3 col-sm-3 col-xs-3 align-center">
                                    <a href="#messages_only_icon_title" data-toggle="tab">
                                        <i class="material-icons">account_balance</i>
                                    </a>
                                </li>
                                <li role="presentation" class="active col-lg-3 col-md-3 col-sm-3 col-xs-3 align-center">
                                    <a href="#settings_only_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings</i>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade " id="home_only_icon_title">
                                    <b>Timeline Disposisi</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_only_icon_title">
                                    <b>Profile Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_only_icon_title">
                                    <b>Timeline Gaji</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in active" id="settings_only_icon_title">
                                    <h4>Settings </h4>
                                    <form action='auth/edit_user' method="post" id="profile_form" >
                                    <input type="hidden" name='id' id="id" value="<?php echo $users_data->id;?>"  /> 
                                    <p>
                                        <table class=" table table-hover">
                                            <tr>
                                                <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><b>Name</b></td>
                                                <td class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="content-name"><span id=_name><?php echo $users_data->first_name.' '.$users_data->last_name;?>
                                                        </span>
                                                    <div class="form-group form-float hidden">
                                                    <label class="form-label">First Name</label>
                                                        <div class="form-line focused">
                                                        <input type="text" class="form-control" autocomplete="off" name='first_name' id='first_name' value="<?=$users_data->first_name?>" required/>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float hidden">
                                                    <label class="form-label">Last Name</label>
                                                        <div class="form-line focused">
                                                        <input type="text" class="form-control" autocomplete="off" name='last_name' id='last_name' value="<?=$users_data->last_name?>" required/>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float hidden">
                                                    <button type="submit" class="btn btn-primary waves-effect">Save</button> 
                                                    <button type="button" class="btn btn-default waves-effect" id="cancel" data-id="name">Cancel</button>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="name"><a href="#" data-id="name"><i class="material-icons hidden">edit</i> Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><b>Username</b></td>
                                                <td class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="content-username"><span id="_username"><?php echo $users_data->username;?></span>
                                                    <div class="form-group form-float hidden">
                                                        
                                                            <div class="form-line focused">
                                                            <input type="text" class="form-control" autocomplete="off" name='identity' id="identity" value="<?=$users_data->username?>" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-float hidden">
                                                        <button type="submit" class="btn btn-primary waves-effect">Save</button> 
                                                        <button type="button" class="btn btn-default waves-effect" id="cancel" data-id="username">Cancel</button>
                                                        </div>
                                                </td>
                                                <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="username"><a href="#" data-id="username"><i class="material-icons hidden">edit</i> Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><b>Password</b></td>
                                                <td class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="content-password"><span id='_password'>********
                                                        </span>
                                                    <div class="form-group form-float hidden">
                                                    <label class="form-label">New Password</label>
                                                        <div class="form-line focused">
                                                        <input type="password" class="form-control" autocomplete="off" name='password' id="new_pass" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float hidden">
                                                    <label class="form-label">Confirm New Password</label>
                                                        <div class="form-line focused">
                                                        <input type="password" class="form-control" autocomplete="off" name="password_confirm" id="confirm_pass">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float hidden">
                                                    <button type="submit" class="btn btn-primary waves-effect">Save</button> 
                                                    <button type="button" class="btn btn-default waves-effect" id="cancel" data-id="password">Cancel</button>
                                                    </div>
                                                </td>
                                                <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="password"><a href="#" data-id="password"><i class="material-icons hidden">edit</i> Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><b>Email</b></td>
                                                <td class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="content-email"><span id=_email><?php echo $users_data->email;?></span>
                                                <div class="form-group form-float hidden">
                                                            <div class="form-line focused">
                                                            <input type="email" class="form-control" autocomplete="off" name='email'  value="<?=$users_data->email?>" required/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-float hidden">
                                                        <button type="submit" class="btn btn-primary waves-effect">Save</button> 
                                                        <button type="button" class="btn btn-default waves-effect" id="cancel" data-id="email">Cancel</button>
                                                        </div>
                                                </td>
                                                <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="email"><a href="#" data-id="email"><i class="material-icons hidden">edit</i> Edit</a></td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><b>Position</b></td>
                                                <td class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="content-position"><span id=_position><?php echo $users_data->company;?></span>
                                                <input type="hidden" class="form-control" name='company' autocomplete="off"  value="<?=$users_data->company?>" required/>
                                                </td>
                                                <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="position"></td>
                                            </tr>
                                            <tr>
                                                <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><b>Phone</b></td>
                                                <td class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="content-phone"><span id=_phone><?php echo $users_data->phone;?></span>
                                                <div class="form-group form-float hidden">
                                                        
                                                        <div class="form-line focused">
                                                        <input type="number" class="form-control" name='phone' autocomplete="off"  value="<?=$users_data->phone?>" required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-float hidden">
                                                    <button type="submit" class="btn btn-primary waves-effect">Save</button> 
                                                    <button type="button" class="btn btn-default waves-effect" id="cancel" data-id="phone">Cancel</button>
                                                </td>
                                                <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2" id="phone"><a href="#" data-id="phone"><i class="material-icons hidden">edit</i> Edit</a></td>
                                            </tr>
                                            
                                        </table>&nbsp
                                    </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>      
<script>
        $(document).ready(function(){
            $('.table-hover tbody tr').hover(function(){
                $(this).find('a').on('click',function(){
                    $('table').find('.form-group').addClass('hidden');
                    $('table').find('td a').removeClass('hidden');
                    $('table').find('td span').removeClass('hidden');
                    $(this).addClass('hidden');
                    var cont= 'content-'+$(this).data('id');
                    
                    $('#'+cont).find('span').addClass('hidden');
                    $('#'+cont).find('.form-group').removeClass('hidden');
                });
                $(this).find('#cancel').on('click',function(){
                    var cont0= 'content-'+$(this).data('id');
                    var cont= $(this).data('id');
                    
                    $('#_'+cont).removeClass('hidden');
                    $('#'+cont0).find('.form-group').addClass('hidden');
                    $('#'+cont).find('a').removeClass('hidden');
                });
            });
            $('#identity').keyup(function(){
                var id=$(this).val();
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url('users/get_user')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                        if(data>0){
                            $('#content-username').find('.form-line').removeClass('success');
                            $('#content-username').find('.form-line').addClass('error');
                            $('#content-username').find('.btn-primary').attr('disabled','disabled'); 
                        }
                        else{
                            $('#content-username').find('.form-line').removeClass('error');
                            $('#content-username').find('.form-line').addClass('success');
                            $('#content-username').find('.btn-primary').removeAttr('disabled');
                        }
                    }
                }); 
                return false;
            });
            
        });
        $('#confirm_pass').keyup(function(){
                if($('#confirm_pass').val()==$('#new_pass').val()){
                    $(this).parents('.form-line').removeClass('error');
                    $(this).parents('.form-line').addClass('success');
                    $('#content-password').find('.btn-primary').removeAttr('disabled');
                }
                else{
                    $(this).parents('.form-line').removeClass('success');
                    $(this).parents('.form-line').addClass('error');
                }
            });
        $(function () {
    $('#profile_form').validate({
        
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
</script>