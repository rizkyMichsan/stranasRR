<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo base_url('assets/front/images/'); ?><?= $icon ?>" type="image/x-icon">
    <link href="<?= base_url('assets/front/') ?>css/media_query.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/front/') ?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="<?= base_url('assets/front/') ?>css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/front/') ?>css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/front/') ?>css/style_1.css" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/front/') ?>js/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                    <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">Informasi</a>
                        <div class="fh5co_treding_position_absolute"></div>
                    </div>
                    <a href="#" class="color_fff fh5co_mediya_setting">Instagram’s big redesign goes live with black-and-white app</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="<?= base_url('assets/front/') ?>images/<?= $logo ?>" alt="img" class="fh5co_logo_width" />
                </div>
                <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                        </a>
                    </div>

                    <div class="text-center d-inline-block">
                        <a href="https://twitter.com/stranasrr" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://fb.com/bappenas" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>
                    </div>
                    <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="<?= base_url('assets/front/') ?>images/logo_rr.png" alt="img" class="mobile_logo_width" /></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php foreach ($main_menu as $mm) { ?>
                            <li class="nav-item <?php echo ($mm['active'] == 'Y' ?  'active' : '');
                                                $nummenu = $this->front->where('web_menu', array('id_parent' => $mm['id_menu']))->num_rows();
                                                if ($nummenu > 0) {
                                                    echo ' dropdown'; ?>">
                                    <a class="nav-link dropdown-toggle" href="<?php echo $mm['link']; ?>" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $mm['menu_name']; ?> <span class="sr-only">(current)</span></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                        <?php $sm = $this->front->where('web_menu', array('id_parent' => $mm['id_menu']), 'list_number')->result_array();
                                        foreach ($sm as $sm) {
                                            echo '<a class="dropdown-item" href="' . base_url($sm['link']) . '">' . $sm['menu_name'] . '</a>';
                                        }
                                        ?>

                                    </div>
                                <?php
                            } else {
                                echo ''; ?>
                                    ">
                                    <a class="nav-link" href="<?php echo base_url($mm['link']); ?>"><?php echo $mm['menu_name']; ?> <span class="sr-only">(current)</span></a>
                                <?php
                            }   ?>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <?php
    echo $contents;
    ?>
    <div class="container-fluid fh5co_footer_bg pb-3">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img src="<?= base_url('assets/front/') ?>images/<?= $logo_putih ?>" alt="img" class="footer_logo" /></div>
                <div class="clearfix"></div>
                <div class="col-12 col-md-4 col-lg-3">

                    <div class="footer_main_title py-3"> About</div>
                    <div class="footer_sub_about pb-3"> <?php echo $profil; ?>
                    </div>
                    <div class="footer_mediya_icon">

                        <div class="text-center d-inline-block">
                            <a href="https://twitter.com/stranasrr" target="_blank" class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="https://fb.com/bappenas" target="_blank" class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-5 col-lg-5 position_footer_relative">
                    <div class="footer_main_title py-3"> Most Viewed Posts</div>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_position_absolute"><img src="<?= base_url('assets/front/') ?>images/footer_sub_tipik.png" alt="img" class="width_footer_sub_img" /></div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 ">
                    <div class="footer_main_title py-3"> Related Link</div>
                    <a href="#" class="footer_img_post_6"><img src="<?= base_url('assets/front/') ?>images/allef-vinicius-108153.jpg" alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="<?= base_url('assets/front/') ?>images/32-450x260.jpg" alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="<?= base_url('assets/front/') ?>images/download (1).jpg" alt="img" /></a>
                </div>
            </div>
            <div class="row justify-content-center pt-2 pb-4">
                <div class="col-12 col-md-8 col-lg-7 ">
                    <div class="input-group">
                        <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                        <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_right_reserved">
        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 py-4 Reserved"> © Copyright <?php echo date('Y'); ?> All rights reserved. Created by <b><?php echo $copyright; ?></b>. </div>
                <div class="col-12 col-md-6 spdp_right py-4">
                    <a href="#" class="footer_last_part_menu">Home</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">About</a>
                    <a href="Contact_us.html" class="footer_last_part_menu">Contact</a>
                    <a href="blog.html" class="footer_last_part_menu">Latest News</a></div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="<?= base_url('assets/front/') ?>js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="<?= base_url('assets/front/') ?>js/main.js"></script>

</body>

</html>