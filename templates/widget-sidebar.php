<?php
/*
This file is part of CGML.

CGML is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

CGML is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with CGML.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<?php echo $before_widget;?>
<!-- 
  CGML Multi Languages Widget
  Author : Celogeek
  Author URL: <?php if (WPLANG == 'fr_FR') { echo "http://blog.celogeek.fr/"; }else{ echo "http://blog.celogeek.com/"; } ?>

  Author Plugin: <?php if (WPLANG == 'fr_FR') { echo "http://blog.celogeek.fr/wordpress/plugins-wordpress/cgml-celogeek-multi-langue-wordpress-plugins/"; }else{ echo "http://blog.celogeek.com/wordpress/plugins-wordpress/cgml-celogeek-multi-language-wordpress-plugins/"; } ?>

  Plugin Version : <?php echo CGML_PLUGIN_VERSION ?>

-->
<?php
   if (!empty($cgml_widget_options))
   echo $before_title . stripcslashes($cgml_widget_options['title']) . $after_title;
?>
<p>
<ul>
   <?php 
      $has_lang = FALSE;
      foreach($cgml_options as $key => $data) { 
         $url = $data['url']; 
         $style = '';

         if(is_singular()) {
            if(!empty($cgml_lang[$key])) {
               $url .= "?p=".$cgml_lang[$key]; 
            }else{
               if(!$cgml_widget_options['show_all'])
               continue;
               if($cgml_widget_options['strikethrough'])
               $style='style="text-decoration: line-through"';
            }
         }

         $has_lang=TRUE;
   ?>
   <li>
   <a href="<?php echo $url?>" <?php echo $style ?>>
      <img src="<?php echo CGML_PLUGIN_URL."/images/flags/".$data['flags'].".png" ?>" style="vertical-align: middle"/>
      <?php echo stripcslashes($data['label']) ?>
   </a>
   </li>
   <?php } ?>
   <?php if(!$has_lang && !empty($cgml_widget_options['missing_text'])) { ?>
   <li>
   <?php echo stripcslashes($cgml_widget_options['missing_text']) ?>
   </li>
   <?php } ?>
</ul>
</p>
<?php if($cgml_widget_options['powered']) { ?>
<p style="font-size:60%; font-style: italic; text-align: right">
<?php _e('Powered by','cgml') ?> <a href="<?php if (WPLANG == 'fr_FR') { echo "http://blog.celogeek.fr/wordpress/plugins-wordpress/cgml-celogeek-multi-langue-wordpress-plugins/"; }else{ echo "http://blog.celogeek.com/wordpress/plugins-wordpress/cgml-celogeek-multi-language-wordpress-plugins/"; } ?>" target="_blank" title="<?php _e('Celogeek Multi Languages','cgml') ?>">CGML</a>
</p>
<?php } ?>
<!-- CGML Multi Languages Widget END -->
<?php echo $after_widget; ?>
