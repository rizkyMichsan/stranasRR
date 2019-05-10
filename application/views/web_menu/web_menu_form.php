
<div class="modal fade" id='Web_menu_form'  role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">web_menu Form</h4>
                        </div>
                        <div class="modal-body">
                        <?php
                        $attributes = array('id' => 'menu_form');
                        echo form_open('', $attributes);
                        ?>
        <form action='' method="post" id="web_menu_form"><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='menu_name' id='menu_name'  required/>
                <label class="form-label">menu_name</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='menu_name_english' id='menu_name_english'  required/>
                <label class="form-label">menu_name_english</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='icon' id='icon'  required/>
                <label class="form-label">icon</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='link' id='link'  required/>
                <label class="form-label">link</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='id_parent' id='id_parent'  required/>
                <label class="form-label">id_parent</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='menu_stats' id='menu_stats'  required/>
                <label class="form-label">menu_stats</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='list_number' id='list_number'  required/>
                <label class="form-label">list_number</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='menu_status' id='menu_status'  required/>
                <label class="form-label">menu_status</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='active' id='active'  required/>
                <label class="form-label">active</label>
            </div>
        </div> <input type="hidden" name='id_menu' id="id_menu"  /> 
       <button type="submit" class="btn btn-primary waves-effect">Save</button> 
       <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
       <?php echo form_close(); ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>