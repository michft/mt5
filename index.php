<?php
/*******************************************************************
 * index.php for ms template
 *
 * @version   0.3 alpha
 * @author    m@mich431.net
 * @copyright Copyright (C) 2010 Michael Tomkins. 
 * Non-commercial use with CreativeCommons attribution allowed.
 *******************************************************************/

// no direct access
defined('_JEXEC') or die('Restricted access');

$template_baseurl = $this->baseurl . '/templates/' . $this->template;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" > 
  <head> 
    <jdoc:include type="head" /> 
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/default.css" title="default" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/mobile.css" title="mobile" />
  
<!-- My JavaScript -->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/js/layout.js" type="text/javascript"></script>

 </head>
 <body id="page">

  <div id="header-ruler">
   <div id="header">
    <a href="<?php echo $this->baseurl ?>"><img id="logo" class="correct-png" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png" alt="Sydney University Musical Society" title="Sydney University Musical Society" /></a>
    <?php if($this->countModules('search')) { ?>
    <div id="search">
     <jdoc:include type="modules" name="search" />
    </div>
    <?php } ?>
    <?php if($this->countModules('top')) { ?>
     <div id="topmodule">
      <jdoc:include type="modules" name="top" />
     </div>
    <?php } ?>
   </div>
  </div>

  <div id="page-main">
	
    <div id="left">
     <jdoc:include type="modules" name="left" style="xhtml" />
    </div>
    <div id="right">
     <jdoc:include type="modules" name="right" style="xhtml" />
    </div>
    <div id="middle">  
     <?php if ($this->countModules('breadcrumb')) { ?>
      <div id="breadcrumb">
       <jdoc:include type="modules" name="breadcrumb" />
      </div>
      <?php } ?>
     <jdoc:include type="message" />
     <jdoc:include type="component" /> 
    </div>
   <div id="colm-fixer">&nbsp;</div>

  </div>

  <div id="footer-ruler"> 
   <div id="footer" class="clear">
    <jdoc:include type="modules" name="footer" />
   </div> 
  </div> 

 </body> 
</html>