<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="StudyChem | Short description about StudyChem">
    <meta name="author" content="Your name">
    <title>StudyChem</title>
    <link rel="icon" href="<?php echo base_url();?>assests/img/favicon.gif" type="image/gif" sizes="16x16">

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assests/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="<?php echo base_url('assests/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="<?php echo base_url('assests/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/css/font-awesome-ie7.css'); ?> "rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="<?php echo base_url('assests/css/boot-business.css');?>" rel="stylesheet">
</head>
<script src="<?php echo base_url();?>assests/js/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<div class="content">
<div class="container">
    <div class="page-header">
    <center><h2>Edit Topic</h2></center>
    </div>
 
        
    <form class="form-horizontal form-signin-signup" action="<?php echo base_url();?>teacher/edit_topic/<?php echo $id;?>" method="post" enctype="multipart/form-data">
        <center><input value="<?php echo $title;?>"type="text" style="width:500px;"name="topic" class="input-medium search-query" placeholder="Name of the topic">
</center>
    <div id="sample" style="margin-left:250px;">
    <textarea  style="width:700px;height:500px;background-color;#d1d1d1;"  name="area1" >  
    <?php echo $theory; ?>
    </textarea>
    <br>
    <button type="submit" class="btn btn-large btn-success"> Save </button>
</div>
</form>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
       
</html>
