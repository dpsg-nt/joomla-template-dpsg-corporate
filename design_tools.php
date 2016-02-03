<?php
/**
 * @copyright	Jakob Jarosch (2010) - All rights reserved.
 * @license		only for internal use, no public version is avaiable
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class Design_Tools {
	
	private $template;
	
	function __construct ($global_this) {
		$this->template = $global_this;
	}
	
	function getBase () {
		return JURI::base();
	}
	
	function getTemplateBase () {
		return $this->getBase().'templates/'.$this->template->template.'/';
	}
	
	function sitename () {
		$JConfig = new JConfig;
		return $JConfig->sitename;
	}
	
	function mainClass () {
		$countLeft  = ($this->template->countModules('left')  > 0);
		$countRight = ($this->template->countModules('right') > 0);
		
		if ($countLeft && $countRight)
			return 'both';
		elseif ($countLeft)
			return 'left';
		elseif ($countRight)
			return 'right';
		else
			return 'full';
	}
}