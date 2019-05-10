<div class='container-fluid'>
    <div class='block-header'>
        <h2> </h2>
    </div>


    <div class='row clearfix'>

        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
            <div class='card'>
                <div class='header'>
                    <h2>
                        Menu
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
                                    <th>Icon</th>
                                    <th>Link</th>
                                    <th>Parent</th>
                                    <th>Stats</th>
                                    <th>Order</th>
                                    <th width="20px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $start = 0;
                                foreach ($menu_data as $menu) {
                                    ?>
                                    <tr>
                                        <td><?php echo ++$start ?></td>
                                        <td><?php echo $menu->menu_name ?></td>
                                        <td><?php echo $menu->icon ?></td>
                                        <td><?php echo $menu->link ?></td>
                                        <td><?php echo $menu->parent ?></td>
                                        <td><?php echo $menu->stats ?></td>
                                        <td><?php echo $menu->order ?></td>
                                        <td style="text-align:center" width="20px">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" class="update" class="waves-effect waves-block" id="update" data-id_menu="<?php echo $menu->id_menu ?>">Update</a></li>
                                                    <li><a href="#" class="update" class="waves-effect waves-block" id="delete" data-id_menu="<?php echo $menu->id_menu ?>">Delete</a></li>
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
    $(document).ready(function() {
        $("#add_icons").hover(function() {
            $('#add_icons').css('color', '#aaa');
        }, function() {
            $('#add_icons').css('color', '#fff');
        });
        $('.create').on('click', function() {
            $("#Sys_menu_form").modal('show');
            $("#icon_form").addClass('hidden');
            $('#Sys_menu_form').find('.form-line').removeClass('focused');
            $('#menu_name').val('');
            $('#icon').val('');
            $('#link').val('');
            $('#parent').val('');
            $('#stats').val('');
            $('#stats').selectpicker('refresh');
            $('#order').val('');
            $('#Sys_menu_form').find('#menu_form').attr('action', '<?= base_url() ?>menu/create');
        });

    });
    $(function() {
        var msg = '<?= $message ?>';
        if (msg != '') {
            if (msg == 'create') {
                var text = 'Create Record Success';
            } else if (msg == 'update') {
                var text = 'Update Record Success';
            } else if (msg == 'delete') {
                var text = 'Delete Record Success';
            } else if (msg == 'failed') {
                var text = 'Record Failed';
            } else {
                var text = 'Record Not Found';
            }

            var animateEnter = 'animated fadeInDown';
            var animateExit = 'animated fadeOutUp';
            var colorName = 'bg-black';
            showNotification(colorName, text, 'top', 'center', animateEnter, animateExit);
        }


    });

    function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
        if (colorName === null || colorName === '') {
            colorName = 'bg-black';
        }
        if (text === null || text === '') {
            text = 'Record Not Found';
        }
        if (animateEnter === null || animateEnter === '') {
            animateEnter = 'animated fadeInDown';
        }
        if (animateExit === null || animateExit === '') {
            animateExit = 'animated fadeOutUp';
        }
        var allowDismiss = true;

        $.notify({
            message: text
        }, {
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

    $('.table-responsive').on('click', '#update', function() {
        var id = $(this).attr('data-id_menu');
        $('#Sys_menu_form').modal('show');
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('menu/get') ?>",
            dataType: "JSON",
            data: {
                id: id
            },
            success: function(data) {
                //alert(data.nama);

                $('#Sys_menu_form').find('#menu_form').attr('action', '<?= base_url() ?>menu/update');
                $("#icon_form").addClass('hidden');
                $('#menu_name').val(data['menu_name']);
                $('#icon').val(data['icon']);
                $('#link').val(data['link']);
                $('#stats').val(data['stats']);
                $('#stats').selectpicker('refresh');
                $('#order').val(data['order']);
                $('#id_menu').val(id);
                $('#Sys_menu_form').find('.form-line').addClass('focused');
                getParent(data['parent']);
            }
        });
        return false;
    });
    $('.table-responsive').on('click', '#delete', function() {
        var id = $(this).attr('data-id_menu');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function() {

            window.location = "<?= base_url() ?>menu/delete/" + id;
        });

    });

    function getParent(iu) {
        var id = $("#stats").val();
        var ids = '';
        if (id == "mm") {
            ids = 0;
        } else if (id == "sm") {
            ids = 'mm';
        } else if (id == "ssm") {
            ids = 'sm';
        }
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('menu/getParent') ?>",
            dataType: "JSON",
            data: {
                id: ids
            },
            success: function(data) {
                var html = '';
                var i;
                //alert(data);
                if (data == '') {
                    html += "<option value='0'>0</option>";
                } else {
                    for (i = 0; i < data.length; i++) {
                        html += "<option value=" + data[i]['id_menu'] + ">" + data[i]['menu_name'] + "</option>";
                    }
                }
                $('#parent').html(html);

                if (iu != 'undefined') {
                    $('#parent').val(iu);
                }
                $('#parent').selectpicker('refresh');
            }
        });
        return false;
    };
</script>