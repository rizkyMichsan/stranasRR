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
        <h2 style="margin-top:0px">Article Read</h2>
        <table class="table">
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Title</td><td><?php echo $title; ?></td></tr>
	    <tr><td>Title Eng</td><td><?php echo $title_eng; ?></td></tr>
	    <tr><td>Url Article</td><td><?php echo $url_article; ?></td></tr>
	    <tr><td>Isi Article</td><td><?php echo $isi_article; ?></td></tr>
	    <tr><td>Isi Article Eng</td><td><?php echo $isi_article_eng; ?></td></tr>
	    <tr><td>Hari</td><td><?php echo $hari; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>Jam</td><td><?php echo $jam; ?></td></tr>
	    <tr><td>Gambar</td><td><?php echo $gambar; ?></td></tr>
	    <tr><td>Video</td><td><?php echo $video; ?></td></tr>
	    <tr><td>Poster Video</td><td><?php echo $poster_video; ?></td></tr>
	    <tr><td>Embbed Video</td><td><?php echo $embbed_video; ?></td></tr>
	    <tr><td>Gen Code Article</td><td><?php echo $gen_code_article; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Dibaca</td><td><?php echo $dibaca; ?></td></tr>
	    <tr><td>Id Menu</td><td><?php echo $id_menu; ?></td></tr>
	    <tr><td>Id Main Menu</td><td><?php echo $id_main_menu; ?></td></tr>
	    <tr><td>Document</td><td><?php echo $document; ?></td></tr>
	    <tr><td>Komentar Status</td><td><?php echo $komentar_status; ?></td></tr>
	    <tr><td>Tag</td><td><?php echo $tag; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('article') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>