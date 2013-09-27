<?php 
/**
 * Theme name: admin_default
 * Template name: header.php
 * Template author: Nick Ramsay
 *
 * PHP version 5
 *
 * LICENSE: Baker CMS is free software: you can redistribute it and/or 
 * modify it under the terms of the GNU General Public License as 
 * published by the Free Software Foundation, either version 3 of 
 * the License, or (at your option) any later version. 
 *
 * Baker CMS is distributed in the hope that it will be useful, but WITHOUT 
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE. 
 *
 * You should have received a copy of the GNU General Public License along 
 * with Baker CMS. If not, see http://www.gnu.org/licenses/.
 * 
 * @category  Content Management System
 * @package   Baker CMS
 * @author    Nick Ramsay / Stuart Duff
 * @copyright Copyright (c) 2010, Baker CMS
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link      http://bakercms.com/
 */

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv=Content-Type content="text/html; charset=UTF-8" />
	
	<title><?php echo $h->getTitle(); ?></title>
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2'></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js?ver=1.8.0'></script>
	
	<!-- Include merged files for all the plugin css and javascript (if any) -->
	<?php $h->doIncludes(); ?>
	<!-- End -->
	
	<link rel="stylesheet" href="<?php echo SITEURL . 'content/admin_themes/' . ADMIN_THEME . 'css/reset.css'; ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo SITEURL . 'content/admin_themes/' . ADMIN_THEME . 'css/960_12_col.css'; ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo SITEURL . 'content/admin_themes/' . ADMIN_THEME . 'css/font-awesome.css'; ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo SITEURL . 'content/admin_themes/' . ADMIN_THEME . 'css/style.css'; ?>" type="text/css">
	<!-- <link rel="shortcut icon" href="<?php echo SITEURL; ?>favicon.ico"> -->
	
	<?php $h->pluginHook('admin_header_include_raw'); ?>

</head>
<body>


    <header class="admin-header">
	<div class="container_12">
            <div class="admin-header-title">
                <img class="admin-header-logo" src="<?php echo SITEURL; ?>content/admin_themes/admin_default/images/hotaru-80px.png"/>
            	<div class="admin-header-version"><?php echo $h->lang["admin_theme_header_baker_cms"]; ?><?php echo $h->version; ?></div>
				<div class="admin-header-admin"><a href="<?php echo $h->url(array(), 'admin'); ?>"><?php echo $h->lang["admin_theme_header_admin"]; ?></a></div>
            </div>
            
            <nav id="admin-top-menu" class="nav">
	            <ul>
				    <li class="admin-menu-item home">
					<a href="<?php echo SITEURL; ?>"><?php echo $h->lang["admin_theme_menu_site_home"]; ?></a>
				    </li>

					<?php if ($h->currentUser->getPermission('can_access_admin') == 'yes') { ?>
					    <li  class="admin-menu-item admin">
						<a href="<?php echo $h->url(array(), 'admin'); ?>"><?php echo $h->lang["admin_theme_menu_admin_home"]; ?></a>
					    </li>
					<?php } ?>

				    <li class="admin-menu-item forum">
					<a href="http://bakercms.com/forum/"><?php echo $h->lang["admin_theme_menu_bakercms_forums"]; ?></a>
				    </li>

				    <li class="admin-menu-item codex">
					<a href="http://bakercms.com/codex-docs/">
					    <?php echo $h->lang["admin_theme_menu_help"]; ?></a>
				    </li>

					<?php if ($h->currentUser->loggedIn) { ?>
					    <li class="admin-menu-item logout">
						<a href="<?php echo $h->url(array('page'=>'admin_logout'), 'admin'); ?>"><?php echo $h->lang["admin_theme_menu_logout"]; ?></a>
					    </li>
					<?php } ?>
				</ul>
			</nav>

	    <div class="clear_both">&nbsp;</div>

        </div>
    </header>


<?php
	$announcements = $h->checkAnnouncements();
	if ($announcements && ($h->currentUser->getPermission('can_access_admin') == 'yes')) { 
	?>
	<div id="announcement">
		<?php $h->pluginHook('admin_announcement_first'); ?>
		<?php foreach ($announcements as $announcement) { echo "<p>" . $announcement . "</p>"; } ?>
		<?php $h->pluginHook('admin_announcement_last'); ?>
	</div>
<?php } ?>


<div id="content-wrapper" class="container_12">
<!--	<div id="hd" role="banner">
		<h1>
		 <?php   if($h->isActive('avatar')) {
                    $h->setAvatar($h->currentUser->id, 16);
					echo $h->linkAvatar();
                } ?>
		    &nbsp;<a href="<?php echo $h->url(array(), 'admin'); ?>"><?php echo SITE_NAME; ?> </a></h1>
		<?php $h->pluginHook('header_post_admin_title'); ?>
		
		 NAVIGATION 
		<?php //echo $h->displayTemplate('admin_navigation'); ?>
	</div>-->
