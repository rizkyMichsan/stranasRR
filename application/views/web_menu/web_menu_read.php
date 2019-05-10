<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Web_menu Read</h2>
        <table class="table">
	    <tr><td>Menu Name</td><td><?php echo $menu_name; ?></td></tr>
	    <tr><td>Menu Name English</td><td><?php echo $menu_name_english; ?></td></tr>
	    <tr><td>Icon</td><td><?php echo $icon; ?></td></tr>
	    <tr><td>Link</td><td><?php echo $link; ?></td></tr>
	    <tr><td>Id Parent</td><td><?php echo $id_parent; ?></td></tr>
	    <tr><td>Menu Stats</td><td><?php echo $menu_stats; ?></td></tr>
	    <tr><td>List Number</td><td><?php echo $list_number; ?></td></tr>
	    <tr><td>Menu Status</td><td><?php echo $menu_status; ?></td></tr>
	    <tr><td>Active</td><td><?php echo $active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('web_menu') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>