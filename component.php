<?php
/**
 * @copyright	Jakob Jarosch (2010) - All rights reserved.
 * @license		only for internal use, no public version is avaiable
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
	    xml:lang="<?php echo $this->language; ?>"
	    lang="<?php echo $this->language; ?>"
	    dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/style.css" type="text/css" media="all and (min-width: 1200px)" />
	</head>
	<body class="contentpane">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</body>
</html>
