<?php 
/**
 * Theme name: admin_default
 * Template name: index.php
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

// merge custom admin_language.php if exists in admin theme's languages folder
// can be overridden by an admin_languages.php in a user theme's languages folder
$h->includeThemeLanguage('admin');

// plugin hook
$result = $h->pluginHook('admin_theme_index_top');
if (!$result) {
?>

<?php
	// plugin hook
	$result = $h->pluginHook('admin_theme_index_header');
	if (!$result) {
		$h->displayTemplate('admin_header');
	}
?>

<div id="inner-wrapper" role="main">
			<?php if ($h->sidebars) { ?>
				<div class="grid_3">
				<!-- SIDEBAR -->
				<?php
					// plugin hook
					$result = $h->pluginHook('admin_theme_index_sidebar');
					if (!$result) {
						$h->displayTemplate('admin_sidebar');
					}
				?>
				</div>
			<?php } ?>	
	<?php if ($h->sidebars) { ?>
		<div class="grid_9">
	<?php } else { ?>
			<div class="grid_12">
	<?php } ?>
				<!-- BREADCRUMBS -->
				<div class="">
				    <div id='breadcrumbs' class="floatleft">
					    <?php echo $h->breadcrumbs(); ?>
				    </div>
				    <?php if ($h->pageName == 'plugin_settings') { ?>
				    	<div id="admin_topright" class="floatright">
							<?php echo $h->pluginHook('admin_topright'); ?>
				    	</div>
				    <?php } ?>
				</div>
				<br class="clearfix"/>
				
				<!-- MAIN -->
				<div id="main">
				<?php
				// plugin hook
				$result = $h->pluginHook('admin_theme_index_main');
				if (!$result) {
					if ($h->pageName == 'admin_login') {
						if ($h->currentUser->loggedIn) {
							$h->displayTemplate('admin_home');
						} else {
							$h->adminLoginForm();
						}
					} else {
						$h->displayTemplate($h->pageName);
					} 
				}
				?>
				</div> 
			</div>
</div>
<!-- FOOTER -->
<?php
	// plugin hook
	$result = $h->pluginHook('admin_theme_index_footer');
	if (!$result) {
		$h->displayTemplate('admin_footer');
	}
?>
<?php } ?>
