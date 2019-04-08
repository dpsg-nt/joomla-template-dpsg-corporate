<?php
/**
 * @copyright	Jakob Jarosch (2010) - All rights reserved.
 * @license		only for internal use, no public version is avaiable
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// design tools
include_once (dirname(__FILE__).'/design_tools.php');
$tools = new Design_Tools($this);

// get params
$app			= JFactory::getApplication();
$templateparams	= $app->getTemplate(true)->params;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
<head>
	<jdoc:include type="head" />

	<!-- Template -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo $tools->getBase(); ?>templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $tools->getBase(); ?>templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $tools->getTemplateBase(); ?>css/" type="text/css" />
	<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
	<!-- // Template -->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo htmlspecialchars($templateparams->get('ga_code'));?>']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<script src="<?php echo $tools->getTemplateBase(); ?>/scripts/menu.js"></script>
	<script src="<?php echo $tools->getTemplateBase(); ?>/scripts/bilder.js"></script>
</head>
<body>
	<div id="container_outer">
		<div id="container_head">
			<div id="header_bg" style="background-image:url(<?php echo $tools->getTemplateBase(); ?>images/bg/background-<?php echo rand(2, 3); ?>.jpg);"></div>
			<div id="header">
				<a href="<?php echo $this->baseurl; ?>"><div id="header_logo"><p><img src="<?php echo $tools->getTemplateBase(); ?>images/dpsg.svg" alt="Banner" width="156" height="62"></img></p></div></a>
				<div id="header_link">
					<a href="<?php echo $this->baseurl; ?>">
						<p>Deutsche Pfadfinderschaft Sankt Georg<br><?php echo htmlspecialchars($templateparams->get('sitetitle'));?></p>
					</a>
				</div>
				<div class="social-menu">
					<jdoc:include type="modules" name="social" style="none" />
				</div>
			</div>
			<div id="nav">
				<div id="nav_main">
                  	<button class="btn-nav_main" type="button">
						<img class="navIcon" src="<?php echo $tools->getTemplateBase(); ?>/images/menu.png"></img>
					</button>
					<jdoc:include type="modules" name="headmenu" style="none" />
					<form id="search_form" action="" method="get">
						<fieldset>
							<legend>Volltextsuche</legend>
							<input type="text" name="searchword" id="query_input" size="25" value="" />
							<span class="icon-search"></span>
							<input type="image" id="search_button" value="g"  />
							<input type="hidden" name="option" value="com_search" />
						</fieldset>
					</form>
				</div>
			</div>
		</div>

		<div id="container_inner">
			<div id="main">
				<?php if($this->countModules('left') > 0): ?>
				<div id="main_left">
					<jdoc:include type="modules" name="left" style="xhtml" />
				</div>
				<?php endif; ?>

				<?php if($this->countModules('top') > 0): ?>

				<div id="main_top">
					<jdoc:include type="modules" name="top" style="xhtml" />
				</div>
				<?php endif; ?>
				<?php if($this->countModules('top_left') > 0): ?>
				<div id="main_top_left">
					<jdoc:include type="modules" name="top_left" style="xhtml" />
				</div>
				<?php endif; ?>
				<?php if($this->countModules('top_right') > 0): ?>
				<div id="main_top_right">
					<jdoc:include type="modules" name="top_right" style="xhtml" />
				</div>
				<?php endif; ?>
				<div id="main_center" class="<?php echo $tools->mainClass(); ?>">
					<?php if($this->countModules('breadcrumb') > 0): ?>
					<div class="breadcrumb">
						<jdoc:include type="modules" name="breadcrumb" style="none" />
					</div>
					<?php endif; ?>
					<jdoc:include type="component" style="xhtml" />
				</div>
				<?php if($this->countModules('right') > 0): ?>
				<div id="main_right">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div id="container_footer">
			<div id="footerbg">
				<div id="footerbg_center"></div>
			</div>
			<div id="footer">
				<div id="sponsors">
					<jdoc:include type="modules" name="advert" style="xhtml" />
				</div>
				<div id="bottomline">
						<div id="bottom_menu">
							<jdoc:include type="modules" name="footmenu" style="none" />
						</div>
					<div class="footer_close">
						<jdoc:include type="modules" name="footer" style="none" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Debug Container -->
	<jdoc:include type="modules" name="debug" style="xhtml" />
	<!-- //Debug Container -->
 </body>
</html>
