<?php 

$string = "
<div class=\"modal fade\" id='".ucfirst($table_name)."_form'  role=\"dialog\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\" id=\"defaultModalLabel\">".$c_url." Form</h4>
                        </div>
                        <div class=\"modal-body\">
                        <?php
                        \$attributes = array('id' => 'menu_form');
                        echo form_open('', \$attributes);
                        ?>
        <form action='' method=\"post\" id=\"".$c_url."_form\">";
	    foreach ($non_pk as $row) {
           
            $string .= "<div class=\"form-group form-float\">
            <div class=\"form-line\">
            <input type=\"text\" class=\"form-control\" name='".$row["column_name"]."' id='".$row["column_name"]."'  required/>
                <label class=\"form-label\">".$row["column_name"]."</label>
            </div>
        </div>";
           
        }
        
	    
        
	   $string .=" <input type=\"hidden\" name='".$pk."' id=\"".$pk."\"  /> 
       <button type=\"submit\" class=\"btn btn-primary waves-effect\">Save</button> 
       <button type=\"button\" class=\"btn btn-link waves-effect\" data-dismiss=\"modal\">CLOSE</button>
       <?php echo form_close(); ?>
                        </div>
                        <div class=\"modal-footer\">
                        </div>
                    </div>
                </div>
            </div>";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);
