<!doctype html>
<html>
  
  <head>
  <meta charset="utf-8">		
    <title>Forty-Seven Views of Leslie Laskey</title>
  <meta name="description" content="Forty-Seven Views of Leslie Laskey is a documentary film portrait 
        of an artist, teacher and poet.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --> <!--[if lt IE 9]> 
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]--> 

  <?php wp_enqueue_script("jquery"); ?> 
  <?php wp_head(); ?>



  </head>
  
<div class="container-fluid">
  <div class="navbar">
    <div class="navbar-inner"> 
      <div class="container"> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </a>
        <div class="navbar-content"> 
          <a class="brand" href="<?php echo site_url(); ?>">Home</a> 
          <div class="nav-collapse collapse"> 
          <ul class="nav"> <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?> 
          </ul> 
        </div>
          </div><!--/.nav-collapse -->
    
      </div> 
  
    </div> 
  </div>
</div>

<div class="container">

