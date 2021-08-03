<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jdfacebookpage
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$fb_appid=$params->get('fb_id');
$fbradiovalue=$params->get('fbradiovalue');
$url=$params->get('fb_url');
$tab=$params->get('tabs');
$width=$params->get('fb_width');
$height=$params->get('fb_height');
$default_width=340;
$default_height=500;
$facepile=$params->get('face');
$cover=$params->get('hide_cover');
$header=$params->get('small_header');
$button=$params->get('hide_button');
$adapt=$params->get('adapt_container_width');
$custom_border_css=$params->get('custom_css');
$moduleclass_sfx = $params->get('moduleclass_sfx');
?>

<div style="<?php echo $custom_border_css; ?>" class="fb-page <?php echo $moduleclass_sfx;?>" 
    data-href="<?php echo $url; ?>" 
    data-tabs="<?php echo $fbradiovalue; ?>"  
    data-width="<?php echo $adapt=='0' ? $default_width : $width; ?>" 
    data-height="<?php echo $adapt=='0' ? $default_height : $height; ?>" 
    data-small-header="<?php echo $header; ?>" 
    data-adapt-container-width="<?php $adapt; ?>"
    data-hide-cover="<?php echo $cover; ?>" 
    data-hide-cta="<?php echo $button; ?>" 
    data-show-facepile="<?php echo $facepile; ?>"
>
  <div class="fb-xfbml-parse-ignore"></div>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=<?php echo $fb_appid; ?>&autoLogAppEvents=1"></script>