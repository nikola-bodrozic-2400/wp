<?php
/*
================================================================================================
White Spektrum - sidebar.php
================================================================================================
This is the most generic template file in a WordPress theme and is one of the requirements to 
display widgets on the right side of the page. This is the post content sidebar that is assigned
in the widget area in the customizer and widget area.

@package        White Spektrum  WordPress Theme
@copyright      Copyright (C) 2016. Benjamin Lu
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (http://lumiathemes.com/)
================================================================================================
*/
?>
<div id="main-sidebar" class="widget-area">
    <?php dynamic_sidebar('secondary-sidebar'); ?>
</div>