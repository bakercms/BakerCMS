<?php 
/**
 * Theme name: admin_default
 * Template name: access_denied.php
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
<!-- HEADER-->
<?php $h->displayTemplate('header'); ?>

<div id="bd" role="main">
	<div class='yui-g''>
		<div class="yui-u" style='width: 100%;'>
		
			<!-- MAIN -->
			<div id="main">
				<?php echo $h->showMessages(); ?>
			</div>
		</div>
	</div>
</div>

<!-- FOOTER -->
<?php $h->displayTemplate('footer'); ?>
