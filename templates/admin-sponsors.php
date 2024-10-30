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
<fieldset class="cgml-admin">
   <legend><?php _e('Thanks Me', 'cgml') ?></legend>
   <fieldset>
      <legend>
         <?php _e('Here some way to say thanks you','cgml') ?>
      </legend><p>
      <?php _e('Donate','cgml') ?> : 
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
         <input type="hidden" name="cmd" value="_s-xclick">
         <input type="hidden" name="hosted_button_id" value="7901201">
         <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
         <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
      </form>
      </p>
   </fieldset>
   <br/>
   <fieldset>
      <legend>
         <?php _e('Visit my sponsor','cgml') ?>
      </legend>
      <p>
      <script type="text/javascript"><!--
         google_ad_client = "pub-1549170849191281";
         /* Celogeek Multi Langue */
         google_ad_slot = "6386309886";
         google_ad_width = 468;
         google_ad_height = 60;
         //-->
      </script>
      <script type="text/javascript"
         src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
      </script>
      </p>
   </fieldset>
   <br/>
   <fieldset>
      <legend>
         <?php _e('Contact me here','cgml') ?>
      </legend>
      <p>
      <a href="mailto: geistteufel@celogeek.fr">geistteufel@celogeek.fr</a>
      </p>
   </fieldset>
   <fieldset>
      <legend>
         <?php _e('Visit my blog','cgml') ?>
      </legend>
      <p>
      <a href="<?php if (WPLANG == 'fr_FR') {echo 'http://blog.celogeek.fr';} else {echo 'http://blog.celogeek.com';} ?>" target="_blank">Celogeek Blog</a>
      </p>
   </fieldset>


</fieldset>
