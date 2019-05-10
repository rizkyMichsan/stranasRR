
<div class="modal fade" id='Article_form'  role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">article Form</h4>
                        </div>
                        <div class="modal-body">
                        <?php
                        $attributes = array('id' => 'menu_form');
                        echo form_open('', $attributes);
                        ?>
        <form action='' method="post" id="article_form"><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='username' id='username'  required/>
                <label class="form-label">username</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='title' id='title'  required/>
                <label class="form-label">title</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='title_eng' id='title_eng'  required/>
                <label class="form-label">title_eng</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='url_article' id='url_article'  required/>
                <label class="form-label">url_article</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='isi_article' id='isi_article'  required/>
                <label class="form-label">isi_article</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='isi_article_eng' id='isi_article_eng'  required/>
                <label class="form-label">isi_article_eng</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='hari' id='hari'  required/>
                <label class="form-label">hari</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='tanggal' id='tanggal'  required/>
                <label class="form-label">tanggal</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='jam' id='jam'  required/>
                <label class="form-label">jam</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='gambar' id='gambar'  required/>
                <label class="form-label">gambar</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='video' id='video'  required/>
                <label class="form-label">video</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='poster_video' id='poster_video'  required/>
                <label class="form-label">poster_video</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='embbed_video' id='embbed_video'  required/>
                <label class="form-label">embbed_video</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='gen_code_article' id='gen_code_article'  required/>
                <label class="form-label">gen_code_article</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='status' id='status'  required/>
                <label class="form-label">status</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='dibaca' id='dibaca'  required/>
                <label class="form-label">dibaca</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='id_menu' id='id_menu'  required/>
                <label class="form-label">id_menu</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='id_main_menu' id='id_main_menu'  required/>
                <label class="form-label">id_main_menu</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='document' id='document'  required/>
                <label class="form-label">document</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='komentar_status' id='komentar_status'  required/>
                <label class="form-label">komentar_status</label>
            </div>
        </div><div class="form-group form-float">
            <div class="form-line">
            <input type="text" class="form-control" name='tag' id='tag'  required/>
                <label class="form-label">tag</label>
            </div>
        </div> <input type="hidden" name='id_article' id="id_article"  /> 
       <button type="submit" class="btn btn-primary waves-effect">Save</button> 
       <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
       <?php echo form_close(); ?>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>