<div class="modal fade" id='Ic_users_form' role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">users Form</h4>
            </div>
            <div class="modal-body">
                <?php
                $attributes = array('id' => 'users_form');
                echo form_open('', $attributes);
                ?>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" id='email' required>
                        <label class="form-label">Email</label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name='identity' id='username' required />
                        <label class="form-label">username</label>
                    </div>
                </div>
                <div class="form-group form-float" id="form-password">
                    <div class="form-line">
                        <input type="password" class="form-control" name='password' id='password' required onkeyup="$('#users_form').find('#confirm').val($('#password').val())" />

                        <label class="form-label">password</label>
                    </div>
                    <label id="name-error" class="error hidden" for="name">if changing password</label>
                    <input type="hidden" class="form-control" name="password_confirm" id="confirm">
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name='first_name' id='first_name' required />
                        <label class="form-label">first_name</label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name='last_name' id='last_name' required />
                        <label class="form-label">last_name</label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <select class="form-control" name="group_id" id="group_id" onchange="jabatan()">
                            <option>Role</option>
                            <option value="1">Admin System</option>
                            <option value="2">Staf</option>
                            <option value="3">Direktur</option>
                            <option value="4">Kasubdit</option>
                            <option value="5">Sekretaris</option>
                        </select>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line" id="line_company">
                        <input type="text" class="form-control" name='company' id='company' required />
                        <label class="form-label">Position</label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name='phone' id='phone' required />
                        <label class="form-label">phone</label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name='urut' id='urut' required />
                        <label class="form-label">urut</label>
                    </div>
                </div> <input type="hidden" name='id' id="id" />
                <button type="submit" class="btn btn-primary waves-effect">Save</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </form>
                <form action='' method="post" id="ttd_form" enctype="multipart/form-data">
                    <div class="form-group form-float">
                        <div class="form-group form-float">
                            <div class="form-line">

                                <p>
                                    <b>Tanda Tangan</b>
                                </p>
                                <input type="file" name="gambar" id="gambar">
                                <input type="hidden" name='idd' id="idd" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect">Save</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="modal-footer">
                    </div>
            </div>
        </div>
    </div>