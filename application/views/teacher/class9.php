<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="StudyChem | Short description about StudyChem">
    <meta name="author" content="Your name">
    <title>StudyChem</title>
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
  <body>
    <!-- Start: HEADER -->
   
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
 
    <div class="container">
          <div class="page-header">
           <center> <h1> Class 9 Topics </h1></center>
          </div>
          
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/periodic_table.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Periodic Table</h3>
                    <p>
                      Learning chemistry through Periodic Table.
                    </p>
                  </div>
                  <?php if($periodic == 1) { ?>
                  <a href="<?php echo base_url();?>teacher/remove_periodic">
                  <input type="submit" value="Remove topic" class="btn btn-danger btn-large"> </a>
                  <?php } else { ?>
                  <a href="<?php echo base_url();?>teacher/add_periodic">
                  <input type="submit" value="Add topic" class="btn btn-success btn-large"> </a>
                  <?php } ?>

                </div> 
              </li>
             <li class="span3">
                <div class="thumbnail">
                  <img style="height:205px" src="<?php echo base_url();?>assests/img/Chemical-Reactions.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Chemical Reactions</h3>
                    <p>
                      Carry Out Chemical Reactions
                    </p>
                    <p> 
                  </div>
                   <?php if($chemical == 1) { ?>
                  <a href="<?php echo base_url();?>teacher/remove_chemical">
                  <input type="submit" value="Remove topic" class="btn btn-danger btn-large">
                  </a>
                  <?php } else { ?>
                  <a href="<?php echo base_url();?>teacher/add_chemical">
                  <input type="submit" value="Add topic" class="btn btn-success btn-large">
                  </a>
                  <?php } ?>

                </div> 
              </li>
			 <li class="span3">
               <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/mixandcom.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Mixture and Compound</h3>
                    <p>
                      Distinguish Between Mixture and Compound
                    </p>
                  </div>
                  <?php if($mixture == 1) { ?>
                  <a href="<?php echo base_url();?>teacher/remove_mixture">
                  <input type="submit" value="Remove topic" class="btn btn-danger btn-large">
                  </a>
                  <?php } else { ?>
                  <a href="<?php echo base_url();?>teacher/add_mixture">
                  <input type="submit" value="Add topic" class="btn btn-success btn-large">
                  </a>
                  <?php } ?>

                  
                </div> 
              </li> 
              <li class="span3">
                <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/melting.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Melting Point</h3>
                    <p>
                      To determine the melting point of ice.
                    </p>
                  </div>
                                    <?php if($melting == 1) { ?>
                  <a href="<?php echo base_url();?>teacher/remove_melting">
                  <input type="submit" value="Remove topic" class="btn btn-danger btn-large">
                  </a>
                  <?php } else { ?>
                  <a href="<?php echo base_url();?>teacher/add_melting" >
                  <input type="submit" value="Add topic" class="btn btn-success btn-large">
                  </a>
                  <?php } ?>

                </div> 
              </li> 
            </ul>
            <ul class="thumbnails"> 
            	<li class="span3">
               <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/solution.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Solutions</h3>
                    <p>
                      To distinguish between Solutions.
                    </p>
                  </div>  
                                    <?php if($solution == 1) { ?>
                  <a href="<?php echo base_url();?>teacher/remove_solution">
                  <input type="submit" value="Remove topic" class="btn btn-danger btn-large">
                  </a>
                  <?php } else { ?>
                  <a href="<?php echo base_url();?>teacher/add_solution" >
                  <input type="submit" value="Add topic" class="btn btn-success btn-large">
                  </a>
                  <?php } ?>

                </div> 
                </li>
                <li class="span3">
                <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/boiling.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Boiling Point</h3>
                    <p>
                      To determine Boiling Point of water.
                    </p>
                  </div>  
                                    <?php if($boiling == 1) { ?>
                  <a href="<?php echo base_url();?>teacher/remove_boiling">
                  <input type="submit" value="Remove topic" class="btn btn-danger btn-large">
                  <?php } else { ?>
                  </a>
                  <a href="<?php echo base_url();?>teacher/add_boiling">
                  <input type="submit" value="Add topic" class="btn btn-success btn-large">
                  </a>
                  <?php } ?>

                </div> 
                </li>
                <li class="span3">
                <div class="thumbnail">
                  <img style="height:185px" src="<?php echo base_url();?>assests/img/exo.jpg" alt="product name">
                  <div class="widget-footer">
                    <h3>Exothermic and Endothermic</h3>
                    <p>
                      Different examples of exothermic and endothermic reactions.
                    </p>
                  </div>  
                 <?php if($exothermic == 1) { ?>
                  <a href="<?php echo base_url();?>teacher/remove_exothermic">
                  <input type="submit" value="Remove topic" class="btn btn-danger btn-large">
                  </a>
                  <?php } else { ?>
                  <a href="<?php echo base_url();?>teacher/add_exothermic">
                  <input type="submit" value="Add topic" class="btn btn-success btn-large">
                  </a>
                  <?php } ?>

                </div> 
            </ul>

          </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/boot-business.js'); ?>"></script>
  </body>
</html>