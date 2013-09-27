<?php 
/**
 * Theme name: default
 * Template name: footer.php
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
 * @package   HotaruCMS
 * @author    Nick Ramsay <admin@hotarucms.org>
 * @copyright Copyright (c) 2010, Baker CMS
 * @license   http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link      http://hotarucms.org/
 */

?>

<?php $h->pluginHook('footer'); ?>

<p><a href="http://hotarucms.org" title='<?php echo $h->lang["main_theme_footer_bakercms_link"]; ?>'><img src='<?php echo SITEURL; ?>content/themes/<?php echo THEME; ?>images/hotarucms.png' alt='<?php echo $h->lang["main_theme_footer_bakercms_link"]; ?>' /></a></p>

<?php $h->showQueriesAndTime(); ?>