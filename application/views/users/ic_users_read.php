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
        <h2 style="margin-top:0px">Ic_users Read</h2>
        <table class="table">
	    <tr><td>Urut</td><td><?php echo $urut; ?></td></tr>
	    <tr><td>Ip Address</td><td><?php echo $ip_address; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Salt</td><td><?php echo $salt; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Activation Selector</td><td><?php echo $activation_selector; ?></td></tr>
	    <tr><td>Activation Code</td><td><?php echo $activation_code; ?></td></tr>
	    <tr><td>Forgotten Password Selector</td><td><?php echo $forgotten_password_selector; ?></td></tr>
	    <tr><td>Forgotten Password Code</td><td><?php echo $forgotten_password_code; ?></td></tr>
	    <tr><td>Forgotten Password Time</td><td><?php echo $forgotten_password_time; ?></td></tr>
	    <tr><td>Remember Selector</td><td><?php echo $remember_selector; ?></td></tr>
	    <tr><td>Remember Code</td><td><?php echo $remember_code; ?></td></tr>
	    <tr><td>Created On</td><td><?php echo $created_on; ?></td></tr>
	    <tr><td>Last Login</td><td><?php echo $last_login; ?></td></tr>
	    <tr><td>Last Page</td><td><?php echo $last_page; ?></td></tr>
	    <tr><td>Active</td><td><?php echo $active; ?></td></tr>
	    <tr><td>Display</td><td><?php echo $display; ?></td></tr>
	    <tr><td>First Name</td><td><?php echo $first_name; ?></td></tr>
	    <tr><td>Last Name</td><td><?php echo $last_name; ?></td></tr>
	    <tr><td>Company</td><td><?php echo $company; ?></td></tr>
	    <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
	    <tr><td>Image</td><td><?php echo $image; ?></td></tr>
	    <tr><td>Lang</td><td><?php echo $lang; ?></td></tr>
	    <tr><td>Cal Timezone</td><td><?php echo $cal_timezone; ?></td></tr>
	    <tr><td>Cal Defaultview</td><td><?php echo $cal_defaultview; ?></td></tr>
	    <tr><td>Cal Header Left</td><td><?php echo $cal_header_left; ?></td></tr>
	    <tr><td>Cal Header Center</td><td><?php echo $cal_header_center; ?></td></tr>
	    <tr><td>Cal Header Right</td><td><?php echo $cal_header_right; ?></td></tr>
	    <tr><td>Cal Editable</td><td><?php echo $cal_editable; ?></td></tr>
	    <tr><td>Cal Firstday</td><td><?php echo $cal_firstday; ?></td></tr>
	    <tr><td>Cal Businessstart</td><td><?php echo $cal_businessstart; ?></td></tr>
	    <tr><td>Cal Businessend</td><td><?php echo $cal_businessend; ?></td></tr>
	    <tr><td>Cal Businessdays</td><td><?php echo $cal_businessdays; ?></td></tr>
	    <tr><td>Cal Hiddendays</td><td><?php echo $cal_hiddendays; ?></td></tr>
	    <tr><td>Cal Isrtl</td><td><?php echo $cal_isrtl; ?></td></tr>
	    <tr><td>Cal Weeknumbers</td><td><?php echo $cal_weeknumbers; ?></td></tr>
	    <tr><td>Cal Eventlimit</td><td><?php echo $cal_eventlimit; ?></td></tr>
	    <tr><td>Cal Alldayslot</td><td><?php echo $cal_alldayslot; ?></td></tr>
	    <tr><td>Cal Slotduration</td><td><?php echo $cal_slotduration; ?></td></tr>
	    <tr><td>Cal Slotlabeling</td><td><?php echo $cal_slotlabeling; ?></td></tr>
	    <tr><td>Cal Slotlabelformat</td><td><?php echo $cal_slotlabelformat; ?></td></tr>
	    <tr><td>Cal Aspectratio</td><td><?php echo $cal_aspectratio; ?></td></tr>
	    <tr><td>Cal Mintime</td><td><?php echo $cal_mintime; ?></td></tr>
	    <tr><td>Cal Maxtime</td><td><?php echo $cal_maxtime; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>