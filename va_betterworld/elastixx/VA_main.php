<?php
/**************************************************************************/
/* @version     1.0.0
/* @package     VA-Elastixx
/* @copyright   Copyright (C) 2012 Virtualascona.com All rights reserved.
/* @license     Commercial
/* @website     http://www.virtualascona.com
/**************************************************************************/

defined('_JEXEC') or die;
$mainbg               	= $this->params->get('mainbg'); 
$bg1               		= $this->params->get('bg1');
$bg2               		= $this->params->get('bg2');
$bg3               		= $this->params->get('bg3');
$object               	= $this->params->get('object');
$base					= JURI::base();

?>

<!DOCTYPE html>
    
	<head>
		<?php

// this is the code which will be placed in the head section

// No direct access

defined ('_JEXEC') or die;
$gacode               = $this->params->get('gacode');
?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

        <!-- The following JDOC Head tag loads all the header. -->
        <jdoc:include type="head" />

        <meta charset="utf-8">
        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
      	

	
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/va_zewingum/css/ie.css" type="text/css">
        <![endif]-->
        
        <!-- IE Fix for HTML5 Tags -->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
	<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/va_Betterworld/favicon.ico" type="image/ico">

	<?php if ($gacode !='') :?>
		 
		 <script type="text/javascript">

              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', '<?php echo $gacode;?>']);
              _gaq.push(['_trackPageview']);

              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();

            </script>
		<?php endif ?>
	</head>
	  
	<body>

	<ul id="nav">
		<li><a href="#intro" title="Next Section"><img src="<?php echo $this->baseurl ?>/templates/va_betterworld/images/dot.png" alt="Link" /></a></li>
	    <li><a href="#second" title="Next Section"><img src="<?php echo $this->baseurl ?>/templates/va_betterworld/images/dot.png" alt="Link" /></a></li>
	    <li><a href="#third" title="Next Section"><img src="<?php echo $this->baseurl ?>/templates/va_betterworld/images/dot.png" alt="Link" /></a></li>
	    <li><a href="#fifth" title="Next Section"><img src="<?php echo $this->baseurl ?>/templates/va_betterworld/images/dot.png" alt="Link" /></a></li>
	</ul>
	
	<div id="intro" style="background: url('<?php echo $base ?><?php echo $bg1 ?>')">
		<div class="story">
	    	<div class="float-left">
				<jdoc:include type="modules" name="VA-story1" />
			</div>
	    </div> <!--.story-->
	</div> <!--#intro-->
	
	<div id="second" style="background: url('<?php echo $base ?><?php echo $bg2 ?>') 50% 0 no-repeat fixed">
		<div class="story"><div class="bg" style="background: url('<?php echo $base ?><?php echo $object ?>') 50% 0 no-repeat fixed"></div>
	    	<div class="float-right">
				<jdoc:include type="modules" name="VA-story2" />
			</div>
	    </div> <!--.story-->
	    
	</div> <!--#second-->
	
	<div id="third" style="background: url('<?php echo $base ?><?php echo $bg3 ?>') 50% 0 no-repeat fixed">
		<div class="story">
	    	<div class="float-left">
				<jdoc:include type="modules" name="VA-story3" />
	        	 </div>
	    </div> <!--.story-->
	</div> <!--#third-->
	
	<div id="fifth">
		<div class="story">
			<jdoc:include type="modules" name="VA-story4" />
	    </div> <!--.story-->
	</div> <!--#fifth-->

    </body>
</html>