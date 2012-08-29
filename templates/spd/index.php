<?php
/**
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');

JHtml::_('behavior.framework', true);

$app				= JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams		= $app->getTemplate(true)->params;

$doc->addStyleSheet($this->baseurl.'/templates/system/css/system.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/site.js', 'text/javascript');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />	
	</head>

	<body>
		<div id="header">
			<div class="inner">
				
			</div>			
		</div>
		<div id="menu">
			<div class="inner">
				<jdoc:include type="modules" name="menu_bar" />
			</div>		
		</div>
		<div id="banner">
			<div class="inner">
				<jdoc:include type="message" />		
				<jdoc:include type="modules" name="banner" />				
			</div>			
		</div>
		<div id="content">
			<div class="inner">
				<div class="content-left">
					<jdoc:include type="component" />
				</div>
				<div class="content-right">
					<jdoc:include type="modules" name="right_column" />	
				</div>	
			</div>		
		</div>
		<div id="footer">
			<div class="inner">
				
			</div>			
		</div>
	</body>
</html>