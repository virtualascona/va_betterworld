<?php 
/**************************************************************************/
/* @version     1.0.0
/* @package     VA-Elastixx
/* @copyright   Copyright (C) 2012 Virtualascona.com All rights reserved.
/* @license     Commercial
/* @website     http://www.virtualascona.com
/**************************************************************************/

defined('_JEXEC') or die;

// The following line loads the MooTools JavaScript Library
JHtml::_('behavior.framework', true);

// import Joomla view library
jimport('joomla.application.component.view');

// XSS PROTECTION (borrowed from yjsg)
$_GET = preg_replace("|([^\w\s\'])|i",'',$_GET);
$_POST = preg_replace("|([^\w\s\'])|i",'',$_POST);

// The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();

// Set vars for templates
$templatename = $this->template;
$copyrightear = (Date("Y"));
$VAsite = "templates/".$this->template;

// Add CSS & JS

$this->addStyleSheet( $VAsite . '/css/style.css' );
$this->addScript('http://code.jquery.com/jquery-latest.js' );
$this->addScript( $VAsite . '/javascript/jquery.parallax-1.1.js' );
$this->addScript( $VAsite . '/javascript/jquery.localscroll-1.2.7-min.js' );
$this->addScript( $VAsite . '/javascript/jquery.scrollTo-1.4.2-min.js' );

?>	

<?php
  $js = '
           $(document).ready(function() {
              $(\'#nav\').localScroll(800);
	
	RepositionNav();
	
	$(window).resize(function(){
		RepositionNav();
	});	
	
	//.parallax(xPosition, adjuster, inertia, outerHeight) options:
	//xPosition - Horizontal position of the element
	//adjuster - y position to start from
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it\'s outerHeight option to determine when a section is in the viewport
	$(\'#intro\').parallax("50%", 0, 0.1, true);
	$(\'#second\').parallax("50%", 0, 0.1, true);
	$(\'.bg\').parallax("50%", 2500, 0.4, true);
	$(\'#third\').parallax("50%", 2750, 0.3, true);
            });';

  JFactory::getDocument()->addScriptDeclaration($js);
?>	