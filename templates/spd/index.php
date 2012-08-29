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
//$doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/site.js', 'text/javascript');

$menuItem = JFactory::getApplication()->getMenu()->getActive();
$pageName = $menuItem->alias;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />	
	</head>

	<body>
		<div id="header">
			<div class="inner">
				<div class="logo">
					<a href="<?php echo $this->baseurl; ?>"></a>
				</div>
				<div class="right">
					Contact us today for a free initial consultation on <span><?php echo $templateparams->get('contect_phone'); ?></span>
				</div>
			</div>			
		</div>
		<div id="menu">
			<div class="spd-border-top"></div>
			<jdoc:include type="modules" name="menu_bar" />
			<div class="spd-border-bottom"></div>
		</div>
		<div id="banner">
			<div class="inner">
				<jdoc:include type="message" />
				<?php if(is_file(JPATH_ROOT .'/images/uploads/banners/'.$pageName.'.jpg')) : ?>	
					<div class="banner">
						<img src="<?php echo JURI::base(true) .'/images/uploads/banners/'.$pageName.'.jpg'; ?>" alt="<?php echo $pageName; ?>" />
					</div>
					<div class="ribbon">looking after your most important asset</div>
				<?php endif; ?>		
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
				<div class="left">
					copyright 2012
				</div>
				<div class="right">
					<a href="mailto:<?php echo $templateparams->get('contact_email'); ?>"><?php echo $templateparams->get('contact_email'); ?></a>
				</div>
			</div>			
		</div>
	</body>
</html>
