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

<div style="<?php echo $custom_border_css; ?> " class="fb-page <?php echo $moduleclass_sfx;?>" 
    data-href="<?php echo $url;?>" 
    data-tabs="<?php echo $fbradiovalue;?>"  
    data-width="<?php if($adapt=='0'){echo $default_width;} else {echo $width;}?>" 
    data-height="<?php if($adapt=='0'){echo $default_height;} else {echo $height;} ?>" 
    data-small-header="<?php echo $header;?>" 
    data-adapt-container-width="<?php $adapt;?>"
    data-hide-cover="<?php echo $cover;?>" 
    data-hide-cta="<?php echo $button;?>" 
    data-show-facepile="<?php echo $facepile;?>">
    <div class="fb-xfbml-parse-ignore"></div>
</div>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=<?php echo $fb_appid; ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>