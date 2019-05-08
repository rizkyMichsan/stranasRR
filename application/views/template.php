<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
        <title><?php $in   =   $this->Mmenu->where_row('config', array('code' => 'system_title')); echo $in->name;?></title>
        <!-- Favicon-->
        <link rel="icon" href="<?php echo base_url(); ?>adminBSB/images/<?php $in   =   $this->Mmenu->where_row('config', array('code' => 'icon')); echo $in->name;?>" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="<?php echo base_url(); ?>adminBSB/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?php echo base_url(); ?>adminBSB/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="<?php echo base_url(); ?>adminBSB/plugins/animate-css/animate.css" rel="stylesheet" />

            <!-- JQuery DataTable Css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>adminBSB/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>adminBSB/css/responsive.dataTables.min.css">
        <!-- Bootstrap Select Css -->
        <link href="<?php echo base_url(); ?>adminBSB/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Custom Css -->
        <link href="<?php echo base_url(); ?>adminBSB/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?php echo base_url(); ?>adminBSB/css/themes/all-themes.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>adminBSB/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    </head>

    <body class="theme-<?php $in   =   $this->Mmenu->where_row('config', array('code' => 'theme')); echo $in->name;?>">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php $in   =   $this->Mmenu->where_row('config', array('code' => 'system_title')); echo $in->name;?></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Notifications -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Notifications -->
                        <!-- Tasks -->
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <?php
             $user = $this->ion_auth->user($this->session->userdata('user_id'))->row();
        ?>
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                    <?php 
                if($user->image=='users.png'){
                    echo '<img src="'.base_url().'adminBSB/images/'.$user->image.'" width="48" height="48" alt="User" />';
                }
                else{
                    echo '<img src="'.base_url().'assets/berkas/pegawai/'.$user->username.'/'.$user->image.'" width="48" height="48" alt="User" />';
                }
             ?>
                       
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$user->first_name?> <?=$user->last_name?></div>
                        <div class="email"><?=$user->email?></div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="<?=base_url()?>profile"><i class="material-icons">person</i>Profile</a></li>
                                
                                <li role="seperator" class="divider"></li>
                                <li><a href="<?=base_url()?>auth/logout"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <?php
                    $data = array('stats'=>'mm');
                    $mm = $this->Mmenu->where('sys_menu',$data);
                ?>
                <div class="menu">
                    <ul class="list">
                        <?php
                        $prn='';
                            foreach($mm as $mm):
                                echo"<li class='header'>".$mm['menu_name']."</li>";
                                $data = array('stats'=>'sm','parent'=>$mm['id_menu']);
                                $sm = $this->Mmenu->where('sys_menu',$data);
                                    foreach($sm as $sm):
                                        if($this->uri->segment(1)=='profile'){
                                            $ak='';
                                        }
                                        else{$ak=$this->uri->segment(1);}
                                            $data5 = array('link'=>$ak);
                                                    $sparent = $this->Mmenu->where('sys_menu',$data5);
                                                        foreach($sparent as $sparent):
                                                            $prn=$sparent['parent'];
                                                        endforeach;
                                        ?>
                                            <li class="<?php if($ak==$sm['link'] or $sm['id_menu']==$prn ){?>active<?php }?>">
                                                <a href="<?php echo ($sm['link'] == '#' ? '#' : base_url().$sm['link']); ?>" class="<?php echo ($sm['link'] == '#' ? 'menu-toggle' : ''); ?>">
                                                    <i class="material-icons"><?=$sm['icon']?></i>
                                                    <span><?=$sm['menu_name']?></span>
                                                </a>
                                                <ul class="ml-menu">
                                                <?php
                                                    $data = array('stats'=>'ssm','parent'=>$sm['id_menu']);
                                                    $ssm = $this->Mmenu->where('sys_menu',$data);
                                                        foreach($ssm as $ssm):
                                                            ?>
                                                                <li class="<?php if($this->uri->segment(1)==$ssm['link']){?>active<?php }?>">
                                                                    <a href="<?php echo base_url().$ssm['link']; ?>" ><?=$ssm['menu_name']?></a>
                                                                </li>
                                                            <?php
                                                        endforeach;
                                                ?>
                                                </ul>
                                            </li>
                                        <?php
                                            
                                    endforeach;

                                endforeach;
                        ?>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; <?php $in   =   $this->Mmenu->where_row('config', array('code' => 'copyright')); echo $in->name;?> <a href="javascript:void(0);"><?php $in   =   $this->Mmenu->where_row('config', array('code' => 'system_title')); echo $in->name;?></a>.
                    </div>
                    <div class="version">
                        <b>Version: </b> <?php $in   =   $this->Mmenu->where_row('config', array('code' => 'version')); echo $in->name;?>
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
           
            <!-- #END# Right Sidebar -->
        </section>
 <!-- Jquery Core Js -->
 <script src="<?php echo base_url(); ?>adminBSB/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo base_url(); ?>adminBSB/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="<?php echo base_url(); ?>adminBSB/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?php echo base_url(); ?>adminBSB/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo base_url(); ?>adminBSB/plugins/node-waves/waves.js"></script>


<!-- Custom Js -->
<script src="<?php echo base_url(); ?>adminBSB/js/admin.js"></script>
<!-- Demo Js -->
<script src="<?php echo base_url(); ?>adminBSB/js/demo.js"></script>
<script src="<?php echo base_url() ?>adminBSB/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>adminBSB/js/pages/tables/jquery-datatable.js"></script>
        <section class="content">
            <?php
            echo $contents;
            ?>
        </section>

    <script src="<?php echo base_url() ?>adminBSB/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="<?php echo base_url() ?>adminBSB/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="<?php echo base_url() ?>adminBSB/plugins/jquery-validation/jquery.validate.js"></script>
    </body>
</html>
