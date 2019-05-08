<div class="modal fade" id='Sys_menu_form'  role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">menu Form</h4>
                        </div>
                        <div class="modal-body">
        <form action='' method="post" id="menu_form"><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='menu_name' id='menu_name'  required/>
                <label class="form-label">menu_name</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='icon' id='icon' />
                <label class="form-label">icon</label>
             
            </div>
            <small><a href="<?=base_url()?>adminBSB/pages/ui/icons.html" target="_BLANK" style="color:#ffffff;" id="add_icons">Referensi</a></small>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='link' id='link'  required/>
                <label class="form-label">link</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
                <select class="form-control show-tick" data-live-search="true" name='stats' id='stats' onchange="getParent()"  required>
                <option >Type</option>
                                        <option value="mm">Main Menu</option>
                                        <option value="sm">Sub Menu</option>
                                        <option value="ssm">Sub Sub Menu</option>
                                    </select>
            </div>
        </div><div class="form-group form-float">
        <label class="form-label">parent</label>
            <div class="form-line">
            <select class="form-control show-tick" data-live-search="true" name='parent' id='parent'  required>
                                      
                                    </select>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='order' id='order'  required/>
                <label class="form-label">order</label>
            </div>
        </div> <input type="hidden" name='id_menu' id="id_menu"  /> 
       <button type="submit" class="btn btn-primary waves-effect">Save</button> 
       <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
    </form>
    
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>